<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
 			<?php include_once __DIR__ . '/../category_menu.php'; ?>
		<div class="catalog column column9">
			<div class="order-status ">
				<div class="row clearfix">
					<p>Мини-утка брелок добавлена в корзину</p>
					<a href="" class="order-status-btn-basket">В Корзину</a>
				</div>
			</div>
			<!-- хлебные крошки -->
			<div class="breadcrumbs item-breadcrumbs">
				<a href="index.html">Магазин</a>
				<a href="catalog.html"><?php  echo $product['c_title']; ?></a>
			</div>
			
			<div class=" row clearfix item-heading">
				<!-- название товара -->
				<h1 class="item-name column column6"><?php echo $product['title']; ?></h1>
				<!-- цена -->
				<p class="price column column6"><?php echo $product['price']; ?> Р</p>
			</div>
			<div class="row clearfix">
				<div class="column column6">
					<!-- галерея картинок -->
					<div class="item-gallery">
						<img src="img/item.jpeg" alt="уточка">
						<div class="small-images">
							<img src="img/item.jpeg" alt="уточка">
							<img src="img/item.jpeg" alt="уточка">
							<img src="img/item.jpeg" alt="уточка">
						</div>
					</div>
				</div>
				<div class="column column6">
				<!-- описание -->
					<p class="item-description">
					<?php echo $product['description']?>;
					</p>
					<!-- цена -->
					<p class="price"><?php echo $product['price']; ?> Р</p>
					<div class="order-btns">
						<a href="index.php?page=add_to_cart&id=<?= $product['id']; ?>" class="btn-basket">В Корзину</a>
						<a href="" class="btn-click">Купить в 1 клик</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>