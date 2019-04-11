<?php

TE AMO MANO, VC É LINDO

session_start();

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página
if(isset($_SESSION['login'])) {
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'cursos';
}
else {
	$pagina = "home";
}

switch ($pagina) {
	case "cursos": include 'views/cursos.php'; break;
	case "alunos": include 'views/alunos.php'; break;
	case "matriculas": include 'views/matriculas.php'; break;
	case "inserir_curso": include 'views/inserir_curso.php'; break;
	case "inserir_aluno": include 'views/inserir_aluno.php'; break;
	case "inserir_matricula": include 'views/inserir_matricula.php'; break;
	case "ranking": include 'views/ranking.php'; break;
	default: include 'views/home.php';
}

include "footer.php";

echo "Arquivo editado";
