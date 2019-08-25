<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Install
 * @package    core/layout/install.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.1
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */?>
<!DOCTYPE HTML>
<!--
     AuroraCMS - Instaler - Copyright (C) Diemen Design 2019
          the MIT Licensed Open Source Content Management System.
     
     Project Maintained at https://github.com/DiemenDesign/AuroraCMS
-->
<html lang="en" id="AuroraCMS">
	<head>
		<meta charset="UTF-8">
    <meta name="generator" content="AuroraCMS">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Install - AuroraCMS</title>
		<link rel="icon" href="core/images/favicon.png">
		<link rel="apple-touch-icon" href="core/images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="core/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="core/css/aurora.css">
		<link rel="stylesheet" type="text/css" href="core/css/i.css">
		<link rel="stylesheet" type="text/css" href="core/css/style.css">
		<script src="core/js/jquery.min.js"></script>
		<script src="core/js/aurora.min.js"></script>
	</head>
	<body class="app flex-row align-items-center aurora">
		<div class="container col col-sm-6 install aurora">
			<noscript><div class="alert alert-danger" role="alert">Javascript MUST BE ENABLED for AuroraCMS to function correctly!</div></noscript>
			<div class="alert alert-warning d-sm-block d-md-none" role="alert">The Administration works better on larger displays, such as Laptop or Desktop screen sizes. On smaller screens some Elements my be truncated or cut off, making usage difficult.</div>
			<span class="installimg">
				<svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 160"><defs id="auroracmslogo10"><linearGradient id="auroracmslogo4156"><stop style="stop-color:#ff0000;stop-opacity:1;" offset="0" id="auroracmslogo4158"/><stop style="stop-color:#6dfc0e;stop-opacity:1" offset="1" id="auroracmslogo4160"/></linearGradient><linearGradient xlink:href="#auroracmslogo4156" id="auroracmslogo4162" x1="0.447541" y1="1051.8695" x2="2.8509145" y2="1050.3662" gradientUnits="userSpaceOnUse" gradientTransform="matrix(71.428571,0,0,71.428571,-6.1118217e-8,-74107.078)"/></defs><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" id="auroracmslogo8" showgrid="false"/><g id="auroracmslogo1" transform="translate(0,-892.3622)"><path d="m 113.51189,1049.2939 c -5.42143,-6.7857 -6.95715,-15.9857 -2.65715,-15.9857 4.87143,0 9.34715,5.1428 10.62715,12.15 1.15,6.2857 -4,8.7928 -7.96715,3.8571 z m 19.43571,1.1429 c -4.3,-2.6429 -9.50429,-16.55 -6.82143,-18.2072 3.06429,-1.8571 7.43786,1.5714 11.35143,9 3.65714,6.9286 0.89286,12.5572 -4.52857,9.2072 z m -55.602857,-5.5 c -6.55,-6.5715 -7.546429,-10.3215 -3.4,-12.8858 3.285714,-2 12.107857,10.9572 10.573571,15.5572 -0.75,2.2143 -3.142857,1.3571 -7.17,-2.6429 z m 15.557143,-1.9286 c -1.735715,-3.7857 -2.335715,-7.7357 -1.342857,-8.7357 2.435714,-2.4286 12.903571,7.25 12.903571,11.9357 0,6.3571 -8.247143,4.0714 -11.564286,-3.2143 z m 51.799284,0.7857 c -5.32143,-7.6 -5.52857,-13.2071 -0.5,-13.2071 4.60714,0 8.67572,4.7857 11.24286,13.1285 2.56428,8.3715 -4.9,8.4215 -10.74786,0 z m 15.14286,-2 c -3.45714,-6.5 -3.74286,-14.0071 -0.5,-14.0071 3.85714,0 11.48428,9.7785 11.48428,14.7285 0,6.3572 -7.44785,5.8572 -10.95857,-0.7143 z m -101.812859,-0.7143 c -1.821429,-1.8571 -3.278572,-5.8571 -3.221429,-8.9857 0.07143,-5.4286 0.285714,-5.3571 5.528572,0.8571 8.011428,9.6215 6.064285,16.4929 -2.3,8.1286 z m 117.074289,-2.8571 c -4.82857,-6.8572 -5.63572,-13.2072 -1.69286,-13.2072 3.30714,0 11.21214,11.15 11.21214,15.8215 0,5.5 -4.76428,4.1428 -9.51714,-2.6429 z m -136.310718,-2.1429 c -5.335714,-8.5357 -4.114286,-12.5714 2.1,-6.9286 5.45,4.9286 7.519286,12.4358 3.428572,12.4358 -1.157143,0 -3.642858,-2.5 -5.528572,-5.5 z m 149.663568,-1.5 c -2.52142,-3.8571 -3.68571,-7.8928 -2.59285,-8.9857 2.07857,-2.0714 12.575,9.2214 12.575,13.5214 0,4.8572 -5.47857,2.3572 -9.985,-4.5 z m 13.41358,-1.2857 c -5.33572,-8.5357 -4.11429,-12.5714 2.1,-6.9286 5.45,4.9286 7.51928,12.4357 3.42857,12.4357 -1.15715,0 -3.64286,-2.5 -5.52857,-5.5 z M 20.459742,1031.651 c -3.021428,-7.8714 -1.585714,-10.9428 2.557143,-5.4285 2.228571,2.9285 4.057143,6.3571 4.057143,7.6 0,3.9285 -4.878572,2.3571 -6.614286,-2.1429 z m 193.405718,-1.7142 c -2.32857,-3.3572 -3.72857,-6.5715 -3.10715,-7.1858 1.84286,-1.8571 6.78572,2.0715 9.87715,7.8643 4.01428,7.5 -1.42143,6.9286 -6.77143,-0.7143 z m 13.44143,-0.7143 c -2.95,-2.1429 -4.39286,-4.8572 -3.21429,-6.0715 1.17857,-1.1428 4.87143,0.7143 8.21071,3.9286 6.76429,6.7857 3.32858,8.2357 -4.99285,2.1429 z M 3.2190278,1025.9368 c -1.0285714,-2.8572 -2.37857143,-6.1429 -2.99285715,-7.3 -0.64285714,-1.1429 0.14285715,-2.0715 1.62142855,-2.0715 3.1785715,0 7.1357143,10.7215 4.8142857,13.0429 -0.8642857,0.8571 -2.4142857,-0.7857 -3.4428571,-3.6429 z m 104.5642822,-9.9286 c -4.04285,-4.0714 -4.41428,-16.02862 -0.5,-16.02862 4.39286,0 9.66143,13.49292 6.5,16.65722 -1.74285,1.7142 -3.85714,1.5 -6.00714,-0.7143 z m -51.119282,-3.4286 c -5.121429,-5.1428 -6.335714,-12.60712 -2.05,-12.60712 3.414286,0 9.057143,10.42852 7.754286,14.34282 -0.571429,1.7857 -2.871429,1.0715 -5.707143,-1.7143 z m 14.603571,-1.6428 c -3.842857,-7.1929 -0.935714,-12.47863 4.421429,-8.0358 4.407143,3.6429 5.307143,13.6143 1.235714,13.6143 -1.464286,0 -4.014286,-2.5 -5.657143,-5.5714 z m 18.457144,3.7142 c -1.014286,-1 -1.842857,-4.9285 -1.842857,-8.7142 0,-6.71434 0.142857,-6.78577 5.528571,-1.8572 3.042857,2.7143 5.528572,6.6429 5.528572,8.7214 0,3.8572 -6,5.0715 -9.213572,1.8572 z m 31.878567,-1.5 c -4.42142,-4.4285 -4.23571,-13.26422 0.28572,-13.26422 5.12857,0 10.22714,5.78572 10.22714,11.60712 0,5.7143 -5.59286,6.5714 -10.50357,1.6429 z m 14.35143,-3.7857 c -2.19285,-8.7357 3.26429,-15.80713 7.28072,-9.45002 1.43571,2.28572 2.62857,6.92862 2.65,10.34292 0.0593,8.6428 -7.71143,7.9428 -9.92929,-0.9286 z m 15.84429,0 c -2.35,-5.1428 -2.49286,-8.2785 -0.5,-10.29998 3.79286,-3.78572 8.02643,0.71426 9.03571,9.02148 1.09286,9.2642 -4.54285,10.1071 -8.55928,1.2857 z m -113.162145,1.1429 c -3.9,-3.9286 -4.335714,-10.4572 -0.714286,-10.4572 2.714286,0 7.021429,10.6643 5.092857,12.6 -0.642857,0.7143 -2.6,0 -4.4,-2.1428 z m 128.315715,-1 c -0.92143,-2.4286 -1.67857,-6.9286 -1.67857,-10.00717 0,-4.71429 0.71428,-5.07143 4.14286,-2.21429 4.45714,3.71426 5.75714,16.58576 1.67857,16.58576 -1.35715,0 -3.22143,-2 -4.14286,-4.3572 z m 15.385,0.7857 c -2.01429,-2.4286 -3.23571,-7.2929 -2.7,-10.80001 l 0.96429,-6.35715 3.57142,6.35715 c 1.96429,3.50001 3.17858,8.35711 2.7,10.80001 -0.79285,4.0714 -1.17142,4.0714 -4.53571,0 z M 19.284742,1004.151 c -3.7,-8.1214 0.642857,-9.50711 4.928572,-1.5714 3.471428,6.5 3.592857,8.4786 0.571428,8.4786 -1.278571,0 -3.735714,-3.1429 -5.471428,-6.9286 z m 173.992148,3.2143 c -1.97143,-2.3571 -3.11429,-6.5714 -2.54286,-9.2857 0.91428,-4.35714 1.47143,-4.21428 4.55,1.42857 4.39286,7.96433 2.9,13.80713 -2.01429,7.88573 z m 10.73857,-1.7143 c -1.74286,-3.2142 -2.61429,-7.39997 -1.93572,-9.21426 0.64286,-1.78571 2.65715,0 4.4,4.64286 3.80715,9.5786 2.00715,12.8929 -2.46428,4.5 z m 11.08857,1.4286 c -1.85,-2.2143 -2.88572,-5.5 -2.30714,-7.22142 0.57142,-1.71429 2.53571,0 4.35,4.07142 3.68571,8.1 2.97142,9.2143 -2.04286,3.1429 z M 2.7061707,1001.4368 c -1.73571433,-3.78577 -2.02142862,-6.92863 -0.6428572,-6.92863 2.7214286,0 6.9285714,10.70713 4.9714286,12.65713 -0.6428572,0.7143 -2.6071429,-1.9285 -4.3357143,-5.7143 z M 38.491885,985.27246 c -1.971429,-2.35714 -3.114286,-6.57143 -2.542857,-9.28572 0.914286,-4.35714 1.471428,-4.21428 4.55,1.42858 4.392857,7.96428 2.9,13.8 -2.014286,7.87857 z m 16.878571,0.71428 c -4.15,-4.14285 -4.5,-10.60714 -0.571428,-10.60714 3.335714,0 6.4,6.78572 4.978571,11.07143 -0.642857,2 -2.121428,1.78571 -4.407143,-0.71429 z m 16.480715,0 c -3.964285,-4 -4.421428,-13.27142 -0.642857,-13.27142 1.464286,0 4.071429,2.64285 5.785715,5.85714 3.685714,6.85714 -0.142858,12.42857 -5.135715,7.44286 z m 16.584286,0 c -4.585714,-4.57142 -4.164286,-13.27142 0.642857,-13.27142 4.771429,0 8.654286,10.60714 5.157143,14.1 -1.471428,1.5 -3.835714,1.14285 -5.8,-0.85715 z m -69.420715,-5.64285 c -1.292857,-3.42857 -1.771428,-6.85715 -1.064286,-7.59286 1.457143,-1.57143 9.125715,8.16429 9.125715,11.57857 0,4.78572 -5.828572,1.92857 -8.059286,-4 z m 84.529998,4.35714 c -2.92143,-2.92857 -2.14285,-11.46429 1.22857,-13.55 3.56429,-2.21429 7.87929,3.57143 7.94072,10.55714 0.0414,4.78572 -5.57143,6.57143 -9.17143,3 z m 16.58429,0 c -1.01429,-1 -1.84286,-4.71429 -1.84286,-8.29286 0,-7.93571 7.22357,-8.64285 9.66643,-0.92857 2.6,8.19286 -2.65714,14.4 -7.82357,9.23572 z m 14.82643,-2.21429 c -4.44286,-5.35714 -2.53572,-13.64285 3.4,-14.78571 3.70714,-0.71429 4.80714,1 4.80714,7.40714 0,9.79286 -3.55,12.98572 -8.20714,7.37857 z m -132.6307179,-4 c -1.70000002,-3.14285 -1.9357143,-5.78571 -0.5,-5.78571 2.8428571,0 6.7642857,8.37143 4.8285714,10.30714 -0.6428571,0.71429 -2.6142857,-1.35714 -4.3071428,-4.57143 z m 147.4271479,1.28572 c -2.15,-5.64286 -0.28572,-13.32143 3.54285,-14.59286 1.77143,-0.71428 3.97857,1.28572 4.9,4.21429 3.2,10.07143 -4.79285,19.89285 -8.44071,10.37857 z m 13.93357,-2.78572 c -1.79286,-7.14285 0.14285,-12.6 4.51428,-12.6 1.42857,0 2.6,4.35715 2.6,9.67858 0,11.07857 -4.59285,12.97142 -7.11428,2.92857 z m 38.16285,-1.57142 c 0,-5.28572 0.57143,-7.5 1.26429,-4.85715 0.71429,2.64286 0.71429,7 0,9.67143 -0.71429,2.64286 -1.26429,0.71429 -1.26429,-4.85714 z m 8.18929,1.35714 c 0.0564,-4.57143 0.64286,-6.07143 1.37857,-3.42857 0.71429,2.71428 0.64286,6.42857 -0.0714,8.29285 -0.75714,1.85715 -1.32857,0 -1.27143,-4.85714 z m -31.86429,2.28571 c -2.74285,-2.71428 -2.22857,-14.74285 0.64286,-14.74285 2.75714,0 5.82143,6.64285 5.82143,12.66428 0,4.14286 -3.32857,5.21429 -6.45,2.07143 z m 11.25715,-3.35714 c -0.75,-2.85714 -0.42857,-6.71429 0.64285,-8.52857 1.81429,-2.92857 5.40715,4.64286 5.53572,11.67857 0.0714,4.35714 -4.90714,1.78571 -6.21429,-3.14286 z M 2.7061707,957.43674 c -1.73571433,-3.78571 -2.02142862,-6.92857 -0.6428572,-6.92857 2.7214286,0 6.9285714,10.70715 4.9714286,12.66429 -0.6428572,0.71428 -2.6071429,-1.92857 -4.3357143,-5.71429 z m 17.9185713,5.07143 c -1.014286,-1 -1.8,-4.42857 -1.757143,-7.6 0.07143,-5.64285 0.142857,-5.64285 4.142857,-0.71428 2.228572,2.92857 4.057143,6.35714 4.057143,7.6 0,2.71428 -3.9,2.92857 -6.45,0.71428 z m 16.584286,0 c -1.014286,-1 -1.842857,-4.28571 -1.842857,-7.25 0,-4.5 0.714285,-4.85714 4.142857,-2 2.278571,1.92857 4.142857,5.14286 4.142857,7.25 0,4 -3.364286,5.07143 -6.45,2 z m 16.057143,-3.85714 c -1,-3.14286 -0.985715,-6.57143 0.03928,-7.59286 2.414286,-2.42857 9.98,7.87857 8.067143,10.97143 -2.535714,4.07143 -6.221428,2.57143 -8.106428,-3.35714 z m 17.915,-0.0214 c -2.357143,-4.42857 -2.364286,-6.71428 -0.02429,-9.03571 3.321429,-3.35715 8.304286,1.64285 8.390715,8.4 0.07143,6.14285 -5.192857,6.57143 -8.367144,0.71428 z m 16.991429,-2 c -3.1,-5.78571 0.428571,-13.2 4.928571,-10.40714 3.764286,2.35714 4.107143,15.39286 0.428572,15.39286 -1.464286,0 -3.871429,-2.21429 -5.335714,-5 z m 18.13643,0.71429 c -3.52143,-3.5 -1.89286,-14.74286 2.14286,-14.74286 5.46428,0 7.77285,4.5 5.68571,11.07857 -1.78571,5.64286 -4.55714,6.92857 -7.82357,3.64286 z m 108.955,-2.28572 c -0.0714,-3.07143 1.05,-7.39285 2.52857,-9.67143 2.37857,-3.71428 2.66429,-3.71428 2.52857,0 -0.0714,2.28572 -1.22143,6.64286 -2.52857,9.67143 -2.37857,5.5 -2.37857,5.5 -2.52857,0 z m -93.03286,-2.28571 c -2.53571,-6.64286 -0.21428,-14.29286 4.38572,-14.29286 5.64285,0 6.72142,10.73572 1.51428,15.06429 -3.49286,2.92857 -4.54286,2.78571 -5.89286,-0.78572 z m 14.32714,-3.42857 c -2.16428,-5.64286 2.87858,-15 8.08358,-15 4.92142,0 5.44285,11.32143 0.72857,16.02857 -4.45,4.42857 -6.81429,4.14286 -8.81572,-1 z m 70.21929,-1.71429 c -0.0236,-4.07143 1.2,-8.20714 2.72143,-9.14286 3.52857,-2.21428 3.52857,7 0,12.43572 -2.09286,3.21428 -2.68572,2.5 -2.72143,-3.28572 z m -53.635,-1.07143 c -1.9,-4.92857 2.65,-15 6.78571,-15 4.51429,0 5.99286,7.45 2.69286,13.60715 -3.66428,6.85714 -7.19428,7.36428 -9.48357,1.35714 z m 42.57857,-1.71428 c 0.0236,-3.5 1.25,-8.25 2.72143,-10.52857 2.03571,-3.14286 2.68571,-2 2.72143,4.64285 0.0229,4.85715 -1.2,9.59286 -2.72143,10.52857 -1.54286,0.92858 -2.74286,-1.14285 -2.72143,-4.64285 z m -27.68214,-3.28572 c 0,-8.45714 7.46286,-15.39285 9.85428,-9.15714 1.84286,4.78571 -3.14285,15.72857 -7.18785,15.72857 -1.46429,0 -2.66429,-2.92857 -2.66429,-6.57143 z m 15.08,3.07143 c -0.92857,-2.42857 -0.0436,-7.28571 1.96428,-10.82143 l 3.65,-6.42857 0.92858,7.93572 c 1.07857,9.21428 -3.87143,16.27142 -6.53572,9.32142 z m -162.494288,-3.9286 c -1.014286,-1 -1.8,-4.42857 -1.757143,-7.6 0.07143,-5.64286 0.142857,-5.64286 4.142857,-0.71429 2.228572,2.92858 4.057143,6.35715 4.057143,7.6 0,2.71429 -3.9,2.92858 -6.45,0.71429 z m 18.161429,-1.35714 c -4.15,-4.14286 -4.5,-10.60715 -0.571429,-10.60715 3.335714,0 6.4,6.78572 4.978572,11.07143 -0.642858,2 -2.121429,1.78572 -4.407143,-0.71428 z M 2.3247421,934.48674 c -2.1357143,-4 -2.17857145,-5.78571 -0.1428572,-5.78571 3.35,0 7,7.75 4.7214286,10.02857 -0.8214286,0.85714 -2.8857143,-1.07143 -4.5857143,-4.28571 z m 54.2321429,3.42858 c -1.014286,-1 -1.842857,-4.21429 -1.842857,-7.14286 0,-7.16429 6.678571,-4.64286 7.793571,3 0.857143,5.78571 -2.178571,7.92857 -5.95,4.14286 z m 16.083572,-6.57143 c -2.307143,-7.27143 2.692857,-13.52143 7.209286,-9.00715 3.671428,3.64286 2.35,12.41429 -2.1,13.9 -1.771429,0.71429 -4.071429,-1.64285 -5.114286,-4.92857 z m 156.206433,0.71428 c 0,-1.21428 1.76428,-4.64285 3.92142,-7.59285 5.14286,-7.07143 8.58572,-3.5 3.9,4 -3.63571,5.85714 -7.81928,7.73571 -7.81928,3.57142 z M 91.130457,924.17246 c 1.142857,-9.95714 9.190003,-10.80714 9.190003,-1 0,4.42857 -1.771431,7.21428 -5.04286,7.84286 -4.078571,0.78571 -4.871429,-0.71429 -4.142857,-6.85715 z m 19.039283,0.71428 c -2.47143,-3 -2.54285,-5.5 -0.28571,-9.70714 4.2,-7.85714 11.15071,-7.31428 11.15071,0.85714 0,8.97858 -6.42857,14.20715 -10.88071,8.84286 z m 110.47715,-2 c -0.0507,-2.5 2.35714,-7.46428 5.34285,-11.05714 4.26429,-5.14286 5.45715,-5.57143 5.52857,-2 0.0507,2.5 -2.35714,7.47143 -5.34285,11.05714 -4.26429,5.14286 -5.45715,5.57143 -5.52857,2 z m -92.98572,-3.57142 c -2.03571,-5.28572 3.66429,-15.42143 8.68857,-15.42143 4.72143,0 5.26429,6.35714 1.18572,14.00714 -3.37143,6.28571 -7.76,6.92857 -9.87643,1.42857 z m 18.74929,-8.67858 c 0.92143,-7.78571 8.73714,-15.02142 12.33643,-11.42142 3.35,3.35714 -2.88572,16.99285 -8.24715,18.02857 -3.98571,0.78571 -4.80714,-0.71429 -4.09285,-6.64286 z m 63.08857,3.21429 c 0,-2.14286 2.44286,-6.78571 5.43571,-10.36429 4.72143,-5.64285 5.45,-5.85714 5.52857,-1.5 0.14286,6.35715 -4.81428,15.70715 -8.29714,15.70715 -1.46428,0 -2.66428,-1.71429 -2.66428,-3.85715 z m -46.98857,-3.85714 c 0,-5.78572 7.45214,-17.19286 11.21285,-17.19286 3.47143,0 3.32143,10.07857 -0.28571,16.76429 -3.58571,6.71428 -10.95929,7 -10.95929,0.71428 z m 34.69357,2.35714 c -1.89286,-3.07143 2.57857,-15.61429 6.40714,-17.97857 5.12143,-3.14286 6.13572,3.71428 1.78572,12.13571 -4.65,8.98572 -5.75715,9.77857 -8.19072,5.85715 z m -15.345,-6.57143 c 0,-7 7.01428,-15.20714 10.255,-11.96428 2.6,2.57142 -2.66429,16.24285 -6.8,17.61428 -2.13572,0.71429 -3.45714,-1.42857 -3.45714,-5.64286 z" style="fill:url(#auroracmslogo4162);fill-opacity:1;fill-rule:nonzero;stroke-width:71.42857361"/><path d="m 310.6257,1028.7194 c 0.82143,-4.1429 5.46429,-32.4786 10.31857,-62.8786 l 8.83072,-55.28572 14.48785,-0.85714 c 7.96857,-0.71429 14.51072,0 14.53786,1.35714 0.0279,1.21429 4.37143,28.95715 9.65643,61.64286 5.28571,32.68576 9.61428,60.35716 9.62428,61.49996 0.0114,1.1429 -4.22857,2.0715 -9.41285,2.0715 -8.84929,0 -9.54643,-0.7143 -11.29929,-11.0572 -1.84286,-10.8928 -2.03571,-11.0571 -13.76714,-11.0571 -12.60072,0 -15.255,2.7143 -15.255,15.4286 0,5.7857 -1.28572,6.7142 -9.605,6.7142 -8.99643,0 -9.51072,-0.7142 -8.11643,-7.6 z m 40.79429,-38.00717 c -1.17143,-15.32858 -7.26143,-54.04286 -8.33715,-52.97143 -1.22857,1.21428 -9.06357,49.66428 -9.15785,56.6 -0.0336,2.42857 2.9,3.35714 8.93285,2.78571 7.02857,-0.71428 8.89143,-2.07143 8.56215,-6.42857 z m 46.75,41.37857 c -9.445,-6.6429 -11.74643,-21.0643 -11.76286,-73.85715 l -0.0157,-49.05714 h 9.67429 9.67357 v 49.93572 c 0,51.06427 1.67143,60.62147 10.60072,60.62147 10.54214,0 11.51142,-4.9286 11.51142,-58.5929 v -51.96429 h 9.67429 9.67429 l -0.0664,47.67857 c -0.0714,52.71432 -2.27143,67.42862 -11.16,74.62862 -7.515,6.0714 -29.47643,6.4285 -37.80357,0.7142 z m 62.85,-59.74286 v -63.97143 l 20.91071,1.57143 c 25.04143,1.85714 33.42643,6.57143 35.96214,20.09286 2.57857,13.73571 -0.14285,34.14285 -5.23571,39.22857 -3.83572,3.85714 -3.79286,4.92857 0.35714,11.32143 3.08572,4.71428 5.10714,15.22143 6.02143,31.3929 l 1.37857,24.3285 h -10.365 -10.365 l -0.0429,-21.4214 c -0.0478,-24.3 -1.16428,-27.13572 -11.73214,-29.79286 l -7.57357,-1.92857 v 26.55713 26.5572 h -9.67357 -9.67429 v -63.97147 z m 35.835,-10.47143 c 3.9,-7.28571 3.61428,-25.96428 -0.42858,-30.03571 -1.82142,-1.78572 -6.17857,-3.28572 -9.67428,-3.28572 -6.02857,0 -6.35714,1 -6.35714,19.34286 0,18.72143 0.21428,19.35 6.81428,19.35 3.90714,0 8.03357,-2.28571 9.67429,-5.35714 z m 46.13571,71.31429 c -9.96071,-5.7857 -12.87071,-19.5 -12.87071,-60.62857 0,-42.97858 2.97142,-54.54286 15.46571,-60.24286 9.52214,-4.35714 21.97571,-3.92857 31.55429,1 11.98357,6.21428 14.37,18.24286 13.31714,67.25714 l -0.91429,42.39289 -7.755,6.6428 c -5.85714,5.0715 -10.925,6.6429 -20.73,6.5715 -7.13571,-0.043 -15.26785,-1.4286 -18.07071,-3.0715 z m 25.27286,-16.7714 c 2.27143,-2.2857 3.31428,-15.7429 3.31428,-42.64289 0,-32.07143 -0.8,-40.12857 -4.34285,-43.67143 -5.45715,-5.42857 -7.97,-5.42857 -13.425,0 -3.52143,3.5 -4.34286,11.41429 -4.34286,41.64286 0,20.51429 1.28571,39.69996 2.86428,42.64286 3.22143,6 10.95358,7 15.93358,2 z m 36.485,-44.07146 v -63.97143 l 20.47785,1.57143 c 31.99143,2.42857 37.56643,7.82857 37.56643,36.43571 0,10.40715 -1.55714,16.62858 -5.30714,21.24286 -4.92857,6.07143 -4.98571,6.85714 -0.77857,11.55714 3.24286,3.57143 4.94286,12.44286 6,31.09285 l 1.47143,26.0714 -10.365,-0.01 h -10.365 v -21.9143 c 0,-23.29285 -3.35,-30.59999 -14.01715,-30.59999 -4.89285,0 -5.32857,2.14286 -5.32857,26.25719 v 26.2571 h -9.67428 -9.67429 v -63.97143 z m 35.38,-8.44286 c 1.82143,-1.85714 3.31428,-9.04285 3.31428,-16.03571 0,-14.12857 -3.5,-19.34286 -12.99071,-19.34286 -6.02857,0 -6.35714,1 -6.35714,19.34286 0,18.35 0.35714,19.35 6.35714,19.35 3.49286,0 7.85,-1.5 9.67428,-3.28572 z m 32.06,64.81432 c 2.45,-12.0857 18.245,-112.7786 18.245,-116.3286 0,-2.07143 5.49285,-3.21429 15.20214,-3.21429 9.71066,0 15.20209,1.14286 15.20209,3.21429 0,3.57143 15.79142,104.2429 18.24428,116.3286 1.45,7.1571 0.97143,7.6 -8.31857,7.6 -9.38714,0 -9.94643,-0.7143 -11.65071,-11.1929 l -1.79286,-11.1928 -12.75423,0.8571 c -12.57214,0.7857 -12.76643,1 -13.61214,11.1929 -0.81429,9.85 -1.34286,10.3642 -10.58429,10.3642 -9.14214,0 -9.63428,-0.7142 -8.18428,-7.6 z m 41.02428,-33.17146 c 0.57143,-1.14286 -1.05,-15.12857 -3.55,-31.09286 -4.80714,-30.70714 -5.44285,-30.53571 -10.79714,3 -4.52857,28.32857 -4.20714,30.17857 5.22143,30.17857 4.47143,0 8.57643,-0.92857 9.12286,-2.07142 z m 72.04209,34.09996 -7.755,-6.6428 v -50.22859 -50.22857 l 7.755,-6.64286 c 11.61643,-9.99285 30.06357,-9.35714 40.82786,1.42857 6.80714,6.78572 8.07928,10.28572 8.07928,22.11429 0,13.75 -0.14286,14.02857 -8.29214,14.02857 -6.74286,0 -8.29857,-1.14286 -8.32929,-6.21428 -0.0714,-16.7 -6.65,-23.95715 -16.74714,-18.55 -4.89286,2.64285 -5.32857,6.21428 -5.32857,43.65714 0,42.21433 1.28571,47.44283 11.67786,47.44283 5.71428,0 10.43428,-10.0785 10.43428,-22.29283 0,-7.16429 0.96429,-8.10714 8.29214,-8.10714 8.12215,0 8.29215,0 8.29215,13.99997 0,23.65 -7.80572,32.7643 -28.17715,32.9 -9.81428,0.064 -14.86428,-1.5714 -20.73,-6.5714 z m 62.72714,-57.04996 v -63.72857 l 13.12936,0.85714 13.12928,0.85714 7.06429,42.84286 c 4.17857,25.36429 7.78357,40.58572 8.82929,37.31429 0.97142,-3.07143 3.78571,-19.82857 6.26428,-37.31429 6.68572,-47.3 5.22857,-44.22143 20.98857,-44.22143 h 13.52072 v 63.57143 63.57139 H 921.23357 911.56 l -0.28571,-43.53567 -0.28572,-43.52858 -6.42857,40.07858 c -3.53571,22.04287 -6.52143,41.62857 -6.62143,43.52857 -0.14286,2.0714 -4,3.4286 -9.51714,3.4286 h -9.32429 l -7.00714,-42.15003 -7.00714,-42.15 -0.28572,42.15 -0.28571,42.15003 h -8.29222 -8.29214 v -63.72146 z m 101.13222,55.22146 c -5.03572,-6 -7.15572,-11.7143 -7.15572,-19.35 0,-10.55003 0.28572,-10.84289 9.67429,-10.84289 9.23,0 9.67428,0.71429 9.67428,9.75719 0,17.1857 17.10429,16.2928 18.82715,-1 0.73571,-7.35005 -1.80715,-11.47147 -17.09358,-27.75005 -20.00928,-21.3 -24.025,-32.16428 -18.59428,-50.29285 4.02857,-13.45 12.09643,-19.17857 26.99571,-19.17857 15.85072,0 25.61215,8.52142 27.71429,24.18571 1.54287,11.52143 1.42147,11.74286 -6.58572,11.74286 -6.5,0 -8.95928,-1.78572 -12.11142,-8.81429 -4.8,-10.70714 -8.71,-12.29286 -14.94429,-6.07143 -7.63857,7.64286 -3.17857,19.84286 13.50643,36.97143 17.99643,18.47857 20.97857,23.97857 20.97857,38.71429 0,21.4214 -8.515,30.1857 -29.46786,30.3143 -12.58857,0 -15.10643,-0.9286 -21.42143,-8.4143 z" style="fill:#ffffff;stroke-width:71.42857361"/></g></svg>
			</span>
			<div class="card mt-2 shadow-lg">
				<div class="card-header">
					<h3 class="card-title">Installation</h3>
				</div>
				<div class="card-body">
					<div id="step1">
					<div id="dbinfo"></div>
<?php $error=0;
if(version_compare(phpversion(),'7.0','<'))echo'<div class="alert alert-danger" role="alert">AuroraCMS was built using PHP v7.0, your installed version is lower. While AuroraCMS may operate on your system, some functionality may not work or be available. We recommend using PHP 7.3 if available on you\'re services!</div>';
if(extension_loaded('pdo')){
	if(empty(PDO::getAvailableDrivers())){
		$error=1;
		echo'<div class="alert alert-danger" role="alert">Great PDO is Installed and Active, but there are no Databse Drivers Installed!</div>';
	}
}else{
	$error=1;
	echo'<div class="alert alert-danger" role="alert">AuroraCMS uses PDO for Database Interaction, please Install or Enable PDO!</div>';
}
if(file_exists('core/config.ini')&&!is_writable('core/config.ini')){
	$error=1;
	echo'<div class="alert alert-danger" role="alert"><code>core/config.ini</code> Exists, but is not writeable. There is two ways to fix this, either make <code>core/config.ini</code> writable, or remove the file!</div>';
}
if(!isset($_SERVER['HTTP_MOD_REWRITE'])){
	$error=1;
	echo'<div class="alert alert-danger" role="alert"><code>mod_rewrite</code> must be available and enabled for AuroraCMS to function correctly!</div>';
}
if(!extension_loaded('gd')&&!function_exists('gd_info')){
	$error=1;
	echo'<div class="alert alert-danger" role="alert">GD-Image is NOT Installed or Enabled!</div>';
}
echo(!function_exists('exif_read_data')?'<div class="alert alert-info" role="alert">EXIF Functions are NOT enabled or installed. While not Mandatory, some features won\'t work.</div>':'');
echo($error==1?'<div class="alert alert-danger" role="alert">Please fix the above Issue\'s outlined within the Red Sections, then Refresh the page to Check Again.</div>':'');
if($error==0){?>
						<h4 class="card-title">Database Settings</h4>
						<form target="sp" method="post" action="core/installer.php">
							<input type="hidden" name="emailtrap" value="none">
							<input type="hidden" name="act" value="step1">
							<div class="form-group">
								<label for="dbtype">Type</label>
								<select id="dbtype" name="dbtype" class="form-control">
<?php	foreach(PDO::getAvailableDrivers() as$DRIVER)echo'<option value="'.$DRIVER.'">'.strtoupper($DRIVER).'</option>';?>
								</select>
							</div>
							<div class="form-group">
								<label for="dbhost">Host</label>
								<input id="dbhost" name="dbhost" type="text" class="form-control" value="localhost" placeholder="Enter a Host..." required>
							</div>
							<div class="form-group">
								<label for="dbport">Port</label>
								<input id="dbport" name="dbport" type="text" class="form-control" value="" placeholder="Enter a Port Number, or leave Blank for Default...">
							</div>
							<div class="form-group">
								<label for="dbprefix">Table Prefix</label>
								<input id="dbprefix" name="dbprefix" type="text" class="form-control" value="lcms_" placeholder="Enter a Table Prefix...">
							</div>
							<div class="form-group">
								<label for="dbschema">Schema</label>
								<input id="dbschema" name="dbschema" type="text" class="form-control" value="" placeholder="Enter a Database Schema/Name..." required>
							</div>
							<div class="form-group">
								<label for="dbusername">Username</label>
								<input id="dbusername" name="dbusername" type="text" class="form-control" value="" placeholder="Enter Database Username..." required>
							</div>
							<div class="form-group">
								<label for="dbpassword">Password</label>
								<input id="dbpassword" name="dbpassword" type="password" class="form-control" value="" placeholder="Enter Database Password..." required>
							</div>
							<div class="float-right">
								<button type="submit" class="btn btn-primary btn-lg" aria-label="Go to Next Step">Next</button>
							</div>
						</form>
					<div class="clearfix"></div>
					<div id="step2" class="d-none">
						<h4 class="card-title">System Settings</h4>
						<form target="sp" method="post" action="core/installer.php">
							<input type="hidden" name="emailtrap" value="none">
							<input type="hidden" name="act" value="step2">
							<div class="form-group">
								<label for="sysurl">Site URL</label>
								<input id="sysurl" name="sysurl" type="text" class="form-control" value="" placeholder="Enter URL Folder if Site isn't in Domain Root...">
							</div>
							<div class="form-group">
								<label for="sysadmin">Administration Folder</label>
								<input id="sysadmin" name="sysadmin" type="text" class="form-control" value="" placeholder="Enter Administration Page Folder...">
								<div class="help-text small">Leave blank to use default: \"admin\". e.g. http://www.sitename.com/admin/</div>
							</div>
							<div class="form-group">
								<label for="aTheme">Theme</label>
								<select id="aTheme" class="form-control" name="aTheme">
<?php foreach(new DirectoryIterator('layout') as$folder){
    if($folder->isDOT())continue;
    if($folder->isDir()){
      $theme=parse_ini_file('layout/'.$folder.'/theme.ini',true);?>
									<option value="<?php echo$folder;?>"<?php echo(stristr($folder,'default')?' selected':'');?>><?php echo$theme['title'];?></option>
<?php }
}?>
								</select>
							</div>
							<div class="float-right">
								<button type="submit" class="btn btn-primary btn-lg" onclick="$('#block').css({'display':'block'});" role="button" aria-label="Go to Next Step">Next</button>
							</div>
						</form>
						<div class="clearfix"></div>
						<div id="step3" class="d-none">
							<h4 class="card-title">Developer Account Settings</h4>
							<form target="sp" method="post" action="core/installer.php">
								<input type="hidden" name="emailtrap" value="none">
								<input type="hidden" name="act" value="step3">
								<div class="form-group">
									<label for="aName">Name</label>
									<input id="aName" name="aName" type="text" class="form-control" value="" placeholder="Enter a Name..." required>
								</div>
								<div class="form-group">
									<label for="aEmail">Email</label>
									<input id="aEmail" name="aEmail" type="text" class="form-control" value="" placeholder="Enter an Email..." required>
								</div>
								<div class="form-group">
									<label for="aUsername">Username</label>
									<input id="aUsername" name="aUsername" type="text" class="form-control" value="" placeholder="Enter a Username..." required>
								</div>
								<div class="form-group">
									<label for="aPassword">Password</label>
									<input id="aPassword" name="aPassword" type="password" class="form-control" value="" placeholder="Enter a Password..." required>
								</div>
								<div class="float-right">
									<button type="submit" class="btn btn-primary btn-lg" role="button" aria-label="Go to Next Step">Next</button>
								</div>
							</form>
						<div class="clearfix"></div>
<?php }?>
						<div id="step4" class="d-none">
							<div class="well">
								<div class="alert alert-success text-center" role="alert">Installation Complete!<br>Website is Ready to use!</div>
								<div class="alert alert-info text-center" role="alert">NOTE: Website is currently in Maintenance Mode!</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<iframe id="sp" name="sp" class="hidden"></iframe>
		<div id="block" class="lds-dual-ring"></div>
	</body>
</html>
