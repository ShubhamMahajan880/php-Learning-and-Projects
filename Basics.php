<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJ-Basics of PHP</title>
</head>

<body>
    <!-- 1 - Basiv Underdstanding of PHP - Syntax overview -->
    <div class="container">This is my first PHP website
        <?PHP

        echo "Let Start to learn PHP";
        ?>
        <?PHP
        define("PI", "3.1416");
        define("SHUBH", "18");
        echo "Hiii we belieev in your trust and honesty";

        // --------------------------------------------------------------------------------------------------------------------------------------------        
        
        //  2 - How to comment - Single Line Comment and MultiLine Comment in PHP
        // Secret Algorithm for hiding details of PHP - This is about basic understanding of Single Line Commnet
        /*
        This is
        about
        Understanding
        of Multi Line
        Comment
        */

        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 3 - Variales in PHP - using $ variable can be assign
        //  PHP is dynamic aloot languae where no need to mention type of variable. We can use it directly
        // PHP is a Case Insensitive Language where no need to alert for capital or small letters. dircty write function names, varibale names and everythinh.
        
        $variable1 = 35;
        $variable2 = 89;
        echo $variable1;//35
        echo $variable2;//89
        echo $variable1 + $variable2;//124
        
        // --------------------------------------------------------------------------------------------------------------------------------------------
        
        // 4 -Operators in PHP -
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
        

        ?>




    </div>



</body>

</html>