<header>
	<div class="container clearfix">
		<!-- логотип -->
		<a href="#" class="logo">Grand Yellow Duck</a>
		<!-- меню -->
		<nav>
			<ul>
				<li><a href="">О Компании</a></li>
				<li><a href="#">Каталог</a></li>
				<li><a href="">Доставка и оплата</a></li>
				<li><a href="">Контакты</a></li>
				<li style="color:#B0B0B0"><?php
						if (isset($_COOKIE['products']) == 0) {
							echo'В корзине нет товаров.'; 
						} else {
							$number = 0;
							foreach ($_COOKIE['products'] as $value) {
								$number += $value;								
							}
							echo "Товаров в корзине: $number"; 
						}
					 ?>
				 </li>
				 <li><a href="index.php?page=order">Оформить заказ</a></li>
			</ul>			
		</nav>
	</div>
</header>
