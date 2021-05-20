@extends('layouts/contentLayoutMaster')

@section('title', 'Bootstrap Tables')

@section('content')
<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
  <div class="col-12">
      <div class="card">
          @section('content')
          <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin User</li>
              </ol>
            </div>
            <div class="col-12 col-lg-6 col-md-6">
              <div class="tabletopaddbtn">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addOxygenprovider">Add</button>
                <a href="{{url('oxygendownloadExcel')}}" class="btn btn-warning">Export</a>
              </div>
            </div>
          </div>
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header noaddbtnintable">
    {{-- DataTable starts --}}
    <div class="table-responsive">
      <table class="table data-list-view common_table">
        <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Admin Type</th>
            <th>Created Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <th scope="row">1</th>
                <td>Leanne Graham</td>
                <td>sampleuser@gmail.com</td>
                <td>+91-1234567890</td>
                <td>Super Admin</td>
                <td>2/8/2020</td>
                <td>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <div class="avatar">
                        <i class="feather icon-check"></i>
                      </div>
                      <span class="chip-text">Active</span>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">2</th>
                <td>Leanne Graham</td>
                <td>sampleuser@gmail.com</td>
                <td>+91-1234567890</td>
                <td>Super Admin</td>
                <td>2/8/2020</td>   
                <td>
                  <div class="chip chip-danger mr-1">
                    <div class="chip-body">
                      <div class="avatar">
                        <i class="feather icon-x"></i>
                      </div>
                      <span class="chip-text">Inactive</span>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">3</th>
                <td>Leanne Graham</td>
                <td>sampleuser@gmail.com</td>
                <td>+91-1234567890</td>
                <td>Super Admin</td>
                <td>2/8/2020</td>
                <td>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <div class="avatar">
                        <i class="feather icon-check"></i>
                      </div>
                      <span class="chip-text">Active</span>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">4</th>
                <td>Leanne Graham</td>
                <td>sampleuser@gmail.com</td>
                <td>+91-1234567890</td>
                <td>Super Admin</td>
                <td>2/8/2020</td>
                <td>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <div class="avatar">
                        <i class="feather icon-check"></i>
                      </div>
                      <span class="chip-text">Active</span>
                    </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">5</th>
                <td>Leanne Graham</td>
                <td>sampleuser@gmail.com</td>
                <td>+91-1234567890</td>
                <td>Super Admin</td>
                <td>2/8/2020</td>
                <td>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <div class="avatar">
                        <i class="feather icon-check"></i>
                      </div>
                      <span class="chip-text">Active</span>
                    </div>
                  </div>
                </td>
            </tr>
         
        </tbody>
        <tfoot class="custom-tfootable filteroxyen">
          <tr> 
            <th></th>
            <th></th>
            <th></th> 
            <th>Filter</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
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



