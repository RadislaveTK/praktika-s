<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Colection;

class ColectionsController extends Controller
{
    function show(Request $request)
    {
        return view('pages.collections', ['collections' => Colection::all()]);
    }

    function create(Request $request)
    {
        // Читаем содержимое файла и кодируем в base64
        $imagePath = $request->file('img')->getRealPath();
        $imageData = base64_encode(file_get_contents($imagePath));

        // Отправляем запрос в ImgBB
        $client = new \GuzzleHttp\Client([
            'verify' => false, // Отключаем проверку SSL
        ]);

        $response = $client->post('https://api.imgbb.com/1/upload', [
            'query' => [
                'key' => "b89e213d4c685e101359e9c8d0bd413e",
            ],
            'form_params' => [
                'image' => $imageData,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        if (!isset($result['success']) || !$result['success']) {
            return response()->json(['error' => 'Ошибка загрузки фото в ImgBB'], 500);
        }

        // dd($result['data']['url']);

        $colection = new Colection;
        $colection->name = $request->name;
        $colection->desc = $request->desc;
        $colection->img = $result['data']['url'];
        $colection->visiable = $request->visible;
        $colection->save();

        return redirect('collections');
    }

    function delete(Request $request)
    {
        Colection::find($request->id)->delete();
        return redirect('collections');
    }
}
