<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Modules\Brand\Models\Brand;
use Modules\Product\Models\Product;
use Illuminate\Support\Str;
use Modules\Product\Models\ProductMetaTag;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['brands'] = Brand::latest()->get();
        $data['categories'] = [];
        $data['subCategories'] = [];
        $data['products'] = Product::with(['brand', 'category'])->latest()->get();

        return view('product::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'brandId' => 'required',
            'categoryId' => 'required',
            'short_description' => 'required',
            'mrp' => 'required',
            'sku' => 'required',
            'image' => 'required'
        ]);

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'mrp' => $request->mrp,
            'price' => $request->price,
            'sku' => $request->sku,
            'brandId' => $request->brandId,
            'categoryId' => $request->categoryId,
            'subCategoryId' => $request->subCategoryId,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(18) . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('products', $filename, 'public');

            Media::create([
                'mediable_type' => Product::class,
                'mediable_id' => $product->id,
                'file_name' => $filename,
                'file_path' => $filepath,
                'file_type' => 'product',
                'featured' => 1,
            ]);
        }

        if ($request->product_meta_title) {
            ProductMetaTag::create([
                'product_id' => $product->id,
                'product_meta_title' => $request->product_meta_title,
                'product_meta_description' => $request->product_meta_description,
            ]);
        }

        notify()->success('Prodcut created successfully');
        return redirect()->route('product.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        $data['brands'] = Brand::latest()->get();
        $data['categories'] = [];
        $data['subCategories'] = [];

        return view('product::edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
