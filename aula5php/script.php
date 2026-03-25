<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
</head>
<body>
    <h1>media</h1>
    <main>
        <?php
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $media = (($n1 + $n2 + $n3 )/3);
        echo "<p>ola $nome $sobrenome sua media é: $media </p>";
        ?>
        

    </main>
</body>
</html>