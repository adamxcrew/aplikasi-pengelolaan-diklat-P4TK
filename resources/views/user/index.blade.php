@extends('layouts.app')
@section('title','Data Pengguna')
@section('content')
@include('user.toolbar')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        @include('alert')
        <table class="table table-rounded table-striped border gy-7 gs-7" id="users-table">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <th width="10">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Hak Akses</th>
                    <th width="120">#</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/user',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'role_name', name: 'role_name' },
                { data: 'action', name: 'action' }
            ]
        });
    });
    </script>
@endpush

@push('css')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush
