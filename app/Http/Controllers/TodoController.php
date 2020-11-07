<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Todo $todo) {
        $this->todo = $todo;
    }

    public function index () {
        return $this->todo->all();
    }

    public function store (Request $request) {

        // Get todo_name of all request types
        $todo_name = $request->input('todo_name');

        // Throw a new error in response if todo_name don't exists
        if(!isset($todo_name)) return ['error'=>'todo_name is required'];

        // Get is_completed of all request types and if it don't exists false is default value
        $is_completed = $request->input('is_completed', false);


        $response = $this->todo->create($request->all());
        return $response;
    }
}
