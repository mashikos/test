<?php
// �Ƃ肠�����֐������[
function login($id, $password)
{
	if ($id == 'test' && $password == 'test') {
		return true;
	}
	
	return false;
}

function getDate()
{
	return date("Y-m-d H:i:s");
}