<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goods = Good::query()->orderBy('id', 'desc')->paginate(6);

        return view('home', [
            'goods' => $goods,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function buyGood()
    {
        return view('home', ['goods' => Good::all()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category($id)
    {
        $goods = Good::query()->where('category_id', '=', $id)->get();
        return view('category', [
                'goods' => $goods,
            ]
        );
    }
}
