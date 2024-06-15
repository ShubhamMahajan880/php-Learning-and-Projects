                PHP Basic Undertanding and Notes

1 - How PHP initilize using syntax -
    <?php
    echo "......";
    
    ?>

2 - How to comment - Single Line Comment and MultiLine Comment in PHP
        // Secret Algorithm for hiding details of PHP - This is about basic understanding of Single Line Commnet
        /*
        This is
        about
        Understanding
        of Multi Line
        Comment
        */    

3 - Variales in PHP - using $ variable can be assign
PHP is dynamic aloot languae where no need to mention type of variable. We can use it directly
PHP is a Case Insensitive Language where no need to alert for capital or small letters. dircty write function names, varibale names and everythinh.

4 -Operators in PHP -
        // Arithmatic Operator -
        echo "The value of variable 1 + variable 2 is : -";
        echo $variable1 + $variable2;//124
        echo "<br>";
        echo "The value of variable 1 - variable 2 is : -";
        echo $variable1 - $variable2;//54
        echo "<br>";
        echo "The value of variable 1 * variable 2 is : -";
        echo $variable1 * $variable2;//3115
        echo "<br>";
        echo "The value of variable 1 / variable 2 is : -";
        echo $variable1 / $variable2;//0.39325842696629
        echo "<br>";
        echo "The value of variable 1 % variable 2 is : -";
        echo $variable1 % $variable2;//35
        echo "<br>";

        // Assignment Operator - Assigning value to another variable using operaator
        $newVar = $variable1;
        echo "The Value of new variable is - ";
        echo $newVar;//35
        echo "<br>";
        $newVar += 1;
        echo "$newVar";//36
        echo "<br>";
        $newVar -= 1;
        echo "$newVar";//35
        echo "<br>";
        $newVar *= 2;
        echo "$newVar";//70
        echo "<br>";
        $newVar /= 2;
        echo "$newVar";//35
        echo "<br>";

        // Comparison Operator -
        // echo "<h1> Comparision Operators </h1>";
        // var_dump(condition) is use to check the given variable condition
        echo "The value of 1==4 is ";
        echo var_dump(1 == 4);//bool(false)
        echo "The value of 1!=4 is ";
        echo var_dump(1 != 4);//bool(true)
        echo "The value of 1>=4 is ";
        echo var_dump(1 >= 4);//bool(false)
        echo "The value of 1<=4 is ";
        echo var_dump(1 <= 4);//bool(true)
        echo "<br>";


        // Increment/Decrement Operator
        echo $variable1;//35
        echo "<br>";
        echo $variable1++; //35 - indicates that pahle variable print hoga uske baad add hoga. or add ho kr increase ho jaayga and print krenge to increased print hoga
        echo "<br>";
        echo $variable1;// 36 - ab jo add ho kr badha h vh print hoga
        echo "<br>";

        echo $variable2;//89
        echo "<br>";
        echo $variable2--;//89
        echo "<br>";
        echo $variable2;//88
        echo "<br>";

        echo $variable1;//36
        echo "<br>";
        echo ++$variable1;//37 -  ++ pahle he to pahle increment hoga phr print hoga
        echo "<br>";
        echo $variable1;//37 - check for updated value
        echo "<br>";

        echo $variable2;//88
        echo "<br>";
        echo --$variable2;//87 - -- he to pehle - hoha phr print hoga
        echo "<br>";
        echo $variable2;//87 - check for updated value
        echo "<br>";


        // Logical Operator
        // and (&&)
        $myVar = (true) and (true);
        echo var_dump($myVar);//bool(true)
        echo "<br>";

        $myVar = (false) and (true);
        echo var_dump($myVar);//bool(false)
        echo "<br>";


        // or (||)
        $myVar = (false or false);
        echo var_dump($myVar);//bool(false)
        echo "<br>";

        $myVar = (true or false);
        echo var_dump($myVar);//bool(true)
        echo "<br>";


        // XOR 
        $myVar = (true xor true);
        echo var_dump($myVar);//bool(false)
        echo "<br>";

        $myVar = (true xor false);
        echo var_dump($myVar);//bool(true)
        echo "<br>";

        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 5 - Datatypes in PHP -
        //1. String
        echo "<br> Datatypes <br>";
        $myVar = "THis is a Strings Naa";
        echo var_dump($myVar);// string(21) "THis is a Strings Naa"
        // First var_dump indicating type and its length then print insider value (myVar)
        echo "<br>";

        //2. INteger
        $myVar = 111;
        echo var_dump($myVar);
        echo "<br>";//int(111)
        
        //3. FLoat
        $myVar = 15.23;
        echo var_dump($myVar);//float(15.23)
        echo "<br>";

        //4. Boolean
        $myVar = true;
        echo var_dump($myVar);//bool(true)
        echo "<br>";
        //5. Array
        //6. Object
        
        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 6 - Constant in PHP - 
        echo PI;//3.1416
        // define("SHUBH","18");
        echo SHUBH;

        // --------------------------------------------------------------------------------------------------------------------------------------------
               

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















Some Notes -

i - PHP is dynamic aloot languae where no need to mention type of variable. We can use it directly
ii - PHP is a Case Insensitive Language where no need to alert for capital or small letters. dircty write function names, varibale names and everythinh.
iii - PHP uses echo""; to print anything.
iv - echo "<br>" ; is uses for inserting a new line in PHP.
v - HTML can directly implemented in PHP using respective tag syntax with echo. Ex - echo "<h1 Shubham Mahajan rtcamp Pune </h1>>";
vi - var_dump(condition) is use to check the given variable condition



















                                #Project

1 - form:post - is more secure than form:get. form:post is uses for send the hidden data - info and passwords all while form:get shows that data in url


