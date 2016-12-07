<p>
   <input type="button" value="スタート" id="start" onclick="startShowing();" />
   <input type="button" value="ストップ" id="stop"  onclick="stopShowing();" />
   <input type="button" value="リセット" id="riset" onclick="resetShowing()">
</p>
<p id="PassageArea">（ここにカウントが表示されます）</p>

<script type="text/javascript">
var PassSec; // 秒数カウント用変数
PassSec = 0;

// 繰り返し処理の中身
function showPassage() {
   PassSec++; // カウントアップ
   var msg = "ボタンを押してから " + PassSec + "秒が経過しました。"; // 表示文作成
   document.getElementById("PassageArea").innerHTML = msg; // 表示更新
}

// 繰り返し処理の開始
function startShowing() {
   //PassSec = 0; // カウンタのリセット
   PassageID = setInterval('showPassage()',1000); // タイマーをセット(1000ms間隔)
   document.getElementById("start").disabled = true; // 開始ボタンの無効化
}

// 繰り返し処理の中止
function stopShowing() {
   clearInterval( PassageID ); // タイマーのクリア
   document.getElementById("start").disabled = false; // 開始ボタンの有効化
}
function resetShowing(){
  PassSec = 0; // カウンタのリセット
  document.getElementById("PassageArea").value="";
  document.getElementById("PassageArea").innerHTML ="（ここにカウントが表示されます）";
  document.getElementById("start").disabled = false;
  clearInterval(PassageID);
}
</script>