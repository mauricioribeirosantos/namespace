<?php

	spl_autoload_register(function($nameClass){

		$dirClass = "class";
		//variável $filename que recebe o nome da pasta, concatenado á DIRECTORY_SEPARATOR (constante)
		//concatenado a $nameclass da função anonima conc a extenssão do arquivo .php
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

		if (file_exists($filename)) {
			require_once($filename);
		}

	});