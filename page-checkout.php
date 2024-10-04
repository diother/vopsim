<?php 
get_header();
?>

<div id="primary" class="content-area">
    <main class="checkout-content">
        <section class="checkout-header">
            <div class="center-container">
                <img src="<?php echo get_theme_file_uri('./media/checkout-photo.webp'); ?>" width="799" height="435" alt="checkout-photo" loading="lazy" draggable="false">
                <div class="text-container">
                    <h1>Pardoseala ta la un click distanță.</h1>
                    <div class="benefits">
                        <span class="bullet">Produse testate în laborator</span>
                        <span class="bullet">Livrare / programare rapidă</span>
                        <span class="bullet">Prețuri competitive și corecte, fără plăți surpriză</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid-container">
            <?php 
            while(have_posts()) {
                the_post(); 
                the_content();
            } 
            ?>
            <section class="checkout-footer">
                <div class="secure-container">
                    <img src="<?php echo get_theme_file_uri('./media/icons/security-public.webp');?>" width="160" height="115" alt="secure">
                    <h2>Tranzacție securizată</h2>
                    <p>Îți protejăm confidențialitatea si datele. Nu îți fă griji. Du-ți la încheiere proiectul.</p>
                </div>
                <hr>
                <div class="testimonials">
                    <h2>Clienții noștri</h2>
                    <div class="testi">
                        <p>Recomand cu drag, asta venind de la un om care se ocupă cu manopere aproape zilnic.</p>
                        <div class="img-container">
                            <img src="<?php echo get_theme_file_uri('./media/testi/testi3.webp'); ?>" width="40" height="40" alt="adrian" loading="lazy" draggable="false">
                            <span>Dumitriu Nicolae Vlad</span>
                        </div>
                    </div>
                    <div class="testi">
                        <p>Mulțumiri vopsim.ro nu suntem specialiști în domeniu dar cu voi tot am reușit să facem o treabă bună cu pardoseala noastră.</p>
                        <div class="img-container">
                            <img src="<?php echo get_theme_file_uri('./media/testi/testi4.webp'); ?>" width="40" height="40" alt="adrian" loading="lazy" draggable="false">
                            <span>Bucinoiu Adrian</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="icon-container">
                    <div class="container">
                        <img src="<?php echo get_theme_file_uri('./media/icons/privacy.webp'); ?>" width="40" height="40" alt="adrian" loading="lazy" draggable="false">
                        <span>Îți protejăm informațiile</span>
                    </div>
                    <div class="container">
                        <img src="<?php echo get_theme_file_uri('./media/icons/guarantee.webp'); ?>" width="40" height="40" alt="adrian" loading="lazy" draggable="false">
                        <span>100% satisfacție</span>
                    </div>
                    <div class="container">
                        <img src="<?php echo get_theme_file_uri('./media/icons/secure.webp'); ?>" width="40" height="40" alt="adrian" loading="lazy" draggable="false">
                        <span>Datele tale sunt sigure cu noi</span>
                    </div>
                </div>
                <hr>
                <div class="faq">
                    <h2>Întrebări frecvente</h2>
                    <div class="accordion prevent-select">
                        <div class="element">
                            <div class="title">
                                <i></i>
                                <span>În cât timp ajunge comanda?</span>
                            </div>
                            <div class="content">
                                <div class="text-container">Răspunsul depinde de conținutul comenzii, dar în general nu mai mult de 4 zile lucrătoare.</div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                <i></i>
                                <span>Pot să aplic singur vopseaua?</span>
                            </div>
                            <div class="content">
                                <div class="text-container">Recomandăm aplicarea ei de către cineva cu experiență, dar poate fi aplicată de oricine care urmărește pașii corecți.</div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                <i></i>
                                <span>Cum procedez dacă am întrebari legate de un produs?</span>
                            </div>
                            <div class="content">
                                <div class="text-container">Echipa vopsim.ro oferă consultanță gratuită, unde pot fi lămurite întrebările legate de produsele noastre.</div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                <i></i>
                                <span>Cum procedez dacă nu știu să aplic?</span>
                            </div>
                            <div class="content">
                                <div class="text-container">Suna-ți la numărul de pe pagina de contact sau lăsa-ți un mesaj, ne ocupăm și cu manopere.</div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                <i></i>
                                <span>Cum procedez dacă am sunat și nu a răspuns nimeni?</span>
                            </div>
                            <div class="content">
                                <div class="text-container">Ne cerem scuze pentru inconveniență, vă rugăm să încercați să sunați înapoi în 30 de minute, sau veți fi sunat înapoi.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
</div>

<?php
get_footer(); 
?>