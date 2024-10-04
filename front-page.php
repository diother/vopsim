<?php 
    get_header();
    get_template_part('templates/content', 'header');
?>

<main>
    <section class="hero-section">
        <div class="background"></div>
        <div class="center-container">
            <div class="text-container">
                <h1 class="display-heading">Echipează-ți podeaua cu vopsea epoxidică.</h1>
                <p>Alege epoxy. Simplificăm achiziția de rășini, vopsele epoxidice și alte finisaje. Profită de serviciul nostru gratuit de consultanță.</p>
                <div class="button-container">
                    <a href="<?php echo site_url('/contact'); ?>"><button>Sună Acum</button></a>
                    <a href="<?php echo site_url('/shop'); ?>"><button class="secondary">Magazin</button></a>
                </div>
            </div>
            <div class="img-container">
                <div class="panel glass">
                    <div class="scrollbar"></div>
                </div>
                <div class="texture-container">
                    <img src="<?php echo get_theme_file_uri('./media/textures/texture1.webp'); ?>" width="150" height="150" alt="texture">
                    <div class="selected">
                        <img src="<?php echo get_theme_file_uri('./media/textures/texture2.webp'); ?>" width="150" height="150" alt="texture">
                        <span>Selectat</span>
                        <svg width="30" height="38"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#mouse-click'); ?>"></use></svg>
                    </div>
                    <img src="<?php echo get_theme_file_uri('./media/textures/texture3.webp'); ?>" width="150" height="150" alt="texture">
                    <img src="<?php echo get_theme_file_uri('./media/textures/texture4.webp'); ?>" width="150" height="150" alt="texture">
                </div>
            </div>
        </div>
    </section>
    <section class="our-product-section">
        <div class="center-container">
            <div class="text-container">
                <h1>Anticipează beneficiile înainte să începi lucrarea.</h1>
                <div class="info">
                    <span class="bullet">Protecție a podelelor de ciment / beton</span>
                    <span class="bullet">Rezistență ridicată</span>
                    <span class="bullet">Durată lungă de utilizare</span>
                    <span class="bullet">Prețuri mici</span>
                    <span class="bullet">Ușor de întreținut</span>
                    <span class="bullet">Multe posibilități de design</span>
                </div>
                <div class="button-container">
                    <a href="<?php echo site_url('/shop')?>"><button class="blue">Magazin</button></a>
                    <span>Vezi Produse</span>
                </div>
            </div>
            <div class="img-container">
                <img class="points" src="<?php echo get_theme_file_uri('./media/points-primary.webp'); ?>" width="200" height="200" alt="points" class="points" loading="lazy" draggable="false">
                <img class="points" src="<?php echo get_theme_file_uri('./media/points-primary.webp'); ?>" width="200" height="200" alt="points" class="points" loading="lazy" draggable="false">
                <div class="main glass">
                    <img src="<?php echo get_theme_file_uri('./media/darius.webp'); ?>" width="320" height="205" alt="darius" class="darius" loading="lazy" draggable="false">
                </div>
                <div class="left glass">
                    <svg class="paint" width="35" height="35"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#paint-bucket'); ?>"></use></svg>
                    <div class="selected">
                        <svg class="paint" width="35" height="35"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#paint-roller'); ?>"></use></svg>
                        <svg class="click" width="25" height="25"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#mouse-click'); ?>"></use></svg>
                        <span>Trafalet</span>
                    </div>
                    <svg class="paint" width="35" height="35"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#paint-brush'); ?>"></use></svg>
                    <svg class="paint" width="35" height="35"><use href="<?php echo get_theme_file_uri('./media/sprite.svg#paint-palette'); ?>"></use></svg>
                </div>
                <div class="right glass">Culoare:</div>
            </div>
        </div>
    </section>
    <section class="consultation-section">
        <div class="center-container">
            <div class="text-container">
                <h1>Caută consultanță de la experții în pardoseli.</h1>
                <p>Vopsim.ro te va ajuta să soluționezi aspectele meticuloase și adesea frustrante ale planificării lucrării tale. Noi te ajutăm să previi scenariul în care rămâi fără materiale sau pierzi bani pe unele pe care nu le folosești.</p>
                <div class="button-container">
                    <a href="<?php echo site_url('/contact')?>"><button class="dark">Sună acum</button></a>
                    <span>100% Gratuit</span>
                </div>
            </div>
            <div class="img-container glass">
                <div class="control-panel">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <div class="info">
                    <span>Vei primi sfaturi în legătură cu:</span>
                    <span class="bullet dark">Materialele necesare</span>
                    <span class="bullet dark">Cantitatea pentru fiecare material în parte</span>
                    <span class="bullet dark">Alte detalii importante pentru îndeplinirea proiectului tău</span>
                </div>
            </div>
        </div>
    </section>
    <section class="our-service-section">
        <div class="center-container">
            <div class="text-container">
                <h1>Colaborează cu noi pentru următorul tău proiect.</h1>
                <div class="info">
                    <span class="bullet">Avem toate materialele de care ai nevoie, la un click distanță.</span>
                    <span class="bullet">Construim împreună un plan de atac, personalizat proiectului tău.</span>
                    <span class="bullet">Putem trimite specialiștii noștri pentru a realiza lucrarea.</span>
                    <span class="bullet">Livrare / programare rapidă.</span>
                    <span class="bullet">Prețuri competitive și corecte, fără plăți surpriză.</span>
                    <span class="bullet">Suntem atenți la detalii și la termene limită.</span>
                </div>
                <div class="button-container">
                    <a href="<?php echo site_url('/shop')?>"><button>Magazin</button></a>
                    <span>Vezi Produse</span>
                </div>
            </div>
            <div class="testimonial-container glass prevent-select">
                <div class="button button-left"></div>
                <div class="button button-right"></div>
                <div class="testi active">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi1.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Silaghi Florin</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <i></i>
                    <p>“Mereu sunt confuz când e vorba de domeniul ăsta, dar pe vopsim.ro sunt lucrurile ușor de înțeles! vă pup!”</p>
                </div>
                <div class="testi">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi2.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Ghinea Ilie-Constantin</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <i></i>
                    <p>“Am dat un strat de epoxy in garaj, e super paleta de culori, mi-a permis să aduc un zâmbet și copiilor mei.”</p>
                </div>
                <div class="testi">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi3.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Dumitriu Nicolae Vlad</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <i></i>
                    <p>“Recomand cu drag, asta venind de la un om care se ocupă cu manopere aproape zilnic.”</p>
                </div>
                <div class="testi">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi4.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Bucinoiu Adrian</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points"  loading="lazy" draggable="false">
                    <i></i>
                    <p>“Mulțumiri vopsim.ro nu suntem specialiști în domeniu dar cu voi tot am reușit să facem o treabă bună cu pardoseala noastră.”</p>
                </div>
                <div class="testi">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi5.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Miercurean Tudor</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <i></i>
                    <p>“E jale economia, măcar aici găsesc ce am nevoie la un preț corect, super!”</p>
                </div>
                <div class="testi">
                    <img src="<?php echo get_theme_file_uri('./media/testi/testi6.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <span>Solomon Stelian</span>
                    <img src="<?php echo get_theme_file_uri('./media/rating.webp'); ?>" width="200" height="200" alt="points" loading="lazy" draggable="false">
                    <i></i>
                    <p>“Vopseaua e vopsea, dar cel mai mult m-a ajutat consultanța ca să-mi încep proiectul.”</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
    get_footer();
    get_template_part('templates/content', 'footer');
?>