<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$this->base_url;?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhoneBook</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/js/html5shiv.min.js"></script>
    <script src="public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$this->base_url;?>">PhoneBook</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?=$this->base_url;?>">Home</a></li>
                <li><a href="add">Add</a></li>
                <li><a href="add"></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Welcome to PhoneBook</h1>
    </div>
    <p class="lead">
        This app was made by creating the MVC design pattern with <a href="https://github.com/aliyilmaz/Mind">Mind</a>.
        This is a simple phone book application. To follow the Mind class or developments related to this project,
        you can follow my <a href="https://github.com/aliyilmaz">GitHub account</a> or <a href="https://github.com/aliyilmaz/PhoneBook">PhoneBook</a> page.
    </p>
