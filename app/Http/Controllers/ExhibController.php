<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use App\Models\Exhibition;

class ExhibController extends Controller
{
    function show(Request $request)
    {
        return view('pages.exhibitions', ['exhibs' => Exhibition::all()]);
    }

    function create(Request $request)
    {
        $exhib = new Exhibition;
        $exhib->name = $request->name;
        $exhib->desc = $request->desc;
        $exhib->date = $request->date;
        $exhib->visible = $request->visible;
        $exhib->save();

        return redirect('exhibitions');
    }

    function delete(Request $request)
    {
        Exhibition::find($request->id)->delete();
        return redirect('exhibitions');
    }
}
