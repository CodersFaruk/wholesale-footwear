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
                <h6 class="card-body-title text-info text-center">Category Infomation</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S.N</th>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                       @foreach($categories as $key=>$category)
                           <tr>
                               <td>{{$key+1}}</td>
                               <td>{{$category->category_name}}</td>
                               <td>
                                   <a class="btn btn-sm btn-info" href="#">edit</a>
                                   <a class="btn btn-sm btn-danger" href="#">delete</a>
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
