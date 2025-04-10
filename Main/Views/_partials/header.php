<?php
/**
 * Title: Header Partial
 * Purpose: To provide a header for all pages of the application and include
 *          navigation links
 */
?>
<!DOCTYPE html>
<html lang="en-us" class=" ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House To Homes</title>
    <link rel="stylesheet" href="..\src\output.css" />

    <link rel="stylesheet" href="Lib\CSS\styles.css">
</head>
<body class="">
<div class="relative min-h-screen">

    <nav class="top-0 flex w-full py-5 bg-myNav caret-transparent  ">
        <div class="shrink  px-2 w-20">
            <a href="?action=home">
                <img src="Lib/Images/Logo_Black.png" alt="Logo" class="inline shrink max-w-12 logo-purple">
            </a>
        </div>
        <div class="flex right-0 py-2 w-80  md:w-6/7 lg:w-6/7 justify-between text-xl  md:text-2xl lg:text-xl font-bold ">
        <a href="#" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Request an Estimate</a>
        <a href="#" class=" lg:hidden md:hidden inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Estimate</a> <p class="lg:hidden md:hidden">|</p>

        <a href="#" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Write a review</a>
        <a href="#" class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Review</a> <p class="lg:hidden md:hidden">|</p>

        <a href="#" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto pr-10 text-[#534B6F]">Contact us</a>
        <a href="#" class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto md:pr-10 text-[#534B6F]">Contact</a>

        </div>
    </nav>

    

