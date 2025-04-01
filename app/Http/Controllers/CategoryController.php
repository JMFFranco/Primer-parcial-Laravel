<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Funcionalidad adicional para listar las categorias con estado true y que traigan los computadores asociados
        return Category::where("category_state", "ilike", "$request->state")
        ->with("computers")
        ->orderBy("id", "asc")
        ->get();
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json([
            "status" => true,
            "category" => $category
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json(["status" => true, "category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if ($category->update($request->all())) {
            return response()->json(["status" => true, "category" => $category]);
        }
        return response()->json(["status" => false, "category" => $category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return response()->json(["status" => true, "category" => $category]);
        }
        return response()->json(["status" => false, "category" => $category]);
    }
}
