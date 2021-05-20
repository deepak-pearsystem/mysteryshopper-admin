{{-- Vendor Scripts --}}
<script src="{{ asset('vendors/js/vendors.min.js')}}"></script>
<script src="{{ asset('vendors/js/ui/prism.min.js')}}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset('js/core/app-menu.js')}}"></script>
<script src="{{ asset('js/core/app.js')}}"></script>
<script src="{{ asset('js/scripts/components.js')}}"></script>

<script src="{{ asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('vendors/js/extensions/shepherd.min.js')}}"></script>
<script src="{{ asset('vendors/js/charts/chart.min.js')}}"></script>

<script src="{{ asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>

@if($configData['blankPage'] == false)
<script src="{{ asset('js/scripts/customizer.js')}}"></script>
<script src="{{ asset('js/scripts/footer.js')}}"></script>
@endif
{{-- page script --}}
@yield('page-script')
<script src="{{ asset('js/scripts/ui/data-list-view.js')}}"></script>
<script src="{{ asset('js/scripts/cards/card-statistics.js')}}"></script>
<script src="{{ asset('js/scripts/charts/chart-chartjs.js')}}"></script>
{{-- page script --}}

<script src="{{ asset('js/customjs.js')}}"></script>