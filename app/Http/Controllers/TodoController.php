<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{
    /**
     * Show index of todos
     */
    public function index()
    {
        $ts = auth()->user()->todos()->get();
        return view('todo.index', ['todos' => $ts]);
    }
}