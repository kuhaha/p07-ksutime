<?php
include('page_header.php');
?>

<title>TEST</title>
<h1>ログイン画面</h1>
<form action = "check.php" method = "post">
<table>
	<tr>
		<td>ユーザID</td>
		<td><input type = "text" name = "uid" ></td>
	</tr>
	<tr>
		<td>パスワード</td>
		<td><input type = "password" name = "pass" ></td>
	</tr>
</table>
<button type = "submit" value = "送信"><a>送信</a></button>
<button type = "reset" value = "取消"><a>取消</a></button>
</form>
<?php
include('page_footer.php');
?>