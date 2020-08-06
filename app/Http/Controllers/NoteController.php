<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return Note::orderBy('created_at', 'desc')->get();
    }

    public function show($id)
    {
        $note = Note::find($id);
        if ($note) {
            $tags = $note->tags()->get();
            $note['tags'] = $tags;
        }
        return $note;
    }

    public function store()
    {
        $note = new Note();
        $note->title = Input::get('title');
        $note->description = Input::get('description');
        $note->save();
        foreach (Input::get('tags') as $tag_id) {
            $note->tags()->attach($tag_id);
        }
    }

    public function tags($id)
    {
        $note = Note::find($id);

        return $note->tags()->get();
    }
}
