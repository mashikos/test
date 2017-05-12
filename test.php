<?php
/* こんにちは！ */

echo "IDを入力して下さい";
$id = trim(fgets(STDIN));
echo "パスワードを入力して下さい";
$password = trim(fgets(STDIN));

if ($id != 'test' || $password != 'test') {
	echo 'IDもしくはパスワードが違います。';
	exit;
}

echo "Hello World!!";
echo "ようこそ、$idさん！". PHP_EOL;
echo "今は". date("H:i:s"). "です。". PHP_EOL;
echo "このプログラムは開発中です。". PHP_EOL;