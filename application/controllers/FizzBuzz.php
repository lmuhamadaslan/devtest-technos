<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FizzBuzz extends CI_Controller
{
    public function __construct()
    {
        $node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
    }

    public function fizzbuzz($x, $y, $z)
    {
        // TO DO CODE
        /* 
        Problem:
        Silahkan melakukan perulangan angka dari 1 - 100
        jika angka tersebut merupakan kelipatan 2 , maka cetak nilai "Fizz"
        jika angka tersebut merupakan kelipatan 3 , maka cetak nilai "Buzz"
        jika angka bukan kelipatan 2 & 3, maka cetak angka tersebut

        Example Result:
        1, Fizz, Buzz, Fizz, 5, Fizz, 7, Fizz, Buzz, Fizz, 11, Fizz, 13, Fizz, Buzz, Fizz, 17, Fizz, 19, Fizz, Buzz, Fizz, 23, Fizz, 25, Fizz, Buzz, Fizz, 29, Fizz, 31, Fizz, Buzz, Fizz, 35, Fizz, 37, Fizz, Buzz, Fizz, 41, Fizz, 43, Fizz, Buzz, Fizz, 47, Fizz, 49, Fizz, Buzz, Fizz, 53, Fizz, 55, Fizz, Buzz, Fizz, 59, Fizz, 61, Fizz, Buzz, Fizz, 65, Fizz, 67, Fizz, Buzz, Fizz, 71, Fizz, 73, Fizz, Buzz, Fizz, 77, Fizz, 79, Fizz, Buzz, Fizz, 83, Fizz, 85, Fizz, Buzz, Fizz, 89, Fizz, 91, Fizz, Buzz, Fizz, 95, Fizz, 97, Fizz, Buzz, Fizz,
        */
        
        $x++;
        if ($x <= 100) {
            if ($x % 2 == 0) {
                $y++;
                echo " Fizz <br>";
            } else if ($x % 3 == 0) {
                $z++;
                echo " Buzz <br>";
            } else {
                echo $x . "<br>";
            }
            $this->fizzbuzz($x, $y, $z);
        }
    }

    public function show()
    {
        $data = $this->fizzbuzz(0, 0, 0);
        $this->load->view('fizzbuzz', $data);
    }
}
