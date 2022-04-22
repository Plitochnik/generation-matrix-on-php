<?php

    include "index.php";

    $line_user = $_POST['line'];
    $column_user = $_POST['column'];

    if (empty($line_user) || empty($column_user)) {
        echo '<h4>' . 'You missed something' . '</h4>';
    } else {
        
        $line = [];

        $count = 0;
        echo "<center>";
        echo '<h4>';
        for ($i = 1; $i <= $column_user * $line_user; $i++) {
            $line[$i] = rand(1, 9);
            echo $line[$i] . ' ';
            $count++;
            if ($count % $column_user === 0) {
                echo '<br>';
            }
        }
        echo '</h4>';
        echo '</center>';


        $sum = 0;
        $number_count = 0;
        $number_line = 0;
        foreach ($line as $result) {
            $sum += $result;
            $number_count++;
            if ($number_count % $column_user === 0) {
                $number_line++;
                echo 'Sum of ' . $number_line . ' line  = ' . $sum . '<br>';
                $sum = 0;
            }
        }


    }
