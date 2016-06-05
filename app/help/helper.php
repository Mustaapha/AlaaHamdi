<?php

 function getMainSetting($settingName)
{
	return \App\Main_setting::where('setting_name',$settingName)->get()[0]->value;

}

function countGallery()
{
	return count(\App\Gallery::all());

}

function countAdmins()
{
	return count(\App\User::all());

}

function countOrders()
{
	return count(\App\Order::all());

}

?>

