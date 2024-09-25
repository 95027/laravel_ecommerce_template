<?php

namespace Modules\Brand\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Brand\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['brands'] = Brand::latest()->get();
        return view('brand::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand::create');
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

        $brand = Brand::create([
            'name' => $request->name,
        ]);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = time() . '_' . Str::random(18) . '.' . $file->getClientOriginalExtension();
            $filepath = $request->file('image')->storeAs('brands', $filename, 'public');

            Media::create([
                'mediable_type' => Brand::class,
                'mediable_id' => $brand->id,
                'file_name' => $filename,
                'file_path' => $filepath,
                'file_type' => 'brand',
            ]);
        }
        notify()->success('Brand created successfully...');
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('brand::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            return response()->json(['brand' => $brand]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);

        $brand = Brand::find($id);

        if (!$brand) {
            return notify()->error('requested brand not found');
        }

        $brand->update(['name' => $request->name]);

        if ($request->hasFile('image')) {
            $media = Media::where('mediable_type', Brand::class)->where('mediable_id', $brand->id)->first();

            if ($media) {
                $media->delete();
                Storage::delete('public/' . $media->file_path);
            }

            $file = $request->file('image');
            $filename = time() . '_' . Str::random(18) . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('brands', $filename, 'public');

            Media::create([
                'mediable_type' => Brand::class,
                'mediable_id' => $brand->id,
                'file_name' =>   $filename,
                'file_path' =>   $filepath,
                'file_type' =>   'brand',
            ]);
        }

        notify()->success('Brand updated successfully');
        return redirect()->back();
    }

    public function destroy($id)
    {
        try {
            $brand = Brand::find($id);
            if ($brand) {
                $brand->delete();
                $media = Media::where('mediable_type', Brand::class)->where('mediable_id', $brand->id)->first();
                if ($media) {
                    $media->delete();
                    Storage::delete('public/' . $media->file_path);
                }
                notify()->success('Brand deleted successfully!');
                return redirect()->back();
            }
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                notify()->warning('This brand is associated with other products...');
                return redirect()->back();
            }
            throw $e;
        }
    }
}
