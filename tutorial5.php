<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 1</title>
</head>
<body>

    <!-- Q1 -->
    <!-- Create 4 variable that contain an integer, float, string, and boolean value.  Print the value of each variable in HTML table.  -->

    <div>
        <h3>Q1</h3> 
        <h3>Create 4 variable that contain an integer, float, string, and boolean value.  Print the value of each variable in HTML table.</h3>

        <?php
        $integer = 120;
        $float = 2.3345121;
        $string = "hi";
        $boolean = TRUE;
        ?>

        <table border = "1" width = "50%"  bgcolor = "#EC994B" summary = "This table provides store data types." >
        <caption><strong>Different Data Types</strong></caption>
        <thead>
            <tr>
                <th>Data Type</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Integer</td>
                <td><?php echo $integer ?>;</td>
            </tr>
            <tr>
                <td>Float</td>
                <td><?php echo number_format($float, 3) ?></td>
            </tr>
            <tr>
                <td>String</td>
                <td><?php echo $string ?></td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td><?php echo $boolean ?></td>
            </tr>
        </tbody>
        </table>
    </div>
    
    <div>
        <h3>Q2</h3> 
        <h3>Print the output in the browser.  Format the output so that a dollar sign appears before the money values.</h3>

        <?php
        $sales = 190000;
        $rent = 25000;
        $salary = 37500;
        $supplies = 410;
        $total = $rent+$salary+$supplies;		//Addition
        $operating_income = $sales-$total;		//Subtraction
        $net_income = $operating_income*0.60;	//Multiplication
        

        
        echo "<div align = 'center'>Book Store Operating Costs</div>";
        echo "Sales: <br>";
        echo '<pre>';
        echo "\tExpenses:<br><br>";
        echo "\t\tRent: "."\$$rent<br>";
        echo "\t\tSalary: "."\$$salary<br>";
        echo "\t\tSupplies: "."\$$supplies<br><br>";
        echo "\tTotal: "."\$$total<br>";
        echo "\tOperating Income: "."\$$operating_income<br>";
        echo "\tIncome after taxes(net): "."\$$net_income<br>";
        echo '</pre>';
        ?>

    </div>

    <div>
        <h3>Q3</h3>
        <h3>Create a form that requires users to key in the name and once the user submits the form, you are required to display a welcome message together the name.</h3>

        <?php
        if (empty($_POST['name']))
        { 
        ?>
        
        <form action = "<?php echo $_SERVER [ 'PHP_SELF' ]?>" method="post">
        Enter your name: <input type="text" name = "name" size="10">
        <input type ="submit" name="submit" value="Go">
        </form>
        
        <?php
        
    
        }
        
        
        else
        {
            $name = $_POST [ 'name' ];
            echo "Hi $name";
        }
        ?>

    </div>
    
    

</body>
</html>

