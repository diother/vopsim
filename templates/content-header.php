<header>
    <div class="center-container">
        <a href="<?php echo site_url()?>" aria-label="Vopsim"><svg id="logo" width="102" height="28"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#logo'); ?>"></use></svg></a>
        <div class="link-container">
            <a href="<?php echo site_url('/shop')?>">Magazin</a>
            <a href="<?php echo site_url('/cart')?>">Coș</a>
            <a href="<?php echo site_url('/contact')?>"><button>Consultanță gratuită</button></a>
            <a href="<?php echo site_url('/cart')?>" aria-label="Cart"><svg width="25" height="22"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#cart'); ?>"></use></svg></a>
            <svg class="search-button" width="20" height="19"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#search'); ?>"></use></svg>
            <svg class="open-button" width="23" height="18"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#menu'); ?>"></use></svg>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="close-button"></div>
        <div class="panel">
            <a href="<?php echo site_url('/shop')?>"><h1>Magazin</h1></a>
            <a href="<?php echo site_url('/cart')?>"><h1>Coș</h1></a>
            <a href="<?php echo site_url('/contact')?>"><h1>Consultanță</h1></a>
        </div>
    </div>
    <div class="search-function">
        <div class="close-button"></div>
        <input type="text">
        <div class="results">
            <div class="spinner-container" style="display: none;"><div class="spinner-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
            <div class="suggestion-container">
                <a href="">Vopsea Epoxidica</a>
                <a href="">Vopsea marcaj</a>
                <a href="">Vopsea poliuretanica</a>
                <a href="">Amorsa epoxidica</a>
                <a href="">Chipsuri decorative</a>
            </div>
            <div class="page-container" style="display: none;"></div>
            <div class="product-container" style="display: none;"></div>
        </div>
    </div>
</header>