<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Per Capita</title>
    <link rel="icon" type="image/x-icon" href="img/pizza-favicon.png">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="resources/css/styles.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="resources/img/pizza-logo.png" alt="Logo Per Capita">
            <!--                https://www.flaticon.com/free-icons/pizza-->
            <div class="navbar-brand-overlay"></div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">koszyk</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="bg-img-order">
        <div class="bg-img-shadow-order">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3 text-center">
                        <h1 class="fancy">Menu</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>Podstawą naszej pizzy jest <strong>ciasto</strong>, które wyrasta przez 24 godziny.</h4>
                    </div>
                </div>

                <section class="order">
                        <div class="row">
                            <div class="col-lg-6 fancy">
                                <h1 class="menu-h1">Pizza</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 menu-item">
                                <p class="menu-title">NAPOLI</p>
                                <p class="menu-description">
                                    pomidory San Marzano DOP, filety anchois, oregano z Sycylii, pomidorki datterini
                                </p>
                                <p class="price">36 zł</p>
                                <button class="order-btn">ZAMÓW</button>
                            </div>

                            <div class="col-lg-6 menu-item">
                                <p class="menu-title">LA BUFALA</p>
                                <p class="menu-description">
                                    pomidory San Marzano DOP, mozzarella La Bufala DOP, bazylia
                                </p>
                                <p class="price">35 zł</p>
                                <button class="order-btn">ZAMÓW</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 menu-item">
                                <p class="menu-title">BIANCA</p>
                                <p class="menu-description">
                                    mozzarella fior di latte, mascarpone, Gorgonzola DOP, cebula piklowana, orzechy włoskie
                                </p>
                                <p class="price">37 zł</p>
                                <button class="order-btn">ZAMÓW</button>
                            </div>

                            <div class="col-lg-6 menu-item">
                                <p class="menu-title">VEGETARIANA</p>
                                <p class="menu-description">
                                    pomidory San Marzano DOP, mozzarella fior di latte, bakłażan pieczony, papryka duszona, cebula piklowana, cukinia
                                </p>
                                <p class="price">35 zł</p>
                                <button class="order-btn">ZAMÓW</button>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PICCANTE</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, salami Piccante Ventricina, suszone pomidory, peperoncino, płatki chilli
                            </p>
                            <p class="price">38 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PROSCIUTTO E FUNGHI</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, prosciutto Cotto, boczniaki, bazylia, suszone pomidory
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">QUATTRO FORMAGGI</p>
                            <p class="menu-description">
                                mozzarella fior di latte, sos z gorgonzoli DOP, Taleggio DOP, chips Grana Padano 24 - msc DOP
                            </p>
                            <p class="price">39 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">STRACCIATELLA</p>
                            <p class="menu-description">
                                mozzarella fior di latte, salami Piccante Ventricina, stracciatella, pesto rosso, pomidorki cherry, bazylia
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">MARGHERITA</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, Grana Padano 24 - msc DOP
                            </p>
                            <p class="price">31 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">SALAME</p>
                            <p class="menu-description">
                                pomidory San Marzano DOP, mozzarella fior di latte, salami Napoli, oliwki Leccino
                            </p>
                            <p class="price">37 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Antipasti</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">OLIVE TAGGIASCHE</p>
                            <p class="menu-description">
                                oliwki Taggiasche z gospodarstwa rodziny Roi w Badalucco w regionie Ligurii
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">FORMAGGI</p>
                            <p class="menu-description">
                                selekcja włoskich serów z konfiturą z czerwonej cebuli w Aceto Balsamico di Modena
                            </p>
                            <p class="price">20 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CIPOLLE BORETTANE</p>
                            <p class="menu-description">
                                cebulki borettane w Aceto Balsamico di Modena IGT
                            </p>
                            <p class="price">14 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">BOCCIOLI DI CARCIOFI GRIGLIATI</p>
                            <p class="menu-description">
                                grillowane karczochy w oliwie i occie z natką pietruszki
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PROSCIUTTO DI SAN DANIELE DOP</p>
                            <p class="menu-description">
                                włoska szynka dojrzewająca przez 18 miesięcy wyłącznie w San Daniele del Friuli
                            </p>
                            <p class="price">18 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">COPPA L'ARTEMANO</p>
                            <p class="menu-description">
                                suszona, pełna aromatycznych przypraw, ręcznie robiona karkówka
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Insalate</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">ZUCCHINO</p>
                            <p class="menu-description">
                                cukinia, pomidory cherry, ricotta, Grana Padano 24-msc DOP, orzechy włoskie,
                                orzechy pinii, pesto bazyliowe, domowe pieczywo
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">INSALATA SAN DANIELE</p>
                            <p class="menu-description">
                                rukola, pomidory cherry, prosciutto San Daniele 18-msc DOP, Grana Padano 24-msc DOP,
                                cebulki borettane, sos vinegret, domowe pieczywo
                            </p>
                            <p class="price">20 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 fancy">
                            <h1 class="menu-h1 mt-5">Dolci</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CIAOMISU</p>
                            <p class="menu-description">
                                tiramisu z amaretto i kruszonym ciastkiem czekoladowym
                            </p>
                            <p class="price">19 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">PANNA COTTA</p>
                            <p class="menu-description">
                                z musem owocowym
                            </p>
                            <p class="price">17 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">SERNIK Z BIAŁĄ CZEKOLADĄ</p>
                            <p class="menu-description">
                                kremowy sernik na mascarpone z musem owocowym na orzechowym spodzie
                            </p>
                            <p class="price">19 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>

                        <div class="col-lg-6 menu-item">
                            <p class="menu-title">CANNOLI</p>
                            <p class="menu-description">
                                chrupiąca rurka nadziana kremem z ricotty i pistacji według sycylijskiej receptury
                            </p>
                            <p class="price">16 zł</p>
                            <button class="order-btn">ZAMÓW</button>
                        </div>
                    </div>

                </section>

            </div>


        </div>
    </div>
</header>





<script src="resources/js/fade.js"></script>
<script src="resources/js/bootstrap.min.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>