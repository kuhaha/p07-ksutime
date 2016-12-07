<?php
  session_start();
  include('page_header.php');
  require_once('db_inc.php');
  $eid = $_GET['eid'];
  //echo $eid;
  $sql="SELECT * FROM tb_event WHERE eid=$eid";
        
  $rs=mysql_query($sql,$conn);
    if(!$rs)die('エラー:'.mysql_error());
  $row=mysql_fetch_array($rs);
  $ename = "";
  $host = "";
  if ($row){
    $ename = $row['ename'];
    $host = $row['host'];
    $detail = $row['detail'];
    $place = $row['place'];
    $start = $row['start'];
    $end = $row['end'];
  }

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-3 bg-info my-media-1"> </div>
    <div class="col-xs-6 my-media-2">
<h1>学会情報</h1>
<table style ="" class="table table-bordered">
  <tr><td>学会名</td><td><?php echo $ename;?></td></tr>
  <tr><td>主催者</td><td><?php echo $host;?></td></tr>
  <tr><td>詳細</td><td><?php echo $detail;?></td></tr>
  <tr><td>開催地</td><td><?php echo $place;?></td></tr>
  <tr><td>開催期間</td><td><?php echo $start.'～'.$end;?></td></tr>
  
</table>
    </div>
    <div class="col-xs-3 bg-warning my-media-3"> </div>
  </div>
</div>

<?php 
  include('page_footer.php');
?>