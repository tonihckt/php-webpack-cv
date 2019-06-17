<?php
/**
 * header.php
 * Example header partial template.
 * 
 * Params:
 * - pageTitle : Used as title for the document
 * - assets : App. static assets names
 */
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?=$assets->{MAIN_CSS_BUNDLE}?>" />

  <link rel="icon" href="/favicon.ico">
  <title><?=$title?></title>

</head>
<body>
  <!-- <header>
    <h1>Welcome!</h1>
  </header> -->
  <main>