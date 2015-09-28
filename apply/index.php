<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
	case '':
		include_once 'apply/index.php';
		break;

	case 'register':
		include_once 'apply/register.php';
		break;

	case 'payment':
		include_once 'apply/payment.php';
		break;

	case 'formA':
		include_once 'apply/formA.php';
		break;

	case 'formB':
		include_once 'apply/formB.php';
		break;

	case 'formIlc':
		include_once 'apply/formIlc.php';
		break;

	case 'formIpc':
		include_once 'apply/formIpc.php';
		break;

	case 'infographic':
		include_once 'apply/infographic.php';
		break;

	case 'countries':
		include_once 'apply/countries.php';
		break;
	}
?>
