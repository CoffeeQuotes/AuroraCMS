<?php
/**
 * AuroraCMS - Copyright (C) Diemen Design 2019
 *
 * @category   Administration - Preferences - Tracker
 * @package    core/layout/pref_tracker.php
 * @author     Dennis Suitters <dennis@diemen.design>
 * @copyright  2014-2019 Diemen Design
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    0.2.22
 * @link       https://github.com/DiemenDesign/AuroraCMS
 * @notes      This PHP Script is designed to be executed using PHP 7+
 */
$find=isset($_POST['find'])?$_POST['find']:'';
if($find=='')$find=isset($_GET['find'])?$_GET['find']:'';?>
<main>
  <section class="<?=(isset($_COOKIE['sidebar'])&&$_COOKIE['sidebar']=='small'?'navsmall':'');?>" id="content">
    <div class="container-fluid">
      <div class="card mt-3 bg-transparent border-0 overflow-visible">
        <div class="card-actions">
          <div class="row">
            <div class="col-12 col-sm-6">
              <ol class="breadcrumb m-0 pl-0 pt-0">
                <li class="breadcrumb-item"><a href="<?= URL.$settings['system']['admin'].'/preferences';?>">Preferences</a></li>
                <li class="breadcrumb-item active">Tracker</li>
              </ol>
            </div>
            <div class="col-12 col-sm-6 text-right">
              <form action="" method="post">
                <div class="form-row">
                  <input type="text" name="find" value="<?=$find;?>" placeholder="Enter text to search in URLs...">
                  <button type="submit"><i class="i">search</i></button>
                </div>
              </form>
              <input id="options11" data-dbid="1" data-dbt="config" data-dbc="options" data-dbb="11" type="checkbox"<?=$config['options'][11]==1?' checked aria-checked="true"':' aria-checked="false"';?>>
              <label for="options11" id="configoptions111">Visitor Tracking</label>
              <span class="small text-muted">Collected Data is Purged after 30 Days.</span>
            </div>
          </div>
        </div>
        <table class="table-zebra">
          <thead>
            <tr class="small">
              <th class="text-center align-middle text-uppercase" data-tooltip="bottom" aria-label="The total visits from the same IP over time, the number is not an indicator of visits during a single session.">Visits</th>
              <th class="text-center align-middle text-uppercase">Status</th>
              <th class="text-center align-middle text-uppercase">Referrer</th>
              <th class="text-center align-middle text-uppercase">Activity</th>
              <th class="text-center align-middle text-uppercase">Origin</th>
              <th class="text-center align-middle text-uppercase">OS</th>
              <th class="text-center align-middle text-uppercase">Browser</th>
              <th class="text-center align-middle text-uppercase">Device</th>
              <th class="text-center align-middle text-uppercase">
                <div class="btn-group float-right">
                  <?php if($find){?>
                    <button class="btn-sm trash trashall" data-tooltip="left" aria-label="Remove All Listed Results"><i class="i">purge</i></button>
                  <?php }else{?>
                    <button class="btn-sm purge trash" data-tooltip="left" aria-label="Purge All" onclick="purge('0','tracker');return false;"><i class="i">purge</i></button>
                  <?php }?>
                </div>
              </th>
            </tr>
          </thead>
          <?php
            if($find!=''){
              $s=$db->prepare("SELECT *, MAX(`ti`) AS `cti`, COUNT(`ip`) AS `v` FROM `".$prefix."tracker` WHERE LOWER(`urlDest`) LIKE LOWER(:find) OR LOWER(`urlFrom`) LIKE LOWER(:find) OR LOWER(`action`) LIKE LOWER(:find) GROUP BY `ip` ORDER BY `cti` DESC");
              $s->execute([':find'=>'%'.strtolower($find).'%']);
            }else{
              $s=$db->prepare("SELECT *, MAX(`ti`) AS `cti`, COUNT(`ip`) AS `v` FROM `".$prefix."tracker` GROUP BY `ip` ORDER BY `cti` DESC LIMIT 20");
              $s->execute();
            }
            $trackercnt=$s->rowCount();
            $cnt=$s->rowCount();?>
            <tbody id="l_tracker"<?=($trackercnt>0?' data-dbtot="'.$trackercnt.'"':'');?>>
              <tr id="more_0">
                <td colspan="9">
                  <div class="form-row load-more justify-content-center">
                    <script>
                      more('tracker','0','<?=(isset($args[1])&&$args[1]!=''?$args[1]:'');?>');
                    </script>
                  </div>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
      <?php require'core/layout/footer.php';?>
    </div>
  </section>
</main>
