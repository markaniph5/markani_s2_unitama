<?php
declare(strict_types=1);

namespace Markani\Tugas1\App;

class Algorithm {
    public function quickSort(array $arr): array {
        $n = count($arr);
        if ($n <= 1) {
            return $arr;
        }

        // choose pivot (middle element)
        $pivot = $arr[intdiv($n, 2)];

        $left = [];
        $equal = [];
        $right = [];

        foreach ($arr as $value) {
            if ($value < $pivot) {
                $left[] = $value;
            } elseif ($value > $pivot) {
                $right[] = $value;
            } else {
                $equal[] = $value;
            }
        }

        return array_merge($this->quickSort($left), $equal, $this->quickSort($right));
    }

    public function insertionSort(array $arr): array {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        return $arr;
    }
}