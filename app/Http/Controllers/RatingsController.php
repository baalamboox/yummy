<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ratings;

class RatingsController extends Controller
{
    function create_rate(Request $req) {
        $ratings = new ratings();
        $ratings->complete_name = $req['complete_name'];
        $ratings->town = $req['town'];
        $ratings->rating = $req['rate'];
        $ratings->save();
        return redirect('/');
    }
}
