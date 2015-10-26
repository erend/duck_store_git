<?php

namespace App\Controller;

use App\DB\ProductRepository;

class AddToCart
{
		
	function __construct(ProductRepository $ProductRepository)
	{
		$this->ProductRepository = $ProductRepository;
	}

	public function page($id)
	{
		if ($_SESSION['user']) {			
			$product = $this->ProductRepository->get_product($id);
			$inCart = $_COOKIE['products'][$id];
			if ($inCart) {
				$inCart++;
			} else {
				$inCart = 1;
			}
			setcookie('products['.$id.']', $inCart, time() + (3600*7));
			header('Location:  http://localhost/duck_store_git/web/index.php');
	    } else {
	      header('Location:  http://localhost/duck_store_git/web/index.php?page=login');
	    }
	}
}

