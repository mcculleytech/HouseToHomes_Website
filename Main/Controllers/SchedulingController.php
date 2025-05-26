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
        if(isset($_GET["message"])){
            $PresetMessage = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');
        }else {$PresetMessage = ''; };
        include('Views/SchedulingView.php');
        exit();

   case 'FormSubmited':
       include('Views/completedView.php');
       exit();
}
