<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <!--Toto mi umožňuje správne zobrazenie stránky na rôznych zariadeniach -->
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <!-- asset automaticky vytvori cetu ku tomu suboru -->
    <link rel="stylesheet" href="<?= $link->asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/home.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/pacientDashboard.css') ?>">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Zubná ambulancia</title>
</head>
<body>
    <header>
        <!-- Logo a nazov zubnej ambulancie -->
        <div class = "logo-nazov">
            <img src="<?= $link->asset('images/dentalLogo.png') ?>" alt="Logo zubnej ambulancie" width="1600" height="1700">
            <p>Zubná<br> ambulancia</p>
        </div>

        <!-- Hamburger menu tlacidlo pre mobilnu navigaciu -->
        <button type="button" class="hamburger" aria-label="Otvoriť navigáciu">
            <i class="fa-solid fa-bars" aria-hidden="true"></i>
        </button>

        <!--navigacia ktora bude na mobile otvorena hamburgerom ale na pc v hlavicke-->
        <nav>
            <ul>
                <li><a href="<?= $link->url('home.index') ?>">Úvod</a></li>
                <li>Služby</li>
                <li>O nás</li>
                <li>Naša práca</li>
                <li>Cenník</li>
                <li>Kariéra</li>
                <li>Kontakt</li>
                <li><a href="<?= $link->url('pacient.index') ?>">Môj účet</a></li>
            </ul>
        </nav>

        <!--tlacidlo na prihlasenie sa-->
        <button type="button" class="prihlasenie" aria-label="Prihlásiť sa">
            <i class="fa-regular fa-user" aria-hidden="true"></i>
            <span>Prihlásiť sa</span>
        </button>

        <!--tlacidlo na otvorenie bocneho panelu-->
        <button type="button" class="bocny-panel-tlacidlo" aria-label="Otvoriť bočný panel">
            <i class="fa-solid fa-table-columns" aria-hidden="true"></i>
        </button>
    </header>


    <?= $contentHTML ?>


    <footer>
        <!-- Adresa ambulancie -->
        <div class = "adresa">
            <h2>Adresa</h2>
            <address>
                Miesto pre adresu ambulancie<br>
                Mesto, PSČ
            </address>
        </div>
        <!-- Kontakty ambulancie -->
        <div class = "kontakt">
            <h2>Kontakt</h2>
            <address>
                <!--umozni dane udaje hned pouzit-->
                <a href="tel:+421900000000">+421 900 000 000</a>
                <a href="mailto:ambulancia@email.sk">ambulancia@email.sk</a>
            </address>
        </div>

        <!-- Spodna navigacia -->
        <nav>
            <ul>
                <li><a href="<?= $link->url('home.index') ?>">Úvod</a></li>
                <li>Služby</li>
                <li>O nás</li>
                <li>Naša práca</li>
                <li>Cenník</li>
                <li>Kariéra</li>
            </ul>
        </nav>
    </footer>
</body>
</html>
