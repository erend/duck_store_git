<?php

namespace App\DB;

class OrderRepository
{
	private $connection;

	public function __construct(Connection $connection)
	{
		$this->connection = $connection->getConnection();
	}

	public function saveOrder($user, $address, $ordered_products)
	{
		$address = htmlspecialchars($address);
		$sql = 'INSERT INTO `orders` (`user`, `address`)
		 VALUES (:user, :address)';
		$stmt = $this->connection->prepare($sql);
		$stmt->execute([
			'user' => $user,
			'address' => $address,			
		]);	

		$sql = 'SELECT `id` FROM `orders` ORDER BY `id` DESC LIMIT 1';
		$stmt = $this->connection->prepare($sql);
		$stmt->execute();	
		$lastid = $stmt->fetch(\PDO::FETCH_ASSOC);

		foreach ($ordered_products as $key => $value) {
			$sql = 'INSERT INTO `ordered_products` (`order_id`, `product_id`, `quantity`)
			 VALUES (:order_id, :product_id, :quantity)';
			$stmt = $this->connection->prepare($sql);
			$stmt->execute([
				'order_id' => $lastid['id'],
				'product_id' => $key,	
				'quantity' => $value		
			]);	
		}

	}
}