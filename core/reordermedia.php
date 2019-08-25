<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Core - Reorder Media Items
 * @package    core/reordermedia.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.1
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */
$getcfg=false;
require'db.php';
$i=0;
foreach($_POST['mi'] as$id){
  $s=$db->prepare("UPDATE `".$prefix."media` SET ord=:ord WHERE id=:id");
  $s->execute([
    ':ord'=>$i,
    ':id'=>$id
  ]);
  $i++;
}
