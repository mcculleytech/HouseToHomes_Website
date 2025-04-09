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
    <link rel="stylesheet" href="..\src\output.css" />

    <link rel="stylesheet" href="Lib\CSS\styles.css">
</head>
<body class="bg-blue">
    <nav class=" top-0 flex w-full py-5 bg-myPurple caret-transparent">
        <div class="shrink  px-2 w-1/3">
            <img src="Lib/Images/Logo_No_Background.png" alt="Logo" class="inline shrink max-w-12 logo-white">
        </div>
        <div class="flex fixed right-0 py-2 w-1/3 justify-between">
        <a href="#" class="inline-block transition-transform duration-300 hover:scale-110 m-auto text-[#FFFDFC]">Request an Estimate</a>
        <a href="#" class="inline-block transition-transform duration-300 hover:scale-110 m-auto text-[#FFFDFC]">Write a review</a>
        <a href="#" class="inline-block transition-transform duration-300 hover:scale-110 m-auto pr-10 text-[#FFFDFC]">Contact us</a>
        </div>
    </nav>
