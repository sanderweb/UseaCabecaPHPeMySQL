<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Aliens Abduziram  o meu cachorro - Você viu o meu cachorro?</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Aliens Abduziram  o meu cachorro - Você viu o meu cachorro?</h2>
        <?php
            $primeiro_nome = $_POST['primeironome'];
            $sobre_nome = $_POST['sobrenome'];     
            $whe_it_heppened = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
            $how_many = $_POST['howmany'];
            $alien_description = $_POST['aliendescription'];
            $what_theydid = $_POST['whattheydid'];
            $fang_spotted =$_POST['fangspotted'];
            $email = $_POST['email'];
            $comment = $_POST['other'];
    
            echo 'Obrigado por enviar o formulário.<br/><br/>';
            echo 'Nome: '. $primeiro_nome.' '.$sobre_nome. '<br/>';
            echo 'Você foi sequestrado: '. $whe_it_heppened.'<br/>';
            echo 'E quanto tempo: '. $how_long . '<br/>';
            echo 'E você viu: '. $how_many. '<br/>';
            echo 'Descreva-os: ' . $alien_description .'<br/>';
            echo 'E fizeram com você? ' .$what_theydid. '<br/>';
            echo 'Bunda Rachada estava lá? ' .$fang_spotted. '<br/>';
            echo 'O seu endereço de e-mail é: ' . $email. '<br/>';
            echo 'Comentário... ' .$comment;
        ?>
</body>
</html>