<?php

namespace App\Controller;

use App\DB\UserRepository;

class Login
{		
	private $repository;

	function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}

	public function page()
	{
		if (!empty($_POST)) {

			$username = $_POST['username'];
			$password = $_POST['password'];

			$user = $this->repository->getUserByUsername($_POST['username']);
			
			if ($username === $user['username'] && password_verify($password, $user['password']))
			 {
				$_SESSION['user'] = true;
				$_SESSION['username'] = $user['username'];

				header('Location:  http://localhost/duck_store_git/web/index.php');
			}
		}
		$this->render();
	}

	protected function render()
	{
		 include_once __DIR__ .  '/../../views/head.php';
		 include_once __DIR__ .  '/../../views/header.php';
		 include_once __DIR__ .  '/../../views/login/page.php';
		 include_once __DIR__ .  '/../../views/footer.php';
	}
}

