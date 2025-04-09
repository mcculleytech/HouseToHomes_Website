<?php
/**
 * Title: Header Partial
 * Purpose: To provide a header for all pages of the application and include
 *          navigation links
 */
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House To Homes</title>
    <link rel="stylesheet" href="Lib\CSS\styles.css">
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\src\output.css" />
</head>
<body class="container mt-4 bg-dark text-light rounded">
    <nav class="b">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">House To Homes</a>
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Request an Estimate</a>
                <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Write a review</a>
                <a href="#" class="block hover:underline py-2 text-[#FFFDFC]">Contact us</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
