<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        // return "<h1> Home Page!!!</h1><a href='/about' >View the About Page</a> ";
        // Imagine weve laoded data fro the DB
        $ourName = "Lirone";
        $animals = ["Meosalot", "Barksalot", "Pursloud"];
        return view("homepage", ['name'=> $ourName, 'catname' => "Meowsalot", "allAnimals"=> $animals]);
    }

    public function aboutpage()
    {
        return "<h1> About Page!!!</h1><a href='/' >Back to home</a> ";
    }
}
