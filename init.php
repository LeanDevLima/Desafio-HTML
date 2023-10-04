<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $comentarios = $_POST["comentarios"];
    $senha = $_POST["senha"];

    header("Location: resultado_formulario.html?nome=$nome&idade=$idade&email=$email&genero=$genero&comentarios=$comentarios&senha=$senha");
    exit;
}
?>
