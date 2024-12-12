<!-- risultato.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title> Answer </title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);
        $materia = htmlspecialchars($_POST["materia"]);

        echo "<h1>Risultato</h1>";
        echo "<p>La materia preferita di $firstname $lastname è $materia.</p>";
    }
    ?>    
</body>
</html>
