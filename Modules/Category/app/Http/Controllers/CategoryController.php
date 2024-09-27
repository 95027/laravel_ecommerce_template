<?php

namespace Modules\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::where('parentId', null)->latest()->get();
        return view('category::index', $data);
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
            'image' => 'required',
        ]);

        $category = Category::create(['name' => $request->name]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(18) . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('categories', $filename, 'public');

            Media::create([
                'mediable_type' => Category::class,
                'mediable_id' => $category->id,
                'file_name' => $filename,
                'file_path' => $filepath,
                'file_type' => 'category',
            ]);
        }

        notify()->success('Category created successfully');
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
        $category = Category::find($id);

        if ($category) {
            return response()->json(['category' => $category]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);

        $category = Category::find($id);

        if ($category) {
            $category->update(['name' => $request->name]);

            if ($request->hasFile('image')) {

                $media = Media::where('mediable_type', Category::class)->where('mediable_id', $category->id)->first();
                if ($media) {
                    $media->delete();
                    Storage::delete('public/' . $media->file_path);
                }
                $file = $request->file('image');
                $filename = time() . '_' . Str::random(18) . '.' . $file->getClientOriginalExtension();
                $filepath = $file->storeAs('categories', $filename, 'public');

                Media::create([
                    'mediable_type' => Category::class,
                    'mediable_id' => $category->id,
                    'file_name' => $filename,
                    'file_path' => $filepath,
                    'file_type' => 'category',
                ]);
            }

            notify()->success('Category updated successfully');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            $media = Media::where('mediable_type', Category::class)->where('mediable_id', $category->id)->first();
            if ($media) {
                $media->delete();
                Storage::delete('public/' . $media->file_path);
            }
        }
        notify()->success('Category deleted successfully');
        return back();
    }

    public function subCategory(){

        return view('category::sub-category');
    }
}
