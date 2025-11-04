<?php
declare(strict_types=1);

namespace Markani\Tugas1\App;

class Algorithm {
    public function selectionSort(array $arr): array {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            if ($minIndex !== $i) {
                [$arr[$i], $arr[$minIndex]] = [$arr[$minIndex], $arr[$i]];
            }
        }
        return $arr;
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