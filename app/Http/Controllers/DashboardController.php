<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        return view('dashboard.home.index',['notes'=>Note::where('added_by',$id)->get()]);
    }
}
