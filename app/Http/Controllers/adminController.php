<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class adminController extends Controller
{
    public function addCategory(Request $request)
    {
        print_r($request->all());
        $category = new Category;
        $category->name = $request->categoryName;

        $image = $request->image;

        $imagename = time() . "." . $image->getClientOriginalExtension();

        $request->image->move('categoryImages', $imagename);

      

        $category->image = $imagename;

        $category->save();
        return redirect()->back();
    }

    public function getCategory(Request $request)
    {
        $data = Category::all();
        return view('admin.dashboard',['data'=>$data]);
    }
}
