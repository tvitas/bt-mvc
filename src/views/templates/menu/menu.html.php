<ul class="uk-navbar-nav">
<?php foreach ($menu as $items) : ?>
<<<<<<< HEAD
<li><a href="<?= $items['link'];?>"><?= t($items['title']);?></a></li>
=======
<li><a href="<?= $items['link'];?>"><?= $items['title'];?></a></li>
>>>>>>> 64bf910f73817566ccc1fd2665d1e5394b96b193
<?php endforeach;?>
</ul>
