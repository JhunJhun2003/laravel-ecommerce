@extends('admin.maindesign')


@section('add_category')
<div class="container-fluid">
    <form action="{{ route('admin.postaddcategory') }}" method="post">
        <input type="text" name="category" placeholder="Enter Category Name">
        <input type="submit" name="submit" value="Add Category">
    </form>
</div>
@endsection