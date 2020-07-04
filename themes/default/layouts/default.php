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

    <link rel="stylesheet" href="/themes/default/assets/css/dist/main.min.css">
    <?= Portal::receive('head') ?>
</head>

<body>

    <?= Component::render('header') ?>
    <?= Component::render('navbar') ?>

    <?= Portal::receive('main') ?>

    <?= Component::render('footer') ?>

    <script src="/themes/default/assets/js/header.js"></script>
    <?= Portal::receive('js') ?>
</body>

</html>