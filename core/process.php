<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Core - Process Pages
 * @package    core/process.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.3
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 * @changes    v0.0.2 Fix Meta-Title from using Old Default (no longer used),
 *             and only use content Title first, then Page Title if Content empty.
 * @changes    v0.0.2 Add check if Visitor Tracking is Enabled.
 * @changes    v0.0.2 Make sure all links end with /
 * @changes    v0.0.3 Add Check if shareImage is no image and replace with FavIcon.
 * @changes    v0.0.3 Fix Image for JSON-LD Schema to fall back to Favicon.
 */
require'core'.DS.'db.php';
if(isset($headerType))header($headerType);
$config=$db->query("SELECT * FROM `".$prefix."config` WHERE id='1'")->fetch(PDO::FETCH_ASSOC);
if(file_exists(THEME.DS.'theme.ini'))
  $theme=parse_ini_file(THEME.DS.'theme.ini',TRUE);
else{
  echo'A Website Theme has not been set.';
  die();
}
$ip=$_SERVER['REMOTE_ADDR']=='::1'?'127.0.0.1':$_SERVER['REMOTE_ADDR'];
$ti=time();
$show=$html=$head=$content=$foot='';
$css=THEME.DS.'css'.DS;
$favicon=$shareImage=FAVICON;
$noimage=NOIMAGE;
$noavatar=NOAVATAR;
if($view=='page'){
  $sp=$db->prepare("SELECT * FROM `".$prefix."menu` WHERE contentType=:contentType AND LOWER(title)=LOWER(:title)");
  $sp->execute([
    ':contentType'=>$view,
    ':title'=>str_replace('-',' ',$args[0])
  ]);
}else{
  $sp=$db->prepare("SELECT * FROM `".$prefix."menu` WHERE contentType=:contentType");
  $sp->execute([':contentType'=>$view]);
}
$page=$sp->fetch(PDO::FETCH_ASSOC);
$seoTitle=$page['seoTitle'];
$metaRobots=$page['metaRobots'];
$seoCaption=$page['seoCaption'];
$seoDescription=$page['seoDescription'];
$seoKeywords=$page['seoKeywords'];
$pu=$db->prepare("UPDATE `".$prefix."menu` SET views=views+1 WHERE id=:id");
$pu->execute([':id'=>$page['id']]);
if(isset($act)&&$act=='logout')
  require'core'.DS.'login.php';
include'core'.DS.'cart_quantity.php';
$status=isset($_SESSON['rank'])&&$_SESSION['rank']>699?"%":"published";
if($config['php_options']{4}==1){
  $sb=$db->prepare("SELECT * FROM `".$prefix."iplist` WHERE ip=:ip");
  $sb->execute([':ip'=>$ip]);
  if($sb->rowCount()>0){
    $sbr=$sb->fetch(PDO::FETCH_ASSOC);
    echo'The IP "<strong>'.$ip.'</strong>" has been Blacklisted for suspicious activity.';
    die();
  }
}
if($config['comingsoon']{0}==1&&(isset($_SESSION['rank'])&&$_SESSION['rank']<400)){
    if(file_exists(THEME.DS.'comingsoon.html'))
      $template=file_get_contents(THEME.DS.'comingsoon.html');
    else{
      include'core'.DS.'layout'.DS.'comingsoon.php';
      die();
    }
}elseif($config['maintenance']{0}==1&&(isset($_SESSION['rank'])&&$_SESSION['rank']<400)){
  if(file_exists(THEME.DS.'maintenance.html'))
    $template=file_get_contents(THEME.DS.'maintenance.html');
  else{
  	include'core'.DS.'layout'.DS.'maintenance.php';
    die();
  }
}elseif(file_exists(THEME.DS.$view.'.html'))
  $template=file_get_contents(THEME.DS.$view.'.html');
elseif(file_exists(THEME.DS.'default.html'))
  $template=file_get_contents(THEME.DS.'default.html');
else
  $template=file_get_contents(THEME.DS.'content.html');
$newDom=new DOMDocument();
@$newDom->loadHTML($template);
$tag=$newDom->getElementsByTagName('block');
foreach($tag as$tag1){
  $include=$tag1->getAttribute('include');
  $inbed=$tag1->getAttribute('inbed');
  if($include!=''){
    $include=rtrim($include,'.html');
    $html=file_exists(THEME.DS.$include.'.html')?file_get_contents(THEME.DS.$include.'.html'):'';
    if(file_exists(THEME.'view'.DS.$include.'.php'))
      include THEME.'view'.DS.$include.'.php';
    elseif(file_exists('core'.DS.'view'.DS.$include.'.php'))
      include'core'.DS.'view'.DS.$include.'.php';
    else
      include'core'.DS.'view'.DS.'content.php';
    $req=$include;
  }
  if($inbed!=''){
    preg_match('/<block inbed="'.$inbed.'">([\w\W]*?)<\/block>/',$template,$matches);
    $html=isset($matches[1])?$matches[1]:'';
    if($view=='cart')$inbed='cart';
    if($view=='sitemap')$inbed='sitemap';
    if($view=='settings')$inbed='settings';
    if($view=='page')$inbed='page';
    if(file_exists(THEME.'view'.DS.$inbed.'.php'))
      include THEME.'view'.DS.$inbed.'.php';
    elseif(file_exists('core'.DS.'view'.DS.$inbed.'.php'))
      include'core'.DS.'view'.DS.$inbed.'.php';
    else
      include'core'.DS.'view'.DS.'content.php';
    $req=$inbed;
  }
}
if(!isset($contentTime))
  $contentTime=($page['eti']>$config['ti']?$page['eti']:$config['ti']);
if(!isset($canonical)||$canonical=='')
  $canonical=($view=='index'?URL:URL.$view.'/');
if($seoTitle==''){
  if($page['seoTitle']=='')
    $seoTitle=$page['title'];
  else
    $seoTitle=$page['seoTitle'];
}
if($seoTitle==''){
  $seoTitle.=$view=='index'?'Home':'';
}
$seoTitle.=$view=='index'?' | '.$config['business']:'';
if($metaRobots==''){
  if($page['metaRobots']=='')
    $metaRobots=$config['metaRobots'];
  elseif(in_array($view,['proofs','orders','settings'],true))
    $metaRobots='noindex,nofollow';
  else
    $metaRobots=$page['metaRobots'];
}
if($seoCaption==''){
  $seoCaption=$page['seoCaption'];
}
if($seoDescription==''){
  if($page['seoDescription']=='')
    $seoDescription=substr(strip_tags($page['notes']),0,160);
  else
    $seoDescription=$page['seoDescription'];
}
if($seoKeywords==''){
  if($page['seoKeywords']=='')
    $seoKeywords=$config['seoKeywords'];
  else
    $seoKeywords=$page['seoKeywords'];
}
$rss='';
if($args[0]!='index'||$args[0]!='bookings'||$args[0]!='contactus'||$args[0]!='cart'||$args[0]!='proofs'||$args[0]!='settings'||$args[0]!='accounts'){}else{$rss=$view;}
$head=preg_replace([
  '/<print config=[\"\']?business[\"\']?>/',
  '/<print theme=[\"\']?title[\"\']?>/',
  '/<print theme=[\"\']?creator[\"\']?>/',
  '/<print theme=[\"\']?creatorurl[\"\']?>/',
  '/<print meta=[\"\']?metaRobots[\"\']?>/',
  '/<print meta=[\"\']?seoTitle[\"\']?>/',
  '/<print meta=[\"\']?seoCaption[\"\']?>/',
  '/<print meta=[\"\']?seoDescription[\"\']?>/',
  '/<print meta=[\"\']?seoAbstract[\"\']?>/',
  '/<print meta=[\"\']?seoSummary[\"\']?>/',
  '/<print meta=[\"\']?seoKeywords[\"\']?>/',
  '/<print meta=[\"\']?dateAtom[\"\']?>/',
  '/<print meta=[\"\']?canonical[\"\']?>/',
  '/<print meta=[\"\']?url[\"\']?>/',
  '/<print meta=[\"\']?view[\"\']?>/',
  '/<print meta=[\"\']?rss[\"\']?>/',
  '/<print meta=[\"\']?ogType[\"\']?>/',
  '/<print meta=[\"\']?shareImage[\"\']?>/',
  '/<print meta=[\"\']?favicon[\"\']?>/',
  '/<print microid>/',
  '/<print meta=[\"\']?author[\"\']?>/',
  '/<print theme>/',
  '/<print site_verifications>/',
	'/<print geo>/'
],[
  trim(htmlspecialchars($config['business'],ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($theme['title'],ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($theme['creator'],ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($theme['creator_url'],ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($metaRobots,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoTitle,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoCaption,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoDescription,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoCaption,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoDescription,ENT_QUOTES,'UTF-8')),
  trim(htmlspecialchars($seoKeywords,ENT_QUOTES,'UTF-8')),
  $contentTime,
  $canonical,
  URL,
  $view,
  URL.'rss/'.$rss.'/',
  $view=='inventory'?'product':$view,
  stristr($shareImage,'noimage')?URL.FAVICON:$shareImage,
  FAVICON,
  microid($config['email'],$canonical),
  isset($r['name'])?$r['name']:$config['business'],
  THEME,
  ($config['ga_verification']!=''?'<meta name="google-site-verification" content="'.$config['ga_verification'].'">':'').
    ($config['seo_msvalidate']!='<meta name="msvalidate.01" content="'.$config['seo_msvalidate'].'">'?'':'').
    ($config['seo_yandexverification']!='<meta name="yandex-verification" content="'.$config['seo_yandexverification'].'">'?'':'').
    ($config['seo_alexaverification']!=''?'<meta name="alexaVerifyID" content="'.$config['seo_alexaverification'].'">':'').
    ($config['seo_pinterestverify']!=''?'<meta name="p:domain_verify" content="'.$config['seo_pinterestverify'].'">':''),
  ($config['geo_region']!=''?'<meta name="geo.region" content="'.$config['geo_region'].'">':'').
    ($config['geo_placename']!=''?'<meta name="geo.placename" content="'.$config['geo_placename'].'">':'').
    ($config['geo_position']!=''?'<meta name="geo.position" content="'.$config['geo_position'].'"><meta name="ICBM" content="'.$config['geo_position'].'">':'')
],$head);
if(isset($_SESSION['rank'])&&$_SESSION['rank']>899)
  $head=str_replace('<meta_helper>','<link rel="stylesheet" type="text/css" href="core/css/seohelper.css">',$head);
else
  $head=str_replace('<meta_helper>','',$head);
if(isset($config['ga_tracking'])&&$config['ga_tracking']!='')
  $head=str_replace('<google_analytics>','<script async src="https://www.googletagmanager.com/gtag/js?id='.$config['ga_tracking'].'"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag(\'js\',new Date());gtag(\'config\',\''.$config['ga_tracking'].'\');</script>',$head);
else
  $head=str_replace('<google_analytics>','',$head);
if(isset($_SESSION['rank'])&&$_SESSION['rank']>899&&$config['development']==1)
  $content.='<div style="text-align:right;padding:10px;">Page Views: '.$page['views'].' | Memory Used: '.size_format(memory_get_usage()).' | Process Time: '.elapsed_time().'</div>';
print$head.$content;
$current_page=PROTOCOL.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if($config['maintenance']==0||$config['development']==0&&$config['options']{11}==1){
  if(!isset($_SESSION['current_page'])||(isset($_SESSION['current_page'])&&$_SESSION['current_page']!=$current_page)){
    if(!stristr($current_page,'core')||!stristr($current_page,'admin')||!stristr($current_page,'layout')||!stristr($current_page,'media')){
      if(filter_var($current_page,FILTER_VALIDATE_URL)===TRUE){
        $s=$db->prepare("INSERT INTO `".$prefix."tracker` (pid,urlDest,urlFrom,userAgent,ip,browser,os,sid,ti) VALUES (:pid,:urlDest,:urlFrom,:userAgent,:ip,:browser,:os,:sid,:ti)");
        $hr=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
        $s->execute([
          ':pid'=>isset($page['id'])?$page['id']:0,
          ':urlDest'=>$current_page,
          ':urlFrom'=>$hr,
          ':userAgent'=>$_SERVER['HTTP_USER_AGENT'],
          ':ip'=>$_SERVER["REMOTE_ADDR"],
          ':browser'=>getBrowser(),
          ':os'=>getOS(),
          ':sid'=>session_id(),
          ':ti'=>time()
        ]);
        $_SESSION['current_page']=$current_page;
      }
    }
  }
}
function getOS(){
  $user_agent=$_SERVER['HTTP_USER_AGENT'];
  $os_platform="Unknown OS Platform";
  $os_array=[
    '/windows nt 10/i'=>'Windows',
    '/windows nt 6.3/i'=>'Windows',
    '/windows nt 6.2/i'=>'Windows',
    '/windows nt 6.1/i'=>'Windows',
    '/windows nt 6.0/i'=>'Windows',
    '/windows nt 5.2/i'=>'Windows',
    '/windows nt 5.1/i'=>'Windows',
    '/windows xp/i'=>'Windows',
    '/windows nt 5.0/i'=>'Windows',
    '/windows me/i'=>'Windows',
    '/win98/i'=>'Windows',
    '/win95/i'=>'Windows',
    '/win16/i'=>'Windows',
    '/macintosh/i'=>'Mac',
    '/mac os x/i'=>'Mac',
    '/mac_powerpc/i'=>'Mac',
    '/linux/i'=>'Linux',
    '/ubuntu/i'=>'Ubuntu',
    '/iphone/i'=>'iPhone',
    '/ipod/i'=>'iPod',
    '/ipad/i'=>'iPad',
    '/android/i'=>'Android',
    '/blackberry/i'=>'BlackBerry',
    '/webos/i'=>'Mobile'
  ];
  foreach($os_array as$regex=>$value){
    if(preg_match($regex,$user_agent))$os_platform=$value;
  }
  return$os_platform;
}
function getBrowser(){
  $user_agent=$_SERVER['HTTP_USER_AGENT'];
  $browser="Unknown Browser";
  $browser_array=[
    '/brave/i'=>'Brave',
    '/msie/i'=>'Explorer',
    '/firefox/i'=>'Firefox',
    '/safari/i'=>'Safari',
    '/chrome/i'=>'Chrome',
    '/edge/i'=>'Edge',
    '/opera/i'=>'Opera',
    '/netscape/i'=>'Netscape',
    '/maxthon/i'=>'Maxthon',
    '/konqueror/i'=>'Konqueror',
    '/mobile/i'=>'Mobile',
    '/bingbot/i'=>'Bing',
    '/duckduckbot/i'=>'DuckDuckGo',
    '/googlebot/i'=>'Google',
    '/msnbot/i'=>'MSN',
    '/slurp/i'=>'Inktomi',
    '/yahoo/i'=>'Yahoo',
    '/askjeeves/i'=>'AskJeeves',
    '/fastcrawler/i'=>'FastCrawler',
    '/infoseek/i'=>'InfoSeek',
    '/lycos/i'=>'Lycos',
    '/yandex/i'=>'Yandex',
    '/geohasher/i'=>'GeoHasher',
    '/gigablast/i'=>'Gigablast',
    '/baidu/i'=>'Baiduspider',
    '/spinn3r/i'=>'Spinn3r',
    '/sogou/i'=>'Sogou',
    '/Exabot/i'=>'Exabot',
    '/facebook/i'=>'Facebook',
    '/alexa/i'=>'Alexa'
  ];
  foreach($browser_array as$regex=>$value){
    if(preg_match($regex,$user_agent))$browser=$value;
  }
  return$browser;
}
