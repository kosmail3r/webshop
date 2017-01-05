<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Goods;
use App\Categories;

class MainController extends Controller
{
    public function helloAction () {
        return view('hello');
    }

    public function indexAction () {
        $categories = Categories::all();

        return view('shop', ['categories' => $categories]);
    }

    public function categoryAction($id)
    {
        $categories = Categories::all();
        $goods = Categories::find($id)->goods;
        //$goods = categories::whereIn('id', $id)->goods->paginate(6);
        //$goods->paginate(6);
        return view('products', ['goods' => $goods, 'categories' => $categories]);
    }

    public function goodsAction()
    {
        $goods = Goods::all();
        $categories = Categories::all();
        return view('products', ['goods' => $goods, 'categories' => $categories]);
    }

    public function goodAction($id = null)
    {
        $goods = Goods::where('id', $id)->get();
        $categories = Categories::all();
        return view('single', ['goods' => $goods, 'categories' => $categories]);
    }
}
