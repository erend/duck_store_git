<div class="container">
Пользователь: <?= $_SESSION['username']; ?><br><br>
<table border="1">
	<tr>
		<td><b>#</b></td>
		<td><b>Продукт</b></td>
		<td><b>Количество</b></td>
		<td><b>Цена</b></td>
	</tr>
	<?php 
		$i = 1;
		$total_price = 0;
		foreach ($_COOKIE['products'] as $key => $value) {
			$item = $product_list[$key];
			$title = $item['title'];
			$price = $item['price'];
			echo "<tr>";
			echo "<td><b>$i</b></td>";
			echo "<td>$title</td>";
			echo "<td>$value</td>";
			echo "<td>$price</td>";
			echo "</tr>";
			$i++;
			$total_price += $price;
		}
	?>
</table><br>
<p>Сумма: <?= $total_price ?></p><br>
<form action="" method="post">
    Адрес: <input type="text" name="address"/><br><br>
    <input type="submit" value="Оформить заказ" />
</form>

</div>