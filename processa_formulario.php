<?php
  $servername = "localhost";
  $username = "id21268358_treino";
  $password = "Qqwertyuiop1234!@";
  $dbname = "id21268358_teste";

  // Cria a conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica a conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }
  
  echo "Conexão bem sucedida!";



  // Dados que você deseja inserir
$nome = $_POST["nome"];
$idade = $_POST["idade"];
// ...

// Consulta de inserção
$sql = "INSERT INTO clente (nome, idade) VALUES ('$nome', '$idade')";
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
