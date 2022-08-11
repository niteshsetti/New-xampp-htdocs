<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model1;

class students extends Controller
{
    public function posts()
    {
        $post= new Model1;
        $post->Name='Abhinash';
        $post->Email='abhinash.sathi2001@gmail.com';
        $post->Languages='Telugu';
        $post->Gender='Male';
        $post->Phone='9912383102';
        $post->Description='Hello My Name is Abhinash.Sathi';
        $post->Country='India';
        $post->Image='Myphoto.jpg';
        $post->save();
        echo "Data Inserted Successfully";
    }
    public function fetch(){
        $fetch=Model1::all();
        return response()->json([
            'students'=>$fetch,
        ]);
    }
}
