<?php
include('page_header.php');
?>

<div style = "text-align:center">
<div class="container-fluid">
  <div class="row">
    <div id="col1" class=" col-xs-offset-1 col-xs-3">
    	<h1>司会者画面</h1>
<form name="timer"> <!--フォーム名はtimer-->
<input id="minute_timer" type="text" value="" size="1">分<!--elements[0]-->
<input id="second_timer" type="text" value="0" size="1">秒<br><!--elements[1]-->
<input id="start" type="button" value="スタート" onclick="cntStart();startShowing();"><!--elements[2]-->
<input id="stop" type="button" value="ストップ" onclick="cntStop();stopShowing();"><!--elements[3]-->
<input id="reset" type="button" value="リセット" onclick="reSet();resetShowing()"><!--elements[4]-->
</form><br>

<font>発表時間の設定</font>

<form>
<input type="button" value="5分" onclick="fm()"><!--elements[5]-->
<input type="button" value="10分" onclick="tm()"><!--elements[6]-->
<input type="button" value="15分" onclick="fifm()"><!--elements[7]-->
</form><br>

<p>チャイムの設定</p>
<p id="detail"><a onclick="soundTest()">このテキストを押すとチャイムが鳴る(音量チェック)</a></p>
<!--<p id="PassageArea">（ここにカウントが表示されます）</p>-->
<input id="PassageArea" type="hidden" value="">
<audio id="sound-file1" preload="auto">
<source src="../wav/chime1.wav" type="audio/wav">
</audio>

<audio id="sound-file2" preload="auto">
<source src="../wav/chime2.wav" type="audio/wav">
</audio>

<audio id="sound-file3" preload="auto">
<source src="../wav/chime3.wav" type="audio/wav">
</audio>

スタートから1回目のチャイムが鳴るまでの時間
<form name="chime1">
<input id="minute_chime1" type="text" valu="" size="2">分<!--elements[8]-->
<input id="second_chime1" type="text" valu="" size="2">秒<br><!--elements[9]-->
</form>
スタートから2回目のチャイムが鳴るまでの時間
<form name="chime2">
<input id="minute_chime2" type="text" valu="" size="2">分<!--elements[]-->
<input id="second_chime2" type="text" valu="" size="2">秒<br><!--elements[]-->
</form>
スタートから2回目のチャイムが鳴るまでの時間
<form name="chime3">
<input id="minute_chime3" type="text" valu="" size="2">分<!--elements[]-->
<input id="second_chime3" type="text" valu="" size="2">秒<br><!--elements[]-->
</form>

    </div><!--col1-->
    <div id="col2" class=" col-xs-offset-1 col-xs-7">
    	
    	<br><font style="font-size:50px">発表終了まで残り</font>
		<div id="display" style="text-align:center; font-size:150px">00:00</div>

    </div><!--col2-->
  </div><!--row-->
</div><!--container-->

<?php
include('page_footer.php');
?>