@extends('layouts.app')
@section('title','Data Diklat')
@section('content')
@include('bidangkeahlian.toolbar')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        @include('alert')
        <table class="table table-rounded table-striped border gy-7 gs-7" id="users-table">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <th width="10">Nomor</th>
                    <th>Nama Bidang Keahlian</th>
                    <th Width="200">Jenis Bidang Keahlian</th>
                    <th width="120">#</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/bidangkeahlian',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'nama_bidang_keahlian', name: 'nama_bidang_keahlian' },
                { data: 'jenis', name: 'jenis' },
                { data: 'action', name: 'action' }
            ]
        });
    });
    </script>
@endpush

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush
