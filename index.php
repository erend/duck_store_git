<?php
include_once 'views/head.php';
include_once 'views/header.php';
?>
<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			<!-- боковое меню -->
			<?php include_once 'views/category_menu.php'; ?>
			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
					<!-- элементы каталога -->
						<?php
						    include 'data/items.php';
						    if ($_GET['page'] == 1 || !isset($_GET['page'])) {
								$id = 0;
								include 'views/_product.php';
								$id = 1;
								include 'views/_product.php';
						    }	
						    elseif ($_GET['page'] == 2) {
								$id = 2;
								include 'views/_product.php';
								$id = 3;
								include 'views/_product.php';					    	
						    }		

						?>
					</div>
					<?php 
					if ($_GET['page'] == 1 || !isset($_GET['page'])) {
						echo "<a href=\"index.php?page=2\">Страница 2</a>";
					}
					elseif ($_GET['page'] == 2) {
						echo "<a href=\"index.php?page=1\">Страница 1</a>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once 'views/footer.php';
