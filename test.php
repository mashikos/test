<?php
/* ����ɂ��́I */

echo "ID����͂��ĉ�����";
$id = trim(fgets(STDIN));
echo "�p�X���[�h����͂��ĉ�����";
$password = trim(fgets(STDIN));

if ($id != 'test' || $password != 'test') {
	echo 'ID�������̓p�X���[�h���Ⴂ�܂��B';
	exit;
}

echo "Hello World!!";
echo "�悤�����A$id����I". PHP_EOL;
echo "����". date("H:i:s"). "�ł��B". PHP_EOL;
echo "���̃v���O�����͊J�����ł��B". PHP_EOL;