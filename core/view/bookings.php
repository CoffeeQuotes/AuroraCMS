<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - View - Bookings
 * @package    core/view/bookings.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.1.0
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */
if(stristr($html,'<breadcrumb>')){
  preg_match('/<breaditems>([\w\W]*?)<\/breaditems>/',$html,$matches);
  $breaditem=$matches[1];
  preg_match('/<breadcurrent>([\w\W]*?)<\/breadcurrent>/',$html,$matches);
  $breadcurrent=$matches[1];
  $jsonld='<script type="application/ld+json">'.
    '{'.
      '"@context":"http://schema.org",'.
      '"@type":"BreadcrumbList",'.
      '"itemListElement":'.
        '['.
          '{'.
            '"@type":"ListItem",'.
            '"position":1,'.
            '"item":'.
              '{'.
                '"@id":"'.URL.'",'.
                '"name":"Home"'.
              '}'.
          '},';
  $breadit=preg_replace([
    '/<print breadcrumb=[\"\']?url[\"\']?>/',
    '/<print breadcrumb=[\"\']?title[\"\']?>/'
  ],[
    URL,
    'Home'
  ],$breaditem);
  $breaditems=$breadit;
  $breadit=preg_replace('/<print breadcrumb=[\"\']?title[\"\']?>/',htmlspecialchars($page['title'],ENT_QUOTES,'UTF-8'),$breadcurrent);
  $jsonld.='{'.
    '"@type":"ListItem",'.
    '"position":2,'.
    '"item":'.
      '{'.
        '"@id":"'.URL.urlencode($page['contentType']).'",'.
        '"name":"'.htmlspecialchars(ucfirst($page['title']),ENT_QUOTES,'UTF-8').'"'.
      '}'.
    '}'.
  ']}</script>';
  $breaditems.=$breadit;
  $html=preg_replace([
    '/<[\/]?breadcrumb>/',
    '/<json-ld-breadcrumb>/',
    '~<breaditems>.*?<\/breaditems>~is',
    '~<breadcurrent>.*?<\/breadcurrent>~is'
  ],[
    '',
    $jsonld,
    $breaditems,
    ''
  ],$html);
}
$html=preg_replace([
  $page['notes']!=''?'/<print page=[\"\']?notes[\"\']?>/':'~<pagenotes>.*?<\/pagenotes>~is',
  '/<[\/]?pagenotes>/',
  '/<print currentdate>/'
],[
  rawurldecode($page['notes']),
  '',
  date('Y-m-dTH:i',time())
],$html);
if(stristr($html,'<items>')){
  $sb=$db->query("SELECT * FROM `".$prefix."content` WHERE `bookable`='1' AND `title`!='' AND `status`='published' AND `internal`!='1' ORDER BY `code` ASC, `title` ASC");
  if($sb->rowCount()>0){
    preg_match('/<items>([\w\W]*?)<\/items>/',$html,$matches);
    $item=$matches[1];
    $output='';
    while($rb=$sb->fetch(PDO::FETCH_ASSOC)){
      $items=$item;
      $items=preg_replace([
        '/<print id>/',
        '/<print content=[\"\']?thumb[\"\']?>/',
        '/<print content=[\"\']?imageALT[\"\']?>/',
        '/<print content=[\"\']?title[\"\']?>/'
      ],[
        $rb['id'],
        ($rb['file']!=''&&file_exists('media/'.'thumbs'.basename($rb['file']))?'media/'.'thumbs/'.basename($rb['file']):NOIMAGESM),
        ($rb['fileALT']!=''?$rb['fileeALT']:$rb['title']),
        $rb['title']
      ],$items);
      $output.=$items;
    }
    $html=preg_replace([
      '~<items>.*?<\/items>~is',
      '~<serviceselect>.*?<\/serviceselect>~is',
      '/<[\/]?bookservices>/'
    ],[
      $output,
      '',
      '',
      ''
    ],$html);
  }else
    $html=preg_replace('~<bookservices>.*?<\/bookservices>~is','<input type="hidden" name="service" value="0">',$html,1);
}else{
  $sb=$db->query("SELECT * FROM `".$prefix."content` WHERE `bookable`='1' AND `title`!='' AND `status`='published' AND `internal`!='1' ORDER BY `code` ASC, `title` ASC");
  if($sb->rowCount()>0){
    $bookable='';
    while($rb=$sb->fetch(PDO::FETCH_ASSOC)){
      $bookable.='<option value="'.$rb['id'].'"'.($rb['id']==$args[0]?' selected':'').'>'.htmlspecialchars(ucfirst($rb['contentType']),ENT_QUOTES,'UTF-8').($rb['code']!=''?':'.htmlspecialchars($rb['code'],ENT_QUOTES,'UTF-8'):'').':'.htmlspecialchars($rb['title'],ENT_QUOTES,'UTF-8').'</option>';
    }
    $html=preg_replace([
      '/<serviceoptions>/',
      '/<[\/]?bookservices>/'
    ],[
      $bookable,
      ''
    ],$html);
  }else
    $html=preg_replace('~<bookservices>.*?<\/bookservices>~is','<input type="hidden" name="service" value="0">',$html,1);
}
$content.=$html;
