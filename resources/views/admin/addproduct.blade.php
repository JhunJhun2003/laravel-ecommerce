@extends('admin.maindesign')

@section('add_product')
    @if (session('category_message'))
        <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('category_message') }}
        </div>
    @endif
        <div class="container-fluid" style="margin-left: 400px;">
            <form action="{{ route('admin.postaddproduct') }}" method="post">
                @csrf
                <input type="text" name="product_title" placeholder="Enter Product Title"><br><br>
                <textarea name="product_description" id="">Product description...</textarea><br><br>
                <input type="text" name="product_quantity" placeholder="Enter Product Quantity"><br><br>
                <input type="text" name="product_price" placeholder="Enter Product Price"><br><br>
                {{-- <input type="text" name="product_category" placeholder="Enter Category Name"><br><br> --}}
                <select name="product_category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                </select><br><br>
                <input type="submit" name="submit" value="Add Category">
            </form>
        </div>
@endsection