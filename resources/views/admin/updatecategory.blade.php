@extends('admin.maindesign')
@section('update_category')
    @if (session('categoryupdated_message'))
        <div class="mb-4 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('categoryupdated_message') }}
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{ route('admin.postupdatecategory',$category->id) }}" method="post">
            @csrf
            <input type="text" name="updatedcategory" value="{{ $category->category }}">
            <input type="submit" name="submit" value="Update Category">
        </form>
    </div>
@endsection