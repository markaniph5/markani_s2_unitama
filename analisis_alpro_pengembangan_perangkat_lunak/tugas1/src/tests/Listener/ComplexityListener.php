<?php

namespace Tests\Listeners;

use PHPUnit\Runner\AfterTestHook;
use PHPUnit\Runner\AfterLastTestHook;
use PHPUnit\Runner\TestHook;

class ComplexityListener implements AfterTestHook, AfterLastTestHook
{
    private array $complexity = [];

    public function executeAfterTest(string $test, float $time): void
    {
        // You can extend this to calculate complexity per method/class
        // For now, just store test durations (as a simple proxy)
        $this->complexity[$test] = $time;
    }

    public function executeAfterLastTest(): void
    {
        echo "\n\033[1;33m=== Test Complexity Summary ===\033[0m\n";
        foreach ($this->complexity as $test => $time) {
            $color = $time > 0.05 ? "\033[31m" : "\033[32m"; // red if slow, green if fast
            echo sprintf("%s%-60s : %.3fs\033[0m\n", $color, $test, $time);
        }

        echo "\033[1;33m===============================\033[0m\n";
    }
}
