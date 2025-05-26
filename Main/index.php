<?php
/**
 * Title: Index Controller
 * Purpose: To serve as the entry point of the application that imports all
 *          models and controllers
 */


// Define a 404 Not Found function



function return404()
{
    $title = '404 Not Found';
    $body = 'That page does not exist.';
    include('views/error.php');
    exit();
}

// Start the session
$lifetime = 60 * 60 * 24 * 365; // 1 year in seconds
session_set_cookie_params($lifetime, '/');
session_start();



// Get the action
$action = htmlspecialchars($_POST['action'] ?? '', ENT_QUOTES, 'UTF-8');
if ($action == NULL)
{
    $action = htmlspecialchars($_GET['action'] ?? '', ENT_QUOTES, 'UTF-8');
    if ($action == NULL)
    {
        $action = 'home';
    }
}

// Register the controllers
require('Controllers/HomeController.php');
require('Controllers/SchedulingController.php');

return404();
