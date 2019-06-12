<?php 
	require_once 'classes/calculadora.php';	

	//Recuperar valores do form

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];


	//O objeto calculadora foi instanciado pela classe Calculadora a instância acessa os comportamentos pré-definidos.
	$calculadora = new Calculadora();


	//Setar Valores 
	$calculadora->setNumero1($numero1);
	$calculadora->setNumero2($numero2);

	$calculadora->somar();

	switch($operacao){
		case 'somar':
		$calculadora->somar();
		break;

		case 'subtrair':
		$calculadora->subtrair();
		break;

		case 'multiplicar':
		$calculadora->multiplicar();
		break;

		case 'dividir':
		$calculadora->dividir();
		break;


	}

	echo $calculadora->getTotal();

 ?>