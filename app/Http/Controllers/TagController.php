<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return $tag;
    }

    public function store()
    {
        $tag = new Tag();
        $tag->tag = Input::get('tag');
        $tag->save();
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->notes()->detach();
        $tag->destroy();
    }
}
