<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Song</title>
</head>

<body>


    <?php
        if (empty($_GET['songName']) || empty($_GET['musicBy']) || empty($_GET['lysicsBy']))
            {
                echo 'Please fill in all items!';
                exit();
            };

        echo "Song Name: ", $_GET['songName'], "<br>";
        echo "Music By: ", $_GET['musicBy'], "<br>";
        echo "Lysics By: ", $_GET['lysicsBy'];

        print_r($_GET);

    ?>



    
</body>
</html>