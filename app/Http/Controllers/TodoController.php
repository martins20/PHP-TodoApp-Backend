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

    public function show ($todo_id) {
        $todo = $this->todo->find($todo_id);

        // handling error if todo does not exist
        if(!isset($todo)) return ['error'=>'todo does not exist'];

        // transform number bollean to true or false
        $todo['is_completed'] = (bool) $todo['is_completed'];

        return $todo;
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

        $response = $this->todo->create([
            'todo_name'=> $todo_name,
            'is_completed'=> $is_completed
        ]);

        return $response;
    }


    public function update ($todo_id, Request $request) {
        $todo_name = $request->input('todo_name');
        $is_completed = $request->input('is_completed');

        $todo = $this->todo->find($todo_id);

         // handling error if todo does not exist
         if(!isset($todo)) return ['error'=>'todo does not exist'];

        // Updating todo with request data
        $todo['todo_name'] = isset($todo_name) ? $todo_name : $todo['todo_name'];
        $todo['is_completed'] = isset($is_completed) ? $is_completed : $todo['is_completed'];

        // Update todo into database
        $todo->save();

        $todo['is_completed'] = (bool) $todo['is_completed'];

        return $todo;
    }
}
