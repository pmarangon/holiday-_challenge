<?php




    if ( isset($_POST['login']) && isset($_POST['senha']) ) {
        
       // cria conteudo para escrever no arquivo de texto
        $textoPublicar= "nome: ".$_POST['login']." cpf: ".$_POST['senha'];
       
       //cria o arquivo e grava
       $arquivo = fopen('feriadao_php.txt', 'w');
       fwrite($arquivo, $textoPublicar);
       fclose($arquivo);
       
    }
    
?>

<form method="post">
    <span style="font-family:lucida sans unicode,lucida grande,sans-serif">Nome:</span>
    <input type="text" name="login" style="height: 40px">
    </span>Cpf:</span>
    <input type="password" name="senha" style="height: 40px"><br></font>
    <button style="width:90px, height:40px">Enviar</button></center>
</form>