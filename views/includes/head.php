<?php
    function includeURL($path = '') {
        return sprintf(
            "%s/%s/%s",
            $_SERVER['DOCUMENT_ROOT'],
            'Caffeine-mania',
            $path
        );
    }

    include_once(includeURL('/services/helpers.php'));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./img/apple-touch-icon.png"
      type="image/x-icon"
    />
    <script
      src="https://kit.fontawesome.com/e02aa7a64f.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://fontawesome.com/icons/basket-shopping?f=classic&s=solid"
    />
    <link
      rel="stylesheet"
      href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid"
    />
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/global.css')?>">
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/buttons.css')?>" />
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/responsive.css')?>" />
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/header.css')?>" />
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/footer.css')?>" />
    <link rel="stylesheet" href="<?= baseUrl('/assets/css/home.css')?>">
    <title>Caffeine Mania | Boba Shop</title>
  </head>
  <body>

