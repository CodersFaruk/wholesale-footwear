@extends('admin.layouts.admin-master')

@section('admin-title','Show Category')

@section('admin-content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">wholesale-footwear</a>
            <a class="breadcrumb-item" href="index.html">Category</a>
            <span class="breadcrumb-item active">All Category</span>


        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title text-info text-center">Product Infomation</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S.N</th>
                            <th class="wd-15p">Product Image</th>
                            <th class="wd-15p">Product Name</th>
                            <th class="wd-15p">product code</th>
                            <th class="wd-15p">Product Price</th>
                            <th class="wd-15p">Update</th>
                            <th class="wd-15p">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $key=>$product)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{asset($product->product_image)}}" alt="image" width="80px" height="50px"></td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" href="{{route('edit.product',$product->id)}}">Edit Product</a>
                                </td>
                                <td>
                                    <form action="{{ route('delete.product',$product->id) }}" method="post">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Remove Product</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
