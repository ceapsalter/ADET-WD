<html>
    <head>
    </head>

    <body>
        <?php
            echo "<p style='color:blue;'>Ronal Crisostomo</p>";

        // or # single line comment
        /*
         multi line comment
        */

        //variable
        /*
        variable naming convetnion
            always start with $
            name of variable always start with alphanumeric and a _
        */
        $name = "Ronald";

        echo $name;

        //constant variable
        // first parameter = name;
        // seconed parameter = value;
        define("URL","www.facebook.com");

        echo "<br>";
        //to contatenate a string with a variable, use .
        echo "Visit this Site - " . URL;

        echo "<br>";
        print "Psalter Cea";

        //var_dump, print_r;
        echo "<br>";
        $names = array("Ronald","Psalter","Sir Neil");
        echo "<hr>";
        echo "Test print_r function";
        echo "<br>";
        print_r($names);

        echo "<hr>";
        echo "Test var_dump function";
        echo "<br>";
        var_dump($names);


        echo "<hr>";
        echo "Test gettype() function";
        echo "<br>";
        $num = 4;
        $name = "Tikoy";

        echo $num. "-".gettype($num);
        echo "<br>";
        echo $name. "-".GETTYPE($name);

        echo "<hr>";
        echo "Test strlen() function";
        echo "<br>";
        $address = "291 P Villanueve St. Lourdes Sur East AC";
        echo $address . " has : ".strlen($address)." characters";

        echo "<hr>";
        echo "Test str_word_count() function";
        echo "<br>";
        $address = "291 P Villanueva St. Lourdes Sur East AC";
        echo $address . " has : ".str_word_count($address)." words";

        echo "<hr>";
        echo "Test str_replace() function";
        echo "<br>";
        $address = "291 P Villanueva St. Lourdes Sur East AC";
        echo str_replace("Villanueva", "St. Tomas", $address)." words";

        echo "<hr>";
        echo "Test strrev() function";
        echo "<br>";
        $address = "291 P Villanueva St. Lourdes Sur East AC";
        echo strrev($address);

        echo "<hr>";
        echo "Aritmetic Operators";
        echo "<br>";
        $x = 10;
        $y = 8;
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x + $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";

        echo "<hr>";
        echo "Process and Assignment Operators";
        echo "<br>";
        $x = 10;
        $y = 8;
        echo $x += $y;
        echo "<br>";
        echo $x;
        echo "<br>";

        echo "<hr>";
        echo "Comparison Operator";
        echo "<br>";
        $x = 10;
        $y = 8;
        var_dump($x === $y);
        echo "<br>";
        var_dump($x<>$y);

        echo "<hr>";
        echo "Incrementing Decrementing";
        echo "<br>";
        $x = 10;
        $y = 8;
        echo ++$x;

        echo "<hr>";
        echo "Logical Operators";
        echo "<br>";
        $x = true;
        $y = true;
        var_dump($x xor $y);

        echo "<hr>";
        echo "Concatenation";
        echo "<br>";
        $x = "Ronald";
        $y = "Crisostomo";
        echo $x . $y;
        echo "<br>";
        $x .= $y;
        echo $x;

        echo "<hr>";
        echo "Arrays";
        echo "<br>";
        $agent = array("Skye","Sage","Yoru");
        var_dump($agent);
        echo "<br>";
        print_r($agent);
        echo "<br>";
        $agentSkills = array("Skye" =>"AsongPinoy","Sage" => "Repolyo","Yoru"=>"Tikoy");

        var_dump($agentSkills);
        echo "<br>";
        print_r($agentSkills);

        echo "<hr>";
        echo "Multidimensional Array";
        echo "<br>";

        $agentType = array(
            array(
                "agentname" => "Average Gobas",
                "skill" => "chokedart",
                "frags" => 32
            ),
            array(
                "agentname" => "Yoru",
                "skill" => "Tikoy",
                "frags" => 18

            ),
            array(
                "agentname" => "Skye",
                "skill" => "Aspin",
                "frags" => 3
            ),
        );

        echo "Agent :" . $agentType [0]["agentname"]. "Skill : " . $agentType [0]["skill"] . " Frags : " . $agentType [0]["frags"]  ;

        echo "<hr>";
        echo "Ternary Operator";
        echo "<br>";
        $age = 18;

        if($age >= 18){
            echo "Pwede na";
        }else{
            echo "Malamig ang rehas";
        }

        echo "<br>";
        echo ($age >= 40) ? "Middle Age" : ($age >= 21) ? "Adulthood" : "ATABS";

        echo "<hr>";
        echo "Date function";
        echo "<br>";
        echo date("D dS jS n M h-i-s A e z");

        echo "<hr>";
        echo "Sorting Array Functions";
        echo "<br>";

        $agent = array("Reyna","Sage","Sova","Breach","Brim");
        //ascending sort function
        sort($agent);
        var_dump($agent);
        echo "Ascending";
         echo "<br>";
        $frags = array(9,32,15,48,25,1);
        sort($frags);
        var_dump($frags);
         echo "<br>";
        $agent = array("Reyna","Sage","Sova","Breach","Brim");

        echo "Descending";
        echo "<br>";
        //descending sort function
        rsort($agent);
        var_dump($agent);
         echo "<br>";
        $frags = array(9,32,15,48,25,1);
        rsort($frags);
        var_dump($frags);
         echo "<br>";
        echo "Ascending Associative Array";
        echo "<br>";
        $agent = array("Reyna" => 39,"Sage"=>4,"Sova"=>28,"Breach"=>23,"Brim"=>6);
        //associative ascending sort function
        asort($agent);
        print_r($agent);
        echo "<br>";
        echo "Descending Associative Array";
        echo "<br>";
        $agent = array("Reyna" => 39,"Sage"=>4,"Sova"=>28,"Breach"=>23,"Brim"=>6);

        //associative descending sort function
        arsort($agent);
        print_r($agent);
        echo "<br>";

        echo "<hr>";
        echo "Loop - For Each";
        echo "<br>";
        $agents = array("Reyna","Sage","Sova","Breach","Brim");

        foreach($agents as $value){
            echo "Agent Name : " .$value;
        }
        echo "<br>";
        $frags = array(9,32,15,48,25,1);
        sort($frags);
        $totalsum = 0;
        foreach($frags as $value){
            $totalsum = $totalsum + $value;
            echo " ".$value;
        }
        echo "<br>";
        echo $totalsum;
        echo "<br>";
        $agent = array("Reyna" => 39,"Sage"=>4,"Sova"=>28,"Breach"=>23,"Brim"=>6);

        foreach($agent as $key => $value){
            echo $key . " with " . $value . " frags,";
        }

        echo "<hr>";
        echo "Function";
        echo "<br>";

        function displayAgentName(){
            echo "<br>";
            $agent = array("Reyna" => 39,"Sage"=>4,"Sova"=>28,"Breach"=>23,"Brim"=>6);

            foreach($agent as $key => $value){
                echo $key . " with " . $value . " frags,";
            }
        }

        displayAgentName();
?>
    </body>
</html>
