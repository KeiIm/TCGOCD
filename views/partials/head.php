<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCG OCD - Keep Track of Your Cards!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="z-index: 50;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/TCGOCD"><i>TCG OCD</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === "/TCGOCD/cards") echo 'active'; ?>" href="/TCGOCD/cards">Cards</a>
            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === "/TCGOCD/collections") echo 'active'; ?>" href="/TCGOCD/collections">Collections</a>
        </div>
        </div>
    </div>
</nav>

<body>