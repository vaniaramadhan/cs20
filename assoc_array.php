<!doctype html>
<html>
<head>
<style>
    body {
        line-height: 1rem;
        text-align: center;
        font-family: Verdana, sans-serif;
        margin-top: 75px;
    }
</style>
</head>

<body>
   <h2>Business Hours</h2> <br>

    <?php
    $hours = array(
        "Monday"=>"Closed", 
        "Tuesday"=>"Closed",
        "Wednesday"=>"9am-4pm",
        "Thursday"=>"9am-4pm",
        "Friday"=>"9am-12pm",
        "Saturday"=>"9am-4pm",
        "Sunday"=> "10am-3pm" 
        );

        foreach ($hours as $day=>$time) {
            echo "<div> <h3> $day </h3> <p> $time </p> <br> </div>";
          }
    ?>

	
</body>
</html>