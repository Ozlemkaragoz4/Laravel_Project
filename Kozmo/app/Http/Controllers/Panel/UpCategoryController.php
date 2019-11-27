<?php

namespace App\Http\Controllers\Panel;

use App\Model\UpCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UpCategoryController extends Controller
{
   public function create()
   {
       $category=UpCategory::all();
       View::share('category',$category);
       return view('Kozmo.up_category.create');

   }
   public function create_post(Request $request)
   {
       $request->validate([
           'title'=>'required|string',
       ]);
       UpCategory::create($request->all());
       return redirect()->route('Kozmo.up_category.create');

   }
   public function index()
   {
       $category=UpCategory::all();
       View::share('category',$category);
       return view('Kozmo.up_category.index');
   }
   public function remove($id)
   {
       $category=UpCategory::find($id);
       $category->delete();
       return redirect()->route('Kozmo.up_category.index');
   }
   public function edit($id)
   {
       $up_category = UpCategory::find($id);
       View::share('up_category',$up_category);
       return view('Kozmo.up_category.update');
   }
   public function edit_post(Request $request, $id)
   {
       $up_category = UpCategory::find($id);
       $up_category->title = $request->title;
       $up_category->save();
       return redirect()->route('Kozmo.up_category.edit', $up_category->id);
   }

}
