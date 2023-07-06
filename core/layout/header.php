<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Header
 * @package    core/layout/header.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.2.26
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */?>
<header id="back-to-top" class="aurora">
  <nav>
    <ul class="nav-left">
      <li>
        <button class="btn btn-ghost nav-toggle" type="button" aria-label="Show/Hide Sidebar" aria-expanded="true">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>
      </li>
      <li>
        <a class="brand" href="<?= URL.$settings['system']['admin'];?>/">
          <svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50"><path d="m 192.25054,47.700364 h 0.80439 v -3.815139 c 0.36186,-0.293636 0.79423,-0.45519 1.2568,-0.45519 0.77415,0 1.19648,0.445366 1.19648,1.234635 v 3.035913 h 0.80432 v -3.197794 c 0,-0.20249 -0.0218,-0.384784 -0.0703,-0.556598 0.37222,-0.334025 0.83451,-0.516321 1.32715,-0.516321 0.77419,0 1.19648,0.445367 1.19648,1.234636 v 3.035913 h 0.80438 v -3.197795 c 0,-1.082851 -0.7038,-1.781137 -1.77966,-1.781137 -0.64348,0 -1.27694,0.263073 -1.76961,0.728632 -0.30183,-0.465559 -0.81439,-0.728632 -1.47796,-0.728632 -0.55299,0 -1.09595,0.19212 -1.5484,0.526144 L 192.8134,42.82246 h -0.56304 z m -3.12695,0.101518 c 0.55305,0 1.15631,-0.13154 1.58864,-0.364589 l -0.18121,-0.586945 c -0.37222,0.182295 -0.84455,0.293636 -1.26684,0.293636 -1.0256,0 -1.66908,-0.61729 -1.7897,-1.659643 h 3.37828 c 0.0218,-0.151731 0.0383,-0.505949 0.0383,-0.698287 0,-1.224484 -0.80439,-2.064402 -2.00088,-2.064402 -1.34728,0 -2.26224,1.062547 -2.26224,2.560309 0,1.558454 0.95518,2.519812 2.49349,2.519812 z m -0.29145,-4.391987 c 0.82447,0 1.30711,0.536514 1.30711,1.467361 h -2.67449 c 0.0705,-0.951206 0.553,-1.467361 1.36738,-1.467361 z m -3.92119,4.341391 c 0.33184,0 0.66358,-0.08078 0.89483,-0.182294 l -0.1812,-0.586999 c -0.15065,0.07095 -0.37224,0.111338 -0.54307,0.111338 -0.50267,0 -0.83452,-0.323654 -0.83452,-0.809572 v -2.782938 h 1.3272 v -0.677983 h -1.3272 V 41.39592 h -0.80434 v 1.426918 h -0.65353 v 0.677983 h 0.65353 v 2.89428 c 0,0.809573 0.58314,1.356019 1.46798,1.356019 z m -4.78594,0.04913 c 1.19649,0 1.93047,-0.566696 1.93047,-1.467362 0,-1.791179 -2.89571,-1.123293 -2.89571,-2.22634 0,-0.425171 0.45246,-0.698285 1.17641,-0.698285 0.41208,0 0.89482,0.09115 1.30706,0.232508 l 0.19103,-0.657789 c -0.41208,-0.171924 -0.90493,-0.263071 -1.4177,-0.263071 -1.2568,0 -2.06113,0.556543 -2.06113,1.477513 0,1.750682 2.88561,1.02205 2.88561,2.216188 0,0.445365 -0.39188,0.698285 -1.05568,0.698285 -0.51304,0 -1.19653,-0.141909 -1.70931,-0.364588 l -0.19102,0.657787 c 0.553,0.253247 1.22667,0.394608 1.83997,0.394608 z m -5.98237,2.094803 h 0.8546 l 0.80438,-2.195992 1.8902,-4.877743 h -0.80434 l -1.45786,4.088419 -1.42773,-4.088419 h -0.8949 l 1.91039,4.877743 z m -4.24299,-2.094803 c 1.55846,0 2.57396,-0.799476 2.57396,-2.034057 0,-2.489521 -3.9112,-1.497762 -3.9112,-3.309191 0,-0.738729 0.59322,-1.143542 1.65899,-1.143542 0.59321,0 1.23671,0.121158 1.73939,0.334025 l 0.2516,-0.657789 c -0.59323,-0.263074 -1.26683,-0.40498 -1.93047,-0.40498 -1.55844,0 -2.57394,0.779172 -2.57394,2.003711 0,2.408471 3.90115,1.507804 3.90115,3.299039 0,0.708383 -0.60326,1.163737 -1.65898,1.163737 -0.63346,0 -1.41771,-0.171924 -2.10142,-0.455191 l -0.25107,0.657789 c 0.77421,0.354219 1.55846,0.546447 2.30249,0.546447 z m -6.2337,-0.04913 c 0.33184,0 0.66357,-0.08078 0.89482,-0.182294 l -0.1812,-0.586999 c -0.15064,0.07095 -0.37222,0.111338 -0.54306,0.111338 -0.50268,0 -0.83451,-0.323654 -0.83451,-0.809572 v -2.782938 h 1.32719 V 42.822838 H 163.002 V 41.39592 h -0.80434 v 1.426918 h -0.65359 v 0.677983 h 0.65359 v 2.89428 c 0,0.809573 0.58312,1.356019 1.46796,1.356019 z m -7.28954,-0.04913 h 0.80438 v -3.815141 c 0.37224,-0.293635 0.81444,-0.455189 1.28699,-0.455189 0.78424,0 1.21656,0.445365 1.21656,1.234636 v 3.035912 h 0.80433 v -3.197849 c 0,-1.082796 -0.71383,-1.781083 -1.79975,-1.781083 -0.55293,0 -1.10593,0.192118 -1.56849,0.536514 l -0.18121,-0.434997 h -0.56303 z m -3.1269,0.101518 c 0.553,0 1.15626,-0.13154 1.58859,-0.364589 l -0.18121,-0.586945 c -0.37224,0.182295 -0.84456,0.293637 -1.26684,0.293637 -1.02554,0 -1.66903,-0.617346 -1.7897,-1.659644 h 3.37828 c 0.0218,-0.151731 0.0383,-0.505949 0.0383,-0.698287 0,-1.224483 -0.80433,-2.064457 -2.00082,-2.064457 -1.34729,0 -2.26226,1.062602 -2.26226,2.560309 0,1.558455 0.9552,2.519867 2.49351,2.519867 z m -0.29145,-4.391987 c 0.82442,0 1.30706,0.536514 1.30706,1.467361 h -2.67449 c 0.0705,-0.951259 0.553,-1.467361 1.36743,-1.467361 z m -10.78845,4.290743 h 0.80434 v -3.81514 c 0.36185,-0.293636 0.79429,-0.45519 1.25684,-0.45519 0.77416,0 1.19643,0.445366 1.19643,1.234581 v 3.035912 h 0.80439 v -3.197788 c 0,-0.202488 -0.0218,-0.384784 -0.0705,-0.556599 0.37224,-0.334024 0.83452,-0.516318 1.32721,-0.516318 0.7742,0 1.19649,0.445365 1.19649,1.234581 v 3.035912 h 0.80437 v -3.197794 c 0,-1.082851 -0.70384,-1.781138 -1.77966,-1.781138 -0.64348,0 -1.27692,0.263072 -1.76961,0.728633 -0.30183,-0.465561 -0.81439,-0.728633 -1.47801,-0.728633 -0.55294,0 -1.09589,0.192119 -1.54835,0.526145 l -0.1812,-0.425174 h -0.56299 z m -3.12694,0.101519 c 0.55299,0 1.15626,-0.131541 1.58863,-0.36459 l -0.18121,-0.586944 c -0.37222,0.182294 -0.84461,0.293636 -1.26688,0.293636 -1.02554,0 -1.66904,-0.617291 -1.78966,-1.659644 h 3.3783 c 0.0218,-0.15173 0.0381,-0.505949 0.0381,-0.698286 0,-1.224483 -0.80438,-2.064403 -2.00081,-2.064403 -1.34735,0 -2.26226,1.062547 -2.26226,2.560309 0,1.558454 0.95514,2.519812 2.49346,2.519812 z m -0.29146,-4.391988 c 0.82447,0 1.30706,0.536514 1.30706,1.467361 h -2.67448 c 0.0703,-0.951259 0.55299,-1.467361 1.36742,-1.467361 z m -5.76122,4.391988 c 0.56304,0 1.04568,-0.19212 1.40765,-0.536514 v 0.414801 c 0,1.082798 -0.48247,1.619147 -1.44787,1.619147 -0.43227,0 -0.95514,-0.111338 -1.40759,-0.303461 l -0.17084,0.617292 c 0.50267,0.252701 1.0155,0.384782 1.51823,0.384782 1.39756,0 2.31253,-0.971508 2.31253,-2.43887 v -4.736054 h -0.56305 l -0.15064,0.414801 c -0.35203,-0.334024 -0.83456,-0.516318 -1.39761,-0.516318 -1.34729,0 -2.26224,1.022104 -2.26224,2.570406 0,1.507859 0.86469,2.509715 2.1617,2.509715 z m -1.35733,-2.590655 c 0,-1.072701 0.56305,-1.781083 1.4981,-1.781083 0.54306,0 0.97527,0.222682 1.26688,0.607193 v 2.499563 c -0.27125,0.354218 -0.68371,0.556598 -1.1764,0.556598 -0.96523,0 -1.58858,-0.758978 -1.58858,-1.882271 z m -4.36366,2.590655 c 0.61337,0 1.13618,-0.20249 1.52828,-0.556599 l 0.19102,0.45519 h 0.56305 v -3.167502 c 0,-1.163793 -0.68372,-1.811428 -1.95056,-1.811428 -0.63344,0 -1.31715,0.171924 -1.83997,0.465559 l 0.20085,0.597043 c 0.50268,-0.222684 1.00546,-0.334025 1.47801,-0.334025 0.86469,0 1.30706,0.364043 1.30706,1.082796 v 0.323655 c -2.17176,0.02183 -3.11685,0.47593 -3.11685,1.517956 0,0.870319 0.64348,1.426917 1.63884,1.426917 z m -0.83452,-1.517956 c 0,-0.607195 0.68372,-0.860223 2.31253,-0.870321 v 1.194138 c -0.30183,0.303461 -0.74403,0.485755 -1.24676,0.485755 -0.64348,0 -1.06577,-0.323654 -1.06577,-0.809572 z m -6.14326,1.416765 h 0.80433 v -3.815194 c 0.37223,-0.293635 0.81443,-0.45519 1.28703,-0.45519 0.78419,0 1.21658,0.445366 1.21658,1.234581 v 3.035968 h 0.80433 v -3.19785 c 0,-1.082796 -0.71384,-1.781082 -1.79975,-1.781082 -0.55299,0 -1.106,0.192118 -1.56849,0.536514 l -0.1812,-0.434997 H 120.291 Z m -3.87097,0.10097 c 0.61335,0 1.13617,-0.20249 1.52832,-0.5566 l 0.19104,0.455191 h 0.56308 v -3.167502 c 0,-1.163738 -0.68371,-1.81143 -1.95055,-1.81143 -0.63344,0 -1.31716,0.171925 -1.83997,0.465561 l 0.20086,0.597096 c 0.50267,-0.222682 1.00545,-0.334024 1.47799,-0.334024 0.8647,0 1.30706,0.364043 1.30706,1.082797 v 0.323653 c -2.17175,0.02183 -3.11684,0.475385 -3.11684,1.517958 0,0.870264 0.64348,1.426862 1.63885,1.426862 z m -0.83452,-1.517956 c 0,-0.607195 0.68371,-0.860169 2.31253,-0.870321 v 1.194138 c -0.30183,0.303461 -0.74403,0.485755 -1.24676,0.485755 -0.64349,0 -1.06577,-0.323654 -1.06577,-0.809572 z m -9.10932,1.416765 h 0.7943 v -5.515281 l 2.26224,4.422333 h 0.65353 l 2.2824,-4.513425 v 5.606373 h 0.79429 v -7.02314 h -0.82448 l -2.5538,5.029581 -2.55388,-5.029581 h -0.8546 z m -4.4642,0.04913 c 0.33185,0 0.66364,-0.08078 0.89488,-0.182295 l -0.1812,-0.586945 c -0.15063,0.07095 -0.37223,0.111338 -0.54306,0.111338 -0.50267,0 -0.83452,-0.323655 -0.83452,-0.809573 v -2.782938 h 1.32721 v -0.678037 h -1.32721 v -1.426864 h -0.80433 v 1.426864 h -0.653532 v 0.678037 h 0.653532 v 2.894279 c 0,0.809573 0.58313,1.356019 1.46791,1.356019 z m -7.289429,-0.04913 h 0.804335 v -3.815132 c 0.372225,-0.293635 0.814429,-0.45519 1.286973,-0.45519 0.784248,0 1.216633,0.445366 1.216633,1.234635 v 3.035912 h 0.804321 v -3.197848 c 0,-1.082797 -0.713893,-1.781082 -1.799736,-1.781082 -0.553008,0 -1.106002,0.192118 -1.568496,0.536513 l -0.181217,-0.434993 h -0.56303 z m -3.126956,0.10097 c 0.553009,0 1.156271,-0.131541 1.588583,-0.364043 l -0.181202,-0.586832 c -0.372225,0.182294 -0.84461,0.293636 -1.266887,0.293636 -1.025538,0 -1.669032,-0.617291 -1.789713,-1.659644 h 3.378354 c 0.02181,-0.151731 0.03827,-0.505949 0.03827,-0.698285 0,-1.224484 -0.804335,-2.064404 -2.000808,-2.064404 -1.347293,0 -2.262258,1.062548 -2.262258,2.560309 0,1.558455 0.955183,2.519812 2.493497,2.519812 z M 91.304382,43.41152 c 0.824466,0 1.307061,0.536515 1.307061,1.467362 h -2.674498 c 0.07047,-0.951261 0.553008,-1.467362 1.367437,-1.467362 z m -3.921239,4.341337 c 0.331833,0 0.663624,-0.08078 0.89482,-0.182294 L 88.09731,46.983622 c -0.150646,0.07095 -0.372239,0.111338 -0.543073,0.111338 -0.502668,0 -0.834517,-0.323654 -0.834517,-0.809572 v -2.782927 h 1.327206 V 42.824423 H 86.71972 v -1.426754 h -0.804378 v 1.426919 h -0.65353 v 0.678036 h 0.65353 v 2.894226 c 0,0.809573 0.583175,1.356074 1.467959,1.356074 z m -7.2895,-0.04913 h 0.804392 v -3.815139 c 0.372239,-0.293637 0.814372,-0.455191 1.286974,-0.455191 0.784248,0 1.216575,0.445365 1.216575,1.234636 v 3.035857 h 0.804335 v -3.197849 c 0,-1.082741 -0.713835,-1.781028 -1.79975,-1.781028 -0.552994,0 -1.105944,0.19212 -1.568496,0.536514 L 80.656471,42.82653 h -0.563088 z m -3.740254,0.101518 c 1.427742,0 2.392975,-1.042298 2.392975,-2.600807 0,-1.507804 -0.89482,-2.479314 -2.272294,-2.479314 -1.427742,0 -2.382925,1.032257 -2.382925,2.590655 0,1.50786 0.884828,2.489466 2.262244,2.489466 z m 0.11076,-0.708383 c -0.935052,0 -1.568496,-0.758978 -1.568496,-1.882272 0,-1.082797 0.573125,-1.781082 1.46796,-1.781082 0.935052,0 1.578532,0.76913 1.578532,1.882271 0,1.072699 -0.583117,1.781083 -1.477996,1.781083 z m -5.399307,0.708383 c 0.673675,0 1.377473,-0.15173 2.041098,-0.445365 l -0.191023,-0.617291 c -0.502682,0.202488 -1.126132,0.323654 -1.658996,0.323654 -1.669075,0 -2.775077,-1.194138 -2.775077,-2.985318 0,-1.710294 1.015559,-2.752592 2.694628,-2.752592 0.563045,0 1.196488,0.121173 1.729351,0.323655 l 0.241233,-0.627442 c -0.513036,-0.273443 -1.236705,-0.434997 -1.920417,-0.434997 -2.161721,0 -3.5995,1.477514 -3.5995,3.683604 0,2.115052 1.377474,3.531819 3.438601,3.531819 z M 59.934623,47.703733 h 0.804335 v -3.815139 c 0.372225,-0.293637 0.814429,-0.455191 1.286974,-0.455191 0.784248,0 1.216575,0.445365 1.216575,1.234636 v 3.035857 h 0.804378 v -3.197849 c 0,-1.082741 -0.713892,-1.781028 -1.79975,-1.781028 -0.552994,0 -1.105987,0.19212 -1.568496,0.536514 l -0.181202,-0.434997 h -0.56303 z m -3.870971,0.101518 c 0.613298,0 1.136111,-0.202489 1.528264,-0.556598 l 0.191036,0.45519 h 0.563031 V 44.53634 c 0,-1.163792 -0.683712,-1.811428 -1.950555,-1.811428 -0.633443,0 -1.317097,0.171925 -1.839967,0.46556 l 0.200856,0.597042 c 0.502668,-0.222683 1.005451,-0.334024 1.477996,-0.334024 0.864697,0 1.307118,0.364588 1.307118,1.082796 v 0.323654 c -2.171758,0.02183 -3.116905,0.475931 -3.116905,1.517956 0,0.87032 0.643494,1.426919 1.638909,1.426919 z m -0.834516,-1.517956 c 0,-0.607194 0.683711,-0.860169 2.312512,-0.87032 v 1.194138 c -0.301826,0.303461 -0.744016,0.485755 -1.246742,0.485755 -0.643494,0 -1.06577,-0.323655 -1.06577,-0.809573 z m -2.543824,-4.604518 c 0.361856,0 0.573124,-0.212313 0.573124,-0.576793 0,-0.364043 -0.21121,-0.576848 -0.573124,-0.576848 -0.361871,0 -0.573095,0.212314 -0.573095,0.576848 0,0.364589 0.211224,0.576793 0.573095,0.576793 z m -0.412081,6.021284 h 0.804335 V 42.82632 h -0.804335 z m -1.699214,0.06058 c 0.261436,0 0.573081,-0.06058 0.764103,-0.162101 l -0.181202,-0.56675 c -0.12058,0.04913 -0.231413,0.08078 -0.352036,0.08078 -0.341654,0 -0.522857,-0.233054 -0.522857,-0.607193 V 40.224966 H 49.47769 v 6.3856 c 0,0.698232 0.43227,1.153641 1.095952,1.153641 z m -4.936741,0.03821 c 0.613312,0 1.136168,-0.20249 1.528278,-0.556544 l 0.191022,0.45519 h 0.563088 v -3.167502 c 0,-1.163738 -0.683711,-1.81143 -1.950598,-1.81143 -0.633443,0 -1.317169,0.171926 -1.839982,0.465561 l 0.201405,0.597096 c 0.502668,-0.222682 1.005408,-0.334024 1.477996,-0.334024 0.864697,0 1.307075,0.364589 1.307075,1.082797 v 0.323654 c -2.171772,0.02184 -3.116919,0.475384 -3.116919,1.517957 0,0.870319 0.643494,1.426862 1.638909,1.426862 z m -0.834517,-1.517956 c 0,-0.607193 0.683712,-0.860169 2.312527,-0.870266 v 1.194083 c -0.301826,0.303461 -0.744031,0.485755 -1.246756,0.485755 -0.643494,0 -1.065771,-0.323654 -1.065771,-0.809572 z m -4.232943,1.416767 h 0.804393 v -3.48117 c 0.311646,-0.425173 0.804335,-0.678038 1.347278,-0.678038 0.191037,0 0.372239,0.03275 0.532705,0.09115 l 0.200842,-0.748826 c -0.211225,-0.07095 -0.422435,-0.111338 -0.64348,-0.111338 -0.583189,0 -1.126089,0.283265 -1.488046,0.758978 l -0.09054,-0.708383 h -0.663639 z m -2.04104,0.04913 c 0.331834,0 0.663624,-0.08078 0.894878,-0.182294 l -0.181202,-0.586944 c -0.150632,0.07095 -0.372225,0.111338 -0.543059,0.111338 -0.502682,0 -0.834516,-0.323655 -0.834516,-0.809573 v -2.782938 h 1.327206 V 42.822399 H 37.864877 V 41.39548 h -0.804336 v 1.426919 h -0.653532 v 0.677982 h 0.653532 v 2.894279 c 0,0.809573 0.583118,1.356074 1.467903,1.356074 z m -4.785887,0.04913 c 1.196485,0 1.930466,-0.566695 1.930466,-1.467361 0,-1.791179 -2.895698,-1.123294 -2.895698,-2.22634 0,-0.425171 0.452462,-0.698285 1.176344,-0.698285 0.412074,0 0.894882,0.09115 1.307117,0.233052 l 0.191028,-0.657787 c -0.412072,-0.171925 -0.904923,-0.263072 -1.417694,-0.263072 -1.256795,0 -2.061129,0.556599 -2.061129,1.477512 0,1.750682 2.885602,1.022105 2.885602,2.216188 0,0.445367 -0.391879,0.698287 -1.055725,0.698287 -0.513044,0 -1.196485,-0.14191 -1.709256,-0.364589 l -0.191028,0.657788 c 0.552997,0.252701 1.226613,0.394607 1.839973,0.394607 z M 27.388454,42.820991 H 26.58412 v 3.197849 c 0,1.082851 0.713842,1.781082 1.749482,1.781082 0.532693,0 1.075809,-0.192118 1.528271,-0.526142 l 0.181204,0.425171 h 0.563039 v -4.877749 h -0.804334 v 3.825292 c -0.352036,0.283266 -0.794346,0.445366 -1.226668,0.445366 -0.754065,0 -1.186442,-0.445366 -1.186442,-1.234581 z m -8.033488,4.877742 h 0.874746 l 0.74405,-2.084653 h 2.905742 l 0.693755,2.084653 h 0.935051 l -2.45328,-7.02314 h -1.085908 z m 1.870133,-2.813285 1.23671,-3.49132 1.166302,3.49132 z m -6.696242,2.914474 c 0.552989,0 1.156254,-0.13154 1.588597,-0.364588 L 15.93647,46.848382 c -0.372013,0.182294 -0.844564,0.293636 -1.266854,0.293636 -1.025554,0 -1.669032,-0.617344 -1.789701,-1.659699 h 3.37831 c 0.02019,-0.151729 0.04039,-0.505949 0.04039,-0.69823 0,-1.224484 -0.804365,-2.064459 -2.00084,-2.064459 -1.347293,0 -2.262258,1.062603 -2.262258,2.560311 0,1.558453 0.955184,2.519811 2.493516,2.519811 z m -0.291618,-4.391986 c 0.824468,0 1.307089,0.536513 1.307089,1.467415 h -2.674499 c 0.07035,-0.951261 0.552996,-1.467415 1.36741,-1.467415 z m -7.5810592,4.290797 h 0.8043654 v -3.774588 c 0.3720123,-0.334024 0.8143988,-0.495579 1.286962,-0.495579 0.7842577,0 1.2166027,0.445367 1.2166027,1.234581 v 3.035913 h 0.8043491 v -3.197848 c 0,-1.082798 -0.713862,-1.781029 -1.7997485,-1.781029 -0.5328562,0 -1.0657731,0.171925 -1.5081653,0.51632 V 40.220777 H 6.6561798 Z m -4.2429853,0 H 3.2477151 V 41.404218 H 5.5803473 V 40.675586 H 0.09061025 v 0.728632 H 2.4131945 Z M 30.290964,30.534338 C 27.592459,29.058134 27.382549,28.184922 27.221758,17.768211 L 27.074393,8.2234584 h 2.546721 2.546664 v 7.8426466 c 0,8.570461 0.375504,10.205763 2.465942,10.733761 1.469763,0.371139 3.198608,-0.313831 4.114786,-1.630116 0.60228,-0.865518 0.731626,-2.456283 0.731626,-8.998852 V 8.2234584 h 2.513585 2.513657 V 19.493187 30.762914 h -2.513657 -2.513585 v -1.839918 c 0,-1.93243 -0.652924,-2.47271 -1.136169,-0.940235 -0.156104,0.495033 -0.905528,1.426373 -1.665379,2.069969 -1.588583,1.345378 -4.418622,1.558783 -6.38762,0.48139 z m 39.538804,-0.01097 C 67.862679,29.654576 65.664061,26.99084 65.064611,24.750146 64.461739,22.496734 64.42828,16.366837 65.008441,14.432988 66.361957,9.9202177 68.65636,8.1053497 73.34553,7.8386768 c 2.729171,-0.1550055 3.386903,-0.027293 5.157627,1.0192118 2.659307,1.5686054 3.787302,3.5071484 4.416818,7.5908174 0.636605,4.129897 -0.02181,8.705817 -1.608945,11.139939 -2.048131,3.145998 -7.720065,4.59584 -11.481114,2.934723 z m 6.703682,-4.627387 c 0.956339,-1.024397 1.130119,-1.719136 1.269833,-5.077338 0.283269,-6.804223 -0.656361,-8.915564 -3.966916,-8.915564 -2.661992,0 -3.714275,1.403012 -4.046831,5.39548 -0.365683,4.39286 0.133721,7.347449 1.469375,8.691953 1.502357,1.512061 3.813237,1.47069 5.274539,-0.09443 z m 27.73523,4.606592 c -1.73436,-0.947167 -2.6348,-2.939416 -2.62695,-5.811974 0.0116,-4.684148 2.03537,-6.406231 7.98215,-6.796908 3.41868,-0.224321 3.67548,-0.313285 3.81733,-1.32251 0.40006,-2.844829 -1.00464,-4.668102 -3.5965,-4.668102 -1.3212,0 -2.17733,0.351489 -3.32393,1.364807 l -1.54442,1.364807 -1.27301,-1.337299 c -1.5518,-1.630281 -1.34533,-2.327529 1.18923,-4.0156638 1.71439,-1.1419596 2.34614,-1.2865403 5.621,-1.2865403 3.1621,0 3.90928,0.1577333 5.22661,1.1033176 2.40601,1.7272145 2.80461,3.2682015 2.80461,10.8416095 v 6.68464 h 1.14255 c 1.04945,0 1.14257,0.16865 1.14257,2.069971 v 2.069914 h -2.2235 c -2.49466,0 -4.63181,-1.288832 -4.63181,-2.793308 0,-1.241567 -0.66881,-1.104299 -1.28839,0.264709 -1.17756,2.601245 -5.61757,3.797948 -8.41759,2.268803 z m 7.1204,-3.470582 c 1.34974,-0.618927 2.12848,-2.207127 2.12848,-4.340791 v -1.588305 h -2.59186 c -3.21379,0 -4.26345,0.803896 -4.26345,3.265144 0,2.663957 2.12073,3.859185 4.72683,2.66401 z m 20.66264,3.856238 c -1.71607,-0.439363 -4.36818,-2.44793 -5.48434,-4.153366 -2.29205,-3.502074 -3.24892,-11.451532 -2.0537,-17.0609611 0.77409,-3.6327916 3.02429,-6.9619028 5.60545,-8.2931986 4.17203,-2.1517302 9.38915,-1.7534645 12.44864,0.950224 1.36518,1.2064728 2.94127,3.4654499 2.94127,4.2156956 0,0.115165 -0.95034,0.7697307 -2.11194,1.4548632 -1.70265,1.0043119 -2.18841,1.124222 -2.50661,0.6187093 -0.21722,-0.3449403 -0.39788,-0.849689 -0.4017,-1.1218205 -0.004,-0.2723496 -0.52614,-0.985809 -1.1609,-1.5858523 -0.91872,-0.8687378 -1.67072,-1.0959499 -3.69042,-1.1151619 -2.34713,-0.021834 -2.65058,0.1009697 -4.06277,1.6511836 -1.829,2.0076404 -2.26733,4.5209577 -1.97456,11.3223967 0.28545,6.634919 1.87201,8.851816 6.33446,8.851816 1.5447,0 2.16357,-0.279445 3.33609,-1.506057 0.79178,-0.828294 1.65446,-1.893898 1.91705,-2.368028 0.45955,-0.829822 0.54907,-0.820871 2.39585,0.24124 2.15092,1.236764 2.18781,1.328076 1.26324,3.127551 -0.96246,1.873377 -3.62105,4.061946 -5.60933,4.617726 -1.7486,0.488484 -5.55822,0.569972 -7.18578,0.153368 z m 53.85132,-0.409347 c -1.03428,-0.368955 -2.74517,-1.416166 -3.80205,-2.326656 l -1.92151,-1.655441 1.72847,-1.781573 1.72847,-1.781629 1.11074,1.205709 c 2.74768,2.982478 7.9654,3.339428 9.99138,0.683494 0.88243,-1.156806 0.72159,-4.503109 -0.26417,-5.49525 -0.46775,-0.470472 -2.3569,-1.198013 -4.19862,-1.616636 -6.37261,-1.448476 -9.08579,-4.154895 -9.10899,-9.086451 -0.0218,-4.2964186 2.24397,-7.1636263 6.50944,-8.2427658 4.25981,-1.0776116 9.91186,0.3443945 11.84887,2.9811144 0.74943,1.0201395 0.72525,1.0988973 -0.78975,2.576847 -1.46301,1.4272452 -1.61561,1.4764766 -2.38933,0.7716946 -1.239,-1.1285341 -3.99289,-2.1678847 -5.74402,-2.1678847 -2.4369,0 -3.96102,1.4898484 -3.96102,3.8719561 0,2.5944764 0.87997,3.3373544 5.3046,4.4782224 4.33435,1.117563 5.66833,1.785394 7.18137,3.595185 2.42031,2.895044 2.03105,9.181091 -0.73563,11.880087 -2.76677,2.69905 -8.245,3.624713 -12.48825,2.110032 z M -0.72700881,30.417265 C -0.72051047,30.22733 1.2075772,23.448432 3.5590286,15.352593 L 7.8343857,0.6329681 11.317711,0.498698 c 1.915828,-0.074225 3.483326,-0.054586 3.483326,0.043669 0,0.1659213 7.920285,27.605714 8.485397,29.397767 0.229779,0.727977 -0.05512,0.823163 -2.46247,0.823163 H 18.101898 L 17.808534,29.189452 C 17.6472,28.323827 17.205025,26.564358 16.82593,25.279508 L 16.136672,22.943465 H 11.184265 6.2318703 l -0.277154,1.394879 C 5.802277,25.10551 5.3506557,26.864979 4.9511308,28.248234 L 4.224682,30.763297 H 1.7435021 c -1.36466041,0 -2.47638396,-0.155005 -2.47050514,-0.34494 z M 14.694765,17.767557 C 14.385083,16.894945 12.126886,8.168006 11.838113,6.7278262 11.456877,4.8265592 10.830221,5.2037572 10.481503,7.5443304 10.310943,8.6891291 9.6749319,11.328305 9.068148,13.40919 c -0.6068,2.080887 -1.1075646,4.042135 -1.112847,4.358367 -0.00607,0.410435 0.9852905,0.574992 3.466961,0.574992 2.585412,0 3.424245,-0.147364 3.272503,-0.574992 z m 35.753878,1.724975 V 8.2228043 h 2.513642 2.513585 v 2.2999127 c 0,2.454588 0.621544,3.075701 1.111504,1.110795 0.451923,-1.8114285 2.426262,-3.4107077 4.211008,-3.4107077 h 1.532798 v 2.4769127 2.476967 l -2.505512,0.314921 c -4.080723,0.513045 -4.349798,1.130009 -4.349798,9.972709 v 7.297783 h -2.513585 -2.513642 z m 37.018704,0 V 8.2228043 h 2.742167 2.742124 v 2.3270927 c 0,1.434232 0.175195,2.217989 0.456819,2.042789 0.251615,-0.156096 0.456832,-0.667666 0.456832,-1.136229 0,-1.232671 2.566915,-3.2336527 4.148234,-3.2336527 1.311325,0 1.335985,0.043669 1.335985,2.4776767 v 2.477731 l -2.170833,0.318196 c -4.266013,0.625042 -4.227427,0.538698 -4.227427,9.456718 V 30.76237 H 90.209139 87.466971 Z M 150.07928,15.582589 V 0.4029718 h 2.97947 2.97949 l 2.22065,4.7744224 c 1.22138,2.6259685 2.67308,6.1426698 3.2259,7.8148658 0.5529,1.672198 1.17784,3.147691 1.38877,3.2789 0.21123,0.13154 0.736,-0.849744 1.16686,-2.179948 0.43062,-1.330203 1.91108,-4.9542061 3.28942,-8.0533761 l 2.50607,-5.6348641 h 2.9183 2.91823 V 15.582589 30.76226 h -2.54929 -2.54934 l 0.1501,-11.27011 c 0.0825,-6.198558 0.0218,-11.2699465 -0.13098,-11.2697284 -0.15446,2.18e-4 -0.64905,0.9835721 -1.09923,2.1852964 -0.45027,1.201724 -2.11308,4.966541 -3.69522,8.36617 l -2.8766,6.181257 -2.57422,-5.491267 c -1.41573,-3.020138 -3.12286,-6.836697 -3.79347,-8.481169 l -1.2193,-2.9899559 -0.12232,11.3847809 -0.12231,11.384726 h -2.50569 -2.50561 z"/></svg>
        </a>
      </li>
    </ul>
    <ul class="ml-auto mt-3">
      <li class="text-center px-3" data-tooltip="bottom" aria-label="Search">
        <a href="<?= URL.$settings['system']['admin'].'/search';?>"><i class="i i-3x">search</i></a>
      </li>
      <li class="badge text-center" id="nav-stat" aria-label="Notifications" data-badge="<?=$navStat>0?$navStat:'';?>">
        <input class="d-none" id="notification-checkbox" type="checkbox">
        <label class="m-0" for="notification-checkbox"><i class="i i-3x">bell</i></label>
        <ul class="p-0" id="nav-stat-list">
          <li class="dropdown-heading py-2">Notifications</li>
          <?=($nc['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/comments"><span class="badger badge-primary mr-2">'.$nc['cnt'].'</span>Comments</a></li>':'').
          ($nr['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/reviews"><span class="badger badge-primary mr-2">'.$nr['cnt'].'</span>Reviews</a></li>':'').
          ($nm['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/messages"><span class="badger badge-primary mr-2">'.$nm['cnt'].'</span>Messages</a></li>':'').
          ($po['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/orders/pending"><span class="badger badge-primary mr-2">'.$po['cnt'].'</span>Orders</a></li>':'').
          ($nb['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/bookings"><span class="badger badge-primary mr-2">'.$nb['cnt'].'</span>Bookings</a></li>':'').
          ($nu['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/accounts"><span class="badger badge-primary mr-2">'.$nu['cnt'].'</span>Users</a></li>':'').
          ($nt['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/content/type/testimonials"><span class="badger badge-primary mr-2">'.$nt['cnt'].'</span>Testimonials</a></li>':'').
          ($nou['cnt']>0?'<li><a href="'.URL.$settings['system']['admin'].'/accounts"><span class="badger badge-primary mr-2">'.$nou['cnt'].'</span>Active Users</a></li>':'');?>
        </ul>
      </li>
      <li data-tooltip="bottom" aria-label="View Site">
        <a href="<?= URL;?>"><i class="i i-3x">browser-general</i></a>
      </li>
      <li class="text-center ml-3" id="nav-accounts" data-tooltip="bottom" aria-label="Account Settings">
        <input class="d-none" id="header-account-checkbox" type="checkbox">
        <label class="m-0" for="header-account-checkbox">
          <span class="d-inline" id="account">
            <img class="img-avatar" src="<?php if($user['avatar']!=''&&file_exists('media/avatar/'.basename($user['avatar'])))echo'media/avatar/'.basename($user['avatar']);
              elseif($user['gravatar']!=''){
                if(stristr($user['gravatar'],'@')) echo'http://gravatar.com/avatar/'.md5($user['gravatar']);
              elseif(stristr($user['gravatar'],'gravatar.com/avatar/'))  echo$user['gravatar'];
              else echo ADMINNOAVATAR;
            }else echo ADMINNOAVATAR;?>" alt="<?=$user['username'];?>">
          </span>
        </label>
        <ul class="p-0" id="nav-account-list">
          <li class="text-center p-3" style="background:linear-gradient(0,rgba(28,28,28,.6),rgba(28,28,28,0)32.45%),radial-gradient(100% 100% at 0 100%,#3c164d 0,rgba(60,22,77,0)100%),radial-gradient(100% 100% at 100% 100%,#4d0119 0,rgba(77,1,25,0)100%),radial-gradient(100% 100% at 100% 0,#38004d 0,rgba(56,0,77,0)100%),radial-gradient(100% 100% at 0 0,#4d3c0d 0,rgba(77,60,13,0)100%);">
            <img class="img-avatar m-3" style="width:80px;height:80px;max-width:initial;max-height:80px;" src="<?php if($user['avatar']!=''&&file_exists('media/avatar/'.basename($user['avatar'])))echo'media/avatar/'.basename($user['avatar']);
              elseif($user['gravatar']!=''){
                if(stristr($user['gravatar'],'@')) echo'http://gravatar.com/avatar/'.md5($user['gravatar']);
              elseif(stristr($user['gravatar'],'gravatar.com/avatar/'))  echo$user['gravatar'];
              else echo ADMINNOAVATAR;
            }else echo ADMINNOAVATAR;?>" alt="<?=$user['username'];?>"><br>
            <span class="d-inline-block"><strong class="d-block"><?=$user['name']==''?$user['username']:$user['name'];?></strong>
              <small><?= ucwords(rank($user['rank']));?></small>
            </span>
          </li>
          <li><a class="p-2 px-3" href="<?= URL.$settings['system']['admin'].'/accounts/edit/'.$user['id'];?>">My Account</a></li>
          <li><a class="p-2 px-3" target="_blank" href="https://github.com/DiemenDesign/AuroraCMS/issues">Support</a></li>
          <li><a class="p-2 px-3" href="<?= URL.$settings['system']['admin'].'/logout';?>">Logout</a></li>
          <li class="dropdown-heading">&nbsp;</li>
          <li><a class="p-2 px-3" href="https://github.com/DiemenDesign/AuroraCMS">AuroraCMS Home Page</a></li>
          <li><a class="p-2 px-3" href="https://github.com/DiemenDesign/AuroraCMS/issues">Report an issue</a></li>
          <li><a class="p-2 px-3" href="https://github.com/DiemenDesign/AuroraCMS/wiki">Documentation</a></li>
        </ul>
      </li>
      <li data-tooltip="bottom" aria-label="Switch to Theme Mode">
        <button class="btn btn-ghost" onclick="toggleTheme();">
          <?php if(!isset($_COOKIE['admintheme'])){$_COOKIE['admintheme']='light';}?>
          <i class="i theme-mode<?=(isset($_COOKIE['admintheme'])&&$_COOKIE['admintheme']=='dark'?' d-none':'');?>">dark-mode</i>
          <i class="i theme-mode<?=(isset($_COOKIE['admintheme'])&&$_COOKIE['admintheme']=='light'?' d-none':'');?>">light-mode</i>
        </button>
      </li>
    </ul>
  </nav>
</header>
