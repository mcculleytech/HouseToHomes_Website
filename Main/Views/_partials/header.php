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
        <div class="flex right-0 py-2 w-80  md:w-6/7 lg:w-6/7 justify-evenly  text-md  md:text-xl lg:text-xl font-bold ">
        <?php $currentAction = $_GET['action'] ?? 'home'; ?>
        <?php if($currentAction == 'home') : ?>
            <a href="?action=RequestEstimate" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Request an Estimate</a>
            <a href="?action=RequestEstimate" class=" lg:hidden md:hidden inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Estimate</a> <p class="lg:hidden md:hidden">|</p>
        <?php else : ?>
            <a href="?action=home" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Home Page</a>
            <a href="?action=home" class=" lg:hidden md:hidden inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Home</a> <p class="lg:hidden md:hidden">|</p>
        <?php endif; ?>

        <a href="https://g.page/r/CWpYvnZqvDsDEBM/review" target="_blank"  class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Write a review</a>
        <a href="https://g.page/r/CWpYvnZqvDsDEBM/review" target="_blank"  class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Review</a> <p class="lg:hidden md:hidden">|</p>

        <a href="?action=contact" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Contact us</a>
        <a href="?action=contact" class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Contact</a>

        <a href="?action=about" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">About us</a>
        <a href="?action=about" class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">About</a>
        </div>
    </nav>

    

