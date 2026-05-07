<?php
if (!isset($_REQUEST['details']))
{
    $_REQUEST['details'] = 'accueil';
}
$details = htmlspecialchars($_REQUEST['details']);

switch ($details) {    
    case 's1':
        include 'vues/pages-details/s1.php';
        break;
        
    case 's2':
        include 'vues/pages-details/s2.php';
        break;
        
    case 's3':
        include 'vues/pages-details/s3.php';
        break;
        
    case 's4':
        include 'vues/pages-details/s4.php';
        break;
        
    case 'a1':
        include 'vues/pages-details/a1.php';
        break;
        
    case 'a2':
        include 'vues/pages-details/a2.php';
        break;
}
?>