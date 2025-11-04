<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Markani\Tugas1\App\Algorithm;

final class SelectionShort1000DataTest extends TestCase
{

    public function testAlgoithmInsertionSortInputOneThaousandOutputAreEquals(): void
    {
        // generate 1000 data
        $total_data = 1000;
        $data = [];
        for ($i = 0; $i < $total_data; $i++ ) {
            $data[] = $i+1;
        }
        $test_data = $data;
        shuffle($test_data);

        // mendeklarasikan objek
        $algorithm = new Algorithm();
        $sorted_data = $algorithm->insertionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

    public function testAlgoithmInsertionSortInputTenThaousandOutputAreEquals(): void
    {
        // generate data
        $total_data = 10000;
        $data = [];
        for ($i = 0; $i < $total_data; $i++ ) {
            $data[] = $i+1;
        }
        $test_data = $data;
        shuffle($test_data);

        // mendeklarasikan objek
        $algorithm = new Algorithm();
        $sorted_data = $algorithm->insertionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

    public function testAlgoithmInsertionSortInputFivetyThaousandOutputAreEquals(): void
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
        $sorted_data = $algorithm->insertionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

    public function testAlgoithmSelectionSortInputOneThaousandOutputAreEquals(): void
    {
        // generate 1000 data
        $total_data = 1000;
        $data = [];
        for ($i = 0; $i < $total_data; $i++ ) {
            $data[] = $i+1;
        }
        $test_data = $data;
        shuffle($test_data);

        // mendeklarasikan objek
        $algorithm = new Algorithm();
        $sorted_data = $algorithm->selectionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

    public function testAlgoithmSelectionSortInputTenThaousandOutputAreEquals(): void
    {
        // generate data
        $total_data = 10000;
        $data = [];
        for ($i = 0; $i < $total_data; $i++ ) {
            $data[] = $i+1;
        }
        $test_data = $data;
        shuffle($test_data);

        // mendeklarasikan objek
        $algorithm = new Algorithm();
        $sorted_data = $algorithm->selectionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

    public function testAlgoithmSelectionSortInputFivetyThaousandOutputAreEquals(): void
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
        $sorted_data = $algorithm->selectionSort($test_data);
        $this->assertEquals($data[$total_data - 1], $sorted_data[$total_data - 1]);
    }

}