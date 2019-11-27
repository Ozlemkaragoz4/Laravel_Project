<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use App\Model\UpCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function create()
    {
        $category = UpCategory::all();
        View::share('category', $category);
        return view('Kozmo.category.create');

    }

    public function create_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'up_category_id' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('Kozmo.category.create');


    }
    public function index()
    {
        $category=Category::all();
        View::share('category', $category);
        return view('Kozmo.category.index');


    }
    public function remove($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('Kozmo.category.index');

    }
    public function edit($id)
    {
        $varsayilan=Category::find($id);
        View::share('varsayilan',$varsayilan);
        $category=Category::all();
        View::share('category',$category);
        return view('Kozmo.category.update');

    }
    public function edit_post(Request $request,$id){
        $category=Category::find($id);
        $category->up_category_id=$request->up_category_id;
        $category->title=$request->title;
        $category->save();
        return redirect()->route('Kozmo.category.index');
    }


}
