<?php

function GetConfig()
{
	$path = '/config/' . $config . '.php';
	return requireAbs($path);
}