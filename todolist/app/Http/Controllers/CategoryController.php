<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::with('todolist')->get();
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
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return response()->json(['msg' => 'Category created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Category::with('todolist')->find($id);
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
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        return response()->json(['msg'=> 'Category Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $category = Category::find($id);
       $category->delete();
       return response()->json(['msg' => 'Category Deleted successfully']);
    }
}
