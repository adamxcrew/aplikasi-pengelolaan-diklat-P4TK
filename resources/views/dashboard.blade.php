@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    {{-- <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl py-5">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                @if (session('message') != null)
                    <div class="col-xl-12 mb-5">
                        @include('alert')
                    </div>
                @endif
                <div class="col-xl-8">
                    <!--begin::Engage widget 2-->
                    <div class="card card-xl-stretch bg-body border-0 mb-5 mb-xl-0">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-lg-row flex-stack p-lg-15">
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-column justify-content-center align-items-center align-items-lg-start me-10 text-center text-lg-start">
                                <!--begin::Title-->
                                <h3 class="fs-2hx line-height-lg mb-5">
                                    <span class="fw-bold">Brilliant App Ideas</span>
                                    <br>
                                    <span class="fw-bolder">for Startups</span>
                                </h3>
                                <!--end::Title-->
                                <div class="fs-4 text-muted mb-7">Long before you sit down to put the pen
                                    <br>need to make sure you breathe
                                </div>
                                <a href="#" class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_campaign">Create an Store</a>
                            </div>
                            <!--end::Info-->
                            <!--begin::Illustration-->
                            <img src="/metronic8/demo11/assets/media/illustrations/sketchy-1/11.png" alt=""
                                class="mw-200px mw-lg-350px mt-lg-n10">
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 2-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 16-->
                    <div class="card card-xl-stretch bg-body border-0">
                        <!--begin::Body-->
                        <div class="card-body pt-5 mb-xl-9 position-relative">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin::Title-->
                                <h4 class="fw-bolder text-gray-800 m-0">User Base</h4>
                                <!--end::Title-->
                                <!--begin::Menu-->
                                <div class="me-1">
                                    <button class="btn btn-icon btn-color-gray-500 w-auto px-0 btn-active-color-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                        <span class="svg-icon svg-icon-1 me-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black">
                                                </rect>
                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                        id="kt_menu_61c821a764b2f">
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
                                                    <select class="form-select form-select-solid select2-hidden-accessible"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_61c821a764b2f"
                                                        data-allow-clear="true" data-select2-id="select2-data-7-5hkq"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="select2-data-9-8wqf"></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-8-7rpv"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-cc8i-container"
                                                                aria-controls="select2-cc8i-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-cc8i-container" role="textbox"
                                                                    aria-readonly="true" title="Select option"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        option</span></span><span
                                                                    class="select2-selection__arrow" role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1">
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2"
                                                            checked="checked">
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
                                                <div
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="notifications" checked="checked">
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Chart-->
                            <div class="d-flex flex-center mb-5 mb-xxl-0">
                                <div id="kt_charts_mixed_widget_16_chart" style="height: 260px; min-height: 206.217px;">
                                    <div id="apexcharts6m90r2lai"
                                        class="apexcharts-canvas apexcharts6m90r2lai apexcharts-theme-light"
                                        style="width: 340px; height: 206.217px;"><svg id="SvgjsSvg1208" width="340"
                                            height="206.2166748046875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent none repeat scroll 0% 0%;">
                                            <g id="SvgjsG1210" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(53, 0)">
                                                <defs id="SvgjsDefs1209">
                                                    <clipPath id="gridRectMask6m90r2lai">
                                                        <rect id="SvgjsRect1212" width="242" height="260" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask6m90r2lai"></clipPath>
                                                    <clipPath id="nonForecastMask6m90r2lai"></clipPath>
                                                    <clipPath id="gridRectMarkerMask6m90r2lai">
                                                        <rect id="SvgjsRect1213" width="240" height="262" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1214" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1215">
                                                        <g id="SvgjsG1216" class="apexcharts-tracks">
                                                            <g id="SvgjsG1217"
                                                                class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 30.93048780487804 117.99999999999999 A 87.06951219512196 87.06951219512196 0 0 1 205.06951219512194 118"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(232,255,243,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="11.36829268292683"
                                                                    stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 30.93048780487804 117.99999999999999 A 87.06951219512196 87.06951219512196 0 0 1 205.06951219512194 118">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1219">
                                                            <g id="SvgjsG1224"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="TotalxMembers" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1225"
                                                                    d="M 30.93048780487804 117.99999999999999 A 87.06951219512196 87.06951219512196 0 0 1 177.3812645285149 54.32138995792205"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(80,205,137,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="11.368292682926832"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="133" data:value="74" index="0" j="0"
                                                                    data:pathOrig="M 30.93048780487804 117.99999999999999 A 87.06951219512196 87.06951219512196 0 0 1 177.3812645285149 54.32138995792205">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle1220" r="81.38536585365854" cx="118"
                                                                cy="118" class="apexcharts-radialbar-hollow"
                                                                fill="transparent"></circle>
                                                            <g id="SvgjsG1221" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText1222" font-family="inherit" x="118"
                                                                    y="113" text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="700" fill="#a1a5b7"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: inherit;">Total
                                                                    Members</text><text id="SvgjsText1223"
                                                                    font-family="inherit" x="118" y="94"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="30px" font-weight="700" fill="#5e6278"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: inherit;">74%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1226" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1227" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1211" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Content-->
                            <div class="text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-10">
                                <!--begin::Text-->
                                <p class="fw-bold fs-4 text-gray-400 mb-7 px-5">Long before you sit down to put the
                                    <br>make sure you breathe
                                </p>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-success fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">Invite Users</a>
                                </div>
                                <!--ed::Action-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 16-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

    </div> --}}

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <ul class="nav row mb-10">
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_1">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                            fill="black"></path>
                                        <path
                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">{{ $jumlahDiklatAktif }} DIKLAT AKTIF</span>
                            </a>
                        </li>

                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">{{ $jumlahGtk}} DATA GTK</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active"
                                data-bs-toggle="tab" href="#kt_general_widget_1_3">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                            fill="black"></path>
                                        <path
                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">{{ $jumlahInstansi }} DATA INSTANSI</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_4">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black">
                                        </rect>
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Sales
                                    <br>Statistics</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="black"></path>
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Access
                                    <br>Control</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Grafik Diklat Perdepartemen</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Diklat Per Departemen</span>
                    </h3>
                    <div id="chart" style="height: 300px;"></div>
                </div>
                <div class="col-xl-12">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Daftar Diklat</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Daftar Diklat Yang Aktif</span>
                    </h3>
                    <table class="table table-rounded table-striped border gy-7 gs-7" id="users-table">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                <th width="10">Nomor</th>
                                <th>Nama Kegiatan/ Diklat</th>
                                <th>Kategori</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Tahun Pelaksaan</th>
                                <th>Jumlah Peserta</th>
                                <th>Status Aktif</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::General Widget 1-->
                    <div class="mb-10">
                        <!--begin::Tabs-->
                        <ul class="nav row mb-10">
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_1">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black"></path>
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-6 fw-bold">SaaS
                                        <br>Application</span>
                                </a>
                            </li>

                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-6 fw-bold">Main
                                        <br>Categories</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_3">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path opacity="0.3"
                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                fill="black"></path>
                                            <path
                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-6 fw-bold">Order
                                        <br>Management</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_4">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black">
                                            </rect>
                                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-6 fw-bold">Sales
                                        <br>Statistics</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path opacity="0.3"
                                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                fill="black"></path>
                                            <path
                                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-6 fw-bold">Access
                                        <br>Control</span>
                                </a>
                            </li>
                        </ul>
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="kt_general_widget_1_1">
                                <!--begin::Tables Widget 2-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Latest Arrivals</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 100 new products</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000">
                                                            </rect>
                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_61c82205c1819">
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
                                                            <select
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_61c82205c1819"
                                                                data-allow-clear="true"
                                                                data-select2-id="select2-data-10-rz5b" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="select2-data-12-r07p"></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-11-7xkk"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-sghc-container"
                                                                        aria-controls="select2-sghc-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-sghc-container" role="textbox"
                                                                            aria-readonly="true" title="Select option"><span
                                                                                class="select2-selection__placeholder">Select
                                                                                option</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
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
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2"
                                                                    checked="checked">
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
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked">
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
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
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-5">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-125px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Successful
                                                                Fellas</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">Angular</span>
                                                            <span class="badge badge-light-info fw-bold me-1">PHP</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">4600 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger fw-bold me-1">HTML</span>
                                                            <span class="badge badge-light-info fw-bold me-1">CSS</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">7200 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">React</span>
                                                            <span class="badge badge-light-info fw-bold me-1">SASS</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">890 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Best
                                                                Customers</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger fw-bold me-1">Java</span>
                                                            <span class="badge badge-light-info fw-bold me-1">PHP</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">6370 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Amazing
                                                                Templates</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">Python</span>
                                                            <span class="badge badge-light-info fw-bold me-1">MySQL</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">354 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tables Widget 2-->
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_2">
                                <!--begin::Tables Widget 3-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Files</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">Over 100 pending files</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000">
                                                            </rect>
                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Specify a target name for future usage and reference"
                                                            aria-label="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications">
                                                                    <!--end::Input-->
                                                                    <!--end::Label-->
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                            <!--end::Menu-->
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-3">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-120px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                                    <span class="svg-icon svg-icon-2x svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                                fill="black"></path>
                                                                            <path opacity="0.3"
                                                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                                fill="black"></path>
                                                                            <path opacity="0.3"
                                                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJs, HTML</td>
                                                        <td class="text-end text-muted fw-bold">4600 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                                    <span class="svg-icon svg-icon-2x svg-icon-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect x="2" y="2" width="9" height="9" rx="2"
                                                                                fill="black"></rect>
                                                                            <rect opacity="0.3" x="13" y="2" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                            <rect opacity="0.3" x="13" y="13" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                            <rect opacity="0.3" x="2" y="13" width="9"
                                                                                height="9" rx="2" fill="black"></rect>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                        <td class="text-end text-muted fw-bold">7200 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">2.8MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-info">
                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                                    <span class="svg-icon svg-icon-2x svg-icon-info">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Laravel, Metronic</td>
                                                        <td class="text-end text-muted fw-bold">890 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">1.5MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                                    <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                        <td class="text-end text-muted fw-bold">4600 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                                    <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                                                fill="black"></path>
                                                                            <path opacity="0.3"
                                                                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                        <td class="text-end text-muted fw-bold">354 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">500KB</td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                                <!--end::Tables Widget 3-->
                            </div>
                            <div class="tab-pane fade show active" id="kt_general_widget_1_3">
                                <!--begin::Tables Widget 5-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 active"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_table_widget_5_tab_1">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/plurk.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-success">Approved</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/vimeo.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                        Users</a>
                                                                    <span class="text-muted fw-bold d-block">Awesome
                                                                        Users</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                                </td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-primary">Success</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/kickstarter.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                        Theme</a>
                                                                    <span class="text-muted fw-bold d-block">Best
                                                                        Customers</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/plurk.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-success">Approved</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/kickstarter.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                        Theme</a>
                                                                    <span class="text-muted fw-bold d-block">Best
                                                                        Customers</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/vimeo.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                        Users</a>
                                                                    <span class="text-muted fw-bold d-block">Awesome
                                                                        Users</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                                </td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-primary">Success</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center" alt="">
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tables Widget 5-->
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_4">
                                <!--begin::Tables Widget 4-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">New Members</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 400 new members</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_1">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_2">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_3">Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/avatars/150-11.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/avatars/150-4.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML, CSS
                                                                        Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/avatars/150-5.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron
                                                                        Wayde</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">ReactJS
                                                                        Developer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/avatars/150-6.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/avatars/150-9.jpg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin
                                                                        Leonard</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Art
                                                                        Director</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_2">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/043-boy-18.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin
                                                                        Leonard</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Art
                                                                        Director</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/014-girl-7.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/018-girl-9.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML, CSS
                                                                        Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/001-boy.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/018-girl-9.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML, CSS
                                                                        Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/047-girl-25.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron
                                                                        Wayde</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">ReactJS
                                                                        Developer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="/metronic8/demo11/assets/media/svg/avatars/014-girl-7.svg"
                                                                            alt="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tables Widget 4-->
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_5">
                                <!--begin::Tables Widget 1-->
                                <div class="card">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Tasks Overview</span>
                                            <span class="text-muted fw-bold fs-7">Pending 10 tasks</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000">
                                                            </rect>
                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                                opacity="0.3"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_61c82205c1dd4">
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
                                                            <select
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_61c82205c1dd4"
                                                                data-allow-clear="true"
                                                                data-select2-id="select2-data-13-k7r2" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="select2-data-15-uvms"></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-14-20fr"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-55g1-container"
                                                                        aria-controls="select2-55g1-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-55g1-container" role="textbox"
                                                                            aria-readonly="true" title="Select option"><span
                                                                                class="select2-selection__placeholder">Select
                                                                                option</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
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
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" value="1">
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="2"
                                                                    checked="checked">
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
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked">
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
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
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-5">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-200px"></th>
                                                        <th class="p-0 min-w-100px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Successful
                                                                Fellas</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 70%" aria-valuenow="70"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Most
                                                                Successful</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 50%" aria-valuenow="50"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">80%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 80%" aria-valuenow="80"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Best
                                                                Customers</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 90%" aria-valuenow="90"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="/metronic8/demo11/assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Amazing
                                                                Templates</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 70%" aria-valuenow="70"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                </div>
                                <!--endW::Tables Widget 1-->
                            </div>
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::General Widget 1-->
                    <!--begin::Charts Widget 1-->
                    <div class="card mb-10">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Recent Statistics</span>
                                <span class="text-muted fw-bold fs-7">More than 400 new members</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61c82205c1f34">
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
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61c82205c1f34" data-allow-clear="true"
                                                    data-select2-id="select2-data-16-zfaj" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-18-pg98"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-17-j666"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-mgh1-container"
                                                            aria-controls="select2-mgh1-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-mgh1-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
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
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
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
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;">
                                <div id="apexchartsqarszhjk"
                                    class="apexcharts-canvas apexchartsqarszhjk apexcharts-theme-light"
                                    style="width: 769px; height: 350px;"><svg id="SvgjsSvg1006" width="769" height="350"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent none repeat scroll 0% 0%;">
                                        <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(46.76666259765625, 30)">
                                            <defs id="SvgjsDefs1007">
                                                <linearGradient id="SvgjsLinearGradient1012" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1013" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1014" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1015" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskqarszhjk">
                                                    <rect id="SvgjsRect1017" width="718.2333374023438" height="278.685"
                                                        x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskqarszhjk"></clipPath>
                                                <clipPath id="nonForecastMaskqarszhjk"></clipPath>
                                                <clipPath id="gridRectMarkerMaskqarszhjk">
                                                    <rect id="SvgjsRect1018" width="716.2333374023438" height="280.685"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1016" width="17.805833435058595" height="276.685" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1012)" class="apexcharts-xcrosshairs"
                                                y2="276.685" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1050" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1051" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1053"
                                                        font-family="inherit" x="59.35277811686198" y="305.685"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1054">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1056" font-family="inherit"
                                                        x="178.05833435058594" y="305.685" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1057">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1059" font-family="inherit"
                                                        x="296.7638905843099" y="305.685" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1060">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1062" font-family="inherit"
                                                        x="415.4694468180338" y="305.685" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1063">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1065" font-family="inherit"
                                                        x="534.1750030517578" y="305.685" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1066">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1068" font-family="inherit"
                                                        x="652.8805592854818" y="305.685" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1069">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1082" class="apexcharts-grid">
                                                <g id="SvgjsG1083" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1085" x1="0" y1="0" x2="712.2333374023438" y2="0"
                                                        stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1086" x1="0" y1="69.17125" x2="712.2333374023438"
                                                        y2="69.17125" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1087" x1="0" y1="138.3425" x2="712.2333374023438"
                                                        y2="138.3425" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1088" x1="0" y1="207.51375000000002"
                                                        x2="712.2333374023438" y2="207.51375000000002" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1089" x1="0" y1="276.685" x2="712.2333374023438"
                                                        y2="276.685" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1084" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1091" x1="0" y1="276.685" x2="712.2333374023438"
                                                    y2="276.685" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1090" x1="0" y1="1" x2="0" y2="276.685"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1019" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1020" class="apexcharts-series" rel="1"
                                                    seriesName="NetxProfit" data:realIndex="0">
                                                    <path id="SvgjsPath1024"
                                                        d="M41.54694468180338 276.685L41.54694468180338 179.23383333333334C41.54694468180338 176.56716666666665 42.88027801513671 175.23383333333334 45.54694468180338 175.23383333333334L53.35277811686198 175.23383333333334C56.01944478352864 175.23383333333334 57.35277811686198 176.56716666666665 57.35277811686198 179.23383333333334L57.35277811686198 179.23383333333334L57.35277811686198 276.685L57.35277811686198 276.685C57.35277811686198 276.685 41.54694468180338 276.685 41.54694468180338 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 41.54694468180338 276.685L 41.54694468180338 179.23383333333334Q 41.54694468180338 175.23383333333334 45.54694468180338 175.23383333333334L 53.35277811686198 175.23383333333334Q 57.35277811686198 175.23383333333334 57.35277811686198 179.23383333333334L 57.35277811686198 179.23383333333334L 57.35277811686198 276.685L 57.35277811686198 276.685z"
                                                        pathFrom="M 41.54694468180338 276.685L 41.54694468180338 276.685L 57.35277811686198 276.685L 57.35277811686198 276.685L 57.35277811686198 276.685L 57.35277811686198 276.685L 57.35277811686198 276.685L 41.54694468180338 276.685"
                                                        cy="175.23383333333334" cx="159.25250091552732" j="0" val="44"
                                                        barHeight="101.45116666666667" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1026"
                                                        d="M160.25250091552732 276.685L160.25250091552732 153.87104166666666C160.25250091552732 151.204375 161.58583424886064 149.87104166666666 164.25250091552732 149.87104166666666L172.0583343505859 149.87104166666666C174.72500101725257 149.87104166666666 176.0583343505859 151.204375 176.0583343505859 153.87104166666666L176.0583343505859 153.87104166666666L176.0583343505859 276.685L176.0583343505859 276.685C176.0583343505859 276.685 160.25250091552732 276.685 160.25250091552732 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 160.25250091552732 276.685L 160.25250091552732 153.87104166666666Q 160.25250091552732 149.87104166666666 164.25250091552732 149.87104166666666L 172.0583343505859 149.87104166666666Q 176.0583343505859 149.87104166666666 176.0583343505859 153.87104166666666L 176.0583343505859 153.87104166666666L 176.0583343505859 276.685L 176.0583343505859 276.685z"
                                                        pathFrom="M 160.25250091552732 276.685L 160.25250091552732 276.685L 176.0583343505859 276.685L 176.0583343505859 276.685L 176.0583343505859 276.685L 176.0583343505859 276.685L 176.0583343505859 276.685L 160.25250091552732 276.685"
                                                        cy="149.87104166666666" cx="277.95805714925126" j="1" val="55"
                                                        barHeight="126.81395833333333" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1028"
                                                        d="M278.95805714925126 276.685L278.95805714925126 149.259625C278.95805714925126 146.59295833333334 280.2913904825846 145.259625 282.95805714925126 145.259625L290.7638905843099 145.259625C293.43055725097656 145.259625 294.7638905843099 146.59295833333334 294.7638905843099 149.259625L294.7638905843099 149.259625L294.7638905843099 276.685L294.7638905843099 276.685C294.7638905843099 276.685 278.95805714925126 276.685 278.95805714925126 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 278.95805714925126 276.685L 278.95805714925126 149.259625Q 278.95805714925126 145.259625 282.95805714925126 145.259625L 290.7638905843099 145.259625Q 294.7638905843099 145.259625 294.7638905843099 149.259625L 294.7638905843099 149.259625L 294.7638905843099 276.685L 294.7638905843099 276.685z"
                                                        pathFrom="M 278.95805714925126 276.685L 278.95805714925126 276.685L 294.7638905843099 276.685L 294.7638905843099 276.685L 294.7638905843099 276.685L 294.7638905843099 276.685L 294.7638905843099 276.685L 278.95805714925126 276.685"
                                                        cy="145.259625" cx="396.6636133829752" j="2" val="57"
                                                        barHeight="131.425375" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1030"
                                                        d="M397.6636133829752 276.685L397.6636133829752 151.56533333333334C397.6636133829752 148.89866666666668 398.9969467163085 147.56533333333334 401.6636133829752 147.56533333333334L409.4694468180338 147.56533333333334C412.13611348470045 147.56533333333334 413.4694468180338 148.89866666666668 413.4694468180338 151.56533333333334L413.4694468180338 151.56533333333334L413.4694468180338 276.685L413.4694468180338 276.685C413.4694468180338 276.685 397.6636133829752 276.685 397.6636133829752 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 397.6636133829752 276.685L 397.6636133829752 151.56533333333334Q 397.6636133829752 147.56533333333334 401.6636133829752 147.56533333333334L 409.4694468180338 147.56533333333334Q 413.4694468180338 147.56533333333334 413.4694468180338 151.56533333333334L 413.4694468180338 151.56533333333334L 413.4694468180338 276.685L 413.4694468180338 276.685z"
                                                        pathFrom="M 397.6636133829752 276.685L 397.6636133829752 276.685L 413.4694468180338 276.685L 413.4694468180338 276.685L 413.4694468180338 276.685L 413.4694468180338 276.685L 413.4694468180338 276.685L 397.6636133829752 276.685"
                                                        cy="147.56533333333334" cx="515.3691696166992" j="3" val="56"
                                                        barHeight="129.11966666666666" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1032"
                                                        d="M516.3691696166992 276.685L516.3691696166992 140.0367916666667C516.3691696166992 137.37012500000003 517.7025029500326 136.0367916666667 520.3691696166992 136.0367916666667L528.1750030517578 136.0367916666667C530.8416697184246 136.0367916666667 532.1750030517578 137.37012500000003 532.1750030517578 140.0367916666667L532.1750030517578 140.0367916666667L532.1750030517578 276.685L532.1750030517578 276.685C532.1750030517578 276.685 516.3691696166992 276.685 516.3691696166992 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 516.3691696166992 276.685L 516.3691696166992 140.0367916666667Q 516.3691696166992 136.0367916666667 520.3691696166992 136.0367916666667L 528.1750030517578 136.0367916666667Q 532.1750030517578 136.0367916666667 532.1750030517578 140.0367916666667L 532.1750030517578 140.0367916666667L 532.1750030517578 276.685L 532.1750030517578 276.685z"
                                                        pathFrom="M 516.3691696166992 276.685L 516.3691696166992 276.685L 532.1750030517578 276.685L 532.1750030517578 276.685L 532.1750030517578 276.685L 532.1750030517578 276.685L 532.1750030517578 276.685L 516.3691696166992 276.685"
                                                        cy="136.0367916666667" cx="634.0747258504232" j="4" val="61"
                                                        barHeight="140.64820833333332" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1034"
                                                        d="M635.0747258504232 276.685L635.0747258504232 146.9539166666667C635.0747258504232 144.28725000000003 636.4080591837566 142.9539166666667 639.0747258504232 142.9539166666667L646.8805592854818 142.9539166666667C649.5472259521484 142.9539166666667 650.8805592854818 144.28725000000003 650.8805592854818 146.9539166666667L650.8805592854818 146.9539166666667L650.8805592854818 276.685L650.8805592854818 276.685C650.8805592854818 276.685 635.0747258504232 276.685 635.0747258504232 276.685 "
                                                        fill="rgba(80,205,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 635.0747258504232 276.685L 635.0747258504232 146.9539166666667Q 635.0747258504232 142.9539166666667 639.0747258504232 142.9539166666667L 646.8805592854818 142.9539166666667Q 650.8805592854818 142.9539166666667 650.8805592854818 146.9539166666667L 650.8805592854818 146.9539166666667L 650.8805592854818 276.685L 650.8805592854818 276.685z"
                                                        pathFrom="M 635.0747258504232 276.685L 635.0747258504232 276.685L 650.8805592854818 276.685L 650.8805592854818 276.685L 650.8805592854818 276.685L 650.8805592854818 276.685L 650.8805592854818 276.685L 635.0747258504232 276.685"
                                                        cy="142.9539166666667" cx="752.7802820841472" j="5" val="58"
                                                        barHeight="133.73108333333332" barWidth="17.805833435058595"></path>
                                                    <g id="SvgjsG1022" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1023" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1025" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1027" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1029" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1031" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1033" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1035" class="apexcharts-series" rel="2" seriesName="Revenue"
                                                    data:realIndex="1">
                                                    <path id="SvgjsPath1039"
                                                        d="M59.35277811686198 276.685L59.35277811686198 105.45116666666667C59.352778116861984 102.78450000000001 60.68611145019531 101.45116666666667 63.35277811686198 101.45116666666667L71.15861155192057 101.45116666666667C73.82527821858724 101.45116666666667 75.15861155192057 102.78450000000001 75.15861155192057 105.45116666666667L75.15861155192057 105.45116666666667L75.15861155192057 276.685L75.15861155192057 276.685C75.15861155192057 276.685 59.35277811686198 276.685 59.35277811686198 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 59.35277811686198 276.685L 59.35277811686198 105.45116666666667Q 59.35277811686198 101.45116666666667 63.35277811686198 101.45116666666667L 71.15861155192057 101.45116666666667Q 75.15861155192057 101.45116666666667 75.15861155192057 105.45116666666667L 75.15861155192057 105.45116666666667L 75.15861155192057 276.685L 75.15861155192057 276.685z"
                                                        pathFrom="M 59.35277811686198 276.685L 59.35277811686198 276.685L 75.15861155192057 276.685L 75.15861155192057 276.685L 75.15861155192057 276.685L 75.15861155192057 276.685L 75.15861155192057 276.685L 59.35277811686198 276.685"
                                                        cy="101.45116666666667" cx="177.0583343505859" j="0" val="76"
                                                        barHeight="175.23383333333334" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1041"
                                                        d="M178.0583343505859 276.685L178.0583343505859 84.69979166666667C178.0583343505859 82.03312499999998 179.39166768391925 80.69979166666667 182.0583343505859 80.69979166666667L189.8641677856445 80.69979166666667C192.53083445231118 80.69979166666667 193.8641677856445 82.03312499999998 193.8641677856445 84.69979166666667L193.8641677856445 84.69979166666667L193.8641677856445 276.685L193.8641677856445 276.685C193.8641677856445 276.685 178.0583343505859 276.685 178.0583343505859 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 178.0583343505859 276.685L 178.0583343505859 84.69979166666667Q 178.0583343505859 80.69979166666667 182.0583343505859 80.69979166666667L 189.8641677856445 80.69979166666667Q 193.8641677856445 80.69979166666667 193.8641677856445 84.69979166666667L 193.8641677856445 84.69979166666667L 193.8641677856445 276.685L 193.8641677856445 276.685z"
                                                        pathFrom="M 178.0583343505859 276.685L 178.0583343505859 276.685L 193.8641677856445 276.685L 193.8641677856445 276.685L 193.8641677856445 276.685L 193.8641677856445 276.685L 193.8641677856445 276.685L 178.0583343505859 276.685"
                                                        cy="80.69979166666667" cx="295.7638905843099" j="1" val="85"
                                                        barHeight="195.98520833333333" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1043"
                                                        d="M296.7638905843099 276.685L296.7638905843099 47.808458333333334C296.7638905843099 45.14179166666668 298.0972239176432 43.808458333333334 300.7638905843099 43.808458333333334L308.5697240193685 43.808458333333334C311.2363906860352 43.808458333333334 312.5697240193685 45.14179166666668 312.5697240193685 47.808458333333334L312.5697240193685 47.808458333333334L312.5697240193685 276.685L312.5697240193685 276.685C312.5697240193685 276.685 296.7638905843099 276.685 296.7638905843099 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 296.7638905843099 276.685L 296.7638905843099 47.808458333333334Q 296.7638905843099 43.808458333333334 300.7638905843099 43.808458333333334L 308.5697240193685 43.808458333333334Q 312.5697240193685 43.808458333333334 312.5697240193685 47.808458333333334L 312.5697240193685 47.808458333333334L 312.5697240193685 276.685L 312.5697240193685 276.685z"
                                                        pathFrom="M 296.7638905843099 276.685L 296.7638905843099 276.685L 312.5697240193685 276.685L 312.5697240193685 276.685L 312.5697240193685 276.685L 312.5697240193685 276.685L 312.5697240193685 276.685L 296.7638905843099 276.685"
                                                        cy="43.808458333333334" cx="414.4694468180338" j="2" val="101"
                                                        barHeight="232.87654166666667" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1045"
                                                        d="M415.4694468180338 276.685L415.4694468180338 54.72558333333333C415.4694468180338 52.058916666666676 416.80278015136713 50.72558333333333 419.4694468180338 50.72558333333333L427.27528025309243 50.72558333333333C429.94194691975906 50.72558333333333 431.27528025309243 52.058916666666676 431.27528025309243 54.72558333333333L431.27528025309243 54.72558333333333L431.27528025309243 276.685L431.27528025309243 276.685C431.27528025309243 276.685 415.4694468180338 276.685 415.4694468180338 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 415.4694468180338 276.685L 415.4694468180338 54.72558333333333Q 415.4694468180338 50.72558333333333 419.4694468180338 50.72558333333333L 427.27528025309243 50.72558333333333Q 431.27528025309243 50.72558333333333 431.27528025309243 54.72558333333333L 431.27528025309243 54.72558333333333L 431.27528025309243 276.685L 431.27528025309243 276.685z"
                                                        pathFrom="M 415.4694468180338 276.685L 415.4694468180338 276.685L 431.27528025309243 276.685L 431.27528025309243 276.685L 431.27528025309243 276.685L 431.27528025309243 276.685L 431.27528025309243 276.685L 415.4694468180338 276.685"
                                                        cy="50.72558333333333" cx="533.1750030517578" j="3" val="98"
                                                        barHeight="225.95941666666667" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1047"
                                                        d="M534.1750030517578 276.685L534.1750030517578 80.08837500000001C534.1750030517578 77.42170833333336 535.5083363850912 76.08837500000001 538.1750030517578 76.08837500000001L545.9808364868164 76.08837500000001C548.6475031534831 76.08837500000001 549.9808364868164 77.42170833333336 549.9808364868164 80.08837500000001L549.9808364868164 80.08837500000001L549.9808364868164 276.685L549.9808364868164 276.685C549.9808364868164 276.685 534.1750030517578 276.685 534.1750030517578 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 534.1750030517578 276.685L 534.1750030517578 80.08837500000001Q 534.1750030517578 76.08837500000001 538.1750030517578 76.08837500000001L 545.9808364868164 76.08837500000001Q 549.9808364868164 76.08837500000001 549.9808364868164 80.08837500000001L 549.9808364868164 80.08837500000001L 549.9808364868164 276.685L 549.9808364868164 276.685z"
                                                        pathFrom="M 534.1750030517578 276.685L 534.1750030517578 276.685L 549.9808364868164 276.685L 549.9808364868164 276.685L 549.9808364868164 276.685L 549.9808364868164 276.685L 549.9808364868164 276.685L 534.1750030517578 276.685"
                                                        cy="76.08837500000001" cx="651.8805592854818" j="4" val="87"
                                                        barHeight="200.596625" barWidth="17.805833435058595"></path>
                                                    <path id="SvgjsPath1049"
                                                        d="M652.8805592854818 276.685L652.8805592854818 38.58562500000002C652.8805592854818 35.918958333333364 654.2138926188152 34.58562500000002 656.8805592854818 34.58562500000002L664.6863927205404 34.58562500000002C667.353059387207 34.58562500000002 668.6863927205404 35.918958333333364 668.6863927205404 38.58562500000002L668.6863927205404 38.58562500000002L668.6863927205404 276.685L668.6863927205404 276.685C668.6863927205404 276.685 652.8805592854818 276.685 652.8805592854818 276.685 "
                                                        fill="rgba(228,230,239,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskqarszhjk)"
                                                        pathTo="M 652.8805592854818 276.685L 652.8805592854818 38.58562500000002Q 652.8805592854818 34.58562500000002 656.8805592854818 34.58562500000002L 664.6863927205404 34.58562500000002Q 668.6863927205404 34.58562500000002 668.6863927205404 38.58562500000002L 668.6863927205404 38.58562500000002L 668.6863927205404 276.685L 668.6863927205404 276.685z"
                                                        pathFrom="M 652.8805592854818 276.685L 652.8805592854818 276.685L 668.6863927205404 276.685L 668.6863927205404 276.685L 668.6863927205404 276.685L 668.6863927205404 276.685L 668.6863927205404 276.685L 652.8805592854818 276.685"
                                                        cy="34.58562500000002" cx="770.5861155192058" j="5" val="105"
                                                        barHeight="242.09937499999998" barWidth="17.805833435058595"></path>
                                                    <g id="SvgjsG1037" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1038" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1040" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1042" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1044" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1046" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1048" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1021" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1036" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1092" x1="0" y1="0" x2="712.2333374023438" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1093" x1="0" y1="0" x2="712.2333374023438" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1094" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1095" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1096" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1070" class="apexcharts-yaxis" rel="0"
                                            transform="translate(16.76666259765625, 0)">
                                            <g id="SvgjsG1071" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1072"
                                                    font-family="inherit" x="20" y="31.4" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1073">120</tspan>
                                                    <title>120</title>
                                                </text><text id="SvgjsText1074" font-family="inherit" x="20" y="100.57125"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1075">90</tspan>
                                                    <title>90</title>
                                                </text><text id="SvgjsText1076" font-family="inherit" x="20" y="169.7425"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1077">60</tspan>
                                                    <title>60</title>
                                                </text><text id="SvgjsText1078" font-family="inherit" x="20"
                                                    y="238.91375000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1079">30</tspan>
                                                    <title>30</title>
                                                </text><text id="SvgjsText1080" font-family="inherit" x="20" y="308.085"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1081">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(80, 205, 137);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(228, 230, 239);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 5-->
                    <div class="card mb-10">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Activities</span>
                                <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61c82205c1f8f">
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
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61c82205c1f8f" data-allow-clear="true"
                                                    data-select2-id="select2-data-19-wl8r" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-21-5fzb"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-20-czht"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-02oc-container"
                                                            aria-controls="select2-02oc-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-02oc-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
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
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
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
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                            <div class="timeline-label">
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And
                                        keep structure</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch
                                        preparion meeting</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 5-->
                    <!--begin::List Widget 4-->
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Trends</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3">
                                                </rect>
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title=""
                                                data-bs-original-title="Specify a target name for future usage and reference"
                                                aria-label="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                            Authors</a>
                                        <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+82$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/telegram.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular
                                            Authors</a>
                                        <span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+280$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/vimeo.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
                                        <span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/bebo.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                            Customers</a>
                                        <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+686$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/kickstarter.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller
                                            Theme</a>
                                        <span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+726$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="/metronic8/demo11/assets/media/svg/brand-logos/fox-hub.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker
                                            App</a>
                                        <span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+145$</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div> --}}
@endsection

@push('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/diklat',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'nama_diklat', name: 'nama_diklat' },
                { data: 'kategori.nama_kategori', name: 'kategori.nama_kategori' },
                { data: 'program_keahlian.nama_program_keahlian', name: 'program_keahlian.nama_program_keahlian' },
                { data: 'tahun', name: 'tahun' },
                { data: 'jumlah_peserta', name: 'jumlah_peserta' },
                { data: 'status_aktif', name: 'status_aktif' }
            ]
        });
    });
    </script>
        <script>
            const chart = new Chartisan({
              el: '#chart',
              url: "@chart('chart_diklat_per_departemen')",
            });
          </script>
@endpush

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush
