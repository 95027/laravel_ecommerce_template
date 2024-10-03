@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>Products</h4>
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="{{ route('admin.dashboard') }}">
                            Home
                        </a>
                        <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="10" height="10"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-xs font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="{{ route('product.index') }}">
                            Products
                        </a>
                        <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="10" height="10"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-xs font-semibold text-blue-600 truncate dark:text-neutral-200"
                        aria-current="page">
                        Add Products
                    </li>
                </ol>
            </div>
        </div>


        <form id="add-product" data-parsley-validate action="{{ route('product.store') }}" method="POST"
            onsubmit="jsValidator('add-product')" enctype="multipart/form-data">
            @csrf
            <div class="border-b border-gray-200">
                <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                    <button type="button"
                        class="step-tab w-1/3 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                        id="tabs-with-icons-item-1" aria-selected="true" data-hs-tab="#tabs-with-icons-1"
                        aria-controls="tabs-with-icons-1" role="tab">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        General Information
                    </button>
                    <button type="button"
                        class="step-tab w-1/3 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                        id="tabs-with-icons-item-2" aria-selected="false" data-hs-tab="#tabs-with-icons-2"
                        aria-controls="tabs-with-icons-2" role="tab">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="10" r="3"></circle>
                            <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                        </svg>
                        Images
                    </button>
                    <button type="button"
                        class="step-tab w-1/3 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                        id="tabs-with-icons-item-3" aria-selected="false" data-hs-tab="#tabs-with-icons-3"
                        aria-controls="tabs-with-icons-3" role="tab">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Inventory
                    </button>
                    <button type="button"
                        class="step-tab w-1/3 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                        id="tabs-with-icons-item-4" aria-selected="false" data-hs-tab="#tabs-with-icons-4"
                        aria-controls="tabs-with-icons-4" role="tab">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Pricing
                    </button>
                    <button type="button"
                        class="step-tab w-1/3 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                        id="tabs-with-icons-item-5" aria-selected="false" data-hs-tab="#tabs-with-icons-5"
                        aria-controls="tabs-with-icons-5" role="tab">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Product Meta
                    </button>
                </nav>
            </div>

            <div class="mt-3">
                <div id="tabs-with-icons-1" role="tabpanel" class="step-content"
                    aria-labelledby="tabs-with-icons-item-1">
                    <div
                        class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                        @livewire('admin.product.category-change')
                    </div>
                </div>
                <div id="tabs-with-icons-2" class="hidden step-content" role="tabpanel"
                    aria-labelledby="tabs-with-icons-item-2">
                    @livewire('admin.product.image-gallery')
                </div>
                <div id="tabs-with-icons-3" class="hidden step-content" role="tabpanel"
                    aria-labelledby="tabs-with-icons-item-3">
                    <div
                        class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                        <div class="rounded-2xl p-8 grid grid-cols-2 gap-2">
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">SKU
                                    <abbr class="text-red-600">*</abbr></label>
                                <input type="text" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="SKU123" name="sku">
                            </div>
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Stock
                                    <abbr class="text-red-600">*</abbr></label>
                                <input type="number" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="10" name="quantity">
                            </div>
                            {{-- <div class="max-w-full">
                                <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Sale
                                    Price</label>
                                <input type="number" id="input-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="799">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div id="tabs-with-icons-4" class="hidden step-content" role="tabpanel"
                    aria-labelledby="tabs-with-icons-item-4">
                    <div
                        class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Price
                                    <abbr class="text-red-600">*</abbr></label>
                                <input type="number" name="mrp" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="999">
                            </div>
                            <div class="max-w-full">
                                <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Sale
                                    Price</label>
                                <input type="number" name="price" id="input-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="799">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-icons-5" class="hidden step-content" role="tabpanel"
                    aria-labelledby="tabs-with-icons-item-5">
                    <div
                        class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                        <div class="max-w-full mb-4">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Meta
                                Title</label>
                            <input type="text" id="input-label"
                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                placeholder="Product Meta Title" name="product_meta_title">
                        </div>
                        <div class="max-w-full">
                            <label for="textarea-label"
                                class="block text-sm font-medium mb-2 dark:text-white">Comment</label>
                            <textarea id="textarea-label"
                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                rows="3" placeholder="Say hi..." name="product_meta_description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step Navigation Buttons -->
            <div class="flex items-center justify-end mt-4 me-5">
                <button type="button" id="prev-btn"
                    class="hidden py-2 px-4 text-sm font-medium rounded-lg bg-gray-100 text-gray-800 me-2" disabled>
                    Previous
                </button>
                <button type="button" id="next-btn"
                    class="py-2 px-4 text-sm font-medium rounded-lg bg-blue-100 text-blue-800">
                    Next
                </button>
                <button type="submit" id="submit-btn"
                    class="hidden py-2 px-4 text-sm font-medium rounded-lg bg-green-100 text-green-800">
                    Submit
                </button>
            </div>
        </form>

    </div>
@endsection

@section('script')
    <script>
        const customErrorMessages = {
            "title": "Please enter the product name.",
            "brandId": "Please Select Brand",
            "categoryId": "Please Select Category",
            "short_description": "Please enter short description",
            "image": "Please upload product image",
            "sku": "Please enter sku",
            "quantity": "Please enter quantity",
            "mrp": "Please enter mrp",
            "price": "Please enter price",
        };
        document.addEventListener("DOMContentLoaded", function() {
            let currentStep = 1;
            const totalSteps = 5;

            const steps = document.querySelectorAll(".step-content");
            const nextBtn = document.getElementById("next-btn");
            const prevBtn = document.getElementById("prev-btn");
            const submitBtn = document.getElementById("submit-btn");

            const stepTabs = document.querySelectorAll(".step-tab");

            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.toggle("hidden", index !== step - 1);
                    s.classList.toggle("active", index === step - 1);
                });

                stepTabs.forEach((tab, index) => {
                    tab.disabled = index >= step;
                    tab.classList.toggle("active", index === step - 1);
                });

                prevBtn.disabled = step === 1;
                prevBtn.classList.toggle("hidden", step === 1);
                nextBtn.classList.toggle("hidden", step === totalSteps);
                submitBtn.classList.toggle("hidden", step !== totalSteps);
            }

            function validateStep() {
                const activeStep = steps[currentStep - 1];
                const requiredFields = activeStep.querySelectorAll("[required]");
                let isValid = true;

                requiredFields.forEach(field => {
                    const errorContainer = field
                        .nextElementSibling;
                    if (!field.checkValidity()) {
                        isValid = false;
                        showErrorMessage(field, errorContainer);
                    } else {
                        clearErrorMessage(field, errorContainer);
                    }
                });

                return isValid;
            }

            function showErrorMessage(field, errorContainer) {
                const customMessage = customErrorMessages[field.name] || "This field is required.";
                if (!errorContainer || !errorContainer.classList.contains('error-message')) {
                    const errorMessage = document.createElement('div');
                    errorMessage.classList.add('text-red-500', 'error-message');
                    errorMessage.textContent = customMessage;
                    field.after(errorMessage);
                }
            }

            function clearErrorMessage(field, errorContainer) {
                if (errorContainer && errorContainer.classList.contains('error-message')) {
                    errorContainer.remove();
                }
            }

            nextBtn.addEventListener("click", function() {
                if (validateStep()) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            prevBtn.addEventListener("click", function() {
                currentStep--;
                showStep(currentStep);
            });

            showStep(currentStep);
        });
    </script>
@endsection

