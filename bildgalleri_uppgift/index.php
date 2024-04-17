<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bildgalleri</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>IMAGE GALLERY</h1>
    <div class="row">
        <?php
        $images = glob("bilder/*.*"); //glob() funktionen letar efter filer med liknande mönster som har angetts inom parantesen
        for($i=0; $i<count($images); $i++){ //en for loop som iterar genom varje bild
            $num = $images[$i]; // en variabel som har tilldelats resultaten av for loopen, själva sökvägen till bilderna
            echo "<div class='column'>"; //en div
            echo '<img src="' .$num. '" alt= "random image" />' . "<br /><br />"; //här visar den upp bilderna när man skriver echo 
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>