<!doctype html>
<html>
<body>
   
    <?php
    //if a number is provided, run the sequence
    if (isset($_GET['number'])) {

        $num = intval($_GET['number']);;
    
            $sequence = [];

            //if the input is 0 or 1, just display 0!
            $sequence[0] = 0;
            $sequence[1] = 1;
            
            if ($num >= 2){
                // generate # of fibonacci digits based on input
                for ($i = 2; $i < $num; $i++) {
                        // For other items, sum the last two items to get the next one
                        $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
                    }
                }
            

            $response = ["data" => $sequence];

            header('Content-Type: application/json');
            echo json_encode($response);
    }
    ?>
</body>
</html>
