<?php
/**
 * Title: Home Controller
 * Purpose: To view home page and any other actions
 */

switch ($action)
{
    /**
     * List all albums
     */
    case 'RequestEstimate':
        include('Views/SchedulingView.php');
        exit();

   case 'FormSubmited':
       include('Views/completedView.php');
       exit();
}
