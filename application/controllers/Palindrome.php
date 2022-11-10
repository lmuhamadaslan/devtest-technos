<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Palindrome extends CI_Controller
{
    public function index()
    {
        $wordList = [];
        $this->palindrome($wordList);
    }

    public function palindrome($x)
    {
        // TO DO CODE
        
        /* 
        Problem :
        Palindrome adalah kondisi dimana sebuah kata akan sama walau dibaca dari depan dan belakang
        Buatlah list kata seperti :
        Aku, KaMu , MalAm , isi, 'string kosong'

        Jika sebuah kata sama walau dibaca dari depan dan belakang, maka kata itu adalah palindrome,
        Jika sebuah kata tidak sama dibcaca dari depan dan belakang, maka kata itu bukan palindrome,
        Jika sebuah kata adalah string kosong , maka bukan palindrome

        Example Result:
        Aku bukan palindrome , KaMu bukan palindrome , MalAm adalah palindrome , isi adalah palindrome , bukan palindrome ,
        */

        $wordList = ['Aku', 'KaMu', 'MalAm', 'isi', ''];
        $x++;
        if ($x < count($wordList)) {
            $word = $wordList[$x];
            $wordReverse = strrev($word);
            if ($word == $wordReverse) {
                echo $word . " adalah palindrome <br>";
            } else {
                echo $word . " bukan palindrome <br>";
            }
            $this->palindrome($x);
        }
    }
}
