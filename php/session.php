<?php
  session_start();
  include('page_header.php');
  require_once('db_inc.php');
  $eid = $_GET['eid'];
  if(isset($_SESSION['uid'])){
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-3 " align="center">
      <h3>ログインしています</h3>
       <a href="join.php">新規登録</a>
      <span>/</span>
      <a href="login.php">ログイン</a><br>
    </div><!--col-->
    <div class="col-xs-8 ">
    <h2>セッション情報</h2>
      <table style ="" class="table table-bordered">
<tr  class="info">
  <th>セッション名</th>
  <th>会場</th>
  <th>司会者</th>
  <th>期間</th>
  <th>セッション</th>
</tr>
<?php
  $sql="SELECT * FROM tb_event natural join tb_session where eid=$eid";
        
  $rs=mysql_query($sql,$conn);
    if(!$rs)die('エラー:'.mysql_error());
  $row=mysql_fetch_array($rs);
  $ename=$row['ename'];
  echo "<h3>$ename</h3>";
  while($row){
    echo '<tr>';
    echo '<td>';
    $r=$row['sid'];
    echo  $row['sname'];
    //echo '<a href="schedule.php">'.$row['sociename'].'</a>';
    echo '</td>';
    echo  '<td>'.$row['room'].'</td>';
    echo  '<td>'.$row['chair'].'</td>';
    echo '<td>'.$row['start_time'].'～'.$row['end_time'].'</td>';
    echo '<td>';
    echo '<a href="present.php?sid='.$row['sid'].'">セッション詳細</a>';
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
  }else{
?>
    <div class="container-fluid">
  <div class="row">
    <div class="col-xs-3 " align="center">
      <h3>ログインしていません</h3>
      <a href="join.php">新規登録</a>
      <span>/</span>
      <a href="login.php">ログイン</a><br>
      <br>システムを利用するには <h4><a href="login.php">ログイン</a></h4>が必要です。
    </div><!--col-->

<?php 
  }
  include('page_footer.php');

?>