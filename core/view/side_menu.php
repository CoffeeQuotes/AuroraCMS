<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - View - Side Menu
 * @package    core/view/side_menu.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.16
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 * @changes    v0.0.2 Display Items according to primary documents category.
 * @changes    v0.0.2 Make sure all links end with /
 * @changes    v0.0.7 Fix Stock Status Display.
 * @changes    v0.0.7 Add Parsing for RRP and Reduced Cost Prices.
 * @changes    v0.0.10 Replace {} to [] for PHP7.4 Compatibilty.
 * @changes    v0.0.14 Add parsing of images into side items.
 * @changes    v0.0.16 Add parsing for Weight, Size, Brand and Condition.
 * @changes    v0.0.16 Reduce preg_replace parsing strings.
 * @changes    v0.0.16 Add parsing for Sort Field.
 */
if(file_exists(THEME.DS.'side_menu.html')){
	$sideTemp=file_get_contents(THEME.DS.'side_menu.html');
	if($show=='item')$sideTemp=preg_replace('~<sort>.*?<\/sort>~is','',$sideTemp);
	if($show=='item'&&($view=='service'||$view=='inventory'||$view=='events')){
		$sideCost='';
		if($r['options'][0]==1){
			if($r['stockStatus']=='sold out')$sideCost.='<div class="sold">';
			$sideCost.=($r['rrp']!=0?'<span class="rrp">RRP &#36;'.$r['rrp'].'</span>':'');
			$sideCost.=(is_numeric($r['cost'])&&$r['cost']!=0?'<span class="cost'.($r['rCost']!=0?' strike':'').'">'.(is_numeric($r['cost'])?'&#36;':'').htmlspecialchars($r['cost'],ENT_QUOTES,'UTF-8').'</span>'.($r['rCost']!=0?'<span class="reduced">&#36;'.$r['rCost'].'</span>':''):'<span>'.htmlspecialchars($r['cost'],ENT_QUOTES,'UTF-8').'</span>');
			if($r['stockStatus']=='sold out')$sideCost.='</div>';
		}
		if($r['stockStatus']=='out of stock')$r['quantity']=0;
		if($r['stockStatus']=='pre-order')$r['quantity']=0;
		$sideTemp=preg_replace([
			'/<print content=[\"\']?stockStatus[\"\']?>/',
			'/<print content=[\"\']?cost[\"\']?>/',
			'/<print content=[\"\']?id[\"\']?>/'
		],[
			$r['stockStatus']=='quantity'?($r['quantity']==0?'out of stock':'in stock'):($r['stockStatus']=='none'?'':$r['stockStatus']),
			$sideCost,
			$r['id']
		],$sideTemp);
		$sideQuantity='';
		if($r['contentType']=='inventory'){
			$sideTemp=preg_replace([
				'/<[\/]?quantity>/',
				'/<print content=[\"\']?quantity[\"\']?>/',
				'/<print content=[\"\']?stock[\"\']?>/'
			],[
				'',
				($r['quantity']==0?'out of stock':$r['quantity']),
				($r['stockStatus']=='quantity'?($r['quantity']>0?'in stock':'out of stock'):($r['stockStatus']=='none'?'':$r['stockStatus']))
			],$sideTemp);
			if($r['stockStatus']=='sold out')$sideQuantity='<div class="quantity">Sold Out</div>';
			$sideTemp=preg_replace(['/<print content=[\"\']?quantity[\"\']?>/'],$sideQuantity,$sideTemp);
			if(stristr($sideTemp,'<condition>')){
				if($r['itemCondition']!=''){
					$sideTemp=preg_replace([
						'/<[\/]?condition>/',
						'/<print content=[\"\']?condition[\"\']?>/'
					],[
						'',
						$r['itemCondition'],
					],$sideTemp);
				}else$sideTemp=preg_replace('~<condition>.*?<\/condition>~is','',$sideTemp);
			}
			if(stristr($sideTemp,'<weight>')){
				if($r['weight']!=''){
					$sideTemp=preg_replace([
						'/<[\/]?weight>/',
						'/<print content=[\"\']?weight[\"\']?>/'
					],[
						'',
						$r['weight'].$r['weightunit'],
					],$sideTemp);
				}else$sideTemp=preg_replace('~<weight>.*?<\/weight>~is','',$sideTemp);
			}
			if(stristr($sideTemp,'<size>')){
				if($r['width']!=''&&$r['height']!=''&&$r['length']!=''){
					$sideTemp=preg_replace([
						'/<[\/]?size>/',
						'/<print content=[\"\']?width[\"\']?>/',
						'/<print content=[\"\']?height[\"\']?>/',
						'/<print content=[\"\']?length[\"\']?>/'
					],[
						'',
						$r['width'].$r['widthunit'],
						$r['height'].$r['heightunit'],
						$r['length'].$r['lengthunit']
					],$sideTemp);
				}else$sideTemp=preg_replace('~<size>.*?<\/size>~is','',$sideTemp);
			}
			if(stristr($sideTemp,'<brand>')){
				if($r['width']!=''&&$r['height']!=''&&$r['length']!=''){
					$sb=$db->prepare("SELECT id,title,url,icon FROM `".$prefix."choices` WHERE contentType='brand' AND id=:id");
					$sb->execute([':id'=>$r['brand']]);
					$rb=$sb->fetch(PDO::FETCH_ASSOC);
					$brand=($rb['url']!=''?'<a href="'.$rb['url'].'">':'').($rb['icon']==''?$rb['title']:'<img src="'.$rb['icon'].'" alt="'.$rb['title'].'" title="'.$rb['title'].'">').($rb['url']!=''?'</a>':'');
					$sideTemp=preg_replace([
						'/<[\/]?brand>/',
						'/<print brand>/',
					],[
						'',
						$brand,
					],$sideTemp);
				}else$sideTemp=preg_replace('~<brand>.*?<\/brand>~is','',$sideTemp);
			}
			if(stristr($sideTemp,'<choices>')&&$r['stockStatus']=='quantity'||$r['stockStatus']=='in stock'||$r['stockStatus']=='pre-order'||$r['stockStatus']=='available'){
				$scq=$db->prepare("SELECT * FROM `".$prefix."choices` WHERE rid=:id ORDER BY title ASC");
				$scq->execute([':id'=>$r['id']]);
				if($scq->rowCount()>0){
					$choices='<select class="choices form-control" onchange="$(\'.addCart\').data(\'cartchoice\',$(this).val());$(\'.choices\').val($(this).val());"><option value="0">Select an Option</option>';
					while($rcq=$scq->fetch(PDO::FETCH_ASSOC)){
						if($rcq['ti']==0)continue;
						$choices.='<option value="'.$rcq['id'].'">'.$rcq['title'].':'.$rcq['ti'].'</option>';
					}
					$choices.='</select>';
					$sideTemp=str_replace('<choices>',$choices,$sideTemp);
				}else$sideTemp=str_replace('<choices>','',$sideTemp);
			}else$sideTemp=preg_replace(['<choices>','~<inventory>.*?<\/inventory>~is'],'',$sideTemp);
		}else$sideTemp=preg_replace('~<quantity>.*?<\/quantity>~is','',$sideTemp);
		if($r['contentType']=='service'||$r['contentType']=='events'){
			if($r['bookable']==1){
				if(stristr($sideTemp,'<service>')){
					$sideTemp=preg_replace([
						'/<[\/]?service>/',
						'/<print content=[\"\']?bookservice[\"\']?>/',
						'~<inventory>.*?<\/inventory>~is'
					],[
						'',
						$r['id'],
						''
					],$sideTemp);
				}
			}else$sideTemp=preg_replace('~<service.*?>.*?<\/service>~is','',$sideTemp,1);
		}else$sideTemp=preg_replace('~<service.*?>.*?<\/service>~is','',$sideTemp,1);
		if($r['contentType']=='inventory'&&is_numeric($r['cost'])){
			if(stristr($sideTemp,'<inventory>')){
				$sideTemp=preg_replace([
					'/<[\/]?inventory>/',
					'~<service>.*?<\/service>~is'
				],'',$sideTemp);
			}elseif(stristr($sideTemp,'<inventory>')&&$r['contentType']!='inventory')$sideTemp=preg_replace('~<inventory>.*?<\/inventory>~is','',$sideTemp,1);
		}else$sideTemp=preg_replace('~<inventory>.*?<\/inventory>~is','',$sideTemp,1);
		$sideTemp=preg_replace([
			'/<[\/]?controls>/',
			'/<[\/]?review>/'
		],'',$sideTemp);
	}else{
		$sideTemp=preg_replace([
			'/<controls>([\w\W]*?)<\/controls>/',
			'/<review>([\w\W]*?)<\/review>/',
		],'',$sideTemp,1);
		if(stristr($sideTemp,'<sort>')){
			if($show=='item')$sideTemp=preg_replace('~<sort>.*?<\/sort>~is','',$sideTemp);
			elseif($view=='inventory'||$view=='service'||$view=='article'||$view=='news'||$view=='events'||$view=='portfolio'||$view=='gallery'){
				$sortOptions='';
				if($view=='inventory')$sortOptions='<option value="new"'.(isset($sort)&&$sort=='new'?' selected':'').'>Newest</option><option value="old"'.(isset($sort)&&$sort=='old'?' selected':'').'>Oldest</option><option value="namea"'.(isset($sort)&&$sort=='namea'?' selected':'').'>Name: A-Z</option><option value="namez"'.(isset($sort)&&$sort=='namez'?' selected':'').'>Name: Z-A</option><option value="best"'.(isset($sort)&&$sort=='best'?' selected':'').'>Best Selling</option><option value="view"'.(isset($sort)&&$sort=='view'?' selected':'').'>Most viewed</option><option value="priceh"'.(isset($sort)&&$sort=='priceh'?' selected':'').'>Price: High to low</option><option value="pricel"'.(isset($sort)&&$sort=='pricel'?' selected':'').'>Price: Low to High</option>';
				if($view=='service')$sortOptions='<option value="new"'.(isset($sort)&&$sort=='new'?' selected':'').'>Newest</option><option value="old"'.(isset($sort)&&$sort=='old'?' selected':'').'>Oldest</option><option value="namea"'.(isset($sort)&&$sort=='namea'?' selected':'').'>Name: A-Z</option><option value="namez"'.(isset($sort)&&$sort=='namez'?' selected':'').'>Name: Z-A</option><option value="view"'.(isset($sort)&&$sort=='view'?' selected':'').'>Most viewed</option><option value="priceh"'.(isset($sort)&&$sort=='priceh'?' selected':'').'>Price: High to low</option><option value="pricel"'.(isset($sort)&&$sort=='pricel'?' selected':'').'>Price: Low to High</option>';
				if($view=='article'||$view=='news'||$view=='events')$sortOptions='<option value="new"'.(isset($sort)&&$sort=='new'?' selected':'').'>Newest</option><option value="old"'.(isset($sort)&&$sort=='old'?' selected':'').'>Oldest</option><option value="namea"'.(isset($sort)&&$sort=='namea'?' selected':'').'>Name: A-Z</option><option value="namez"'.(isset($sort)&&$sort=='namez'?' selected':'').'>Name: Z-A</option><option value="view"'.(isset($sort)&&$sort=='view'?' selected':'').'>Most viewed</option>';
				if($view=='portfolio'||$view=='gallery')$sortOptions='<option value="new"'.(isset($sort)&&$sort=='new'?' selected':'').'>Newest</option><option value="old"'.(isset($sort)&&$sort=='old'?' selected':'').'>Oldest</option><option value="namea"'.(isset($sort)&&$sort=='namea'?' selected':'').'>Name: A-Z</option><option value="namez"'.(isset($sort)&&$sort=='namez'?' selected':'').'>Name: Z-A</option><option value="view"'.(isset($sort)&&$sort=='view'?' selected':'').'>Most viewed</option>';
				$sideTemp=preg_replace([
					'/<[\/]?sort>/',
					'/<sortOptions>/'
				],[
					'',
					$sortOptions
				],$sideTemp);
			}else$sideTemp=preg_replace('~<sort>.*?<\/sort>~is','',$sideTemp);
		}
	}
	preg_match('/<item>([\w\W]*?)<\/item>/',$sideTemp,$matches);
	$outside=$matches[1];
	$show='';
	$contentType=$view;
	if(stristr($outside,'<heading>')){
		preg_match('/<heading>([\w\W]*?)<\/heading>/',$outside,$matches);
		if($matches[1]!=''){
			$heading=$matches[1];
			$heading=str_replace([
				'<print viewlink>',
				'<print view>'
			],[
				URL.$view.'/',
				ucfirst($view)
			],$heading);
		}else$heading='';
		$outside=preg_replace('~<heading>.*?<\/heading>~is',$heading,$outside,1);
	}
	if(stristr($sideTemp,'<settings')){
		preg_match('/<settings items="(.*?)" contenttype="(.*?)">/',$outside,$matches);
		if(isset($matches[1])){
			if($matches[1]=='all'||$matches[1]=='')$show='';
			elseif($matches[1]=='limit')$show=' LIMIT '.$config['showItems'];
			else$show=' LIMIT '.$matches[1];
		}else$show='';
		if(isset($matches[2])){
			if($matches[2]=='current')$contentType=strtolower($view);
			if($matches[2]=='all'||$matches[2]=='')$contentType=$heading='';
		}else$contentType='';
	}
	$r=$db->query("SELECT * FROM `".$prefix."menu` WHERE id=17")->fetch(PDO::FETCH_ASSOC);
	if($r['active'][0]==1)$sideTemp=preg_replace('/<[\/]?newsletters>/','',$sideTemp);
	else$sideTemp=preg_replace('/<newsletters>([\w\W]*?)<\/newsletters>/','',$sideTemp,1);
	preg_match('/<items>([\w\W]*?)<\/items>/',$outside,$matches);
	$insides=$matches[1];
	if(isset($sidecat)&&$sidecat!=''){
		$s=$db->prepare("SELECT * FROM `".$prefix."content` WHERE contentType LIKE :contentType AND category_1 LIKE :cat AND internal=0 AND status='published' ORDER BY featured DESC, ti DESC $show");
		$s->execute([
			':contentType'=>$contentType,
			':cat'=>$sidecat
		]);
	}else{
		$s=$db->prepare("SELECT * FROM `".$prefix."content` WHERE contentType LIKE :contentType AND internal='0' AND status='published' ORDER BY featured DESC, ti DESC $show");
		$s->execute([':contentType'=>$contentType]);
	}
	$output='';
	while($r=$s->fetch(PDO::FETCH_ASSOC)){
		if($r['contentType']=='gallery'){
			preg_match('/<media>([\w\W]*?)<\/media>/',$insides,$matches);
			$inside=$matches[1];
		}else$inside=preg_replace('/<media>([\w\W]*?)<\/media>/','',$insides,1);
		$items=$inside;
		$time='<time datetime="'.date('Y-m-d',$r['ti']).'">'.date($config['dateFormat'],$r['ti']).'</time>';
		if($r['contentType']=='events'||$r['contentType']=='news'){
			if($r['tis']!=0){$time='<time datetime="'.date('Y-m-d',$r['tis']).'">'.date('dS M H:i',$r['tis']).'</time>';
				if($r['tie']!=0)$time.=' &rarr; <time datetime="'.date('Y-m-d',$r['tie']).'">'.date('dS M H:i',$r['tie']).'</time>';
			}
		}
		if(file_exists('media/thumbs/'.basename($r['thumb'])))$sideImage='<img src="'.$r['thumb'].'" alt="'.htmlspecialchars($r['title'],ENT_QUOTES,'UTF-8').'"/>';
		else$sideImage='';
		$caption=$r['seoCaption']!=''?$r['seoCaption']:substr(strip_tags(rawurldecode($r['notes'])),0,100).'...';
		$items=preg_replace([
			'/<print link>/',
			'/<print content=[\"\']?schemaType[\"\']?>/',
			'/<print metaDate>/',
			'/<print content=[\"\']?title[\"\']?>/',
			'/<print time>/',
			'/<thumb>/',
			'/<print content=[\"\']?caption[\"\']?>/'
		],[
			URL.$r['contentType'].'/'.$r['urlSlug'].'/',
			htmlspecialchars($r['schemaType'],ENT_QUOTES,'UTF-8'),
			date('Y-m-d',$r['ti']),
			htmlspecialchars($r['title'],ENT_QUOTES,'UTF-8'),
			$time,
			$sideImage,
			htmlspecialchars($caption,ENT_QUOTES,'UTF-8')
		],$items);
		$output.=$items;
	}
	$outside=preg_replace([
		'~<items>.*?<\/items>~is',
		'~<settings.*?>~is'
	],[
		$output,
		'',
	],$outside,1);
	$sideTemp=preg_replace('~<item>.*?<\/item>~is',$outside,$sideTemp,1);
}else$sideTemp='';
$content.=$sideTemp;
