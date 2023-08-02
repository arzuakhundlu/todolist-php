<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TodoList::get();
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
        $todolist = new TodoList();
        $todolist->fill($request->all());
        // $todolist->categories_id = auth()->  categ ->id;
        $todolist->save();
        return response()->json(['msg'=>'TodoList created successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return TodoList::find($id);
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
        $todolist = TodoList::find($id);
        $todolist->fill($request->all());
        $todolist->save();
        return response()->json(['msg'=>'TodoList upDate successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todolist = TodoList::find($id);
        $todolist->delete();
        return response()->json(['msg'=>'TodoList delete successfully']);
    }
}
