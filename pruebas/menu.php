<?php
//menu dinamico
$menu= array(
    'home',
    'redes',
    'form'
);

?>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php foreach($menu as $m): ?>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=$m.'.php'?>"><?=$m?></a>
        </li>
    <?php endforeach ?>
    <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>