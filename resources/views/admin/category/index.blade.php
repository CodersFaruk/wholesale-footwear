@extends('admin.layouts.admin-master')

@section('admin-title','Add Category')

@section('admin-content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">wholesale-footwear</a>
            <a class="breadcrumb-item" href="index.html">Category</a>
            <span class="breadcrumb-item active">Add Category</span>
        </nav>



        <div class="card" style="height: 79vh">
            <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="d-md-flex">
                        <input type="text" name="category_name" class="form-control" required placeholder="Category Name">
                        <button class="btn btn-info ">Add Now</button>
                    </div>
                </form>
            </div><!-- d-flex -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
