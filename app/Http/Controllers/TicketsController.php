<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class TicketsController extends Controller
{
    function showBuyForm(Request $request)
    {
        return view('pages.buy', ['exhibs' => Exhibition::all()]);
    }

    function create(Request $request)
    {
        $keys = array();
        for ($i = 0; $i < $request->count; $i++) {
            $ticket = new Ticket();
            $ticket->exhibition_id = $request->exhib_id;
            $ticket->key = bin2hex(random_bytes(5));
            $ticket->save();
            // $keys $ticket->key;
            array_push($keys, $ticket->key);
        }
        return response()->json(['success' => true, 'keys' => $keys]);
    }

    function showVerification(Request $request)  //   db125ab79e
    {
        $key = Ticket::where('key', $request->code);
        if ($key->count() > 0) {
            return response()->json(['success' => true, 'key' => $key]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
