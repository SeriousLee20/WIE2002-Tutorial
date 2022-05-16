<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 6</title>
</head>
<body>
    
<div>
    <h3>Q1</h3>
    <h3>1)	Write an HTML form that asks a user's age.  If he is not at least 21, tell him he's too young to vote and if he's 21 or older, tell him that he can vote.</h3>

    <?php

    if(empty($_GET['age']))
    {
    
    ?>

    <form action="<?php echo $_SERVER ['PHP_SELF']?>" method = "get">
    Please Enter Your Age: <input type = "text" name = "age" size = "2"> <input type = "submit" name = "submit" value = "Go">
    </form>

    <?php
    }

    else
    {

        $age = $_GET['age'];

        if($age > 20){
            echo "You reached the voting age...Please vote!";
        }

        else{
            echo "You haven't reached the voting age...Please wait patiently.";
        }
    }
    ?>
</div>

<div>
    <h3>Q2</h3>
    <h3>Write a program to know whether or not the current year is a leap year. Save file as leap.php</h3>

    <?php

    if(empty($_GET['year']))
    {

    ?>
    <form action="<?php echo $_SERVER ['PHP_SELF']?>" method = "get">
    Enter a year: <input type = "text" name = "year" size = "4"> 
    <input type="submit" name = "submit" value = "Go">
    </form>


    <?php
    }

    else
    {
        $year = $_GET['year'];
        $a = $year % 100;
        $b = $year % 400;
        $c = $year % 4;

       // echo "$year: $a $b $c ";
        if($year % 4 == 0){
            
            if($year % 100 == 0 && $year % 400 == 0 || !($year % 100 == 0)){
                echo "$year is a leap year.";
            }
        }
        else{
            echo "$year is not a leap year.";
        }
    }
    ?>
</div>

<div>
    <h3>Q4</h3>
    <h3>4)	Write a program to create a pyramid as shown below by using nested for loops.</h3>

    <div align = 'center'>
    <?php

        define("BASE", 7); 

        $n = 1;
        for($i = 0; $i < BASE / 2; $i++){  
            for($k = BASE / 2; $k >= $i; $k--){  
                echo "  ";  
            }  

            for($j = 1; $j <= $n; $j++){  
                echo "*";  
            }  
            echo "<br>";
            $n += 2;  
        } 
    ?>
    </div>
     

    
</div>

</body>
</html>

