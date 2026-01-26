@extends('admin.maindesign')
@section('view_product')
    @if (session('deletecategory_message'))
        <div style=" margin-bottom: 10px; color: black; background-color: orangered;">
            {{ session('deletecategory_message') }}
        </div>
    @endif
    <table style="width:100%; border-collapse: collapse; font-family: Arial,sans-serif; ">
        <thead>
            <tr style="background-color:#f2f2f2;">
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product ID</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product Title</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product Description</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product Quantity</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product Price</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Product Image</th>
                <th style=" padding: 12px; text-align: left; border-botton:1px solid #ddd; ">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr style=" border-bottom:1px solid #ddd ;">
                    <td style=" padding: 12px;">{{ $product->id }}</td>
                    <td style=" padding: 12px;">{{ $product->product_title }}</td>
                    <td style=" padding: 12px;">{{ $product->product_description }}</td>
                    <td style=" padding: 12px;">{{ $product->product_quantity }}</td>
                    <td style=" padding: 12px;">{{ $product->product_price }}</td>
                    <td style=" padding: 12px;"><img src="{{ asset('products/' . $product->product_image) }}" alt="Product Image" style="width: 50px; height: 50px;"></td>
                    <td style=" padding: 12px;">
                        <a href="{{ route('categorytoupdate', $product->id) }}" style="color: green;">
                            Update
                        </a>&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.categorydelete', $product->id) }}"
                            onclick="return confirm('Are you sure to delete')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection