<ul class="uk-navbar-nav">
<?php foreach ($menu as $items) : ?>
<li><a href="<?= $items['link'];?>"><?= t($items['title']);?></a></li>
<?php endforeach;?>
</ul>
