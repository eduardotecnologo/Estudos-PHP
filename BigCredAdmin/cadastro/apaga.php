<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$id = $_GET["id"];

$query = "DELETE FROM usuarios WHERE id=$id";
$resultado = mysql_query($query);
$linhas = mysql_affected_rows();

?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<?php

if (mysql_affected_rows() != 0) { //Menssagem Javascript
   echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Usuário Apagado com Sucesso!!!\");
             </script>
   ";
}else
      {
    echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Apagar Usuarios!!!\");
             </script>
  ";
}
rro
?>
  </body>
</html>