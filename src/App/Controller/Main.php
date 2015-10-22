<?php

namespace App\Controller;

use App\DB\ProductRepository;

class Main
{
	private $productRepository;

	function __construct(Productrepository $productRepository)
	{
		$this->productRepository = $productRepository;
	}

	public function page()
	{
		$products = $this->productRepository->getProducts();

		$this->render($products);
	}

	protected function render($products)
	{
		 include_once __DIR__ .  '/../../views/head.php';
		 include_once __DIR__ .  '/../../views/header.php';
		 include_once __DIR__ .  '/../../views/main/page.php';
		 include_once __DIR__ .  '/../../views/footer.php';
	}
}