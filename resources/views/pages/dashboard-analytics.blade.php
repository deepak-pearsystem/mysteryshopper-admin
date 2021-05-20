
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

  @section('content')
    {{-- Dashboard Analytics Start --}}
    <section id="dashboard-analytics">
      <div class="row">
          {{-- <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
                <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <i class="feather icon-award white font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                  <h1 class="mb-2 text-white">Congratulations John,</h1>
                  <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
        <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">78.9k</h2>
                        <p class="mb-0">Total Campaigns</p>
                    </div>
                    <div class="avatar bg-rgba-primary p-50">
                        <div class="avatar-content">
                            <i class="feather icon-shield text-primary font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-5"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">659.8k</h2>
                        <p class="mb-0">Ongoing</p>
                    </div>
                    <div class="avatar bg-rgba-success p-50">
                        <div class="avatar-content">
                            <i class="feather icon-wind text-success font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-6"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">28.7k</h2>
                        <p class="mb-0">Delivered</p>
                    </div>
                    <div class="avatar bg-rgba-warning p-50">
                        <div class="avatar-content">
                            <i class="feather icon-user text-warning font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-7"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">78.9k</h2>
                        <p class="mb-0">Workforce</p>
                    </div>
                    <div class="avatar static-red p-50">
                        <div class="avatar-content">
                            <i class="feather icon-shield static-reds font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-8"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">659.8k</h2>
                        <p class="mb-0">Payment Cleared</p>
                    </div>
                    <div class="avatar static-blue p-50">
                        <div class="avatar-content">
                            <i class="feather icon-wind static-blues font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-9"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <h2 class="text-bold-700">28.7k</h2>
                        <p class="mb-0">Payment Pending</p>
                    </div>
                    <div class="avatar static-aqua p-50">
                        <div class="avatar-content">
                            <i class="feather icon-user static-aquas font-medium-5"></i>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-10"></div>
                </div>
            </div>
        </div>
    </div>


      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                  <div class="col-md-9 col-12">
                    <div class="card-header">
                      <h4 class="card-title">Campaigns</h4>
                    </div>
                  </div>
                  {{-- <div class="col-md-3 col-12">
                    <fieldset class="form-group">
                        <select class="custom-select" id="customSelect" style="margin-top: 1.5rem; width: 85%;">
                            <option selected>Day</option>
                            <option value="IT">Week</option>
                            <option value="Blade Runner">Month</option>
                            <option value="Thor Ragnarok">Year</option>
                        </select>
                    </fieldset>
                  </div> --}}
                </div>
                
                <div class="card-content">
                    <div class="card-body pl-0">
                        <div class="height-300">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
      <!-- Bar Chart -->
      <div class="col-md-12">
        <div class="card">
            <div class="row">
              <div class="col-md-9 col-12">
                <div class="card-header">
                  <h4 class="card-title">User List</h4>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <fieldset class="form-group">
                    <select class="custom-select" id="customSelect" style="margin-top: 1.5rem; width: 85%;">
                        <option selected>Day</option>
                        <option value="IT">Week</option>
                        <option value="Blade Runner">Month</option>
                        <option value="Thor Ragnarok">Year</option>
                    </select>
                </fieldset>
              </div>
            </div>

            <div class="card-content">
                <div class="card-body pl-0">
                    <div class="height-300">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    <!-- Hoverable rows start -->
<!-- Hoverable rows end -->
    </section>
  <!-- Dashboard Analytics end -->
@endsection


