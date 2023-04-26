<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tasks')
            ->join('users', 'tasks.user_id', '=', 'users.id')
            ->join('task_types', 'tasks.type_id', '=', 'task_types.id')
            ->join('task_priorities', 'tasks.priority_id', '=', 'task_priorities.id')
            ->join('task_status', 'tasks.status_id', '=', 'task_status.id')
            ->select('tasks.id', 'tasks.title', 'tasks.description', 'users.login', 'users.id as user_id', 'task_types.type', 'task_priorities.priority', 'task_status.status', 'task_status.id as status_id', 'tasks.created_at', 'tasks.updated_at')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            return  view('tasks.index')->with('tasks', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
