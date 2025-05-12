<?php
/**
 * Title: About Controller
 * Purpose: To view home page and any other actions
 */

switch ($action)
{
    /**
     * List all albums
     */
    case 'about':
        include('Views/About.php');
        exit();

   
}
