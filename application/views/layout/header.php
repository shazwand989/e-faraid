<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Plugin -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-info">
        <a class="navbar-brand" href="<?= base_url('') ?>">E-Faraid</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item home">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item senarai-waris" id="senarai-waris">
                    <a class="nav-link" href="senarai-waris">Senarai Waris</a>
                </li>
                <li class="nav-item" id="harta-pusaka">
                    <a class="nav-link" href="harta-pusaka">Harta Pusaka</a>
                </li>
                <li class="nav-item" id="pengiraan">
                    <a class="nav-link" href="pengiraan">Pengiraan</a>
                </li>
            </ul>
        </div>
    </nav>