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

    <!-- Styles -->
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row flex-nowrap align-items-center justify-content-between">
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
        </div>
    </header>

    <header class="headermobile">
        <a href="https://www.chisinau.md/" target="_blank" class="logo">
            <img src="./images/logos/primaria_logo_text_white.svg" alt="chisinau-logo" draggable="false" />
        </a>
    </header>
    <!-- Header End -->

    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <nav>
                <ul class="navbar_nav">
                    <li class="navbar_item">
                        <a href="/schools.php" class="navbar_link">Scoli</a>
                    </li>
                    <li class="navbar_item navbar_dropdown">
                        <button type="button" class="navbar_link navbar_dropdown_toggler">
                            Informatii
                        </button>
                        <ul class="navbar_dropdown_menu">
                            <li class="navbar_dropdown_item">
                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" class="navbar_dropdown_link" target="_blank">
                                    Ghid de aplicare
                                </a>
                            </li>
                            <li class="navbar_dropdown_item">
                                <a href="/rules.php" class="navbar_dropdown_link">Regulament</a>
                            </li>
                            <li class="navbar_dropdown_item">
                                <a href="/faq.php" class="navbar_dropdown_link">Întrebări frecvente</a>
                            </li>
                            <li class="navbar_dropdown_item">
                                <a href="/viguide.php" class="navbar_dropdown_link">Instrucțiuni video</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar_item">
                        <a href="/assignments.php" class="navbar_link">Cereri</a>
                    </li>
                </ul>
                <ul class="navbar_nav">
                    <li class="navbar_item language active">
                        <button type="button" class="navbar_link">RO</button>
                    </li>
                    <li class="navbar_item language">
                        <button type="button" class="navbar_link">РУ</button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Navbar Mobile -->
    <div class="navbarmobile">
        <nav>
            <ul class="navbarmobile_nav">
                <button type="button" class="navbarmobile_menu_toggler">
                    <img src="./images/icons/menu_icon.svg" alt="">
                </button>
            </ul>
            <ul class="navbarmobile_nav px-3">
                <a href="/">
                    <img src="./images/logos/egradinita.svg" alt="eGradinita" style="height: 50px;" />
                </a>
            </ul>
            <ul class="navbarmobile_nav">
                <li class="navbarmobile_item language active">
                    <button type="button" class="navbarmobile_link">RO</button>
                </li>
                <li class="navbarmobile_item language">
                    <button type="button" class="navbarmobile_link">РУ</button>
                </li>
            </ul>
        </nav>

        <div class="navbarmobile_menu">
            <span class="navbarmobile_menu_overlay"></span>
            <nav>
                <ul class="navbarmobile_nav">
                    <li class="navbarmobile_header">
                        <p class="navbarmobile_header_title">MENIU</p>
                        <span class="navbarmobile_header_close">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </li>
                    <li class="navbarmobile_item">
                        <a href="/schools.php" class="navbarmobile_link">Scoli</a>
                    </li>
                    <li class="navbarmobile_item navbarmobile_dropdown">
                        <button type="button" class="navbarmobile_dropdown_toggler">
                            Informatii
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="navbarmobile_dropdown_menu">
                            <li class="navbarmobile_dropdown_item">
                                <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" class="navbarmobile_dropdown_link" target="_blank">
                                    Ghid de aplicare
                                </a>
                            </li>
                            <li class="navbarmobile_dropdown_item">
                                <a href="/rules.php" class="navbarmobile_dropdown_link">Regulament</a>
                            </li>
                            <li class="navbarmobile_dropdown_item">
                                <a href="/faq.php" class="navbarmobile_dropdown_link">Întrebări frecvente</a>
                            </li>
                            <li class="navbarmobile_dropdown_item">
                                <a href="/viguide.php" class="navbarmobile_dropdown_link">Instrucțiuni video</a>
                            </li>
                            <li class="navbarmobile_item navbarmobile_dropdown">
                                <button type="button" class="navbarmobile_dropdown_toggler">
                                    Informatii
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="navbarmobile_dropdown_menu">
                                    <li class="navbarmobile_dropdown_item">
                                        <a href="https://docs.google.com/document/d/1qBRxy3xZzkq33RcZb8ynJAC7hdVgh01GvKRmuMzlvOw" class="navbarmobile_dropdown_link" target="_blank">
                                            Ghid de aplicare
                                        </a>
                                    </li>
                                    <li class="navbarmobile_dropdown_item">
                                        <a href="/rules.php" class="navbarmobile_dropdown_link">Regulament</a>
                                    </li>
                                    <li class="navbarmobile_dropdown_item">
                                        <a href="/faq.php" class="navbarmobile_dropdown_link">Întrebări frecvente</a>
                                    </li>
                                    <li class="navbarmobile_dropdown_item">
                                        <a href="/viguide.php" class="navbarmobile_dropdown_link">Instrucțiuni video</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="navbarmobile_item">
                        <a href="/assignments.php" class="navbarmobile_link">Cereri</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Navbar Mobile End -->
    <div class="PageContent">