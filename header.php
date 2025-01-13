<?php
// require_once 'helpers/root-dir.php';
// session_start();
$root = 'http://localhost:8080/landing-page-associacao-santo-expedito';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $url_canonical = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <link rel="canonical" href="https://baixada-web-studio.great-site.net/lading-page-associacao-santo-expedito">

    <meta name="generator" content="WordPress 6.5.3" />
    <title itemprop="name">Baixada Web Studio - Desenvolvimento de Sites para <?php echo $text; ?> </title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Vinícius Marques">
    <link rel="stylesheet" href="<?php echo $root ?>/library/css/styles.css" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet" />
    <?php include 'utils/favicon.php'; ?>
</head>

<body class="home blog">
    <header class="header">
        <div class="header--top">&nbsp;</div>
        <div class="header--content container">
            <div class="header--content--logo">
                <a href="/" class="logo" aria-label="">
                    Associação <br />
                    <strong>Santo Expedito</strong>
                </a>
            </div>
            <div class="open-menu-mobile">
                <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
            </div>
            <div class="header--content--menu">
                <nav>
                    <ul id="custom-header-menu" class="main-menu">
                        <li>
                            <a aria-label="Sobre" href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a aria-label="Benefícios" href="#beneficios">Benefícios</a>
                        </li>
                        <li>
                            <a aria-label="ComoContribuir" href="#como-contribuir">Como Contribuir</a>
                        </li>
                        <li>
                            <a aria-label="Contato" href="#contato">Contato</a>
                        </li>
                    </ul>
                </nav>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>
            <button class="button default">Doe agora</button>
        </div>
        <div class="container header--bar">
            <span>&nbsp;</span>
        </div>
    </header>
    <main id="content" role="main">
      