<?php

namespace TodoMaster\Http\Controllers;

use Illuminate\Http\Request;
use TodoMaster\Task;
use TodoMaster\SubCategory;

class TasksController extends Controller
{
    

    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $tasks = Task::all();
        $subcategories = SubCategory::all();
        return view('tasks.home',compact('tasks','subcategories'));
    }

    public function create(){
        $subcategories = SubCategory::all();
        return view('tasks.create',compact('subcategories'));

    }

    public function store(Request $request){
        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->sub_category_id = $request->input('sub_category_id');
        $task->save();

        return redirect()->route('tasks')->with('info','You have success fully added a task');
    }
}
