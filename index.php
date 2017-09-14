<!DOCTYPE html>
<head>

    <style>
        
        body {
            margin: 0;
            padding: 0;
            background-color: #2196F3;
            padding-top: 3em;
        }
        
        h1, h2, p {
            color: white;
            font-family: 'Helvetica', sans-serif;
            text-align: center;
        }
        
        h1 {
            font-size: 72px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 0;
        }
        
        h2 {
            color: #E3F2FD;
            margin-top: 0;
            font-weight: 300;
            margin-bottom: 2em;
        }
        
        #button {
            color: #2196F3;
            background-color: #fff;
            width: 240px;
            height: 60px;
            font-size: 18px;
            border: none;
            border-radius: 40px;
            text-transform: uppercase;
        }
        
        input {
            width: 200px;
            display: block;
            margin: 1em auto;
            border: none;
            padding: 0;
            background-color: #64B5F6;
            font-size: 48px;
            color: #BBDEFB;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
        }
        
        #php {
            display: table;
            margin: 2em auto;
            max-width: 300px;
            font-weight: bold;
            letter-spacing: 0.025em;
        }
        
        .accent {
            color: #FFCA28;
        }
        
        .home {
            position: fixed;
            top: 8px;
            right: 8px;
            text-align: center;
        }

        a {
            font-family: 'Lato', 'Helvetica', sans-serif;
            font-size: 12px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.2);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        
    </style>
    
</head>
<body>

    <div class="answer"><a class="home" href="../index.html">Back to homepage</a></div>
    
    <div class="main">
        <h1>Primer</h1>
        <h2>Find out if your number is a prime number</h2>

        <form id="getPrime">

        <input type="number" name="number" interval="1" min="2">
        <input id="button" type="submit" value="Check">
        </form>
    </div>
</body>

<?php

if ($_GET) {

    if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {

        $myNumber = $_GET['number'];

        $isPrime = true;

        $i = 2;

        while ($isPrime == true && $i < $myNumber) {

            $remainder = ($myNumber % $i);

            if ($remainder != 0) {

                $isPrime = true;

            } else {

                // Not a prime number

                $isPrime = false;

            }

            $i++;

        }

        if ($isPrime) {

            echo "<p id='php'><span class='accent'>Yes</span> the number ".$myNumber." is a prime number</p>";

        } else {

            echo "<p id='php'><span class='accent'>No</span> the number ".$myNumber." is not a prime number</p>";

        }

    } else {

        // User has submitted something that is not a positive whole number greater than 1

        echo "<p id='php'>Please enter a positive whole number</p>";

    }

}

?>
