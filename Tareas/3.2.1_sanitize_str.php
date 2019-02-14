<?php

	$cadena = "hola ***<x>como+estas!#$%&.,sdfas/|";

	echo $cadena."\n";	

	echo preg_replace('/[^A-Za-z0-9 ]/', '', $cadena)."\n";

?>
