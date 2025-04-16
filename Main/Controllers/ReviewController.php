<?php
/**
 * Title: Review Controller
 * Purpose: To view home page and any other actions
 */

switch ($action)
{
    /**
     * List all albums
     */
    case 'reviews':
        include('Views/Reviews.php');
        exit();

   
}
