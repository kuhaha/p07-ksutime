<?php
  session_start();
  include('page_header.php');
  require_once('db_inc.php');
  
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-2 " align="center">
    </div><!--col-->
    <div class="col-xs-9 ">
    <h2>学会情報</h2>
      <table style ="" class="table table-bordered">
<tr  class="info">
  <th>学会名</th>
  <th>主催者</th>
  <th>開催場所</th>
  <th>期間</th>
  <th>セッション</th>
</tr>
<?php
  $sql='SELECT * FROM tb_event';
        
  $rs=mysql_query($sql,$conn);
    if(!$rs)die('エラー:'.mysql_error());
  $row=mysql_fetch_array($rs);
  while($row){
    echo '<tr>';
    echo '<td>';
    $r=$row['eid'];
    echo '<a href="info.php?eid='.$row['eid'].'">'. $row['ename'].'</a>';
    //echo '<a href="schedule.php">'.$row['sociename'].'</a>';
    echo '</td>';
    echo  '<td>'.$row['host'].'</td>';
    echo  '<td>'.$row['place'].'</td>';
    echo '<td>'.$row['start'].'～'.$row['end'].'</td>';
    echo '<td>';
    echo '<a href="session.php?eid='.$row['eid'].'">学会詳細</a>';
    //echo '<a href="schedule.php">'.$row['sociename'].'</a>';
    echo '</td>';
    echo '</tr>';
    $row = mysql_fetch_array($rs) ;
  }
?>
</table>
    </div><!--col-->
    <div class="col-xs-1 ">

    </div><!--col-->
  </div><!--row-->
</div><!--container-->

<?php 
  include('page_footer.php');
?>