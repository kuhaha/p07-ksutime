<?php
  session_start();
  include('page_header.php');
  require_once('db_inc.php');
  $sid = $_GET['sid'];
  if(isset($_SESSION['uid'])){
    $uname = $_SESSION['uname'];
    $uid = $_SESSION['uid'];
    $urole = $_SESSION['urole'];
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
    <h2>発表情報</h2>
      <table style ="" class="table table-bordered">
<tr  class="info">
  <th>発表タイトル</th>
  <th>発表者</th>
  <th>開始時刻</th>
  <th>終了時刻</th>
  <th>発表詳細</th>
</tr>
<?php
  $sql="SELECT s.sname,s.sdetail,p.* FROM tb_session s, tb_present p where s.sid=p.sid and s.sid=$sid";
   //echo $sql;     
  $rs=mysql_query($sql,$conn);
    if(!$rs)die('エラー:'.mysql_error());
  $row=mysql_fetch_array($rs);
  $sname=$row['sname'];
  $sdetail=$row['sdetail'];
  echo "<h3>$sname($sdetail)</h3>";
  while($row){
    $p_uid=$row['p_uid'];
    echo '<tr>';
    echo '<td>'.$row['title'] . '</td>';
    echo '<td>'.$row['presenter'].'</td>';
    
    echo '<td>'.$row['start_time'].'</td>';
    echo '<td>'.$row['end_time'].'</td>';
    echo '<td>';
    echo '<a href="presenter.php?pid='.$row['pid'].'">発表詳細</a>';
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