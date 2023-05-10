<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Pile ou face</title>
    </head>
    <body> 
        <form method="POST">
            <button value="1" name="lancer" class="lancer">Lancer</button>
        </form>
        <?php 
            if (isset($_POST['lancer']) && $_POST['lancer'] == 1)
            {
                $piece = rand(1, 2);
                if ($piece == 1)
                {
                    echo "<img src='images/pile.JPG' class='pile'>";
                    echo "<p class='result'>Pile</p>";
                } else {
                    echo "<img src='images/face.JPG' class='face'>";
                    echo "<p class='result'>Face</p>";
                }
            } else {
                echo "<h1>Pile ou face ?</h1>";
            }
?></body>
</html>