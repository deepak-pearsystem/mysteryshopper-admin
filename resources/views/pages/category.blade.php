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
              <li class="breadcrumb-item active" aria-current="page">Category</li>
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
            <th>Category</th>
            <th>Count</th> 
            <th>Status</th>
            <th>Action</th> 
          </tr>
        </thead>
        <tbody>
          
            <tr>
               <td></td>
                <td>1</td>
                <td>Fire Extinguisher</td>
                <td>5</td>
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
                   <i class="feather icon-edit" title="Edit"></i>
                </td> 
                
            </tr>
            <tr>
              <td></td>
               <td>2</td>
               <td>Fire Extinguisher</td>
               <td>5</td>
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
                  <i class="feather icon-edit" title="Edit"></i>
               </td> 
               
           </tr>
           <tr>
            <td></td>
             <td>3</td>
             <td>Fire Extinguisher</td>
             <td>5</td>
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
                <i class="feather icon-edit" title="Edit"></i>
             </td> 
             
         </tr>
         <tr>
          <td></td>
           <td>4</td>
           <td>Fire Extinguisher</td>
           <td>5</td>
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
              <i class="feather icon-edit" title="Edit"></i>
           </td> 
           
       </tr>
          <tr>
            <td></td>
            <td>5</td>
            <td>Fire Extinguisher</td>
            <td>5</td>
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
               <i class="feather icon-edit" title="Edit"></i>
            </td> 
            
        </tr>
        <tr>
          <td></td>
          <td>6</td>
          <td>Fire Extinguisher</td>
          <td>5</td>
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
             <i class="feather icon-edit" title="Edit"></i>
          </td> 
          
      </tr>
      <tr>
        <td></td>
        <td>7</td>
        <td>Fire Extinguisher</td>
        <td>5</td>
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
           <i class="feather icon-edit" title="Edit"></i>
        </td> 
        
    </tr>
    <tr>
      <td></td>
      <td>8</td>
      <td>Fire Extinguisher</td>
      <td>5</td>
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
         <i class="feather icon-edit" title="Edit"></i>
      </td> 
      
    </tr>
    <tr>
      <td></td>
      <td>9</td>
      <td>Fire Extinguisher</td>
      <td>5</td>
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
         <i class="feather icon-edit" title="Edit"></i>
      </td> 
      
    </tr>
    <tr>
      <td></td>
      <td>10</td>
      <td>Fire Extinguisher</td>
      <td>5</td>
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
         <i class="feather icon-edit" title="Edit"></i>
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
          </tr>
        </tfoot>
      </table>
    </div>
    {{-- DataTable ends --}}
          {{-- Modal --}}
          <div class="modal fade text-left" id="addOxygenprovider" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Add Oxygen Providers</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               <form action="{{ url('/add-oxyProvider') }}" method="post" enctype="multipart/form-data" >
				{{ csrf_field() }}
                <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="contactperson">Contact person</label>
                    <input type="email" class="form-control" name="contactPerson"  required id="contactperson" placeholder="Enter Contact Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Select City</label>
                    <select id="selectcity" name="city"  required class="form-control">
                <option selected value="Jodhpur" >Jodhpur</option> 
                <option  value="Noida" >Noida</option> 
                <option  value="Delhi" >Delhi</option> 
                <option  value="Greater Noida" >Greater Noida</option>  
              </select>
                  </div>
                </div>
      
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="capacityltr">Cylinder Capacity(Ltr)</label>
                    <select id="capacityltr" name="cylinderCapacity"  required class="form-control">
                      <option selected value="10">10</option> 
                      <option value="20">20</option> 
                      <option value="30">30</option> 
                      <option value="40">40</option> 
                      <option value="50">50</option> 
                      <option value="60">60</option> 
                      <option value="70">70</option> 
                      <option value="80">80</option> 
                      <option value="90">90</option> 
                      <option value="100">100</option> 
                    </select>
                  </div>
                </div>
      
                <div class="form-row"> 
                    <div class="form-group col-md-6">
              <label for="contactnumber">Contact Number</label>
              <input type="tel" class="form-control" name="contactNumber" required  id="contactnumber" placeholder="1234567890">
            </div>
            <div class="form-group col-md-6">
              <label for="whatsappumber">WhatsApp Number (Optional)</label>
              <input type="tel"  name="whatsappContactNumber"  class="form-control" id="whatsappumber" placeholder="1234567890">
            </div> 
                </div>
      
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text"  name="address"  class="form-control" id="address" placeholder="Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="emailaddress">Email Address</label>
                    <input type="email" name="email" required class="form-control" id="emailaddress" placeholder="Email Address">
                  </div>
                </div>
      
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="otherinfo">Other Info (Optional)</label>
                    <textarea class="form-control"  name="otherInfo" id="otherinfo" rows="3" placeholder="Comment"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"  >Submit Details</button>
                </div>
              </form>
      
            </div>
          </div>
        </div>
  </section>
  {{-- Data list view end --}}
@endsection
      </div>
  </div>
</div>
<!-- Hoverable rows end -->
@endsection



