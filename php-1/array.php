<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
        $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
        print_r ($kids);
        print_r($adults);
        
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " . sizeof($kids); // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " . sizeof($adults) ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";

        echo "<h3> Soal 3</h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $arrays = array(
            array(
                "Name" => "Will Byers",
                "Age" => 12,
                "Aliases" => "Will the Wise",
                "Status" => "Alive"
            ),
            array(
                "Name" => "Mike Wheler",
                "Age" => 35,
                "Aliases" => "Dungeon Master",
                "Status" => "Alive"
            ),
            array(
                "Name" => "Jim Hopper",
                "Age" => 43,
                "Aliases" => "Chief Hopper",
                "Status" => "Deceased"
            ),
            array(
                "Name" => "Eleven",
                "Age" => 12,
                "Aliases" => "El",
                "Status" => "Alive"
            )
        );
        
        $list = "";
        foreach($arrays as $array) {
            
            $list .= "Name: " . $array["Name"] . "<br>" .
                     "Age: " . $array["Age"] . "<br>" .
                     "Aliases: " . $array["Aliases"] . "<br>" .
                     "Status: " . $array["Status"] . "<br>" . 
                     "<br>";
        }

        echo $list;

    ?>
</body>
</html>