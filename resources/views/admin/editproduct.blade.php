@extends('admin.maindesign')

@section('add_product')
    @if (session('product_message'))
        <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('product_message') }}
        </div>
    @endif
        <div class="container-fluid" style="margin-left: 400px;">
            <form action="{{ route('admin.producttoupdate', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="product_title" placeholder="Enter Product Title" value="{{ $product->product_title }}"><br><br>
                <textarea name="product_description" id="" placeholder="Product description...">{{ $product->product_description }}</textarea><br><br>
                <input type="text" name="product_quantity" placeholder="Enter Product Quantity" value="{{ $product->product_quantity }}"><br><br>
                <input type="number" name="product_price" placeholder="Enter Product Price" value="{{ $product->product_price }}"><br><br>
                <img src="{{ asset('products/' . $product->product_image) }}" alt="Product Image" style="width: 50px; height: 50px;"><label>Current Image</label><br><br>
                <input type="file" name="product_image"><br><label>Add new Image here</label><br><br>
                <select name="product_category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                </select><br><br>
                <input type="submit" name="submit" value="Update Product">
            </form>
        </div>
@endsection