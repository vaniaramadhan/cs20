<!doctype html>
<html>
<head>
</head>
<body>
        <h1>Times Table</h1>
        <p>Enter a number</p>

        <form method="post" action="">
            <input type="number" name="input">
            <input type="submit">
        </form><br>

    <?php
        //check if a number was inputted
        if (isset($_POST['input'])){

            extract ($_POST);

            $s = "";
            
            //loop through times table and display math
            for($i = 1; $i <= 15; $i++){
                $s .= $input . " x " . $i . " = " . ($input * $i) . "<br>";
            }
                echo $s;
        }
    ?>

</body>
</html>