<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Pile ou face</title>
    </head>
    <body> 
        <form method="POST">
            <button value="1" name="lancer" class="lancer">Lancer</button> <!-- Le bouton lancer -->
        </form>
        <?php 
            if (isset($_POST['lancer']) && $_POST['lancer'] == 1) // Vérifie si le bouton est cliqué
            {
                $piece = rand(1, 2);    // Choisi au hasard entre pile et face
                if ($piece == 1)    // Si résultat est pile
                {
                    echo "<img src='images/pile.JPG' class='pile'>"; 
                    echo "<p class='result'>Pile</p>";
                } else {    // Si résultat est face
                    echo "<img src='images/face.JPG' class='face'>";
                    echo "<p class='result'>Face</p>";
                }
            } else {
                echo "<h1>Pile ou face ?</h1>";
            }
?></body>
</html>