<?php get_header(); ?>

<body <?php body_class(); ?>>

    <div class="off-canvas-menu-wrap">
        <ul class="off-canvas-menu">
            <li><a href="#">dfdfdfdfdf</a></li>
        </ul>
        <div class="cls-off-canvas-menu">
            <i class="fal fa-times"></i>
        </div>
    </div>
    <div class="off-canvas-overlay"></div>

    <header class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-3">
                    <div class="common-box">
                    <ul class="main-menu">
                           
                            <li><a href="#" class="menu-bar">  
                                <div class="burger ten">
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            
                            </li>

                            <?php wp_nav_menu(array(

                            'theme_location' => 'main-menu_left',
                            'menu_class' => 'main-menu',
                            'menu_id' => 'main-menu_left'

                            )); ?>

                         <!--   <li class="mobile-none"><a href="#">PRODUCTOS<span class="gold-dot">.</span></a></li>-->
                          <!--  <li class="mobile-none"><a href="#">SERVICIOS<span class="gold-dot">.</span></a></li>-->

                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-5 d-flex align-items-center justify-content-center">
                    <a href="#" class="logo"><img src="<?php echo IMAGES ?>/logo.svg" alt=""></a>
                </div>
                <div class="col-lg-6 col-3 d-flex align-items-center justify-content-end">
                    <div class="common-box right-side">
                        <ul class="main-menu">

                        <?php wp_nav_menu(array(

                            'theme_location' => 'main-menu_right',
                            'menu_class' => 'main-menu',
                            'menu_id' => 'main-menu_right'

                        )); ?>

                           <!-- <li class="mobile-none"><a href="#">NOSOTROS<span class="gold-dot">.</span></a></li>-->
                           <!-- <li class="mobile-none"><a href="#">CONTACTO<span class="gold-dot">.</span></a></li> -->

                           <li class="mobile-none"><a href="#" class="header-search burger"><img src="<?php echo IMAGES ?>/search-icn.svg" alt=""></a></li> 
                            
                          
                            <li><a href="#" class="cart"><img src="<?php echo IMAGES ?>/cart-icn.svg" alt=""></a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="mobile-menu-wrapper">
                <div class="mobile-menu-flex-wrapper">
                    <div class="top-zone">
                        <?php  get_search_form(); ?>
                    </div>
                    <div class="middle-zone">
                        <h5 class="menu-m">MENÚ</h5>
                        <ul class="mobile-menu">
                            <li><a href="#">PRODUCTOS<span class="gold-dot">.</span></a></li>
                            <li><a href="#">SERVICIOS<span class="gold-dot">.</span></a></li>
                            <li><a href="#">NOSOTROS<span class="gold-dot">.</span></a></li>
                            <li><a href="#">CONTACTO<span class="gold-dot">.</span></a></li>
                        </ul>
                    </div>
                    <div class="bottom-zone">
                        <div class="contact-content in-mobile-menu">
                            <div class="ct-icon">
                                <img src="<?php echo IMAGES ?>/whatsapp-icn.svg" alt="">
                            </div>
                            <h4>HAZ TU PEDIDO <br>
                                DESDE WHATSAPP<span class="gold-dot">.</span></h4>
                        </div>

                        <div class="mobile-social-links-wrap">
                            <p>®2020 MenPlus Men in Evolution <br> Todos los derechos reservados. </p>
                            <ul class="social-lnks in-mobile-menu">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="hero-area">
            <div class="container">
                <div class="hero-slider-active arrow-design">
                    <div class="hero-item" style="background-image: url(<?php echo IMAGES ?>/slide-bg-1.jpg);">
                        <div class="hero-item-content">
                            <h1><img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line"> Un barbero no <br> nace, sino se hace <br> <strong data-relative="yes">con los mejores <br> productos<span class="gold-dot">.</span> <img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line btm-place"></strong></h1>
                        </div>
                    </div>
                    <div class="hero-item" style="background-image: url(<?php echo IMAGES ?>/slide-bg-1.jpg);">
                        <div class="hero-item-content">
                            <h1><img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line"> Un barbero no <br> nace, sino se hace <br> <strong data-relative="yes">con los mejores <br> productos<span class="gold-dot">.</span> <img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line btm-place"></strong></h1>
                        </div>
                    </div>
                    <div class="hero-item" style="background-image: url(<?php echo IMAGES ?>/slide-bg-1.jpg);">
                        <div class="hero-item-content">
                            <h1><img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line"> Un barbero no <br> nace, sino se hace <br> <strong data-relative="yes">con los mejores <br> productos<span class="gold-dot">.</span> <img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line btm-place"></strong></h1>
                        </div>
                    </div>
                    <div class="hero-item" style="background-image: url(<?php echo IMAGES ?>/slide-bg-1.jpg);">
                        <div class="hero-item-content">
                            <h1><img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line"> Un barbero no <br> nace, sino se hace <br> <strong data-relative="yes">con los mejores <br> productos<span class="gold-dot">.</span> <img src="<?php echo IMAGES ?>/circle-lines.svg" alt="" class="circle-line btm-place"></strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./hero-area -->

        <div class="category-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>CATEGORÍAS <img class="title-line" src="<?php echo IMAGES ?>/lines-2.svg" alt=""></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="category-active arrow-design dot-style-2">
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-1.png" alt="">
                                    </div>
                                    <h4>BARBERÍA</h4>
                                </div>
                            </div>
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-2.png" alt="">
                                    </div>
                                    <h4>ELÉCTRICOS</h4>
                                </div>
                            </div>
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-3.png" alt="">
                                    </div>
                                    <h4>LÍNEA GENERAL</h4>
                                </div>
                            </div>
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-4.png" alt="">
                                    </div>
                                    <h4>MUEBLERÍA</h4>
                                </div>
                            </div>
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-5.png" alt="">
                                    </div>
                                    <h4>MUEBLERÍA</h4>
                                </div>
                            </div>
                            <div class="category-item-wrap">
                                <div class="category-item">
                                    <div class="cat-img-wrap">
                                        <img src="<?php echo IMAGES ?>/c-6.png" alt="">
                                    </div>
                                    <h4>SERVICIO GENERAL</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./category-area -->

        <div class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title twin-flex">
                            <h2>PROMOCIONES EXCLUSIVAS <img class="title-line" src="<?php echo IMAGES ?>/lines-2.svg" alt=""></h2>
                            <a href="#" class="add-more-pd">Ver todos <i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row product-active arrow-design">
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <span class="product-discount">20%</span>
                                <img src="<?php echo IMAGES ?>/pd-1.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Maquina de peluquería Walh</a></h4>
                                <span class="product-price">$420.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <img src="<?php echo IMAGES ?>/pd-2.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Tijera para esculpir Skool</a></h4>
                                <span class="product-price">$25.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <img src="<?php echo IMAGES ?>/pd-3.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Secador de cabello Philips 1900W</a></h4>
                                <span class="product-price">$20.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <span class="product-discount">35%</span>
                                <img src="<?php echo IMAGES ?>/pd-4.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Maquina de peluquería Walh Secador de cabello Philips 1900W</a></h4>
                                <span class="product-price">$420.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <span class="product-discount">20%</span>
                                <img src="<?php echo IMAGES ?>/pd-1.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Maquina de peluquería Walh</a></h4>
                                <span class="product-price">$420.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-product">
                            <a href="#" class="product-img">
                                <img src="<?php echo IMAGES ?>/pd-2.png" alt="">
                            </a>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Tijera para esculpir Skool</a></h4>
                                <span class="product-price">$25.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./product-area -->

        <div class="promo-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>PROMOCIONES EXCLUSIVAS <img class="title-line" src="<?php echo IMAGES ?>/lines-2.svg" alt=""></h2>
                        </div>
                    </div>
                </div>
                <div class="promo-g-wrap">
                    <div class="promo-twin-div">
                        <div class="promo-img">
                            <img src="<?php echo IMAGES ?>/promo-1.png" alt="">
                        </div>
                    </div>
                    <div class="promo-twin-div">
                        <div class="promo-img">
                            <img src="<?php echo IMAGES ?>/promo-2.png" alt="">
                        </div>
                        <div class="promo-img">
                            <img src="<?php echo IMAGES ?>/promo-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./promo-area -->

        <div class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-title-wrap">
                            <p><img src="<?php echo IMAGES ?>/circle-lines.svg" alt=""> CONFIAMOS SOLO EN LAS <img src="<?php echo IMAGES ?>/circle-lines.svg" alt=""></p>
                            <h2>MEJORES MARCAS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-wrap">
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-1.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-2.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-3.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-4.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-5.png" alt="">
                            </div>
                            <div class="logo-item">
                                <img src="<?php echo IMAGES ?>/b-6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./brand-area -->

        <div class="contact-area">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-4 mb-30">
                        <div class="contact-content">
                            <div class="ct-icon">
                                <img src="<?php echo IMAGES ?>/whatsapp-icn.svg" alt="">
                            </div>
                            <h4>HAZ TU PEDIDO <br>
                                DESDE WHATSAPP<span class="gold-dot">.</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="contact-content">
                            <div class="ct-icon">
                                <img src="<?php echo IMAGES ?>/location-icn.svg" alt="">
                            </div>
                            <h4>AQUÍ NOS <br>
                                ENCONTRAMOS<span class="gold-dot">.</span></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="contact-content">
                            <div class="ct-icon">
                                <img src="<?php echo IMAGES ?>/question-icn.svg" alt="">
                            </div>
                            <h4>PREGUNTAS <br>
                                FRECUENTES<span class="gold-dot">.</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./contact-area -->
    </main>


   <?php get_footer(); ?>
</body>

<?php wp_footer(); ?>

</html>