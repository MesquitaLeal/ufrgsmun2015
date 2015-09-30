<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'preparation/index.php';
        break;

    case 'study':
        include_once 'preparation/studyGuide.php';
        break;

    case 'handbook':
        include_once 'preparation/handbook.php';
        break;

    case 'easyHandbook':
        include_once 'preparation/easyHandbook.php';
        break;

    case 'paper':
        include_once 'preparation/paper.php';
        break;

    case 'schedule':
        include_once 'preparation/schedule.php';
        break;

    case 'award':
        include_once 'preparation/award.php';
        break;

    case 'links':
        include_once 'preparation/links.php';
        break;

    case 'study':
        include_once 'preparation/study.php';
        break;

    case 'studyGuide':
        include_once 'preparation/studyGuide.php';
        break;

    case 'adb':
        include_once 'preparation/adb.php';
        break;

    case 'disec_A':
        include_once 'preparation/disec_A.php';
        break;

    case 'disec_B':
        include_once 'preparation/disec_B.php';
        break;

    case 'icj_A':
        include_once 'preparation/icj_A.php';
        break;

    case 'icj_B':
        include_once 'preparation/icj_B.php';
        break;

    case 'ipc':
        include_once 'preparation/ipc.php';
        break;

    case 'unsc_A':
        include_once 'preparation/unsc_A.php';
        break;

    case 'unsc_B':
        include_once 'preparation/unsc_B.php';
        break;

    case 'wec_A':
        include_once 'preparation/wec_A.php';
        break;

    case 'wec_B':
        include_once 'preparation/wec_B.php';
        break;

    case 'wsis_A':
        include_once 'preparation/wsis_A.php';
        break;

    case 'wsis_B':
        include_once 'preparation/wsis_B.php';
        break;

    case 'zopacas_A':
        include_once 'preparation/zopacas_A.php';
        break;

    case 'zopacas_B':
        include_once 'preparation/zopacas_B.php';
        break;

    }
?>
