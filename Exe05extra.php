<?php

$qtd = $_POST['qtd'];
$nome = $_POST['nome'];

$qtd = doubleval($qtd); 

	if($qtd > 0) {

		echo "Seu nome é $nome e voce vai estudar $qtd de materia";

} else {

		echo "Insira um numero valido";
}


?>