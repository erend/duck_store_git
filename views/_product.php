<div class="item-block column column4">
    <?php
        echo "<h3>". $items [$id]['name'] . "</h3>";
    	echo '<a href="single-item.html" class="item">
    	    <img src="img/item.jpeg" alt="уточка">
    	    </a>';
	    echo "<p>". $items [$id]['desc'] . "</p>";
	    echo "<p>Цена: " . $items [$id]['price'] . "</p>";
	?>
    <a href="" class="btn-basket">В Корзину</a>							
</div>
