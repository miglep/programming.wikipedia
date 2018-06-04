<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
     public function labaDiena(){
        echo "laba diena";
    }
    public function labasVakaras($name){
        echo "Labas vakaras ", $name;
    }
public function turis($x, $y, $z){
    $turis=$x*$y*$z;
    $data=array(
        'turis'=>$turis,
        'aukstis'=>$x
    
    );
    return view('hello', $data);
    
   
}
}
    


