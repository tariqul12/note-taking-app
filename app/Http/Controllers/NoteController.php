<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function create()
    {
        return view('dashboard.home.add');
    }
    public function store(Request $request)
    {
        Note::NewNote($request);
        return back()->with('message','note add Successfully');
    }
    public function edit($id)
    {
        return view('dashboard.home.edit',['note'=>Note::find($id)]);
    }
    public function update(Request $request,$id)
    {
        Note::UpdateNote($request,$id);
        return redirect('/dashboard')->with('message','note Update Successfully');
    }
    public function delete($id)
    {
        Note::DeleteNote($id);
        return redirect('/dashboard')->with('message','note Delete Successfully');
    }

}
