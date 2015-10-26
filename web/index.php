<?php

include_once __DIR__ . '/../src/autoload.php';

use App\DB;

session_start();

$connection = new DB\Connection();
$productRepository = new DB\ProductRepository($connection);
$catalogRepository = new DB\CatalogRepository($connection);
$UserRepository = new DB\UserRepository($connection);
$OrderRepository = new DB\OrderRepository($connection);


$page = 'main';
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}

switch ($page) {
	case 'main':
		$page = new \App\Controller\Main($productRepository);
		$page->page();
		break;
	case 'catalog':
		$page = new \App\Controller\Catalog($catalogRepository);
		$page->page($_GET['categoryId']);
		break;
	case 'product':
		$page = new \App\Controller\Product($productRepository);
		$page->page($_GET['id']);
		break;	
	case "add_to_cart":
		$page = new \App\Controller\AddToCart($productRepository);
		$page->page($_GET['id']);
		break;
	case "empty_cart":
		$page = new \App\Controller\EmptyCart($productRepository);
		$page->page();
		break;
	case "login":
		$page = new App\Controller\Login($UserRepository);
		$page->page();
		break;
	case "register":
		$page = new App\Controller\Register($UserRepository);
		$page->page();
		break;
	case "order":
		$page = new App\Controller\Order($OrderRepository, $productRepository);
		$page->page();
		break;
	default:
		die('404');
		break;
};