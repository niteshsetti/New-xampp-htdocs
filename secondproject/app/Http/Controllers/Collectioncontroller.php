<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Collectioncontroller extends Controller
{
    public function show(){
         return "<h1>Hello World</h1>";
    }
    public function come(){
       $collection=collect()->range(1,10);
       $a=$collection->slice(4);
       return $a;

    }
}
