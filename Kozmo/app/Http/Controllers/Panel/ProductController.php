<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use App\Model\Product;
use App\Http\Controllers\Controller;
use App\Model\UpCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);
        View::share('product', $product);
        return view('Kozmo.product.index');

    }public function create()
    {
        $upcategory= UpCategory::all();
        View::share('upcategory', $upcategory);
        return view('Kozmo.product.create');

    }
    public function create_post(Request $request)
    {

        $data = new Product();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->image = $request->image;
        $data->content = $request->content;
        $data->discount = $request->discount;
        $data->category_id = $request->category_id;

        $data->save();
        return redirect()->route('Kozmo.product.create');

    }
    public function remove($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('Kozmo.product.index');
    }
    public function edit($id)
    {
        $product=Product::find($id);
        View::share('$product',$product);
        return view('Kozmo.product.update');

    }


}
