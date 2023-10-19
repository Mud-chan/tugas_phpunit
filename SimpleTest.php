<?php

use PHPUnit\Framework\TestCase;
require_once "Wordcount.php";
    class SimpleTest extends TestCase{
        public function testCountWords(){
            $Wc = new Wordcount();
            $TestSentence = "aku luwe pengen soto";
            $WordCount = $Wc->countWords($TestSentence);
            $this->assertEquals(4, $WordCount);
            // assertEquals berfungsi untuk membandingkan parameter pertama dengan parameter ke dua, jiak berhasil maka clas akan berjalan dengan sukses
        }
    }
?>