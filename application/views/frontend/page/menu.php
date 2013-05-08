<div class="header-container">
    <div class="page">
        <div class="logo"><h1><a href="<?php echo base_url()?>"><img src="<?php echo skin_url('1_1.gif'); ?>" alt=">Юридическая компания, агенство недвижимости «Діона»"/></a></h1>
            <div class="textsmallbalck">юридическая компания</div>
            <div class="textsmallbalck">агентство недвижимости</div>
        </div>
        <div class="header">
            <h1 class="textzagtitle">Недвижимость в <span>Житомире</span></h1>
            <h2 class="textsmallbalck">купить квартиру</h2>
            <h2 class="textsmallbalck">продать квартиру</h2>
            <ul class="textbalck">
                <li><a class="menu1" href="<?php echo base_url()?>">Главная</a></li>
                <?php foreach($data as $menu) : ?>
                    <li><a class="menu1" href="<?php echo base_url($menu->url) ?>"><?php echo $menu->menu_title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="bufer"><!----></div>
</div>
<div class="content-container">