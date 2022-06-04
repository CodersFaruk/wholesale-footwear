@extends('admin.layouts.admin-master')

@section('admin-title','Add Category')

@section('admin-content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">wholesale-footwear</a>
            <a class="breadcrumb-item" href="#">Category</a>
            <span class="breadcrumb-item active">Add Category</span>
        </nav>
        @if ($errors->any())
            <div class="alert alert-danger text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Product Information</h6>
            <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category Name: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="cat_id" >
                                    <option value="" disabled selected>Choose Category Name</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_code" placeholder="Enter Product Code">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="product_details" id="summernote">Product Details Here!</textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Product size: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_size"  placeholder="Enter Product Size">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_price"  placeholder="Enter Product Price">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-12">
                            <label class="custom-file">
                                <input type="file" name="product_image" id="file2" class="custom-file-input form-control">
                                <span class="custom-file-control"></span>
                            </label>
                        </div><!-- col -->

                    </div><!-- row -->

                    <div class="form-layout-footer text-center">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="btn btn-info mg-r-5">Add Product</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
