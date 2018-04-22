<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view('categories.create')->with('categories', $categories);
    }

    public function store(CategoryRequest $request)
    {
    	$category = new Category;
        $category->name = $request->name;
    	$category -> save();
    	return redirect('categories/create');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories/create');
    }

}
