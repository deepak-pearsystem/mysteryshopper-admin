<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
<link rel="stylesheet" href="{{ asset('vendors/css/vendors.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css')}}">
{{-- Vendor Styles --}}
@yield('vendor-style')
{{-- Theme Styles --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-extended.css')}}">
<link rel="stylesheet" href="{{ asset('css/colors.css')}}">
<link rel="stylesheet" href="{{ asset('css/components.css')}}">
<link rel="stylesheet" href="{{ asset('css/themes/dark-layout.css')}}">
<link rel="stylesheet" href="{{ asset('css/themes/semi-dark-layout.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">

<link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/extensions/tether-theme-arrows.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/extensions/tether.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/css/extensions/shepherd-theme-default.css')}}">
{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp

{{-- Layout Styles works when don't use customizer --}}

{{-- @if($configData['theme'] == 'dark-layout')
        <link rel="stylesheet" href="{{ asset(mix('css/themes/dark-layout.css')) }}">
@endif
@if($configData['theme'] == 'semi-dark-layout')
<link rel="stylesheet" href="{{ asset(mix('css/themes/semi-dark-layout.css')) }}">
@endif --}}
{{-- Page Styles --}}
@if($configData['mainLayoutType'] === 'horizontal')
<link rel="stylesheet" href="{{ asset('css/core/menu/menu-types/horizontal-menu.css')}}">
@endif
<link rel="stylesheet" href="{{ asset('css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" href="{{ asset('css/core/colors/palette-gradient.css')}}">


{{-- Page Styles --}}
@yield('page-style')
{{-- Laravel Style --}}
<link rel="stylesheet" href="{{ asset('css/custom-laravel.css')}}">
<link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/data-list-view.css')}}">

<link rel="stylesheet" href="{{ asset('css/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css')}}">
<link rel="stylesheet" href="{{ asset('css/plugins/tour/tour.css')}}">
{{-- Custom RTL Styles --}}
@if($configData['direction'] === 'rtl' && isset($configData['direction']))
<link rel="stylesheet" href="{{ asset('css/custom-rtl.css')}}">
@endif

<link rel="stylesheet" href="{{ asset('css/customstyle.css')}}">






