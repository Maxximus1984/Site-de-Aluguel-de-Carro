<?php

include("config.php");

// Consulta os registros no banco de dados
$sql = "SELECT * FROM tb_carros";
$result = $conn->query($sql);

// Verifica se há registros
if ($result->num_rows > 0) {

} else {
    echo "Nenhum registro encontrado.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos</title>
    <link rel="stylesheet" href="interface.css">
</head>
<body>
    
    <!---Header-->

    <header>
        <a href="#" class="logo"><img src="images/logo.jpg"></a>
        
        <ul class="navbar">
            <li><a class="a" href="index.html">Homepage</a></li>
        </ul>

    </header>

    <!---Modelos-->

    <section class="modelos" id="modelos">
        
        <div class="heading">
            <span>Modelos a Alugar</span>

            <h1>Explore nossas melhores ofertas!</h1>
        </div>

        <div class="modelos-container">

        <?php

        include("config.php");
        
                $sql = $conn->query("SELECT * FROM tb_carros");
                echo "<div class='modelos-container'>";

                while ($row = $result->fetch_assoc()) {

                echo "<div class='box'>";
                echo "<div class='box-img'>";
                echo "<img src='img/{$row['img']}'>";
                echo "</div>";
                echo "<p>{$row['ano']}</p>";
                echo "<h3>{$row['modelo']}</h3>";
                echo "<h2>{$row['preço']}</h2>";
                echo "<a href='#' class='btn'>Alugar</a>";
                echo "</div>";

                }

                echo "</div>";

        ?>


           <!-- <div class="box">
                <div class="box-img">
                    <img src=src='img/{$row['img']}'>
                </div>
                <p>Ano</p>
                <h3>Modelo</h3>
                <h2>Preço</h2>
                <a href="#" class="btn">Alugar</a>
            </div> --> 

        </div>
        
    </section>

</body>
</html>