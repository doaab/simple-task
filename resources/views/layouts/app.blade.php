@include('include.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
@include('include.left-sidebar')
    <aside class="right-side">
        <!-- Content Header (Page header) -->
@include('include.content-head')
        <!-- Main content -->
        <section class="content">


            <!--rightside bar -->
            @yield('content')
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<!-- end of page level js -->

<script src="{{url('vendor/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/form_elements.js')}}" type="text/javascript"></script>

<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('vendor/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/simple-table.js')}}"></script>
<!-- end of page level js -->
</body>

</html>


