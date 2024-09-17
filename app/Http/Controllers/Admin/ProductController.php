<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $data['products'] = Product::with('media')->latest()->get();
        return view('admin.pages.products.products', $data);
    }

    public function getAllBrands()
    {
        $data['brands'] = Brand::with('media')->latest()->get();
        return view('admin.pages.products.brand', $data);
    }

    public function createBrand(Request $request)
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

    public function updateBrand()
    {
    }

    public function deleteBrand(Request $request, $id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->delete();
            $media = Media::where('mediable_type', Brand::class)->where('mediable_id', $id)->first();
            if ($media) {
                $media->delete();
            }
            notify()->success('Brand deleted successfully');
            return redirect()->back();
        }
        notify()->error('Brand not found!');
        return redirect()->back();
    }

    public function getAllCategories()
    {
        $data['categorys'] = Category::with('media')->whereNull('parentId')->latest()->get();
        return view('admin.pages.products.category', $data);
    }

    public function createCategory(Request $request)
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

        return redirect()->back();
    }

    public function updateCategory($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function deleteCategory(Request $request, $id)
    {

        $category = Category::find($id);

        if ($category) {
            $category->delete();

            $media = Media::where('mediable_type', Category::class)->where('mediable_id', $id)->first();

            if ($media) {
                $media->delete();
            }
            notify()->success('Category deleted successfully');
            return redirect()->back();
        }
        notify()->error('Category not found');
        return redirect()->back();
    }

    public function getSubCategory()
    {
        // $data['parentCategorys'] = Category::where('parentId', null)->get();
        $data['SubCategorys'] = Category::where('parentId', '!=', null)->latest()->get();
        $data['categorys'] = Category::where('parentId', null)->latest()->get();
        return view('admin.pages.products.sub-category', $data);
    }

    public function createSubCategory(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'name' => 'required',
        ]);

        $subCategory = Category::create([
            'name' => $data['name'],
            'parentId' => $data['parent_category_id'],
        ]);
        if ($subCategory) {
            notify()->success('Sub-category created successfully');
            return redirect()->back();
        }
        notify()->error('Failed to create sub-category');
        return redirect()->back();

    }

    public function deleteSubCategory(Request $request, $id)
    {
        $subCategory = Category::find($id);
        if ($subCategory) {
            $subCategory->delete();
            notify()->success('Sub-category deleted successfully');
            return redirect()->back();
        }
        notify()->error('Failed to delete sub-category');
        return redirect()->back();
    }


    public function createProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'sku' => 'required|numeric',
            'categoryId' => 'required|numeric',
            'brandId' => 'required|numeric',
            'subCategoryId' => 'required|numeric',
        ]);

        dd($request);

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'mrp' => $request->mrp,
            'price' => $request->price,
            'sku' => $request->sku,
            'brandId' => $request->brandId,
            'categoryId' => $request->categoryId,
            'subCategoryId' => $request->subCategoryId,
        ]);

        dd($product);
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
            ]);
        }
        notify()->success('Prodcut created successfully');

        return redirect()->back();
    }

}
