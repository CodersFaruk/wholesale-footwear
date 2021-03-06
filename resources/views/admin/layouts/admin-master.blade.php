<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Footwear | @yield('admin-title')</title>



    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/summernote/summernote-bs4.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/starlight.css">
</head>

<body>

@include('admin.layouts.leftbar')


@include('admin.layouts.header')


@yield('admin-content')


<script src="{{asset('backend')}}/lib/jquery/jquery.js"></script>
<script src="{{asset('backend')}}/lib/popper.js/popper.js"></script>
<script src="{{asset('backend')}}/lib/bootstrap/bootstrap.js"></script>
<script src="{{asset('backend')}}/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('backend')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{asset('backend')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{asset('backend')}}/lib/d3/d3.js"></script>
<script src="{{asset('backend')}}/lib/rickshaw/rickshaw.min.js"></script>
<script src="{{asset('backend')}}/lib/chart.js/Chart.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.resize.js"></script>
<script src="{{asset('backend')}}/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="{{asset('backend')}}/lib/highlightjs/highlight.pack.js"></script>
<script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>

<script src="{{asset('backend')}}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{asset('backend')}}/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="{{asset('backend')}}/lib/summernote/summernote-bs4.min.js"></script>

<script src="{{asset('backend')}}/js/starlight.js"></script>
<script src="{{asset('backend')}}/js/ResizeSensor.js"></script>
<script src="{{asset('backend')}}/js/dashboard.js"></script>

{{--Data Table--}}
<script>
    $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
</script>

<script>
    $('#summernote').summernote({
        height: 150,
        tooltip: false
    })
</script>

</body>
</html>
