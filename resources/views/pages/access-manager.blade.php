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
              <li class="breadcrumb-item active" aria-current="page">Access Manager</li>
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
            <th>Type</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Access Control</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>1</td>
                <td>Leanne Graham</td>
                <td>20/8/2020</td>
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
                <td>
                    <button class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModalCenter">Manage Access Control</button>
                </td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>2</td>
                <td>Leanne Graham</td>
                <td>20/8/2020</td>
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
                <td>
                    <button class="btn btn-primary">Manage Access Control</button>
                </td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">3</th>
                <td>Leanne Graham</td>
                <td>20/8/2020</td>
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
                <td>
                    <button class="btn btn-primary">Manage Access Control</button>
                </td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">4</th>
                <td>Leanne Graham</td>
                <td>20/8/2020</td>
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
                <td>
                    <button class="btn btn-primary">Manage Access Control</button>
                </td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <th scope="row">5</th>
                <td>Leanne Graham</td>
                <td>20/8/2020</td>
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
                <td>
                    <button class="btn btn-primary">Manage Access Control</button>
                </td>
                <td class="product-action">
                  <span class="action-edit"><i class="feather icon-edit"></i></span>
                  <span class="action-delete"><i class="feather icon-trash"></i></span>
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
          </tr>
        </tfoot>
      </table>
      {{-- Modal --}}
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Access Control</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="accessmemder-wrapper">
                <div>
                    <fieldset>
                        <div class="vs-checkbox-con vs-checkbox-primary">
                          <input type="checkbox" checked value="false">
                          <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-check"></i>
                            </span>
                          </span>
                          <span class="">Dashboard</span>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div class="vs-checkbox-con vs-checkbox-primary">
                           <input type="checkbox" checked value="false">
                           <span class="vs-checkbox">
                             <span class="vs-checkbox--check">
                               <i class="vs-icon feather icon-check"></i>
                             </span>
                           </span>
                           <span class="">Plasma Donors</span>
                         </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div class="vs-checkbox-con vs-checkbox-primary">
                          <input type="checkbox" checked value="false">
                          <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-check"></i>
                            </span>
                          </span>
                          <span class="">Oxygen Providers</span>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div class="vs-checkbox-con vs-checkbox-primary">
                          <input type="checkbox" checked value="false">
                          <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-check"></i>
                            </span>
                          </span>
                          <span class="">User List</span>
                        </div>
                    </fieldset>
                </div>
                <div>
                  <fieldset>
                      <div class="vs-checkbox-con vs-checkbox-primary">
                        <input type="checkbox" checked value="false">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                        <span class="">Inquiries</span>
                      </div>
                  </fieldset>
              </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
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



