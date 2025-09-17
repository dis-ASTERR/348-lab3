<!-- PHP multiplication table
 create PHP program that recieves a numbre and displays a multiplication table
 from 1 to the number. print column and row indexes in the table-->
<!DOCTYPE html>
<html>
    <head>
        <title>N-sized multiplication table</title>
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        <div class="center">
            <form method="post">
                <label for="num">Generate a multiplication table of size:</label>
                <input type="number" name="num">
                <input type="submit" value="Submit">
            </form>
            <?php
                $n = $_POST['num']+1; //snag from html element
                for ($i=0; $i<$n; $i++) { //row loop
                    echo "$i ";
                    // print i
                    for ($j=0;$j<$n; $j++) {
                        if ($i == 0) {
                            echo "$j ";
                        } else {
                            $temp = $j*$i;
                            echo "$temp ";
                        }
                        //if i = 0, print j
                        // else print values i*j
                    }
                    echo "<br>";
                    // start new row
                }

            ?>
        </div>
    </body>

 
</html>
 