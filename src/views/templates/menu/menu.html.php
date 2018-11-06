<ul class="uk-navbar-nav">
<?php foreach ($menu as $items) : ?>
<li><a href="<?= $items['link'];?>"><?= $items['title'];?></a></li>
<?php endforeach;?>
</ul>
