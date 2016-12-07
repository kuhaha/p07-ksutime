<?php
	include("page_header.php");
	include('db_inc.php');
	$pid = $_GET['pid'];
  //echo $eid;
  $sql="SELECT * FROM tb_present WHERE pid=$pid";
        
  $rs=mysql_query($sql,$conn);
    if(!$rs)die('エラー:'.mysql_error());
  $row=mysql_fetch_array($rs);
  $ename = "";
  $host = "";
  if ($row){
    $title = $row['title'];
    $presenter = $row['presenter'];
    $start_time = substr($row['start_time'],11,5);
    $end_time = substr($row['end_time'],11,5);
    echo '<h2>'.$title.'</h2>';
    echo '<h3>'.$presenter.'</h3>';
    echo '<h3>予定時刻 '.$start_time."~".$end_time.'</h3>';
  }
?>

<br><font style="font-size:50px">発表終了まで残り</font>
<div id="display" style="text-align:center; font-size:100px">00:00</div>
<?php
	include("page_footer.php");
?>