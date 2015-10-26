<?php

namespace App\Controller;

use App\DB\CatalogRepository;

class Catalog
{
	protected $categoryRepository;
	
	function __construct(CatalogRepository $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}

	public function page($categoryId)
	{
		$products = $this->categoryRepository->getProductsForCategory($categoryId);
		$category_name = $this->categoryRepository->getCategoryName($categoryId);
		$this->render($products, $category_name);
	}

	protected function render($products, $category_name)
	{
		 include_once __DIR__ .  '/../../views/head.php';
		 include_once __DIR__ .  '/../../views/header.php';
		 include_once __DIR__ .  '/../../views/catalog/page.php';
		 include_once __DIR__ .  '/../../views/footer.php';
	}
}