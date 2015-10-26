<?php

namespace App\Controller;

use App\DB\ProductRepository;

class Product
{
	protected $ProductRepository;
	
	function __construct(ProductRepository $ProductRepository)
	{
		$this->ProductRepository = $ProductRepository;
	}

	public function page($id)
	{
		$product = $this->ProductRepository->get_product($id);
		$this->render($product);

	}

	protected function render($product)
	{
		 include_once __DIR__ .  '/../../views/head.php';
		 include_once __DIR__ .  '/../../views/header.php';
		 include_once __DIR__ .  '/../../views/product/page.php';
		 include_once __DIR__ .  '/../../views/footer.php';
	}
}