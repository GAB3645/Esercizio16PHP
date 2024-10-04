<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 


    function stampaTabella($col , $rig) {

        echo "<table border='2' style='border-collapse:collapse; border-color:aquamarine;'>";

        for ($i=0; $i < $col; $i++) { 

            echo "<tr>";

            for ($j=0; $j < $rig ; $j++) { 

                echo "<td> ({$i},{$j}) </td>";
                

            }

            echo "</tr>";
        }

        echo "</table>";

    }


    stampaTabella(5,5);


    ?>


</body>
</html>