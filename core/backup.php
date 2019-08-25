<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Core - Backup Database
 * @package    core/backup.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.1
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */
echo'<script>';
if(session_status()==PHP_SESSION_NONE)session_start();
require'db.php';
$config=$db->query("SELECT language FROM `".$prefix."config` WHERE id=1")->fetch(PDO::FETCH_ASSOC);
function svg($svg,$class=null,$size=null){
	echo'<i class="i'.($size!=null?' i-'.$size:'').($class!=null?' '.$class:'').'">'.file_get_contents('images'.DS.'i-'.$svg.'.svg').'</i>';
}
function svg2($svg,$class=null,$size=null){
	return'<i class="i'.($size!=null?' i-'.$size:'').($class!=null?' '.$class:'').'">'.file_get_contents('images'.DS.'i-'.$svg.'.svg').'</i>';
}
$tables=array();
$db->setAttribute(PDO::ATTR_ORACLE_NULLS,PDO::NULL_TO_STRING);
$compression=true;
$nowtimename=time();
if($compression){
	$file=date('y-d-m',time()).'-'.$nowtimename.'.sql.gz';
	$zp=gzopen('..'.DS.'media'.DS.'backup'.DS.$file,"w9");
}else{
	$file=date('y-d-m',time()).'-'.$nowtimename.'.sql';
	$handle=fopen('..'.DS.'media'.DS.'backup'.DS.$file,'a+');
}
$numtypes=[
	'tinyint',
	'smallint',
	'mediumint',
	'int',
	'bigint',
	'float',
	'double',
	'decimal',
	'real'
];
if(empty($tables)){
	$pstm1=$db->query('SHOW TABLES');
	while($row=$pstm1->fetch(PDO::FETCH_NUM))
		$tables[]=$row[0];
}else
	$tables=is_array($tables)?$tables:explode(',',$tables);
foreach($tables as$table){
	$result=$db->query('SELECT * FROM '.$table);
	$num_fields=$result->columnCount();
	$num_rows=$result->rowCount();
	$return="";
	$return.="DROP TABLE IF EXISTS `".$table."`;";
	$pstm2=$db->query("SHOW CREATE TABLE ".$table);
	$row2=$pstm2->fetch(PDO::FETCH_NUM);
	$ifnotexists=str_replace('CREATE TABLE','CREATE TABLE IF NOT EXISTS',$row2[1]);
	$return.="\n\n".$ifnotexists.";\n\n";
	if($compression)
		gzwrite($zp,$return);
	else
		fwrite($handle,$return);
	$return="";
	if($num_rows){
		$return="INSERT INTO `".$table."` (";
		$pstm3=$db->query("SHOW COLUMNS FROM ".$table);
		$count=0;
		$type=array();
		while($rows=$pstm3->fetch(PDO::FETCH_NUM)){
			$type[$table][]=(stripos($rows[1],'(')?stristr($rows[1],'(',true):$rows[1]);
			$return.=$rows[0];
			$count++;
			if($count<($pstm3->rowCount()))
				$return.=", ";
		}
		$return.=") VALUES";
		if($compression)
			gzwrite($zp,$return);
		else
			fwrite($handle,$return);
		$return="";
	}
	$count=0;
	while($row=$result->fetch(PDO::FETCH_NUM)){
		$return="\n\t(";
		for($j=0;$j<$num_fields;$j++){
			$row[$j]=addslashes($row[$j]);
			$return.=isset($row[$j])?(in_array($type[$table][$j],$numtypes)?$row[$j]:"`".$row[$j]."`"):"``";
			if($j<($num_fields-1))
				$return.=",";
		}
		$count++;
		$return.=($count<($result->rowCount())?"),":");");
		if($compression)
			gzwrite($zp,$return);
		else
			fwrite($handle,$return);
		$return="";
	}
	$return="\n\n-- ------------------------------------------------ \n\n";
	if($compression)
		gzwrite($zp,$return);
	else
		fwrite($handle,$return);
	$return="";
}
if($compression)
	gzclose($zp);
else
	fclose($handle);
if(file_exists('..'.DS.'media'.DS.'backup'.DS.$file)){
  chmod('..'.DS.'media'.DS.'backup'.DS.$file,0777);
  $fileid=str_replace('.','',$file);
  $fileid=str_replace(DS,'',$fileid);
	$filename=basename($file);
  $ti=time();
  $q=$db->prepare("UPDATE `".$prefix."config` SET backup_ti=:backup_ti WHERE id='1'");
  $q->execute([':backup_ti'=>$ti]);?>
  window.top.window.$('#backups').append(`<?php echo'<div id="l_'.$fileid.'" class="form-group row"><label class="col-form-label col-sm-2">&nbsp;</label><div class="input-group col-sm-10"><a class="btn btn-secondary col" href="media/backup/'.$file.'">Click to Download '.$file.'</a><div class="input-group-append"><button class="btn btn-secondary trash" onclick="removeBackup(\''.$fileid.'\',\''.$filename.'\')" aria-label="Delete">'.svg2('trash').'</button></div></div></div>';?>`);
  window.top.window.$('#alert_backup').addClass('d-none');
<?php }else{?>
	window.top.window.toastr["danger"]('There was an issue adding the Data!');
<?php }?>
  window.top.window.Pace.stop();
</script>
