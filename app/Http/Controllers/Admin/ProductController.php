<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getAllBrands()
    {
        return view('admin.pages.brands');
    }

    public function createBrand(Request $request)
    {

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

    public function updateBrand() {}

    public function deleteBrand() {}
}
