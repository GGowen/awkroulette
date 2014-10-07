<?php

function GetConfig($config)
{
	$path = 'config/' . $config . '.php';
	return requireAbs($path);
}

function requireAbs($path)
{
	return require($_SERVER['DOCUMENT_ROOT'] . $path);
}