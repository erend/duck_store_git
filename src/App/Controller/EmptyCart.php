<?php

namespace App\Controller;

use App\DB\ProductRepository;

class EmptyCart
{
		
	function __construct(ProductRepository $ProductRepository)
	{
		$this->ProductRepository = $ProductRepository;
	}

	public function page()
	{
		foreach ($_COOKIE['products'] as $key => $value) {
			setcookie('products['.$key.']', $value, time() - 100);
		}
		header('Location:  http://localhost/duck_store_git/web/index.php');
	}
}

