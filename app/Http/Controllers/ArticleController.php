<?php

namespace App\Http\Controllers;

use App\Article;
use App\Events\Article\ArticleCreateEvent;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function create()
    {
        try {
            $obj = new Article;
            $obj->title = request('title');
            $obj->description = request('description');
            $obj->save();

            event(new ArticleCreateEvent($obj));
//            broadcast(new ArticleCreateEvent($obj));
            return response()->json([
                'msg' => 'ok shod'
            ]);
        } catch (\Exception $ex) {
            dd($ex);
            return response()->json([
                'error' => $ex
            ]);
        }
    }
}
