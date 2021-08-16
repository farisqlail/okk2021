
Skip to content
Pull requests
Issues
Marketplace
Explore
@farisqlail
farisqlail /
ppsi-sistem-hotel

2
0

    0

Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights

    Settings

ppsi-sistem-hotel/resources/views/admin/layouts.blade.php
@farisqlail
farisqlail configurasi
Latest commit 47a3839 on May 20
History
1 contributor
87 lines (68 sloc) 2.4 KB
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>
  
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
  @include('admin.include._header-script')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('admin.include._sidebar-script')

    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      @include('admin.include._navbar-script')

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content-admin')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <span>Copyright &copy; {{ date("Y") }}</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded bg-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
{{-- 
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> --}}

  @include('admin.include._footer-script')
  @stack('script')
</body>

</html>

    © 2021 GitHub, Inc.
    Terms
    Privacy
    Security
    Status
    Docs

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

Loading complete