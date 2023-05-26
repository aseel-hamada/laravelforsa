
<!DOCTYPE html>
<html lang="ar" dir="rtl">
{{-- tool tip  --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
{{-- tool tip  --}}
  @include('layouts.head')

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar py-2 default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="" href="{{url('/supervisor-profile')}}">
            <img class="mt-1"id="logo" src="{{asset('assets/images/forsa2-01-removebg-preview.png')}}" width="210" height="250">

            </a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-end">
          <ul class="navbar-nav navbar-nav-right d-flex ">
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link logout " href="{{url('/index')}}">
                <i class="fa-solid fa-right-from-bracket fa-lg" style="color:#9A9CE9"></i>
                  <span class="mx-1" style="color:#9A9CE9;">تسجيل خروج</span>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center py-3" type="button" data-toggle="offcanvas">
            <i class="fa-solid fa-bars fa-lg" style="color:#9A9CE9;"></i>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav mt-2">
            <li class="nav-item nav-profile">
              <a href="supervisor-profile.html" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('assets/images/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column px-3">
                  <span class="font-weight-bold mb-2">أحمد أحمد</span>
                  <span class="text-secondary text-center text-small">ux/ui</span>
                </div>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{url('/supervisor-profile')}}">
                <i class="fa-solid fa-user fa-lg text-black"></i>

                <span class="menu-title mx-2" >حسابي</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('/supervisor-tasks')}}" >
                <i class="fa-solid fa-qrcode fa-xl  text-black"></i>

                <span class="menu-title mx-2">المهمات</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/supervisor_createTask')}}">
                <i class="fa-solid fa-square-plus fa-xl text-black"></i>


                <span class="menu-title mx-2" >أضف مهمة</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/supervisor_students')}}">
                <i class="fa-solid fa-user-group fa-lg text-black"></i>



                <span class="menu-title mx-2">المتدربين</span>
              </a>
            </li>
            <li class="nav-item  d-lg-none ">
              <a class="nav-link" href="#">
                <i class="fa-solid fa-right-from-bracket fa-lg" style="color:#9A9CE9"></i>
                <span class="mx-2" style="color: #9A9CE9;">تسجيل خروج</span>
              </a>
            </li>
          </ul>
        </nav>
        @yield('content')
   <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for dash page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<!-- End custom js for dash page -->
<!--start create-task  -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('assets/js/index.js')}}"></script>
  {{-- tooltip  --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script type="text/javascript">
  // If you do not want to use jQuery you can use Pure JavaScript. See FAQ below
  $( document ).ready(function() {
      $('[data-bs-toggle="tooltip"]').tooltip();
  });
  </script>
      {{-- tooltip  --}}

<!--end create-task  -->

</body>
</html>
