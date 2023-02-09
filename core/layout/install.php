<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Install
 * @package    core/layout/install.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.2.22
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */?>
<!DOCTYPE HTML>
<!--
	AuroraCMS - the MIT Licensed Open Source Content Management System.
	Built for Australian inhabitants of the Tau`ri.

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
		<link rel="stylesheet" type="text/css" href="core/css/style.css">
	</head>
	<body class="login-bg">
		<main class="row m-0 p-0 justify-content-center">
			<div class="col-12 col-sm-5 m-0 my-5 px-5 py-3 bg-login">
				<div class="m-0 m-sm-4">
          <svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 16" style="fill:#fff;"><path d="M 8.53006,9.8203 H 3.79288 L 3.04532,11.9608 H 0 L 4.35159,0.2123 h 3.6119 l 4.35159,11.7485 H 9.26975 Z M 4.54831,7.6406 H 7.76677 L 6.16148,2.9664 Z"/><path d="M 13.65281,8.5298 V 3.1473 h 2.83287 v 0.8814 q 0,0.7161 -0.008,1.802 -0.008,1.078 -0.008,1.44 0,1.0624 0.055,1.5345 0.055,0.4642 0.18885,0.6767 0.17313,0.2755 0.44854,0.425 0.28329,0.1495 0.64527,0.1495 0.88133,0 1.38495,-0.6768 0.50363,-0.6767 0.50363,-1.8807 V 3.1473 h 2.81712 v 8.8135 h -2.81712 v -1.2749 q -0.63741,0.7712 -1.35349,1.141 -0.70821,0.362 -1.56593,0.362 -1.52661,0 -2.32925,-0.9364 -0.79478,-0.9364 -0.79478,-2.7227 z"/><path d="m 31.7674,5.5474 q -0.36986,-0.1731 -0.7397,-0.2517 -0.36198,-0.087 -0.73182,-0.087 -1.08593,0 -1.67611,0.7004 -0.58231,0.6925 -0.58231,1.9908 v 4.0605 H 25.22033 V 3.147 h 2.81713 v 1.4479 q 0.54296,-0.8655 1.24331,-1.259 0.70822,-0.4013 1.69185,-0.4013 0.14164,0 0.30689,0.016 0.16525,0.011 0.48002,0.047 z"/><path d="m 37.36229,4.9494 q -0.93642,0 -1.43217,0.6768 -0.48788,0.6688 -0.48788,1.9357 0,1.267 0.48788,1.9437 0.49575,0.6688 1.43217,0.6688 0.92068,0 1.40856,-0.6688 0.48788,-0.6767 0.48788,-1.9437 0,-1.2669 -0.48788,-1.9357 -0.48788,-0.6768 -1.40856,-0.6768 z m 0,-2.0145 q 2.27416,0 3.54894,1.2276 1.28267,1.2275 1.28267,3.3994 0,2.1719 -1.28267,3.3994 -1.27478,1.2276 -3.54894,1.2276 -2.28202,0 -3.57255,-1.2276 -1.28265,-1.2275 -1.28265,-3.3994 0,-2.1719 1.28265,-3.3994 1.29053,-1.2276 3.57255,-1.2276 z"/><path d="m 50.78691,5.5474 q -0.36985,-0.1731 -0.73969,-0.2517 -0.36199,-0.087 -0.73183,-0.087 -1.08593,0 -1.67611,0.7004 -0.58231,0.6925 -0.58231,1.9908 v 4.0605 H 44.23984 V 3.147 h 2.81713 v 1.4479 q 0.54297,-0.8655 1.24331,-1.259 0.70822,-0.4013 1.69185,-0.4013 0.14164,0 0.30689,0.016 0.16525,0.011 0.48002,0.047 z"/><path d="m 56.13787,7.9947 q -0.88134,0 -1.32987,0.299 -0.44067,0.299 -0.44067,0.8814 0,0.535 0.3541,0.842 0.36199,0.299 0.99938,0.299 0.79477,0 1.33773,-0.5665 0.54297,-0.5745 0.54297,-1.4322 V 7.9947 Z m 4.30437,-1.0623 v 5.0284 h -2.84073 v -1.3064 q -0.56657,0.8027 -1.27479,1.1725 -0.70821,0.362 -1.72332,0.362 -1.36922,0 -2.22695,-0.7948 -0.84985,-0.8026 -0.84985,-2.0774 0,-1.5502 1.06232,-2.2741 1.07019,-0.724 3.35222,-0.724 h 1.66037 V 6.0982 q 0,-0.6688 -0.52722,-0.9757 -0.52723,-0.3148 -1.64464,-0.3148 -0.90494,0 -1.68398,0.181 -0.77903,0.181 -1.4479,0.543 V 3.3835 q 0.90494,-0.2204 1.81775,-0.3305 0.91281,-0.1181 1.82562,-0.1181 2.38432,0 3.43878,0.9443 1.06232,0.9365 1.06232,3.0532 z"/><path d="m 72.50551,11.3154 q -0.83413,0.4329 -1.73906,0.6532 -0.90494,0.2203 -1.88857,0.2203 -2.93517,0 -4.65063,-1.6368 -1.71545,-1.6445 -1.71545,-4.4539 0,-2.817 1.71545,-4.4539 1.71546,-1.6445 4.65063,-1.6445 0.98363,0 1.88857,0.2203 0.90493,0.2203 1.73906,0.6531 V 3.3047 Q 71.66352,2.7303 70.84514,2.4628 70.02676,2.1952 69.12181,2.1952 q -1.62102,0 -2.54958,1.0388 -0.92854,1.0387 -0.92854,2.8642 0,1.8178 0.92854,2.8565 0.92856,1.0387 2.54958,1.0387 0.90495,0 1.72333,-0.2675 0.81838,-0.2675 1.66037,-0.842 z"/><path d="m 75.01574,0.2123 h 3.85584 l 2.67548,6.2873 2.69122,-6.2873 h 3.84796 V 11.9608 H 85.22191 V 3.3677 L 82.51495,9.7023 H 80.5949 L 77.88794,3.3677 v 8.5931 h -2.8722 z"/><path d="M 99.22884,0.5821 V 3.0687 Q 98.26094,2.6358 97.34026,2.4155 96.41957,2.1952 95.60119,2.1952 q -1.08593,0 -1.60528,0.299 -0.51936,0.2991 -0.51936,0.9286 0,0.4722 0.34624,0.7397 0.3541,0.2597 1.27478,0.4485 l 1.29053,0.2597 q 1.9594,0.3935 2.78565,1.196 Q 100,6.8694 100,8.3489 q 0,1.9435 -1.15675,2.8957 -1.14888,0.9443 -3.51748,0.9443 -1.1174,0 -2.24268,-0.2124 -1.12526,-0.2125 -2.25054,-0.6296 V 8.7894 q 1.12528,0.5982 2.17186,0.905 1.05445,0.299 2.03021,0.299 0.99151,0 1.51873,-0.3305 0.52723,-0.3305 0.52723,-0.9442 0,-0.5508 -0.36198,-0.8499 Q 96.3645,7.5697 95.2943,7.3337 L 94.12181,7.074 Q 92.35915,6.6964 91.54076,5.87 90.73025,5.0438 90.73025,3.6432 q 0,-1.7549 1.13314,-2.6992 1.13315,-0.9442 3.25779,-0.9442 0.9679,0 1.99088,0.1495 1.02297,0.1416 2.11678,0.4328 z"/><path d="m 1.73157,13.4233 h 2.32917 v 0.4926 H 3.22285 v 2.0346 H 2.57116 V 13.9159 H 1.73157 Z"/><path d="m 4.39759,13.4233 h 0.6517 v 0.9632 h 0.96145 v -0.9632 h 0.6517 v 2.5272 H 6.01074 V 14.8791 H 5.04929 v 1.0714 h -0.6517 z"/><path d="m 7.29889,13.4233 h 1.75873 v 0.4926 H 7.95058 v 0.4706 h 1.04101 v 0.4926 H 7.95058 v 0.5789 h 1.14427 v 0.4925 H 7.29889 Z"/><path d="m 12.40749,15.4902 h -1.01902 l -0.1608,0.4603 h -0.65508 l 0.93607,-2.5272 h 0.77695 l 0.93607,2.5272 H 12.5666 Z m -0.85652,-0.469 h 0.69233 l -0.34532,-1.0054 z"/><path d="m 13.45019,13.4233 h 0.6517 v 1.515 q 0,0.3131 0.1016,0.4486 0.10328,0.1336 0.33516,0.1336 0.23359,0 0.33515,-0.1336 0.10328,-0.1355 0.10328,-0.4486 v -1.515 h 0.65169 v 1.515 q 0,0.5366 -0.26914,0.799 -0.26913,0.2623 -0.82096,0.2623 -0.55013,0 -0.81927,-0.2623 -0.26914,-0.2624 -0.26914,-0.799 z"/><path d="m 18.02389,13.5028 v 0.535 q -0.20821,-0.093 -0.40625,-0.1405 -0.19805,-0.048 -0.37408,-0.048 -0.2336,0 -0.34532,0.065 -0.11172,0.065 -0.11172,0.1998 0,0.1016 0.0745,0.1591 0.0761,0.056 0.27422,0.096 l 0.2776,0.056 q 0.42149,0.085 0.59922,0.2572 0.17773,0.1727 0.17773,0.491 0,0.418 -0.24882,0.6229 -0.24714,0.2031 -0.75664,0.2031 -0.24037,0 -0.48242,-0.046 -0.24206,-0.046 -0.48412,-0.1354 v -0.5502 q 0.24206,0.1287 0.46719,0.1946 0.22682,0.065 0.43671,0.065 0.21329,0 0.3267,-0.072 0.11341,-0.071 0.11341,-0.2031 0,-0.1184 -0.0778,-0.1827 -0.0761,-0.065 -0.30638,-0.1151 l -0.25221,-0.056 q -0.37916,-0.082 -0.55521,-0.259 -0.17435,-0.1778 -0.17435,-0.479 0,-0.3775 0.24375,-0.5806 0.24375,-0.2031 0.70078,-0.2031 0.2082,0 0.42825,0.032 0.22006,0.03 0.45534,0.093 z"/><path d="m 18.46061,13.4233 h 2.32917 v 0.4926 h -0.8379 v 2.0346 h -0.65169 v -2.0346 h -0.83958 z"/><path d="m 22.05254,14.5439 q 0.20482,0 0.29283,-0.076 0.0897,-0.076 0.0897,-0.2506 0,-0.1726 -0.0897,-0.2471 -0.088,-0.075 -0.29283,-0.075 h -0.27423 v 0.6483 z m -0.27423,0.4503 v 0.9563 h -0.65169 v -2.5272 h 0.99532 q 0.49934,0 0.73125,0.1676 0.23359,0.1676 0.23359,0.5298 0,0.2506 -0.12187,0.4114 -0.12018,0.1607 -0.36394,0.2369 0.13373,0.03 0.23868,0.1388 0.10663,0.1072 0.21497,0.325 l 0.35377,0.7177 h -0.69401 l -0.30806,-0.6279 q -0.0931,-0.1896 -0.18959,-0.2591 -0.0948,-0.069 -0.25391,-0.069 z"/><path d="m 25.32962,15.4902 h -1.01901 l -0.16081,0.4603 h -0.65508 l 0.93607,-2.5272 h 0.77696 l 0.93607,2.5272 h -0.65508 z m -0.85651,-0.469 h 0.69231 l -0.3453,-1.0054 z"/><path d="m 26.47897,13.4233 h 0.65169 v 2.0347 h 1.14427 v 0.4925 h -1.79596 z"/><path d="m 28.68795,13.4233 h 0.6517 v 2.5272 h -0.6517 z"/><path d="m 31.5114,15.4902 h -1.01902 l -0.1608,0.4603 H 29.6765 l 0.93607,-2.5272 h 0.77694 l 0.93607,2.5272 H 31.6705 Z m -0.85652,-0.469 h 0.69232 l -0.34532,-1.0054 z"/><path d="m 32.66075,13.4233 h 0.72786 l 0.91914,1.7334 v -1.7334 h 0.61783 v 2.5272 h -0.72787 l -0.91914,-1.7333 v 1.7333 h -0.61782 z"/><path d="m 38.7731,15.8117 q -0.17941,0.093 -0.37408,0.1405 -0.19466,0.048 -0.40625,0.048 -0.63138,0 -1.00039,-0.352 -0.369,-0.3539 -0.369,-0.9582 0,-0.606 0.369,-0.9581 0.36901,-0.3537 1.00039,-0.3537 0.21159,0 0.40625,0.047 0.19467,0.048 0.37408,0.1405 v 0.5231 q -0.18111,-0.1236 -0.35716,-0.1811 -0.17603,-0.058 -0.3707,-0.058 -0.3487,0 -0.54844,0.2234 -0.19973,0.2236 -0.19973,0.6163 0,0.391 0.19973,0.6144 0.19974,0.2234 0.54844,0.2234 0.19467,0 0.3707,-0.058 0.17605,-0.058 0.35716,-0.1811 z"/><path d="m 40.46751,13.8498 q -0.29792,0 -0.46211,0.2201 -0.16419,0.2201 -0.16419,0.6196 0,0.3977 0.16419,0.6178 0.16419,0.22 0.46211,0.22 0.29961,0 0.4638,-0.22 0.1642,-0.2201 0.1642,-0.6178 0,-0.3995 -0.1642,-0.6196 -0.16419,-0.2201 -0.4638,-0.2201 z m 0,-0.4721 q 0.60937,0 0.95469,0.3487 0.34531,0.3487 0.34531,0.9631 0,0.6127 -0.34531,0.9614 -0.34532,0.3487 -0.95469,0.3487 -0.60768,0 -0.95468,-0.3487 -0.34532,-0.3487 -0.34532,-0.9614 0,-0.6144 0.34532,-0.9631 0.347,-0.3487 0.95468,-0.3487 z"/><path d="m 42.26009,13.4233 h 0.72786 l 0.91914,1.7334 v -1.7334 h 0.61784 v 2.5272 h -0.72786 l -0.91914,-1.7333 v 1.7333 h -0.61784 z"/><path d="m 44.86008,13.4233 h 2.32917 v 0.4926 h -0.83789 v 2.0346 h -0.65169 v -2.0346 h -0.83959 z"/><path d="m 47.5261,13.4233 h 1.75873 v 0.4926 H 48.1778 v 0.4706 h 1.04101 v 0.4926 H 48.1778 v 0.5789 h 1.14427 v 0.4925 H 47.5261 Z"/><path d="m 49.8942,13.4233 h 0.72786 l 0.91915,1.7334 v -1.7334 h 0.61783 v 2.5272 h -0.72786 l -0.91914,-1.7333 v 1.7333 H 49.8942 Z"/><path d="m 52.49421,13.4233 h 2.32916 v 0.4926 h -0.8379 v 2.0346 h -0.65168 v -2.0346 h -0.83958 z"/><path d="m 56.36712,13.4233 h 0.82943 l 0.57552,1.3525 0.57891,-1.3525 h 0.82773 v 2.5272 h -0.61615 v -1.8484 l -0.58229,1.3626 h -0.41302 l -0.5823,-1.3626 v 1.8484 h -0.61783 z"/><path d="m 61.35045,15.4902 h -1.01901 l -0.16081,0.4603 h -0.65507 l 0.93606,-2.5272 h 0.77696 l 0.93607,2.5272 h -0.65508 z m -0.85651,-0.469 h 0.69232 l -0.34531,-1.0054 z"/><path d="m 62.4998,13.4233 h 0.72787 l 0.91914,1.7334 v -1.7334 h 0.61784 v 2.5272 h -0.72787 l -0.91914,-1.7333 v 1.7333 H 62.4998 Z"/><path d="m 66.9347,15.4902 h -1.01902 l -0.1608,0.4603 H 65.0998 l 0.93607,-2.5272 h 0.77694 l 0.93608,2.5272 H 67.0938 Z m -0.85652,-0.469 h 0.69232 l -0.3453,-1.0054 z"/><path d="m 70.35566,15.7626 q -0.24376,0.1186 -0.50612,0.1778 -0.26237,0.059 -0.54167,0.059 -0.63137,0 -1.00039,-0.352 -0.36901,-0.3538 -0.36901,-0.9581 0,-0.6111 0.37579,-0.9615 0.37577,-0.3504 1.02916,-0.3504 0.25222,0 0.48243,0.047 0.23189,0.048 0.43671,0.1405 v 0.5231 q -0.21159,-0.1201 -0.42148,-0.1794 -0.20821,-0.059 -0.41811,-0.059 -0.38931,0 -0.60091,0.2184 -0.20989,0.2167 -0.20989,0.6212 0,0.4012 0.20312,0.6195 0.20313,0.2184 0.57721,0.2184 0.10161,0 0.1879,-0.012 0.088,-0.013 0.15742,-0.04 v -0.4908 h -0.39778 v -0.4368 h 1.01562 z"/><path d="m 70.92948,13.4233 h 0.82943 l 0.57552,1.3525 0.57891,-1.3525 h 0.82774 v 2.5272 h -0.61614 v -1.8484 l -0.58231,1.3626 h -0.41302 l -0.58229,-1.3626 v 1.8484 h -0.61784 z"/><path d="m 74.37923,13.4233 h 1.75871 v 0.4926 h -1.10702 v 0.4706 h 1.04101 v 0.4926 h -1.04101 v 0.5789 h 1.14427 v 0.4925 h -1.79596 z"/><path d="m 76.74732,13.4233 h 0.72787 l 0.91915,1.7334 v -1.7334 h 0.61783 v 2.5272 H 78.2843 l -0.91914,-1.7333 v 1.7333 h -0.61784 z"/><path d="m 79.34733,13.4233 h 2.32917 v 0.4926 h -0.8379 v 2.0346 h -0.65168 v -2.0346 h -0.83959 z"/><path d="m 84.97896,13.5028 v 0.535 q -0.2082,-0.093 -0.40624,-0.1405 -0.19806,-0.048 -0.37409,-0.048 -0.23359,0 -0.34531,0.065 -0.11173,0.065 -0.11173,0.1998 0,0.1016 0.0745,0.1591 0.0762,0.056 0.27421,0.096 l 0.27761,0.056 q 0.42148,0.085 0.59921,0.2572 0.17773,0.1727 0.17773,0.491 0,0.418 -0.24882,0.6229 -0.24713,0.2031 -0.75664,0.2031 -0.24037,0 -0.48242,-0.046 -0.24206,-0.046 -0.48411,-0.1354 v -0.5502 q 0.24205,0.1287 0.46718,0.1946 0.22683,0.065 0.43672,0.065 0.21328,0 0.3267,-0.072 0.11341,-0.071 0.11341,-0.2031 0,-0.1184 -0.0778,-0.1827 -0.0761,-0.065 -0.30638,-0.1151 l -0.2522,-0.056 q -0.37917,-0.082 -0.55522,-0.259 -0.17435,-0.1778 -0.17435,-0.479 0,-0.3775 0.24376,-0.5806 0.24374,-0.2031 0.70078,-0.2031 0.2082,0 0.42825,0.032 0.22006,0.03 0.45533,0.093 z"/><path d="m 85.36491,13.4233 h 0.71263 l 0.57551,0.9005 0.57553,-0.9005 h 0.71432 l -0.96315,1.4625 v 1.0647 h -0.65169 v -1.0647 z"/><path d="m 89.986,13.5028 v 0.535 q -0.20821,-0.093 -0.40625,-0.1405 -0.19805,-0.048 -0.37408,-0.048 -0.23361,0 -0.34532,0.065 -0.11172,0.065 -0.11172,0.1998 0,0.1016 0.0745,0.1591 0.0761,0.056 0.27423,0.096 l 0.2776,0.056 q 0.42149,0.085 0.59922,0.2572 0.17773,0.1727 0.17773,0.491 0,0.418 -0.24882,0.6229 -0.24714,0.2031 -0.75665,0.2031 -0.24036,0 -0.48241,-0.046 -0.24206,-0.046 -0.48412,-0.1354 v -0.5502 q 0.24206,0.1287 0.46719,0.1946 0.22682,0.065 0.43671,0.065 0.21329,0 0.32669,-0.072 0.11342,-0.071 0.11342,-0.2031 0,-0.1184 -0.0778,-0.1827 -0.0761,-0.065 -0.30638,-0.1151 l -0.25222,-0.056 q -0.37917,-0.082 -0.5552,-0.259 -0.17435,-0.1778 -0.17435,-0.479 0,-0.3775 0.24374,-0.5806 0.24376,-0.2031 0.70079,-0.2031 0.2082,0 0.42825,0.032 0.22006,0.03 0.45534,0.093 z"/><path d="m 90.42272,13.4233 h 2.32917 v 0.4926 H 91.914 v 2.0346 h -0.65169 v -2.0346 h -0.83959 z"/><path d="m 93.08873,13.4233 h 1.75873 v 0.4926 h -1.10704 v 0.4706 h 1.04103 v 0.4926 h -1.04103 v 0.5789 h 1.14427 v 0.4925 h -1.79596 z"/><path d="m 95.45683,13.4233 h 0.82943 l 0.57552,1.3525 0.57891,-1.3525 h 0.82774 v 2.5272 h -0.61616 v -1.8484 l -0.58229,1.3626 h -0.41302 l -0.58229,-1.3626 v 1.8484 h -0.61784 z"/></svg>
        </div>
				<noscript><div class="alert alert-danger" role="alert">Javascript MUST BE ENABLED for AuroraCMS to function correctly!</div></noscript>
				<h3>Installation</h3>
				<hr>
				<div id="step1">
					<div id="dbinfo"></div>
<?php $error=0;
if(version_compare(phpversion(),'7.0','<'))echo'<div class="alert alert-danger" role="alert">AuroraCMS was built using PHP v7.0, your installed version is lower. While AuroraCMS may operate on your system, some functionality may not work or be available. We recommend using PHP 7.3 if available on you\'re services!</div>';
if(extension_loaded('pdo')){
	if(empty(PDO::getAvailableDrivers())){
		$error++;
		echo'<div class="alert alert-danger" role="alert">Great PDO is Installed and Active, but there are no Database Drivers Installed!</div>';
	}
}else{
	$error++;
	echo'<div class="alert alert-danger" role="alert">AuroraCMS uses PDO for Database Interaction, please Install or Enable PDO!</div>';
}
if(file_exists('core/config.ini')&&!is_writable('core/config.ini')){
	$error++;
	echo'<div class="alert alert-danger" role="alert"><code>core/config.ini</code> Exists, but is not writeable. There is two ways to fix this, either make <code>core/config.ini</code> writable, or remove the file!</div>';
}
if(!isset($_SERVER['HTTP_MOD_REWRITE'])){
	$error++;
	echo'<div class="alert alert-danger" role="alert"><code>mod_rewrite</code> must be available and enabled for AuroraCMS to function correctly!</div>';
}
if(!extension_loaded('gd')&&!function_exists('gd_info')){
	$error++;
	echo'<div class="alert alert-danger" role="alert">GD-Image is NOT Installed or Enabled!</div>';
}
if(!function_exists('curl_version')){
	$error++;
	echo'<div class="alert alert-info" role="alert">CURL Function is NOT enabled or Installed. Please install or enable the CURL extension!</div>';
}
echo(!function_exists('exif_read_data')?'<div class="alert alert-info" role="alert">EXIF Functions are NOT enabled or installed. While not Mandatory, some features won\'t work.</div>':'');
echo($error>0?'<div class="alert alert-danger" role="alert">Please fix the above '.$error.' Issue\'s outlined within the Red Sections, then Refresh the page to Check Again.</div>':'');
if($error==0){?>
						<h4>Database Settings</h4>
						<div class="alert alert-info">Be sure that the database uses "utf8mb4_unicode_ci" collation encoding.</div>
						<form target="sp" method="post" action="core/installer.php" onsubmit="isValid();">
							<input name="emailtrap" type="hidden" value="">
							<input name="act" type="hidden" value="step1">
							<label for="dbtype">Type</label>
							<select id="dbtype" name="dbtype">
	<?php	foreach(PDO::getAvailableDrivers() as$DRIVER)
		echo'<option value="'.$DRIVER.'">'.strtoupper($DRIVER).'</option>';?>
							</select>
							<label for="dbhost">Host</label>
							<input id="dbhost" name="dbhost" type="text" value="localhost" placeholder="Enter a Host..." required>
							<label for="dbport">Port</label>
							<input id="dbport" name="dbport" type="text" value="" placeholder="Enter a Port Number, or leave Blank for Default...">
							<label for="dbprefix">Table Prefix</label>
							<input id="dbprefix" name="dbprefix" type="text" value="aurora_" placeholder="Enter a Table Prefix...">
							<label for="dbschema">Schema</label>
							<input id="dbschema" name="dbschema" type="text" value="" placeholder="Enter a Database Schema/Name..." required>
							<label for="dbusername">Username</label>
							<input id="dbusername" name="dbusername" type="text" value="" placeholder="Enter Database Username..." required>
							<label for="dbpassword">Password</label>
							<input id="dbpassword" name="dbpassword" type="password" value="" placeholder="Enter Database Password..." required>
							<div class="row mt-4">
								<button type="submit" aria-label="Go to Next Step">Next</button>
							</div>
						</form>
						<div id="dbsuccess"></div>
					</div>
					<div class="d-none" id="step2">
						<h4>System Settings</h4>
						<form target="sp" method="post" action="core/installer.php" onsubmit="isValid();">
							<input name="emailtrap" type="hidden" value="">
							<input name="act" type="hidden" value="step2">
							<label class="text-white text-md-black" for="sysurl">Site URL</label>
							<input id="sysurl" name="sysurl" type="text" value="" placeholder="Enter URL Folder if Site isn't in Domain Root...">
							<label for="sysadmin">Administration Folder</label>
							<input id="sysadmin" name="sysadmin" type="text" value="" placeholder="Enter Administration Page Folder...">
							<div class="form-text small">Leave blank to use default: \"admin\". e.g. http://www.sitename.com/admin/</div>
							<label for="aTheme">Theme</label>
							<select id="aTheme" name="aTheme">
	<?php foreach(new DirectoryIterator('layout') as$folder){
		if($folder->isDOT())continue;
		if($folder->isDir()){
			$theme=parse_ini_file('layout/'.$folder.'/theme.ini',true);?>
								<option value="<?=$folder;?>"<?=(stristr($folder,'default')?' selected':'');?>><?=$theme['title'];?></option>
		<?php }
	}?>
							</select>
							<div class="row mt-4">
								<button type="submit" aria-label="Go to Next Step">Next</button>
							</div>
						</form>
					</div>
					<div class="d-none" id="step3">
						<h4>Developer Account Settings</h4>
						<form target="sp" method="post" action="core/installer.php" onsubmit="isValid();">
							<input name="emailtrap" type="hidden" value="">
							<input name="act" type="hidden" value="step3">
							<label for="aname">Name</label>
							<input id="aname" name="aname" type="text" value="" placeholder="Enter a Name..." required>
							<label for="aemail">Email</label>
							<input id="aemail" name="aemail" type="text" value="" placeholder="Enter an Email..." required>
							<label for="ausername">Username</label>
							<input id="ausername" name="ausername" type="text" value="" placeholder="Enter a Username..." required>
							<label for="apassword">Password</label>
							<input id="apassword" name="apassword" type="password" value="" placeholder="Enter a Password..." required>
							<label for="atimezone">Timezone</label>
							<select id="atimezone" name="atimezone">
								<option value="default">System Default</option>
	<?php $o=array(
		'Australia/Perth'      => "(GMT+08:00) Perth",
	  'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
	  'Australia/Darwin'     => "(GMT+09:30) Darwin",
	  'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
	  'Australia/Canberra'   => "(GMT+10:00) Canberra",
	  'Australia/Hobart'     => "(GMT+10:00) Hobart",
	  'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
	  'Australia/Sydney'     => "(GMT+10:00) Sydney"
	);
	foreach($o as$tz=>$label)
		echo'<option value="'.$tz.'">'.$label.'</option>';?>
							</select>
							<div class="row mt-4">
								<button type="submit" aria-label="Go to Next Step">Next</button>
							</div>
						</form>
					</div>
<?php }?>
				<div class="d-none" id="step4">
					<div class="alert alert-success text-center" role="alert">Installation Complete!<br>Website is Ready to use!</div>
					<div class="alert alert-info text-center" role="alert">NOTE: Website is currently in Maintenance Mode!</div>
				</div>
				<footer class="footer mt-5 small text-center">
					AuroraCMS Source is hosted on <a href="https://github.com/DiemenDesign/AuroraCMS">GitHub</a><br> and is <a href="https://github.com/DiemenDesign/AuroraCMS/blob/master/LICENSE">MIT Licensed</a>.<br><a href="https://github.com/DiemenDesign/AuroraCMS/issues">Report an Issue.</a>
				</footer>
			</div>
		</main>
		<iframe class="hidden" id="sp" name="sp"></iframe>
		<div class="page-block" id="block">
			<div class="spinner">
				<div class="sk-chase">
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
					<div class="sk-chase-dot"></div>
				</div>
			</div>
		</div>
		<script src="core/js/jquery/jquery.min.js"></script>
		<script src="core/js/aurora.min.js"></script>
		<script>
			function isValid(){
				$('#block').addClass('d-block');
			}
		</script>
	</body>
</html>
