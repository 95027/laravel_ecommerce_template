@extends('admin.layout.master')
@section('content')
    <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Brand Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="image">Brand Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>

        <div>
            <button type="submit">Create Brand</button>
        </div>
    </form>
@endsection
