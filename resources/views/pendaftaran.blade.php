<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/metronic8/demo11/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(/metronic8/demo11/assets/media/illustrations/sketchy-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="/metronic8/demo11/../demo11/index.html" class="mb-12">
                    <img alt="Logo" src="{{ asset('LOGO-BAru-2020.png') }}" width="100" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form action="{{ url('pendaftaran/create') }}" method="POST" class="form w-100 needs-validation"
                        novalidate>
                        @CSRF
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Pendaftaran Akun Baru</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Sudah Punya Akun ?
                                <a href="/metronic8/demo11/../demo11/authentication/layouts/basic/sign-in.html"
                                    class="link-primary fw-bolder">Login Disini</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                            <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                class="h-20px me-3" />Daftar Dengan Google</button>
                        <!--end::Action-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        {{-- @include('validation_error') --}}
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
                            <input type="text" placeholder="" name="nama_lengkap" autocomplete="off"
                                class="{{ $errors->has('nama_lengkap') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                value="{{ old('nama_lengkap') }}" />
                            <div class="invalid-feedback">
                                {{ $errors->first('nama_lengkap') }}
                            </div>
                        </div>
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">NIK</label>
                                <input
                                    class="{{ $errors->has('nik') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                    type="text" placeholder="" name="nik" autocomplete="off"
                                    value="{{ old('nik') }}" />
                                <div class="invalid-feedback">
                                    {{ $errors->first('nik') }}
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">NUPTK</label>
                                <input
                                    class="{{ $errors->has('nuptk') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                    type="text" placeholder="" name="nuptk" autocomplete="off"
                                    value="{{ old('nuptk') }}" />
                                <div class="invalid-feedback">
                                    {{ $errors->first('nuptk') }}
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Sekolah</label>
                            <select name="instansi_id" id="instansi"
                                class="{{ $errors->has('instansi_id') ? 'is-invalid' : '' }} instansi form-control form-control-lg form-control-solid"
                                style="height: 100px;" placeholder="Masukan Nama Instansi">
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('instansi_id') }}
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Alamat</label>
                            <input
                                class="{{ $errors->has('domisi_alamat_jalan') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                type="text" placeholder="" name="domisi_alamat_jalan" autocomplete="off"
                                value="{{ old('domisi_alamat_jalan') }}" />
                            <div class="invalid-feedback">
                                {{ $errors->first('domisi_alamat_jalan') }}
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Nomor HP</label>
                            <input
                                class="{{ $errors->has('nomor_hp') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                type="number" placeholder="" name="nomor_hp" autocomplete="off"
                                value="{{ old('nomor_hp') }}" />
                            <div class="invalid-feedback">
                                {{ $errors->first('nomor_hp') }}
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Jabatan</label>
                            <input
                                class="{{ $errors->has('jabatan') ? 'is-invalid' : '' }} form-control form-control-lg form-control-solid"
                                type="text" placeholder="" name="jabatan" autocomplete="off"
                                value="{{ old('jabatan') }}" />
                            <div class="invalid-feedback">
                                {{ $errors->first('jabatan') }}
                            </div>
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-danger">
                                Daftar Sekarang
                            </button>
                            <a href="/" class="btn btn-lg btn-primary">Kembali Ke Halaman Utama</a>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/authentication/sign-up/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.instansi').select2({
                placeholder: 'Cari Nama Instansi',
                ajax: {
                    url: '/ajax/select2Instansi',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.nama_instansi,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>