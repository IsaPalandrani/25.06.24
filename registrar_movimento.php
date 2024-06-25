<?php

//require_once('./conectorMySQL.php');

$nome_peca = $_GET['nome_peca'];
$cor_peca = $_GET['cor_peca'];
$coluna = $_GET['coluna'];
$linha = $_GET['linha'];

echo '$nome_peca: ' .$nome_peca."<br/>";
echo '$cor_peca: ' .$cor_peca."<br/>";
echo '$coluna: ' .$coluna."<br/>";
echo '$linha: ' .$linha."<br/>";

?>