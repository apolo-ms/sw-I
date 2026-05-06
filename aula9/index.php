<?php
$_MENU = [
    'Home' => '<h1>essa e a home do site<h1>',
    'Sobre' => 'sl.php',
    'Contato' => '<h1>meu contato: apoloprog@gmail.com <h1>',
    'Experiencia' => '<h1>minhas experiencias<h1>',
    'projetos' => '<h1>meus projetos<h1>',
];
?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> 
    <title></title> 
</head>

<header class="cabecario">
<?php
echo '<a class="logo"><img src="joia.avif" alt="Logo"></a>';

foreach($_MENU as $key => $value){
    echo '<a href="?page='.$key.'">'.$key.'</a> | ';
}
?> 
</header>

<body>     
<?php
$_pagina = $_GET['page'] ?? 'Home';

if(array_key_exists($_pagina, $_MENU)){
    
    if (file_exists($_MENU[$_pagina])) {
        include $_MENU[$_pagina];
    } else {
        echo $_MENU[$_pagina];
    }

} else {
    echo '<h1>Página não encontrada</h1>';
}
?>  
</body>
</html>
