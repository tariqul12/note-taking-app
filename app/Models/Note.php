<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    private static $note;
    public static function newNote($requser)
    {
        self::$note =new Note();
        self::$note->title = $requser->title;
        self::$note->description = $requser->description;
        self::$note->added_by = auth()->user()->id;
        self::$note->save();
    }
    public static function updateNote($requser,$id)
    {
        self::$note = Note::find($id);
        self::$note->title = $requser->title;
        self::$note->description = $requser->description;
        self::$note->added_by = auth()->user()->id;
        self::$note->save();
    }
    public static function DeleteNote($id)
    {
        self::$note = Note::find($id);
        self::$note->delete();
    }
}
