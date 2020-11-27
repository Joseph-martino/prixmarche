<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Repositories\CartInterfaceRepository;

class CartController extends Controller
{
    protected $cartRepository; // L'instance CartSessionRepository

    public function __construct (CartInterfaceRepository $cartRepository) {
    	$this->cartRepository = $cartRepository;
    }

    # Affichage du panier
    public function show () {
    	return view("cart.show"); 
    }

    # Ajout d'un produit au panier
    public function add (Product $product, Request $request) {
    	
    	// Validation de la requête
    	$this->validate($request, [
    		"quantity" => "numeric|min:1"
    	]);

    	// Ajout/Mise à jour du produit au panier avec sa quantité
    	$this->cartRepository->add($product, $request->quantity);

    	// Redirection vers le panier avec un message
    	return redirect()->route("cart.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove (Product $product) {

    	// Suppression du produit du panier par son identifiant
    	$this->cartRepository->remove($product);

    	// Redirection vers le panier
    	return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty () {

    	// Suppression des informations du panier en session
    	$this->cartRepository->empty();

    	// Redirection vers le panier
    	return back()->withMessage("Panier vidé");

    }

}
