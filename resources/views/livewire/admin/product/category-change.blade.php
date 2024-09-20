<div>
    <div>
        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
            Category <abbr class="text-red-600">*</abbr></label>
        <select name="categoryId" required wire:model.live="categoryId"
            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
            <option selected value="" hidden>Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
            Sub-Category</label>
        <select name="subCategoryId"
            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
            <option selected value="" hidden>Sub-Category</option>
            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
    </div>
</div>
