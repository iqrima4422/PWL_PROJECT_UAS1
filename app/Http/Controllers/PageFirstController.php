<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;

class PageFirstController extends Controller
{
    
    function pageindex()
    {
        return view('PageFirst.pagefirst',['tittle' => ' Aplikasi E-Commers Barokah']);
    }

}
