<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Aliens Abducted Me - Report an Abduction</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
        <?php
            $whe_it_heppened = $_POST['whnithappened'];
            $how_long = $POST['holong'];
            $alien_description = $POST['description'];
            $fang_spotted =$_POST['fangspotted'];
            $email = $_POST['email'];
    
            echo 'Obrigado por enviar o formulário.<br/>';
            echo 'Você foi sequestrado'. $whe_it_heppened;
            echo 'E se foram para'. $how_long . '<br/>';
            echo 'Descreva-os:' . $alien_description .'<br/>';
            echo 'Estava presa lá?' .$fang_spotted. '<br/>';
            echo 'O seu endereço de e-mail é' . $email;
            echo '<br/>';          
            
        ?>    

</body>
</html>