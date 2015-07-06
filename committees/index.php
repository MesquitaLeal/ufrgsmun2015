<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'committees/index.php';
        break;

    case 'apec':
        include_once 'committees/apec.php';
        break;

    case 'cjtf':
        include_once 'committees/cjtf.php';
        break;

    case 'cosiplan':
        include_once 'committees/cosiplan.php';
        break;

    case 'disec':
        include_once 'committees/disec.php';
        break;

    case 'ilc':
        include_once 'committees/ilc.php';
        break;

    case 'ipc':
        include_once 'committees/ipc.php';
        break;

    case 'unsc':
        include_once 'committees/unsc.php';
        break;

    case 'unhrc':
        include_once 'committees/unhrc.php';
        break;

    case 'uacps':
        include_once 'committees/uacps.php';
        break;

    }
?>
