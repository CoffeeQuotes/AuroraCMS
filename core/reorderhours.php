<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Core - Reorder Business Hours
 * @package    core/reorderhours.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.0.20
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 * @changes    v0.0.20 Fix SQL Reserved Word usage.
 */
require'db.php';
$i=0;
foreach($_POST['l'] as$id){
  $s=$db->prepare("UPDATE `".$prefix."choices` SET `ord`=:ord WHERE `id`=:id");
  $s->execute([
    ':ord'=>$i,
    ':id'=>$id
  ]);
  $i++;
}
