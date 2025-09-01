<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    function show(Request $request)
    {
        return view('pages.news', ['news' => News::all()]);
    }

    function create(Request $request)
    {
        $new = new News;
        $new->name = $request->name;
        $new->desc = $request->desc;
        $new->visiable = $request->visible;
        $new->save();

        return redirect('news');
    }

    function delete(Request $request)
    {
        News::find($request->id)->delete();
        return redirect('news');
    }
}
