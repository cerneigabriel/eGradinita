<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/logos/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="./manifest.json" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image" content="https://127.0.0.1:5500/images/escoala.jpg" />
    <meta property="og:image:url" content="https://127.0.0.1:5500/images/escoala.jpg" />
    <meta property="og:url" content="https://127.0.0.1:5500/" />
    <meta name="application-name" content="eGradinita" />
    <meta property="og:title" content="eGradinita - Admitere online în clasa I" />
    <meta property="og:description" content="Depunerea cererii de înmatriculare a copilului în clasa I în instituțiile de învățământ a mun. Chișinău" />
    <meta property="description" content="Depunerea cererii de înmatriculare a copilului în clasa I în instituțiile de învățământ a mun. Chișinău" />

    <title>eGradinita</title>

    <!-- Production Styles -->
    <!-- <link rel="stylesheet" href="./css/dist/main.min.css" /> -->

    <!-- Development Styles -->
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>

    <!-- Header -->
    <header class="Header Header--container">
        <div class="container">
            <div class="col-6">
                <a href="/" class="">
                    <img src="./images/logos/egradinita.svg" alt="" />
                </a>
            </div>
            <div class="col-6">
                <a href="https://www.chisinau.md/" target="_blank" class="d-flex">
                    <img src="./images/logos/primaria_logo.svg" alt="chisinau-logo" draggable="false" class="ml-auto" />
                </a>
            </div>
        </div>
    </header>

    <header class="HeaderMobile">
        <a href="https://www.chisinau.md/" target="_blank" class="Logo">
            <img src="./images/logos/primaria_logo_text_white.svg" alt="chisinau-logo" draggable="false" />
        </a>
    </header>
    <!-- Header End -->

    <!-- Navbar -->
    <div class="Navbar Navbar--container">
        <div class="container">
            <nav>
                <ul class="Navbar__nav">
                    <li class="Navbar__item">
                        <a href="/schools.php" class="Navbar__link">Scoli</a>
                    </li>
                    <li class="Navbar__item Navbar__dropdown">
                        <button type="button" class="Navbar__link Navbar__dropdown__link">
                            Informatii
                        </button>
                        <ul class="Navbar__dropdown__menu">
                            <li class="Navbar__dropdown__item">
                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                    Ghid de aplicare
                                </a>
                            </li>
                            <li class="Navbar__dropdown__item">
                                <a href="/rules.php">
                                    Regulament
                                </a>
                            </li>
                            <li class="Navbar__dropdown__item">
                                <a href="/faq.php">
                                    Întrebări frecvente
                                </a>
                            </li>
                            <li class="Navbar__dropdown__item">
                                <a href="/viguide.php">
                                    Instrucțiuni video
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="Navbar__item">
                        <a href="/assignments.php" class="Navbar__link">Cereri</a>
                    </li>
                </ul>
                <ul class="Navbar__nav">
                    <li class="Navbar__item Navbar__item--language Navbar__item--active">
                        <button type="button" class="Navbar__link">
                            RO
                        </button>
                    </li>
                    <li class="Navbar__item Navbar__item--language">
                        <button type="button" class="Navbar__link">
                            РУ
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Navbar Mobile -->
    <div class="NavbarMobile">
        <nav>
            <ul class="NavbarMobile__nav">
                <button type="button" class="NavbarMobile__menu__toggler">
                    <img src="./images/icons/menu_icon.svg" alt="">
                </button>
            </ul>
            <ul class="NavbarMobile__nav px-3">
                <a href="/" class="">
                    <img src="./images/logos/egradinita.svg" alt="" style="height: 50px;" />
                </a>
            </ul>
            <ul class="NavbarMobile__nav">
                <li class="NavbarMobile__item NavbarMobile__item--language NavbarMobile__item--active">
                    <button type="button" class="NavbarMobile__link">
                        RO
                    </button>
                </li>
                <li class="NavbarMobile__item NavbarMobile__item--language">
                    <button type="button" class="NavbarMobile__link">
                        РУ
                    </button>
                </li>
            </ul>
        </nav>

        <div class="NavbarMobile__menu">
            <span class="NavbarMobile__menu__overlay"></span>
            <nav>
                <ul class="NavbarMobile__nav">
                    <li class="NavbarMobile__item">
                        <p class="NavbarMobile__menu__header">MENIU</p>
                        <span class="NavbarMobile__menu__close">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </li>
                    <li class="NavbarMobile__item">
                        <a href="/schools.php" class="NavbarMobile__link">Scoli</a>
                    </li>
                    <li class="NavbarMobile__item NavbarMobile__dropdown">
                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                            Informatii
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="NavbarMobile__dropdown__menu">
                            <li class="NavbarMobile__dropdown__item">
                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                    Ghid de aplicare
                                </a>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/rules.php">
                                    Regulament
                                </a>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/faq.php">
                                    Întrebări frecvente
                                </a>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/viguide.php">
                                    Instrucțiuni video
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="NavbarMobile__item">
                        <a href="/assignments.php" class="NavbarMobile__link">Cereri</a>
                    </li>
                    <li class="NavbarMobile__item NavbarMobile__dropdown">
                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                            Informatii
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="NavbarMobile__dropdown__menu">
                            <li class="NavbarMobile__dropdown__item">
                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                    Ghid de aplicare
                                </a>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/rules.php">
                                    Regulament
                                </a>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/faq.php">
                                    Întrebări frecvente
                                </a>
                            </li>

                            <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                    Informatii
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="NavbarMobile__dropdown__menu">
                                    <li class="NavbarMobile__dropdown__item">
                                        <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                            Ghid de aplicare
                                        </a>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                            Informatii
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                        <ul class="NavbarMobile__dropdown__menu">
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                    Ghid de aplicare
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/rules.php">
                                                    Regulament
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/faq.php">
                                                    Întrebări frecvente
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                                <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                                    Informatii
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <ul class="NavbarMobile__dropdown__menu">
                                                    <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                                            Informatii
                                                            <i class="fas fa-chevron-down"></i>
                                                        </button>
                                                        <ul class="NavbarMobile__dropdown__menu">
                                                            <li class="NavbarMobile__dropdown__item">
                                                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                                    Ghid de aplicare
                                                                </a>
                                                            </li>
                                                            <li class="NavbarMobile__dropdown__item">
                                                                <a href="/rules.php">
                                                                    Regulament
                                                                </a>
                                                            </li>
                                                            <li class="NavbarMobile__dropdown__item">
                                                                <a href="/faq.php">
                                                                    Întrebări frecvente
                                                                </a>
                                                            </li>
                                                            <li class="NavbarMobile__dropdown__item">
                                                                <a href="/viguide.php">
                                                                    Instrucțiuni video
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="NavbarMobile__dropdown__item">
                                                        <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                            Ghid de aplicare
                                                        </a>
                                                    </li>
                                                    <li class="NavbarMobile__dropdown__item">
                                                        <a href="/rules.php">
                                                            Regulament
                                                        </a>
                                                    </li>
                                                    <li class="NavbarMobile__dropdown__item">
                                                        <a href="/faq.php">
                                                            Întrebări frecvente
                                                        </a>
                                                    </li>
                                                    <li class="NavbarMobile__dropdown__item">
                                                        <a href="/viguide.php">
                                                            Instrucțiuni video
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/viguide.php">
                                                    Instrucțiuni video
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item">
                                        <a href="/rules.php">
                                            Regulament
                                        </a>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item">
                                        <a href="/faq.php">
                                            Întrebări frecvente
                                        </a>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item">
                                        <a href="/viguide.php">
                                            Instrucțiuni video
                                        </a>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                            Informatii
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                        <ul class="NavbarMobile__dropdown__menu">
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                    Ghid de aplicare
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/rules.php">
                                                    Regulament
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/faq.php">
                                                    Întrebări frecvente
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/viguide.php">
                                                    Instrucțiuni video
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                            Informatii
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                        <ul class="NavbarMobile__dropdown__menu">
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                    Ghid de aplicare
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/rules.php">
                                                    Regulament
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/faq.php">
                                                    Întrebări frecvente
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/viguide.php">
                                                    Instrucțiuni video
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="NavbarMobile__dropdown__item NavbarMobile__dropdown">
                                        <button type="button" class="NavbarMobile__link NavbarMobile__dropdown__link">
                                            Informatii
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                        <ul class="NavbarMobile__dropdown__menu">
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" target="_blank">
                                                    Ghid de aplicare
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/rules.php">
                                                    Regulament
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/faq.php">
                                                    Întrebări frecvente
                                                </a>
                                            </li>
                                            <li class="NavbarMobile__dropdown__item">
                                                <a href="/viguide.php">
                                                    Instrucțiuni video
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="NavbarMobile__dropdown__item">
                                <a href="/viguide.php">
                                    Instrucțiuni video
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Navbar Mobile End -->
    <div class="PageContent">