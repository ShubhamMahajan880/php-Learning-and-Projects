<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics of PHP - 2</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: lightgreen;
        margin: auto;
        padding: 20px;
        font-size: 20px;

    }
</style>

<body>
    <div class="container">
        <h1>Lets Proceed to Learn another part of PHP</h1>
        <p>Check you eligibiloty for the unique MIP Program</p>


        <?php
        // 7 - Conditional Statements in PHP
        $age = 25;
        if ($age < 45) {
            echo "You can attend the unique MIP Program";

        } else if ($age == 60) {
            echo "You can take any program free of cost ";
        } else if ($age == 30) {
            echo "You just need to double your age, man";
        } else if ($age == 25) {
            echo "Go and date a Girl ";
        } else {
            echo "You can't attend the MIP Program";
        }

        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 8 - Array a Special Variable in PHP 
        
        $mySkills = array("C", "C++", "Python", "Data Structures", "Algorithms", "HTML5", "CSS3", "JavaScript", "Bootstrap", "React JS", "Git", "WordPress", "Responsive Web Designs", "Landing Page Creation", "Blogging", "Dialog flow-AI");
        echo count($mySkills);//16 shows number of elements in array
        echo $mySkills[0];//C 
        
        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 9 - Loops in PHP - 
        // $x = 0;
        // while ($x <= 10) {
        //     echo "<br> The value of x is :";
        //     echo $x;//cointing from 0 to 10
        //     $x++;
        // }

        // while($x < count($mySkills)){
        //     echo "<br> The Values inside myskills is ";
        //     echo $myskills[$x];
        //     $x++;
        // }
        
        // do-while loops
        // $x = 20;
        // do {
        //     echo "<br> The value of x is: ";
        //     echo $x;
        //     $x++;
        // } while ($x <= 100);

        // For Loop - 
        
        // for ($c = 0; $c < 210; $c++) {
        //     echo "<br> The value of x here is : ";
        //     echo $c;
        // }

        // foreach loop 
        // foreach ($mySkills as $value) {
        //     echo "<br> The value is ";
        //     echo $value;
        // }

        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 10 - Functions in PHP
        // function Shubh()
        // {
        //     echo "I am placed in rtcampus pune";
        // }
        // Shubh()

            
        function use_numbers ($number){
            echo "<br> Number used here is ";
            echo $number;//56
        }
        use_numbers(56);
        use_numbers(469);
        use_numbers(1000);

// --------------------------------------------------------------------------------------------------------------------------------------------

    // 11 - Strings in PHP
    $str = "Shubham I Love You";
    echo $str."<br>";
    $lenn = strlen($str);
    echo "The length of above written string is ";
    echo $lenn;
    echo "<br> The length of above written string is ". $lenn."Thank You <br>";

    echo "The numbber of words in this string is ".str_word_count($str);

    echo "<br> The reversed of this string is ".strrev($str)."<br>Thank You <br>";

    echo "<br> The search for Love is in this string is ".strpos($str,"Love")."<br>Thank You <br>";//10

    echo "<br> The replaced word of Love is ".str_replace("Love","Miss",$str). "Thank You <br>";

    // --------------------------------------------------------------------------------------------------------------------------------------------














            ?>

    </div>
</body>

</html>