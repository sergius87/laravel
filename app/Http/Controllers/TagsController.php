<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;

class TagsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function create()
	{
    	return view('tags.create');
    }

    public function store(TagRequest $request)
	{
    	$tag = new Tag;
    	$tag->name = $request->name;
    	$tag->save();
    	return redirect()->route('tags.create');
    }

    public function index()
	{
		$tags = Tag::orderBy('id', 'ASC')->paginate(5);
    	return view('tags.index')->with('tags', $tags);
    }

    public function destroy($id)
	{
    	$tag = Tags::find($id);
    	$tag->delete();
    	return redirect()->route('tags.index');
    }			
}
