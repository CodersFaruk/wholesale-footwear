@extends('admin.layouts.admin-master')

@section('admin-title','Add Category')

@section('admin-content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">wholesale-footwear</a>
            <a class="breadcrumb-item" href="index.html">Category</a>
            <span class="breadcrumb-item active">Edit Category</span>
        </nav>



        <div class="card" style="height: 79vh">
            @error('category_name')
            <div class="alert alert-danger w-25 mt-3 align-self-center">{{ $message }}</div>
            @enderror
            <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
                <form action="{{route('category.update',$category->id)}}" method="post">
                    @csrf
                    <div class="d-md-flex">
                        <input type="text" name="category_name" class="form-control"  value="{{$category->category_name}}">
                        <button class="btn btn-info ">Update Now</button>
                    </div>
                </form>
            </div><!-- d-flex -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection

