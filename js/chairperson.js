var timer1; //タイマーを格納する変数（タイマーID）の宣言,グローバル変数（複数の関数で使用可）

//カウントダウン関数を1000ミリ秒毎に呼び出す関数
function cntStart(){
  document.timer.elements[2].disabled=true;//disabledがtrueなら禁止状態に、falseなら変更可能にする
  timer1=setInterval("countDown()",1000);//countDown()を1000ミリ秒毎に呼び出す
}

//タイマー停止関数
function cntStop(){
  document.timer.elements[2].disabled=false;
  clearInterval(timer1);//clearInterval(タイマーID)タイマーIDで指定されたsetIntervalタイマーを停止します。
}

//カウントダウン関数
function countDown(){
  var min=document.timer.elements[0].value;
  var sec=document.timer.elements[1].value;
  
  if( (min=="") && (sec=="") ){
    alert("時刻を設定してください！");
    reSet();
  }else{
  	//どちらかが空の場合、0にしておく
    if (min=="") min=0;
    min=parseInt(min);//文字列を整数に変換する
    
    if (sec=="") sec=0;
    sec=parseInt(sec);//文字列を整数に変換する
    
    tmWrite(min*60+sec-1);
  }
}

//残り時間を書き出す関数
function tmWrite(int){
  int=parseInt(int);
  
  if (int<=0){
    reSet();
    alert("時間です！");
     PassSec = 0; // カウンタのリセット
  document.getElementById("PassageArea").value="";
  document.getElementById("PassageArea").innerHTML ="（ここにカウントが表示されます）";
    clearInterval(PassageID);
  }else{
    //残り分数はintを60で割って切り捨てる
    var m=document.timer.elements[0].value=Math.floor(int/60);
    //残り秒数はintを60で割った余り
    var s=document.timer.elements[1].value=int % 60;
    if(document.getElementById){
    document.getElementById("display").innerHTML=m+":"+s;
	}
	chimeSet();
  }
}
function chimeSet(){
 var obj1 = document.getElementById("minute_chime1").value;//1回目のチャイムが鳴る分数
 var obj2 = document.getElementById("second_chime1").value;//1回目のチャイムが鳴る秒数
 var obj3 = document.getElementById("minute_chime2").value;//2回目のチャイムが鳴る分数
 var obj4 = document.getElementById("second_chime2").value;//2回目のチャイムが鳴る秒数
 var obj5 = document.getElementById("minute_chime3").value;//3回目のチャイムが鳴る分数
 var obj6 = document.getElementById("second_chime3").value;//3回目のチャイムが鳴る秒数
 var count = document.getElementById("PassageArea").value;//スタートボタンを押してからの経過秒数
 var obj12 = obj1*60+(obj2-1);
 var obj34 = obj3*60+(obj4-1);
 var obj56 = obj5*60+(obj6-1);
 if(obj12 == count ){
 	chimePlay1();
 }if(obj34 == count){
  chimePlay2();
 }if(obj56 == count){
  chimePlay3();
 }
}

//フォームを初期状態に戻す（リセット）関数
function reSet(){
  document.timer.elements[0].value="";
  document.timer.elements[1].value="0";
  document.timer.elements[2].disabled=false;
   if(document.getElementById){
    document.getElementById("display").innerHTML="00:00";
	}
  clearInterval(timer1);
} 

//element[0]の値を変更する関数
function fm(){
 document.getElementById("minute_timer").value="5";
}
function tm(){
 document.getElementById("minute_timer").value="10";
}
function fifm(){
 document.getElementById("minute_timer").value="15";
}

var PassSec; // 秒数カウント用変数
PassSec = 0;

// 繰り返し処理の中身
function showPassage() {
   PassSec++; // カウントアップ
   var msg = "ボタンを押してから " + PassSec + "秒が経過しました。"; // 表示文作成
   document.getElementById("PassageArea").value = PassSec; // 表示更新
}

// 繰り返し処理の開始
function startShowing() {
   //PassSec = 0; // カウンタのリセット
   PassageID = setInterval('showPassage()',1000); // タイマーをセット(1000ms間隔)
   //document.getElementById("start").disabled = true; // 開始ボタンの無効化
}

// 繰り返し処理の中止
function stopShowing() {
   clearInterval( PassageID ); // タイマーのクリア
   //document.getElementById("start").disabled = false; // 開始ボタンの有効化
}
function resetShowing(){
  PassSec = 0; // カウンタのリセット
  document.getElementById("PassageArea").value="";
  document.getElementById("PassageArea").innerHTML ="（ここにカウントが表示されます）";
  //document.getElementById("start").disabled = false;
  clearInterval(PassageID);
}

function soundTest(){
	// [ID:sound-file]の音声ファイルを再生[play()]する
	document.getElementById( 'sound-file1' ).play() ;
}
function chimePlay1(){
	// [ID:sound-file]の音声ファイルを再生[play()]する
	document.getElementById( 'sound-file1' ).play() ;
}
function chimePlay2(){
  // [ID:sound-file]の音声ファイルを再生[play()]する
  document.getElementById( 'sound-file2' ).play() ;
}
function chimePlay3(){
  // [ID:sound-file]の音声ファイルを再生[play()]する
  document.getElementById( 'sound-file3' ).play() ;
}