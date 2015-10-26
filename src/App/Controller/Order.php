<?php

namespace App\Controller;

use App\DB\OrderRepository;
use App\DB\ProductRepository;

class Order
{		
	private $order_repository;
	private $product_repository;
	
	function __construct(OrderRepository $order_repository, ProductRepository $product_repository)
	{
		$this->order_repository = $order_repository;
		$this->product_repository = $product_repository;
	}

	public function page()
	{
		if (!empty($_POST)) {
			$this->order_repository->saveOrder($_SESSION['username'], $_POST['address'], $_COOKIE['products']);
			header('Location:  http://localhost/duck_store_git/web/index.php?page=empty_cart');
		} else {
			foreach ($_COOKIE['products'] as $key => $value) {
				$product_list[$key] = $this->product_repository->get_product($key);				
			}
			$this->render($product_list);
		}
	}

	protected function render($product_list)
	{
		 include_once __DIR__ .  '/../../views/head.php';
		 include_once __DIR__ .  '/../../views/header.php';
		 include_once __DIR__ .  '/../../views/order/page.php';
		 include_once __DIR__ .  '/../../views/footer.php';
	}

}

