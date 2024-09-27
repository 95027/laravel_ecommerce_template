<?php

namespace Modules\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::where('parentId', null)->latest()->get();
        $data['subCategories'] = Category::where('parentId', '!=', null)->latest()->get();
        return view('category::sub-category', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parentId' => 'required',
        ]);

        Category::create(['name' => $request->name, 'parentId'=> $request->parentId]);


        notify()->success('Sub Category created successfully');
        return back();
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subCategory = Category::find($id);

        if($subCategory){
            return response()->json(['subCategory' => $subCategory]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['parentId' => 'required', 'name' => 'required']);

        $subCategory = Category::find($id);

        if($subCategory){
            $subCategory->update($request->all());
            notify()->success('Sub category updated successfully');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subCategory = Category::find($id);

        if($subCategory){
            $subCategory->delete();
            notify()->success('Sub category deleted successfully');
        }
        return back();
    }
}
