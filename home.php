<!--
Author: Anna-Maria Berezovski
Date: January 4, 2021
Description: This page is the first in sequence. data.php redirects to this page directly
             In this page, introductory information is displayed and a start button is shown
             to allow the user to go to sentences.php to rate the sentences
-->

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>日本語の文</title>
		<style>
			header{
				text-align:center;
				font-size: 40px;
				padding: 20px;
			}
			p{
				text-align: center;
				font-size: 20px;
				padding: 15px;
			}
			form{
				text-align: center;
				font-size: 20px;
				padding: 15px;
			}
	</style>
    </head>
<body>
	<header>ようこそ</header>
	<p>
		ようこそ！協力してくれてありがとうございます。これから日本語で10文表示されます。文ごとに合っていると思われる丁寧レベルを選択してください。
	</p>
	<p>
		Hello and thank you for helping! 10 sentences will be shown in Japanese. Please select which level of formality you think they are then submit. 
	</p>

	<form action="sentences.php" method="POST">
		<input type="submit" value="スタート">
	</form>
</body>
</html>
