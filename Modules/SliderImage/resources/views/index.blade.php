@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Add New Slider Image</h1>

        <!-- Form to insert slider image -->
        <form action="{{ route('sliderImage.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Slider Type (static for 'main-slider') -->
            <div class="form-group">
                <label for="slider_type">Slider Type</label>
                <input type="text" class="form-control" name="slider_type" value="main-slider" readonly>
            </div>

            <!-- Heading -->
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter heading">
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" name="content" id="content" placeholder="Enter content">
            </div>


            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Slider Image</label>
                <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <div>
            {{ $slides }}
        </div>
    </div>
@endsection
