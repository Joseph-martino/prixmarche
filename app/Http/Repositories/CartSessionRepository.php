<?php

namespace App\Repositories;

use App\Product;

class CartSessionRepository implements CartInterfaceRepository  {

	# Afficher le panier
	public function show () {
		return view("cart.show"); 
	}

	# Ajouter/Mettre à jour un produit du panier
	public function add (Product $product, $quantity) {		
		$cart = session()->get("cart"); // On récupère le panier en session

		// Les informations du produit à ajouter
		$product_details = [
			'name' => $product->name,
			'price' => $product->price,
			'quantity' => $quantity
		];
		
		session()->put("cart", $cart); // On enregistre le panier
	}

	# Retirer un produit du panier
	public function remove (Product $product) {
		$cart = session()->get("cart"); // On récupère le panier en session
		unset($cart[$product->id]); // On supprime le produit du tableau $basket
		session()->put("cart", $cart); // On enregistre le panier
	}

	# Vider le panier
	public function empty () {
		session()->forget("cart"); // On supprime le panier en session
	}

}
?>