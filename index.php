<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 90vh;
            margin: 0;
            font-size: 2rem;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Dark Matters";
        $read = true;

        if($read){
            $message = "You have read $name";
        }else {
            $message = "You have not read $name";
        }
    ?>
    <h1>
        <!-- <?php echo $message; ?> -->
        <?= $message; ?>
    </h1>
    
</body>
</html>