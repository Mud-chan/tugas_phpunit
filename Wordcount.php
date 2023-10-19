<?php 
class Wordcount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));
        // explode adalah fungsi php yang memiliki fungsi sebagai pemisah string. 
        // jadi sebuah string akan di pecahkan menurut tanda pisah yang di tentukan sendiri. 
        // jadi string yang telah di pecah, akan menjadi array
    }
}
?>