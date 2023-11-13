@extends('backend_layout')

@section('title')
    Slider Listesi
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Slider  Resimlerinin Listesi</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route("admin") }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Slider Bölümü</li>
            </ol>
        </div>
    </div>
    @endsection

@section('content')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Slider No</th>
            <th>Slider Başlık</th>
            <th>Slider Resim</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sliderall as $keys)
            <x-adminlisttables>
                <x-slot name="id">{{ $keys->id }}</x-slot>
                <x-slot name="baslik">{{ $keys->slider_baslik }}</x-slot>
                <x-slot name="resim">{{ asset('assets/images/slider/'.$keys->slider_resim) }}</x-slot>
                <x-slot name="routessil">{{ route('admin.slider.sliderSil',["id"=>$keys->id]) }}</x-slot>
                <x-slot name="routesupdate">{{ route('admin.slider.sliderGuncelleGet',["id"=>$keys->id]) }}</x-slot>
            </x-adminlisttables>
        @endforeach
        </tfoot>
    </table>
    @endsection

@push('customCss')

    @endpush

@push('customJs')
    <!-- jQuery -->
    <script src="{{ asset("backend/plugins/jquery/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("backend/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset("backend/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("backend/plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("backend/dist/js/adminlte.min.js") }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("backend/dist/js/demo.js") }}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    @endpush