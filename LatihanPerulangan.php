<?php
        $rows = 10;

        for ($row = 1; $row <= $rows; $row++) {
            for ($col = 1; $col <= $row; $col++) {
                echo "*";
            }
            echo "<br>";
        }