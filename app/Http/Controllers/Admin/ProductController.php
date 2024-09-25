<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductMetaTags;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $data['products'] = Product::with(['media', 'brand'])->latest()->get();
        $data['categories'] = Category::whereNull('parentId')->latest()->get();
        $data['subCategorys'] = Category::where('parentId', '!=', null)->latest()->get();
        $data['brands'] = Brand::latest()->get();
        return view('admin.pages.products.products', $data);
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

        // notify()->success('Category created successfully');
        session()->flash('status', 'success');
        session()->flash('message', 'Category created successfully');

        return redirect()->back();
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);

        if ($category) {
            return response()->json(['category' => $category]);
        }
    }

    public function updateCategory(Request $request, $id)
    {

        $request->validate(['name' => 'required']);

        $category = Category::find($id);
        if ($category) {
            $category->update(['name' => $request->name]);
        }

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
        // notify()->success('Category updated successfully');
        session()->flash('status', 'success');
        session()->flash('message', 'Category updated successfully');
        return redirect()->route('category');
    }

    public function deleteCategory(Request $request, $id)
    {
        try {
            $category = Category::find($id);
            if ($category) {
                $category->delete();

                $media = Media::where('mediable_type', Category::class)->where('mediable_id', $category->id)->first();

                if ($media) {
                    $media->delete();
                    Storage::delete('public/' . $media->file_path);
                }
                session()->flash('status', 'success');
                session()->flash('message', 'Category deleted successfully');
                // notify()->success('Category deleted successfully');
                return redirect()->back();
            }
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                session()->flash('status', 'warning');
                session()->flash('message', 'This category is associated with other products');
                // notify()->warning('This category is associated with other products');
                return redirect()->back();
            }
            throw $e;
        }
    }

    public function getSubCategory()
    {
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
            session()->flash('status', 'success');
            session()->flash('message', 'Sub-category created successfully');
            return redirect()->back();
        }

        session()->flash('status', 'error');
        session()->flash('message', 'Failed to create sub-category');
        return redirect()->back();
    }


    public function editSubCategory($id)
    {
        $subCategory = Category::findOrFail($id);
        if ($subCategory) {
            return response()->json(['subCategory' => $subCategory]);
        }
    }

    public function updateSubCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $subCategory = Category::find($id);
        if ($subCategory) {
            $subCategory->update(['name' => $request->name]);
        }
        session()->flash('status', 'success');
        session()->flash('message', 'Sub-category updated successfully');
        // notify()->success('Sub-category updated successfully');
        return redirect()->route('category.sub-category');

    }



    public function deleteSubCategory(Request $request, $id)
    {
        // Find the sub-category by ensuring it has a parent_id
        $subCategory = Category::where('id', $id)->whereNotNull('parentId')->first();

        if ($subCategory) {
            $subCategory->delete();
            session()->flash('status', 'success');
            session()->flash('message', 'Sub-category deleted successfully');
            // notify()->success('Sub-category deleted successfully');
            return redirect()->back();
        }

        notify()->error('Failed to delete sub-category or sub-category not found.');
        return redirect()->back();
    }


    public function createProduct(Request $request)
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
            ProductMetaTags::create([
                'product_id' => $product->id,
                'product_meta_title' => $request->product_meta_title,
                'product_meta_description' => $request->product_meta_description,
            ]);
        }

        // notify()->success('Prodcut created successfully');
        session()->flash('status', 'success');
        session()->flash('message', 'Product created successfully');

        return redirect()->route('product');
    }

    public function updateProduct(Request $request, $id)
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

        $product = Product::find($id);
        if ($product) {
            $product->update([
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
        }

        if ($request->hasFile('image')) {
            $media = Media::where('mediable_type', Product::class)->where('mediable_id', $product->id)->first();

            if ($media) {
                $media->delete();
                Storage::delete('public/' . $media->file_path);
            }

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
        session()->flash('status', 'success');
        session()->flash('message', 'Product updated successfully');
        return redirect()->route('product');

    }

    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            \DB::table('product_meta_tags')->where('product_id', $id)->delete();
            $product->delete();

            $media = Media::where('mediable_type', Product::class)->where('mediable_id', $product->id)->first();

            if ($media) {
                $media->delete();
                Storage::delete('public/' . $media->file_path);
            }

            session()->flash('status', 'success');
            session()->flash('message', 'Product deleted successfully');
            return redirect()->back();
        }
        session()->flash('status', 'error');
        session()->flash('message', 'Failed to delete product');
        return redirect()->back();
    }
}
