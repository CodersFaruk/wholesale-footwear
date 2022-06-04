<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'category_name' => 'required|unique:categories|max:191',
            ]
        );

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('show.category');
    }

    public function show()
    {
        $categories = Category::all();
        return view('admin.category.show', compact('categories'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'category_name' => 'required|unique:categories|max:191',
            ]
        );

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('show.category');

    }
}
