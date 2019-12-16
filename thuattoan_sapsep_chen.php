<?php
    function insertion_sort($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            $value = $arr[$i];
            $j = $i - 1;
            while ($j > 0 && $arr[$j] > $value) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $value;
        }
        return $arr;
    }

    $test_array = array(3, 0, 2, 5, -1, 4, 1);
    print_r(insertion_sort($test_array));
?>