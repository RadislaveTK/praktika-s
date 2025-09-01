<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    function showBuyForm(Request $request)
    {
        return view('pages.buy');
    }
}
