<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <p class="navbar-brand">{if isset($user_data)}{$user_data.firstname}{/if}</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/auth?mode=become_a_writer">Become a writer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    {if !isset($user_data)}
                        <a class="dropdown-item" href="/auth?mode=auth">Log in</a>
                        <a class="dropdown-item" href="/auth?mode=register">Register</a>
                    {/if}
                    <a class="dropdown-item" href="/profile?mode=view">Profile</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>