<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - View - Meta Footer
 * @package    core/view/meta_footer.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.2.3
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */
if(preg_match('/<block include=[\"\']?meta_footer.html[\"\']?>/',$template)&&file_exists(THEME.'/meta_footer.html')){
  $footer=file_get_contents(THEME.'/meta_footer.html');
  $sb=$db->prepare("SELECT * FROM `".$prefix."menu` WHERE `file`='notification' AND `active`=1 LIMIT 1");
  $sb->execute();
  $rb=$sb->fetch(PDO::FETCH_ASSOC);
  $footer=preg_replace([
    '/<print theme>/',
    '/<lightbox>/',
    '/<carousel>/',
    '/<gdpr>/',
    '/<map>/',
    '/<g-recaptchascript>/',
    '/<countdownscript>/',
    '/<forum>/',
    '/<banner>/',
    '/<a11y>/'
  ],[
    THEME,
    stristr($content,'data-fancybox')?'<script defer async src="core/js/fancybox/fancybox.umd.js"></script>':'',
    isset($showCarousel)&&$showCarousel==true?'<script src="core/js/swiper/swiper-bundle.min.js"></script><script>var swiper=new Swiper(".auroraSwiper",{enable:true,direction:"'.($page['sliderDirection']==''?'horizontal':$page['sliderDirection']).'",effect:"'.($page['sliderEffect']==''?'slide':$page['sliderEffect']).'",loop:'.($page['sliderOptions'][1]==1?'true':'false').',speed:'.($page['sliderSpeed']==0?'300':$page['sliderSpeed']).',autoplay:{delay:'.($page['sliderAutoplayDelay']==0?'3000':$page['sliderAutoplayDelay']).',disableOnInteraction:'.($page['sliderOptions'][2]==1?'true':'false').',},'.($page['sliderOptions'][3]==1?'navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev",},':'').($page['sliderOptions'][4]==1?'pagination:{el:".swiper-pagination",},':'').($page['sliderOptions'][5]==1?'scrollbar:{el:".swiper-scrollbar",},':'').'});</script>':'',
    $config['options'][8]==1?'<link rel="stylesheet preload" type="text/css" href="core/js/gdpr/gdpr.css"><script src="core/js/gdpr/gdpr.js"></script><script>gdprCookieNotice({locale:`en`,timeout:500,expiration:30,domain:`'.getDomain(URL).'`,implicit:true,statement:`'.URL.'page/Privacy-Policy/`,performance:[`JSESSIONID`],analytics:[`ga`]});</script>':'',
    $config['options'][27]==1&&$config['geo_position']!=''&&$config['mapapikey']!=''&&$view=='contactus'?'<link rel="stylesheet preload" type="text/css" href="core/js/leaflet/leaflet.css"><script src="core/js/leaflet/leaflet.js"></script><script>var map=L.map("map").setView(['.$config['geo_position'].'],13);L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token='.$config['mapapikey'].'",{attribution:`Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>`,maxZoom:18,id:"mapbox/streets-v11",tileSize:512,zoomOffset:-1,accessToken:`'.$config['mapapikey'].'`}).addTo(map);var marker=L.marker(['.$config['geo_position'].'],{draggable:false}).addTo(map);'.($config['business']==''?'':'var popupHtml=`<strong>'.$config['business'].'</strong>'.($config['address']==''?'':'<br><small>'.$config['address'].'<br>'.$config['suburb'].', '.$config['city'].', '.$config['state'].', '.$config['postcode'].',<br>'.$config['country'].'</small>').'`;marker.bindPopup(popupHtml,{closeButton:false,closeOnClick:false,closeOnEscapeKey:false,autoClose:false}).openPopup();').'marker.off("click");</script>':'',
    stristr($content,'g-recaptcha')&&$config['reCaptchaClient']!=''&&$config['reCaptchaServer']!=''?'<script defer async src="https://www.google.com/recaptcha/api.js"></script><script>function resizeReCaptcha(){var width=$(".g-recaptcha" ).parent().width();if(width<302){var scale=width/302;}else{var scale=1;}$(".g-recaptcha").css("transform","scale("+scale+")");$(".g-recaptcha").css("-webkit-transform","scale("+scale+")");$(".g-recaptcha").css("transform-origin","0 0");$(".g-recaptcha").css("-webkit-transform-origin","0 0");};$(document).ready(function(){$(window).on("resize",function(){resizeReCaptcha();});resizeReCaptcha();});</script>':'',
    isset($showCountdown)&&$showCountdown==true?'<script>countdown();</script>':'',
    $view=='forum'&&(isset($_SESSION['uid'])&&$_SESSION['uid']>0)?'<Link rel="stylesheet" type="text/css" href="core/js/summernote/summernote.min.css" media="all">'.
    '<Link rel="stylesheet" type="text/css" href="core/js/summernote/forum.min.css" media="all"><script src="core/js/jquery/jquery.min.js"></script><script src="core/js/summernote/summernote.js"></script><script src="core/js/summernote/plugin/emoji/emoji.js"></script><script>$(document).ready(function(){$(".note").summernote({height:"250px",disableUpload:true,fileExplorer:"",emoji:{url:"'.URL.'core/images/emojis/",},popover:{image:[[`remove`,[`removeMedia`]],],link:[[`link`,[`linkDialogShow`,`unlink`]],],air:[]},toolbar:[[`font`,[`bold`,`italic`,`underline`,`clear`]],[`para`,[`ul`,`ol`]],[`emoji`,[`emoji`]],[`insert`,[`picture`,`video`,`audio`,`link`,`hr`]],]});$(document).on("click","#notifications input[type=checkbox]",{},function(event){var id=$(this).data("dbid");var t=$(this).data("dbt");var c=$(this).data("dbc");var b=$(this).data("dbb");$.ajax({type:"GET",url:"core/toggle.php",data:{id:id,t:t,c:c,b:b}}).done(function(msg){});});});</script>':'',
    isset($rb['id'])&&$rb['id']!=0?'<script>if(!localStorage.banner'.$rb['id'].'Closed){fetch("core/banner.php",{method:"POST",headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},body:"lS='.$rb['id'].'"}).then(function(r){return r.text();}).then(function(data){var elem=document.createElement("div");elem.setAttribute("id","banner");elem.classList.add("'.$rb['heading'].'");elem.innerHTML=data;document.body.appendChild(elem);});}</script>':'',
    $config['options'][1]==1?'<link rel="stylesheet preload" type="text/css" href="core/js/a11y/a11y.css"><script async defer src="core/js/a11y/a11y.js"></script><nav id="a11y-toolbar" class="a11y-toolbar-'.$config['a11yPosition'].'" role="navigation"><div class="a11y-toolbar-toggle"><a class="a11y-toolbar-link a11y-toolbar-toggle-link" href="javascript:void(0);" title="Accessibility Tools" tabindex="0"><span class="sr-only">Open toolbar</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="32px" height="32px"><path d="M50 .8c5.7 0 10.4 4.7 10.4 10.4S55.7 21.6 50 21.6s-10.4-4.7-10.4-10.4S44.3.8 50 .8zM92.2 32l-21.9 2.3c-2.6.3-4.6 2.5-4.6 5.2V94c0 2.9-2.3 5.2-5.2 5.2H60c-2.7 0-4.9-2.1-5.2-4.7l-2.2-24.7c-.1-1.5-1.4-2.5-2.8-2.4-1.3.1-2.2 1.1-2.4 2.4l-2.2 24.7c-.2 2.7-2.5 4.7-5.2 4.7h-.5c-2.9 0-5.2-2.3-5.2-5.2V39.4c0-2.7-2-4.9-4.6-5.2L7.8 32c-2.6-.3-4.6-2.5-4.6-5.2v-.5c0-2.6 2.1-4.7 4.7-4.7h.5c19.3 1.8 33.2 2.8 41.7 2.8s22.4-.9 41.7-2.8c2.6-.2 4.9 1.6 5.2 4.3v1c-.1 2.6-2.1 4.8-4.8 5.1z"/></svg></a></div><div class="a11y-toolbar-overlay"><p class="a11y-toolbar-title">Accessibility Tools</p><ul class="a11y-toolbar-items a11y-tools"><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-resize-font a11y-btn-resize-plus" data-action="resize-plus" data-action-group="resize" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-56v56c0 4.25-3.75 8-8 8h-16c-4.25 0-8-3.75-8-8v-56h-56c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h56v-56c0-4.25 3.75-8 8-8h16c4.25 0 8 3.75 8 8v56h56c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"/></svg></span><span class="a11y-toolbar-text">Increase Text</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-resize-font a11y-btn-resize-minus" data-action="resize-minus" data-action-group="resize" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-144c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h144c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"/></svg></span><span class="a11y-toolbar-text">Decrease Text</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-seizure-safe" data-action="seizure-safe" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path fill="currentColor" d="m 9.0038448,12.430371 c -0.341647,-0.04535 -0.341443,-0.0446 -0.137964,-0.761802 0.07172,-0.25285 0.132098,-0.595653 0.13418,-0.761801 0.004,-0.319748 -0.10368,-0.715767 -0.194611,-0.715767 -0.02982,0 -0.139786,-0.07219 -0.244385,-0.159874 C 8.3570388,9.8595361 8.2757718,9.8538668 6.3730388,9.8818353 5.7985768,9.8893943 5.7120288,9.8742762 5.3551407,9.6962605 4.9481313,9.4929219 4.6915992,9.1987612 4.6228043,8.856336 4.5902247,8.6941942 4.5640855,8.6764304 4.414129,8.7149816 3.0314866,9.0698793 1.714199,8.6091548 1.2192195,7.5975264 0.90079427,6.9466917 0.93313947,5.8336963 1.290989,5.1274915 1.3764895,4.9589245 1.5658249,4.7185465 1.7117461,4.5936331 1.866616,4.4609717 1.9770538,4.3086567 1.9770538,4.2273968 c 0,-0.076347 0.062498,-0.3061417 0.1388825,-0.5101984 C 2.3719238,3.0330282 3.0156106,2.5749116 3.930188,2.4259982 4.2682139,2.3708172 4.4371852,2.3024077 4.6388726,2.1387541 5.3572357,1.5557619 6.6775648,1.3570721 7.6466898,1.6861179 c 0.277051,0.09411 0.338661,0.09411 0.646597,0.00299 0.435464,-0.1292599 0.793166,-0.128126 1.240421,0.00378 0.7630472,0.2263937 1.3552432,0.6409324 1.7090902,1.196334 0.10842,0.1700787 0.32019,0.367748 0.527665,0.4925481 0.435485,0.2615433 0.853985,0.7716662 1.041617,1.2692788 0.282667,0.7496316 0.243571,1.7817829 -0.09787,2.5837232 -0.08458,0.1988031 -0.168764,0.5312126 -0.187075,0.7389733 -0.06489,0.7365166 -0.583437,1.5001324 -1.210738,1.7829923 -0.2891,0.1303937 -0.297264,0.144 -1.056611,1.7628474 -0.4720822,1.00645 -0.4811372,1.013027 -1.2559482,0.909732 z M 7.7222078,6.6762286 c 0.947994,-1.3028033 1.44712,-2.0415876 1.387934,-2.0543246 -0.05083,-0.011339 -0.529116,0.040441 -1.062853,0.1145197 -0.533736,0.074079 -0.980717,0.1243464 -0.993292,0.111496 -0.01259,-0.011339 0.376981,-0.507326 0.865677,-1.0994268 0.488696,-0.5921387 0.866064,-1.0836663 0.838594,-1.0923592 -0.02748,-0.00756 -0.562659,0.065008 -1.189313,0.1640315 l -1.139369,0.1799056 -0.711614,1.6733481 c -0.3913873,0.9203529 -0.7061245,1.678753 -0.6994154,1.6853294 0.00669,0.00756 0.4850294,-0.074457 1.0629324,-0.1802835 0.577905,-0.1058268 1.083097,-0.184441 1.122651,-0.1749921 0.0414,0.011338 -0.126955,0.4911118 -0.396759,1.1338206 -0.633533,1.5090899 -0.714531,1.7185513 -0.63432,1.6403907 0.03783,-0.037795 0.734951,-0.9825261 1.549147,-2.1014554 z"/></svg></span><span class="a11y-toolbar-text">Seizure Safe</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-adhd-friendly" data-action="adhd-friendly" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path fill="currentColor" d="m 2.4647118,12.970648 c -0.1645962,-0.057 -0.1862164,-0.1182 -0.2355523,-0.6644 -0.024567,-0.272 -0.081059,-0.7789 -0.1255367,-1.1265 -0.044478,-0.3475 -0.080845,-0.669 -0.080817,-0.7143 1.648e-4,-0.2657 0.1986163,-0.5224003 0.4649246,-0.6014003 0.082074,-0.024 0.1809812,-0.044 0.2197931,-0.044 0.08666,8e-4 0.2649771,0.08 0.4207654,0.1867003 0.3954246,0.271 0.6369116,0.3072 0.9691385,0.1449 C 4.485448,9.9622477 4.8659124,9.4559477 4.97817,8.9796477 c 0.058965,-0.2502 0.039501,-0.6652 -0.043719,-0.9323 -0.1686371,-0.5411 -0.4499393,-0.7712 -0.9368418,-0.7666 -0.1921009,0 -0.2335047,0.013 -0.5082716,0.1423 -0.3946801,0.185 -0.5654783,0.2163 -0.7676026,0.1407 -0.1933602,-0.072 -0.2961039,-0.1602 -0.3582666,-0.3061 -0.06799,-0.1597 -0.061598,-0.5534 0.025987,-1.6005 0.037917,-0.4533 0.077171,-0.9455 0.087231,-1.0937 0.015263,-0.2248 0.028654,-0.2815 0.080876,-0.3422 l 0.062584,-0.073 1.538364,0.01 c 1.5182161,0.01 1.5398503,0.01 1.6518357,-0.05 0.1611106,-0.082 0.261467,-0.2442 0.2632397,-0.425 0.00113,-0.1157 -0.020267,-0.1845 -0.1123742,-0.3613 -0.062577,-0.1201 -0.1328765,-0.2829 -0.1562221,-0.3617 -0.1611081,-0.544 -0.018007,-1.0732 0.4057527,-1.5006 0.4758571,-0.47989996 1.0721404,-0.58899996 1.660203,-0.3036 0.2383193,0.1156 0.5191555,0.4127 0.6593119,0.6974 0.2462141,0.5002 0.2474469,0.8464 0.00487,1.3687 -0.1868643,0.4023 -0.2354378,0.5996 -0.1921053,0.7803 0.062621,0.261 0.2820421,0.4061 0.6140133,0.4061 0.2327398,0 2.2335919,-0.2577 2.4789469,-0.3193 0.05234,-0.013 0.06189,-5e-4 0.07891,0.1041 0.07264,0.4466 0.279078,1.6173 0.372796,2.1142 0.127652,0.6769 0.124417,0.7418 -0.04636,0.9308 -0.230345,0.255 -0.46144,0.2761 -0.933568,0.085 -0.546094,-0.2208 -0.902292,-0.1898 -1.2975195,0.113 -0.2426434,0.1858 -0.403607,0.5347 -0.434025,0.9405 -0.019887,0.2654 0.014053,0.4658 0.1264308,0.7464 0.2109885,0.5269 0.5352829,0.7847 0.9902587,0.7872 0.209623,10e-4 0.377238,-0.063 0.562163,-0.2143 0.122479,-0.1004 0.319388,-0.1777 0.451237,-0.1772 0.106208,4e-4 0.334173,0.1178 0.432896,0.223 0.131052,0.1396 0.153335,0.2652003 0.119972,0.6761003 -0.02612,0.3216 -0.08919,1.3431 -0.128525,2.0815 -0.0098,0.1845 -0.03102,0.3261 -0.05438,0.3635 -0.04184,0.067 -0.191148,0.1551 -0.226068,0.1336 -0.01201,-0.01 -0.292916,-0.051 -0.62423,-0.096 -2.5001053,-0.3445 -4.2265073,-0.3728 -6.6604362,-0.1094 -0.5124598,0.055 -1.4896908,0.1817 -1.5660261,0.2024 -0.022666,0.01 -0.083325,0 -0.1347975,-0.021 z"/></svg></span><span class="a11y-toolbar-text">ADHD Friendly</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-dyslexic-friendly" data-action="dyslexic-friendly" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path fill="currentColor" d="M 6.3544177,12.94242 C 6.3054357,12.91222 6.2093989,12.63023 6.1409525,12.31759 5.9637324,11.50799 5.8213214,11.18828 5.5828889,11.065 5.4229411,10.9822 5.1850339,10.9656 4.4185997,10.983 3.3372779,11.0095 3.169824,10.9641 2.9977252,10.59984 2.9412592,10.48078 2.8634401,10.10446 2.8248138,9.7634698 c -0.09256,-0.8172 -0.2137299,-1.09918 -0.6173524,-1.43714 -0.4332499,-0.36283 -0.4382691,-0.53386 -0.029858,-1.01253 0.5336141,-0.62512 0.5781893,-0.78315 0.5760388,-2.04194 -0.00266,-1.56025 0.1886341,-2.08665 1.0764841,-2.9624 0.5869804,-0.57898 1.2017174,-0.92174 2.0758139,-1.1575 0.7538976,-0.20334002 2.0694833,-0.20258002 2.8377921,0.002 1.4222387,0.37833 2.3540597,1.10119 2.9301697,2.2731 0.376739,0.7664 0.450133,1.12553 0.449317,2.19894 -7.67e-4,0.9457 -0.0087,1.00243 -0.225069,1.57351 -0.141277,0.37304 -0.431224,0.90424 -0.783199,1.43462 -0.307386,0.46321 -0.597446,0.9799 -0.644576,1.14824 -0.122796,0.4385702 -0.05643,1.3530602 0.163803,2.2566602 0.148382,0.60883 0.169358,0.78348 0.103671,0.86266 -0.0692,0.0835 -0.419054,0.099 -2.1884692,0.0983 -1.1583478,-6e-4 -2.1461614,-0.0265 -2.195136,-0.0575 z M 9.1454765,6.5781098 c 0.075401,-0.0831 0.1020083,-0.18104 0.073587,-0.27062 -0.037039,-0.1164 -0.015496,-0.14021 0.1243829,-0.14021 0.2268069,0 0.3935124,-0.17991 0.368273,-0.39757 -0.01663,-0.14438 -0.063382,-0.18406 -0.2499374,-0.21127 -0.2837637,-0.0419 -0.3859496,-0.25058 -0.2309265,-0.4721 0.073965,-0.10582 0.152918,-0.14022 0.2691371,-0.11792 0.1523889,0.0302 0.1629714,0.0151 0.1439606,-0.21354 l -0.020409,-0.24491 -0.666618,-0.0189 c -0.7384168,-0.0227 -0.855732,0.0227 -0.855732,0.33222 0,0.17159 -0.024189,0.19464 -0.2044323,0.19464 -0.2853889,0 -0.4171417,0.27288 -0.2310777,0.47834 0.081032,0.0896 0.1832294,0.13001 0.2813826,0.11111 0.1340962,-0.0265 0.1541274,-0.002 0.1541274,0.18444 0,0.26419 0.1049941,0.37644 0.3518322,0.37644 0.1623667,0 0.1894278,0.0265 0.1894278,0.18935 0,0.3428 0.2812315,0.4665 0.5030645,0.22148 z m -3.8584948,-0.51318 c -0.052195,-0.20787 0.06958,-0.37115 0.276885,-0.37115 0.2023158,0 0.3280215,0.16214 0.2879968,0.37152 -0.029858,0.15723 -0.013228,0.1697 0.2264667,0.1697 0.2714426,0 0.3989586,-0.12548 0.3989586,-0.39212 0,-0.10015 0.036661,-0.12321 0.1584738,-0.10015 0.1682626,0.034 0.3828089,-0.12813 0.3828089,-0.28573 0,-0.1561 -0.2145614,-0.31824 -0.3793242,-0.28649 -0.1356835,0.0265 -0.1575289,-7.9e-4 -0.1754059,-0.21392 -0.019653,-0.23508 -0.030614,-0.24453 -0.3112406,-0.26456 -0.2508444,-0.0189 -0.2851999,-0.0385 -0.2499751,-0.14967 0.1110791,-0.34998 -0.4414703,-0.59497 -0.5688729,-0.25209 -0.030992,0.0839 -0.042104,0.19049 -0.024567,0.23697 0.019653,0.0514 -0.025322,0.0847 -0.1148207,0.0847 -0.080843,0 -0.2059063,0.0302 -0.2778677,0.0699 -0.115879,0.062 -0.1308836,0.14703 -0.1308836,0.7409 0,0.72131 0.040818,0.80616 0.3903301,0.81085 0.1304678,0.002 0.1471353,-0.0227 0.1108523,-0.16781 z m 1.738442,-2.44314 c 0.099816,-0.12019 0.028724,-0.69565 -0.1021973,-0.8265 -0.1491007,-0.14891 -0.5812621,0.0151 -0.5812621,0.22299 0,0.18369 0.1889743,0.66126 0.2857291,0.72207 0.093164,0.0586 0.3026233,-0.004 0.3977152,-0.11829 z m 0.9711612,-0.30727 c 0.1131578,-0.21052 0.1189026,-0.2623 0.03976,-0.35754 -0.1562061,-0.18822 -0.364947,-0.10167 -0.460602,0.19124 -0.1577935,0.48298 0.1792232,0.61621 0.4208532,0.1663 z"/></svg></span><span class="a11y-toolbar-text">Dyslexic Friendly</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-grayscale" data-action="grayscale" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M15.75 384h-15.75v-352h15.75v352zM31.5 383.75h-8v-351.75h8v351.75zM55 383.75h-7.75v-351.75h7.75v351.75zM94.25 383.75h-7.75v-351.75h7.75v351.75zM133.5 383.75h-15.5v-351.75h15.5v351.75zM165 383.75h-7.75v-351.75h7.75v351.75zM180.75 383.75h-7.75v-351.75h7.75v351.75zM196.5 383.75h-7.75v-351.75h7.75v351.75zM235.75 383.75h-15.75v-351.75h15.75v351.75zM275 383.75h-15.75v-351.75h15.75v351.75zM306.5 383.75h-15.75v-351.75h15.75v351.75zM338 383.75h-15.75v-351.75h15.75v351.75zM361.5 383.75h-15.75v-351.75h15.75v351.75zM408.75 383.75h-23.5v-351.75h23.5v351.75zM424.5 383.75h-8v-351.75h8v351.75zM448 384h-15.75v-352h15.75v352z"/></svg></span><span class="a11y-toolbar-text">Grayscale</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-high-contrast" data-action="high-contrast" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M192 360v-272c-75 0-136 61-136 136s61 136 136 136zM384 224c0 106-86 192-192 192s-192-86-192-192 86-192 192-192 192 86 192 192z"/></svg></span><span class="a11y-toolbar-text">High Contrast</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-negative-contrast" data-action="negative-contrast" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M416 240c-23.75-36.75-56.25-68.25-95.25-88.25 10 17 15.25 36.5 15.25 56.25 0 61.75-50.25 112-112 112s-112-50.25-112-112c0-19.75 5.25-39.25 15.25-56.25-39 20-71.5 51.5-95.25 88.25 42.75 66 111.75 112 192 112s149.25-46 192-112zM236 144c0-6.5-5.5-12-12-12-41.75 0-76 34.25-76 76 0 6.5 5.5 12 12 12s12-5.5 12-12c0-28.5 23.5-52 52-52 6.5 0 12-5.5 12-12zM448 240c0 6.25-2 12-5 17.25-46 75.75-130.25 126.75-219 126.75s-173-51.25-219-126.75c-3-5.25-5-11-5-17.25s2-12 5-17.25c46-75.5 130.25-126.75 219-126.75s173 51.25 219 126.75c3 5.25 5 11 5 17.25z"/></svg></span><span class="a11y-toolbar-text">Negative Contrast</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-background-group a11y-btn-light-background" data-action="light-background" data-action-group="schema" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M184 144c0 4.25-3.75 8-8 8s-8-3.75-8-8c0-17.25-26.75-24-40-24-4.25 0-8-3.75-8-8s3.75-8 8-8c23.25 0 56 12.25 56 40zM224 144c0-50-50.75-80-96-80s-96 30-96 80c0 16 6.5 32.75 17 45 4.75 5.5 10.25 10.75 15.25 16.5 17.75 21.25 32.75 46.25 35.25 74.5h57c2.5-28.25 17.5-53.25 35.25-74.5 5-5.75 10.5-11 15.25-16.5 10.5-12.25 17-29 17-45zM256 144c0 25.75-8.5 48-25.75 67s-40 45.75-42 72.5c7.25 4.25 11.75 12.25 11.75 20.5 0 6-2.25 11.75-6.25 16 4 4.25 6.25 10 6.25 16 0 8.25-4.25 15.75-11.25 20.25 2 3.5 3.25 7.75 3.25 11.75 0 16.25-12.75 24-27.25 24-6.5 14.5-21 24-36.75 24s-30.25-9.5-36.75-24c-14.5 0-27.25-7.75-27.25-24 0-4 1.25-8.25 3.25-11.75-7-4.5-11.25-12-11.25-20.25 0-6 2.25-11.75 6.25-16-4-4.25-6.25-10-6.25-16 0-8.25 4.5-16.25 11.75-20.5-2-26.75-24.75-53.5-42-72.5s-25.75-41.25-25.75-67c0-68 64.75-112 128-112s128 44 128 112z"/></svg></span><span class="a11y-toolbar-text">Light Background</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-links-underline" data-action="links-underline" data-action-group="toggle" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M364 304c0-6.5-2.5-12.5-7-17l-52-52c-4.5-4.5-10.75-7-17-7-7.25 0-13 2.75-18 8 8.25 8.25 18 15.25 18 28 0 13.25-10.75 24-24 24-12.75 0-19.75-9.75-28-18-5.25 5-8.25 10.75-8.25 18.25 0 6.25 2.5 12.5 7 17l51.5 51.75c4.5 4.5 10.75 6.75 17 6.75s12.5-2.25 17-6.5l36.75-36.5c4.5-4.5 7-10.5 7-16.75zM188.25 127.75c0-6.25-2.5-12.5-7-17l-51.5-51.75c-4.5-4.5-10.75-7-17-7s-12.5 2.5-17 6.75l-36.75 36.5c-4.5 4.5-7 10.5-7 16.75 0 6.5 2.5 12.5 7 17l52 52c4.5 4.5 10.75 6.75 17 6.75 7.25 0 13-2.5 18-7.75-8.25-8.25-18-15.25-18-28 0-13.25 10.75-24 24-24 12.75 0 19.75 9.75 28 18 5.25-5 8.25-10.75 8.25-18.25zM412 304c0 19-7.75 37.5-21.25 50.75l-36.75 36.5c-13.5 13.5-31.75 20.75-50.75 20.75-19.25 0-37.5-7.5-51-21.25l-51.5-51.75c-13.5-13.5-20.75-31.75-20.75-50.75 0-19.75 8-38.5 22-52.25l-22-22c-13.75 14-32.25 22-52 22-19 0-37.5-7.5-51-21l-52-52c-13.75-13.75-21-31.75-21-51 0-19 7.75-37.5 21.25-50.75l36.75-36.5c13.5-13.5 31.75-20.75 50.75-20.75 19.25 0 37.5 7.5 51 21.25l51.5 51.75c13.5 13.5 20.75 31.75 20.75 50.75 0 19.75-8 38.5-22 52.25l22 22c13.75-14 32.25-22 52-22 19 0 37.5 7.5 51 21l52 52c13.75 13.75 21 31.75 21 51z"/></svg></span><span class="a11y-toolbar-text">Links Underline</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-readable-font" data-action="readable-font" data-action-group="toggle" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M181.25 139.75l-42.5 112.5c24.75 0.25 49.5 1 74.25 1 4.75 0 9.5-0.25 14.25-0.5-13-38-28.25-76.75-46-113zM0 416l0.5-19.75c23.5-7.25 49-2.25 59.5-29.25l59.25-154 70-181h32c1 1.75 2 3.5 2.75 5.25l51.25 120c18.75 44.25 36 89 55 133 11.25 26 20 52.75 32.5 78.25 1.75 4 5.25 11.5 8.75 14.25 8.25 6.5 31.25 8 43 12.5 0.75 4.75 1.5 9.5 1.5 14.25 0 2.25-0.25 4.25-0.25 6.5-31.75 0-63.5-4-95.25-4-32.75 0-65.5 2.75-98.25 3.75 0-6.5 0.25-13 1-19.5l32.75-7c6.75-1.5 20-3.25 20-12.5 0-9-32.25-83.25-36.25-93.5l-112.5-0.5c-6.5 14.5-31.75 80-31.75 89.5 0 19.25 36.75 20 51 22 0.25 4.75 0.25 9.5 0.25 14.5 0 2.25-0.25 4.5-0.5 6.75-29 0-58.25-5-87.25-5-3.5 0-8.5 1.5-12 2-15.75 2.75-31.25 3.5-47 3.5z"/></svg></span><span class="a11y-toolbar-text">Readable Font</span></a></li><li class="a11y-toolbar-item"><a href="javascript:void(0);" class="a11y-toolbar-link a11y-btn-reset" data-action="reset" tabindex="0"><span class="a11y-toolbar-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M384 224c0 105.75-86.25 192-192 192-57.25 0-111.25-25.25-147.75-69.25-2.5-3.25-2.25-8 0.5-10.75l34.25-34.5c1.75-1.5 4-2.25 6.25-2.25 2.25 0.25 4.5 1.25 5.75 3 24.5 31.75 61.25 49.75 101 49.75 70.5 0 128-57.5 128-128s-57.5-128-128-128c-32.75 0-63.75 12.5-87 34.25l34.25 34.5c4.75 4.5 6 11.5 3.5 17.25-2.5 6-8.25 10-14.75 10h-112c-8.75 0-16-7.25-16-16v-112c0-6.5 4-12.25 10-14.75 5.75-2.5 12.75-1.25 17.25 3.5l32.5 32.25c35.25-33.25 83-53 132.25-53 105.75 0 192 86.25 192 192z"/></svg></span><span class="a11y-toolbar-text">Reset</span></a></li></ul></div></nav>':''
  ],$footer);
  if(isset($_SESSION['rank'])&&$_SESSION['rank']<100){
    if($config['options'][13]==1){
  		if($config['options'][14]==1&&$config['messengerFBCode']!=''){
  			$footer=preg_replace(
          '/<chatscript>/',
          '<div id="fb-root"></div><script>window.fbAsyncInit=function(){FB.init({xfbml:true,version:`v5.0`});};(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src=`https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js`;fjs.parentNode.insertBefore(js,fjs);}(document,`script`,`facebook-jssdk`));</script><div class="fb-customerchat" attribution=setup_tool page_id="'.$config['messengerFBCode'].'" theme_color="'.$config['messengerFBColor'].'"'.($config['messengerFBGreeting']!=''?' logged_in_greeting="'.$config['messengerFBGreeting'].'" logged_out_greeting="'.$config['messengerFBGreeting'].'"':'').'></div>'
        ,$footer);
  		}else{
  			$footer=preg_replace(
          '/<chatscript>/',
          '<script>initChat();</script>',
        $footer);
      }
  	}else
      $footer=preg_replace('/<chatscript>/','',$footer);
  }else
    $footer=preg_replace('/<chatscript>/','',$footer,1);
}else
  $footer='You MUST include a meta_footer template';
$content.=$footer;
