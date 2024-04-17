<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="./css/upload.css">
</head>

<body>
    <form action="#" method="POST" enctype="multipart/form-data">

        <div class="filebox">
            <input type="file" name="fileup"><br>
            <input type="submit" name="sub" value="Upload">
        </div>
    </form>


    <?php
    if(isset($_POST['sub'])){
        $target_dir = "bilder/"; // target directory, sökvägen till där bilderna ska sparas när man trycker på knappen "upload"
        $target_file = $target_dir . basename($_FILES['fileup']['name']); //sammansätter target directory och filerna som ska laddas upp
        $uploadOk = 1; //kollar ifall det går att ladda upp

        if($uploadOk == 0){ //om det inte går, då ska den echo ut en statement som säger "error"
            echo "Error";
        }

        else{ //annars om uppladdningen har lyckats, då laddas filen upp
            if(move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file)){
                echo "<div class= 'img_up'>";
                echo "<img src= '". $target_file . "'>";
                echo "</div>";
            }
        }

        //if statement nedan har ett villkor vilket är att om filen inte möter det bestämda fil formaten (jpg, gif eller png), 
        //så ska den skicka ut en error statement
        if ($target_file != ".jpeg" && $target_file != ".png" && $target_file != ".gif"){ 
            echo "<div class= 'file_text'>"; 
            echo "File not supported";
            echo "</div>";
        }

    }

?>
</body>
</html>