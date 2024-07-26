<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

   <!-- CSS Libraries -->
   <link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.cs')}}s">
   <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css')}}">
    @stack('styles')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('inc.topbar')
        @include('inc.sidebar')
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            @yield('content')

          </section>
        </div>
      </div>

  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/stisla.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('backend/assets/js/custom.js')}}"></script>
  <script>
    @if (session('success'))
        swal("Success!", "{{ session('success') }}", "success");
    @endif
    @if (session('error'))
        swal("Error!", "{{ session('error') }}", "error");
    @endif
  </script>
   <script src="{{ asset('backend/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
   <script>
       $(document).ready(function() {
           const addSelectAll = matches => {
               if (matches.length > 0) {
               // Insert a special "Select all matches" item at the start of the
               // list of matched items.
               return [
                   {id: 'selectAll', text: 'Select all matches', matchIds: matches.map(match => match.id)},
                   ...matches
               ];
               }
           };
           const handleSelection = event => {
               if (event.params.data.id === 'selectAll') {
               $('.select2').val(event.params.data.matchIds);
               $('.select2').trigger('change');
               };
           };
           $('.select2').select2({
               multiple: true,
               sorter: addSelectAll,
           });
           $('.select2').on('select2:select', handleSelection);
       });
   </script>
  @stack('scripts')
</body>
</html>
