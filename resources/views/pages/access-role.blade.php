
@extends('layouts/contentLayoutMaster')

@section('title', 'Bootstrap Tables')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
@endsection

@section('content')
<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Access Role</li>
    </ol>
  <div class="col-12">
      <div class="card">
          <div class="card-header mb-lg-2">
              <h4 class="card-title">Access Role</h4>
          </div>
          @section('content')
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header">
    <div class="action-btns d-none">
      <div class="btn-dropdown mr-1 mb-1">
        <div class="btn-group dropdown actions-dropodown">
          <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Actions
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
            <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
            <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
            <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
          </div>
        </div>
      </div>
    </div>

    {{-- DataTable starts --}}
    <div class="table-responsive">
      <table class="table data-list-view">
        <thead>
          <tr>
            <th></th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>ORDER STATUS</th>
            <th>PRICE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td></td>
              <td class="product-name">	Altec Lansing - Bluetooth Speaker</td>
              <td class="product-category">	Audio</td>
              <td>
                <div class="chip chip-danger">
                  <div class="chip-body">
                    <div class="chip-text">canceled</div>
                  </div>
                </div>
              </td>
              <td class="product-price">2000</td>
              <td class="product-action">
                <span class="action-edit"><i class="feather icon-edit"></i></span>
                <span class="action-delete"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
            <tr>
                <td></td>
                <td class="product-name">	Altec Lansing - Bluetooth Speaker</td>
                <td class="product-category">	Audio</td>
                <td>
                  <div class="chip chip-danger">
                    <div class="chip-body">
                      <div class="chip-text">canceled</div>
                    </div>
                  </div>
                </td>
                <td class="product-price">2000</td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
              </tr>
              <tr>
                <td></td>
                <td class="product-name">	Altec Lansing - Bluetooth Speaker</td>
                <td class="product-category">	Audio</td>
                <td>
                  <div class="chip chip-danger">
                    <div class="chip-body">
                      <div class="chip-text">canceled</div>
                    </div>
                  </div>
                </td>
                <td class="product-price">2000</td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
              </tr>
              <tr>
                <td></td>
                <td class="product-name">	Altec Lansing - Bluetooth Speaker</td>
                <td class="product-category">	Audio</td>
                <td>
                  <div class="chip chip-danger">
                    <div class="chip-body">
                      <div class="chip-text">canceled</div>
                    </div>
                  </div>
                </td>
                <td class="product-price">2000</td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
              </tr>
              <tr>
                <td></td>
                <td class="product-name">	Altec Lansing - Bluetooth Speaker</td>
                <td class="product-category">	Audio</td>
                <td>
                  <div class="chip chip-danger">
                    <div class="chip-body">
                      <div class="chip-text">canceled</div>
                    </div>
                  </div>
                </td>
                <td class="product-price">2000</td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
              </tr>
         
        </tbody>
      </table>
    </div>
    {{-- DataTable ends --}}
  </section>
  {{-- Data list view end --}}
@endsection
      </div>
  </div>
</div>
<!-- Hoverable rows end -->
@endsection
@section('vendor-script')
{{-- vendor js files --}}
        <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.select.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/ui/data-list-view.js')) }}"></script>
@endsection
