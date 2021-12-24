@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
       <!--begin::Page title-->
       <div class="page-title d-flex flex-column me-3">
          <!--begin::Title-->
          <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Users List</h1>
          <!--end::Title-->
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
             <!--begin::Item-->
             <li class="breadcrumb-item text-gray-600">
                <a href="https://preview.keenthemes.com/metronic8/demo11/../demo11/index.html"
                   class="text-gray-600 text-hover-primary">Home</a>
             </li>
             <!--end::Item-->
             <!--begin::Item-->
             <li class="breadcrumb-item text-gray-600">Apps</li>
             <!--end::Item-->
             <!--begin::Item-->
             <li class="breadcrumb-item text-gray-600">User Management</li>
             <!--end::Item-->
             <!--begin::Item-->
             <li class="breadcrumb-item text-gray-600">Users</li>
             <!--end::Item-->
             <!--begin::Item-->
             <li class="breadcrumb-item text-gray-500">Users List</li>
             <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
       </div>
       <!--end::Page title-->
       <!--begin::Actions-->
       <div class="d-flex align-items-center py-2 py-md-1">
          <!--begin::Wrapper-->
          <div class="me-3">
             <!--begin::Menu-->
             <a href="#" class="btn btn-light-primary fw-bolder" data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path
                         d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                         fill="black" />
                   </svg>
                </span>
                <!--end::Svg Icon-->Filter
             </a>
             <!--begin::Menu 1-->
             <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                id="kt_menu_61c1ad817992a">
                <!--begin::Header-->
                <div class="px-7 py-5">
                   <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <div class="px-7 py-5">
                   <!--begin::Input group-->
                   <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Status:</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <div>
                         <select class="form-select form-select-solid" data-kt-select2="true"
                            data-placeholder="Select option" data-dropdown-parent="#kt_menu_61c1ad817992a"
                            data-allow-clear="true">
                            <option></option>
                            <option value="1">Approved</option>
                            <option value="2">Pending</option>
                            <option value="2">In Process</option>
                            <option value="2">Rejected</option>
                         </select>
                      </div>
                      <!--end::Input-->
                   </div>
                   <!--end::Input group-->
                   <!--begin::Input group-->
                   <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Member Type:</label>
                      <!--end::Label-->
                      <!--begin::Options-->
                      <div class="d-flex">
                         <!--begin::Options-->
                         <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                         <input class="form-check-input" type="checkbox" value="1" />
                         <span class="form-check-label">Author</span>
                         </label>
                         <!--end::Options-->
                         <!--begin::Options-->
                         <label class="form-check form-check-sm form-check-custom form-check-solid">
                         <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                         <span class="form-check-label">Customer</span>
                         </label>
                         <!--end::Options-->
                      </div>
                      <!--end::Options-->
                   </div>
                   <!--end::Input group-->
                   <!--begin::Input group-->
                   <div class="mb-10">
                      <!--begin::Label-->
                      <label class="form-label fw-bold">Notifications:</label>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                         <input class="form-check-input" type="checkbox" value="" name="notifications"
                            checked="checked" />
                         <label class="form-check-label">Enabled</label>
                      </div>
                      <!--end::Switch-->
                   </div>
                   <!--end::Input group-->
                   <!--begin::Actions-->
                   <div class="d-flex justify-content-end">
                      <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                         data-kt-menu-dismiss="true">Reset</button>
                      <button type="submit" class="btn btn-sm btn-primary"
                         data-kt-menu-dismiss="true">Apply</button>
                   </div>
                   <!--end::Actions-->
                </div>
                <!--end::Form-->
             </div>
             <!--end::Menu 1-->
             <!--end::Menu-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Button-->
          <a href="#" class="btn btn-primary fw-bolder" data-bs-toggle="modal"
             data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
          <!--end::Button-->
       </div>
       <!--end::Actions-->
    </div>
    <!--end::Container-->
 </div>
 <!--end::Toolbar-->

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">



<!--begin::Alert-->
<div class="alert alert-primary">
   <!--begin::Icon-->
   <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span>
   <!--end::Icon-->

   <!--begin::Wrapper-->
   <div class="d-flex flex-column">
       <!--begin::Title-->
       <h4 class="mb-1 text-dark">Notifikasi</h4>
       <!--end::Title-->
       <!--begin::Content-->
       <span>Ada 100 Data GTK Baru Yang Menunggu Konfirmasi Akun.</span>
       <!--end::Content-->
   </div>
   <!--end::Wrapper-->
</div>
<!--end::Alert-->



      <table class="table table-rounded table-striped border gy-7 gs-7" id="users-table">
         <thead>
             <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                 <th width="10">NOPES</th>
                 <th>Nama GTK</th>
                 <th>Asal Sekolah</th>
                 <th>Provinsi - Kota</th>
                 <th width="120">#</th>
             </tr>
         </thead>
     </table>
    </div>
    <!--end::Post-->
</div>
@endsection
@push('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/gtk',
        columns: [
            { data: 'nopes', name: 'nopes' },
            { data: 'nama_gtk', name: 'nama_gtk' },
            { data: 'asal_sekolah', name: 'asal_sekolah' },
            { data: 'provinsi', name: 'provinsi' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush

@push('css')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush
