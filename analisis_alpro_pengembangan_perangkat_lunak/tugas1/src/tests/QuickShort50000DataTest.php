<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Markani\Tugas1\App\Algorithm;

final class QuickShort50000DataTest extends TestCase
{
    public function testAlgoithmQuickSortThirdCase(): void
    {
        // generate data
        $total_data = 50000;
        $data = [];
        for ($i = 0; $i < $total_data; $i++ ) {
            $data[] = $i+1;
        }
        $test_data = $data;
        shuffle($test_data);

        // mendeklarasikan objek
        $algorithm = new Algorithm();
        $sorted_data = $algorithm->quickSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }
}