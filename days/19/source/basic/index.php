<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Basic</title>
</head>
<body>
    <?php 
        echo "<h3>Variables</h3>";
        echo "Variable can be a string, number, float and boolean." . "<br />";

        // Global variables cannot access inside the function
        $number = 12;
        $float = 12.5;
        $string = "sample string";
        $boolean = true; // or false

        echo "This is a number: " . $number . "<br />";
        echo "This is a float/double: " . $float . "<br />";
        echo "This is a boolean: " . $boolean . "<br />";
        echo "This is a string: " . $string . "<br />";

        // Scope

        function myFunction() {
            echo $number;
            echo $float;
            echo $string;
            echo $boolean;
        }
        // myFunction(); // Will display error

        function newFuncWithGlobal() {
            global $number, $float, $string, $boolean;
            echo $number . '<br />';
            echo $float . '<br />';
            echo $string . '<br />';
            echo $boolean . '<br />';
        }
        // newFuncWithGlobal(); // Will display the value

        // PHP Constant

        echo "<h3>PHP Constant</h3>";

        define('Greetings', 'Welcome to my 100 days of Code.');

        echo Greetings . '<br />';

        // Concatenation

        echo "<h3>Concatenation</h3>";

        $txt1 = "Hello ";
        $txt2 = "World";

        $txt1 .= $txt2;
        $txt1 .= "<br />";
        echo $txt1;

        // If else, if else if statement

        echo "<h3>If, else statement</h3>";
        
        $time = date('H');

        if ( $time < '10' ) {
            echo "Have a good morning. <br />";
        }
        else if( $time < '20' ) {
            echo "Have a good day. <br />";
        }
        else {
            echo "Have a good night. <br />";
        }

        // Switch Statement

        echo "<h3>Switch Statement</h3>";

        $fav_color = 'black';

        switch ($fav_color) {
            case 'red':
                echo "Your favorite color is red!";
                break;
            case 'blue':
                echo "Your favorite color is blue!";
                break;
            case 'yellow':
                echo "Your favorite color is yellow!";
                break;
            case 'black':
                echo "Your favorite color is black!";
                break;
            
            default:
                echo "You don't have favorite color?";
                break;
        }

        // While loop

        echo "<h3>While loop</h3>";

        $index = 0;

        while ($index < 10) {
            echo $index . "<br />";
            $index++;
        }

        do {
            echo "Will Execute even the condition is false. <br/>";
            echo $index . "<br/>";
            $index++;
        } while ($index < 10);

        // For loop

        echo "<h3>For loop</h3>";

        for ($index=0; $index < 10; $index++) { 
            echo $index . "<br />";
        }

        for ($index=0; $index < 10; $index++) { 
            for ($index2=0; $index2 < 10-$index; $index2++) { 
                echo "&nbsp;";
            }
            for ($index1=0; $index1 < $index; $index1++) { 
                echo "* ";
            }
            echo "<br/>";
        }
        
        $cars = array('honda', 'bmw', 'hyundai', 'ford', 'tesla');

        foreach ($cars as $car) {
            echo $car . '<br/>';
        }

        // Function

        echo "<h3>Function</h3>";

        function family_name($fname) {
            echo "$fname Monsarvas <br/>";
        }

        family_name("James");
        family_name("Michael");

        function sum($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }

        echo "The sum is " . sum(5, 10);

        // Arrays

        echo "<h3>Arrays</h3>";

        $names = array("James", "Michael", "Lorenzo","Mharik");

        echo $names[0] . "<br />";

    ?>
    
</body>
</html>