<?php
    //print_r($_GET);
    //include 'main.css';
    
    //$firstname = htmlspecialchars($_GET['first']);
    //$lastname = htmlspecialchars($_GET['last']);
    //$age = htmlspecialchars($_GET['age']);

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);




/*
    //$firstname = "Adriana";
    //$lastname = "Cranal";
    //$age = 18;
    if (isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"]))
    {
        if ($age >= 18)
        {
            echo "Hello " . $firstname . " " . $lastname . " " . "you are " . $age . " years old, and thus old enough to vote in the United States of America."; 
        }
        else 
        {
            echo "Hello " . $firstname . " " . $lastname . " " . "you are " . $age . " years old, and thus not old enough to vote in the United States of America."; 
        }
    }
*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can you vote Vote</title>
</head>
<body>
    <h1>Can you vote Vote?</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <br>

        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <br>

        <label for="age">Age :</label>
        <input type="text" id="age" name="age" autocomplete="off">

        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>

    <?php
    if (isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"]))
    {
        if (!empty($firstname) && !empty($lastname) && !empty($age))
        {
            if(is_numeric($age) && $age >= 0)
            {
                echo "Hello my name is " . $firstname . " " . $lastname . ".";
                echo "<br>";
                if ($age >= 18)
                {
                     echo "I am " . $age . " years old and I am old enough to vote in the United States.";
                     echo "<br>";
                     echo "I am aproxemently " . (($age * 365) - (18 * 365)) . " days older that the minimun requiered age to vote.";
                }
                else 
                {
                    echo "I am " . $age . " years old and I am not old enough to vote in the United States.";
                    echo "<br>";
                    echo "I have aproxemently " . (($age * 365) - (18 * 365)) * (-1) . " days until I can vote in the United States.";
                }
                //Calculate the days based on the number given for age (3rd sentence)

            }
            else
            {
                echo "Entered age is not a numaric term or a negitive number.";
            }
        }
        else
        {
            echo "You have not filled in all required fields.";
        }  
    }
    
/*
                    echo "Hello " . $firstname . " " . $lastname . " " . "you are " . $age . 
                        " years old, and thus not old enough to vote in the United States of America."; 
*/

    ?>
</body>

<footer> 
    <?php
        date_default_timezone_set("America/New_York");
        echo "<br>";
        echo "<br>";
        echo "Today is " . date("m/d/y") . "<br>";
    ?>
</footer>
