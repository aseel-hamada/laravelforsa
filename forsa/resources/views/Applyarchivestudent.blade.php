@extends('layouts/masterStudent')
@section('title' ,' ارشيف الطلبات')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/student-Applyarchive.css')}}">
@endsection
<div class="main-panel" >
    <div class="content-wrapper">
      <!-- start_content   -->
      <!-- <div class="back"></div> -->
      <div class="container mt-5 d-flex flex-column align-items-center">
        <div class="card mb-5 ">
           <div class="d-flex justify-content-between align-itmes-center">
            <img src="../assets/images/hexa.png" class=" p-2" width="100px" height="100px" style="margin-right: 20px;" alt="">
            <h5 class="my-auto ms-5"><a style="color: #6251A2;" class=" " href="{{url('/profilecompny')}}">
                عن الشركة
                </a>
              </h5>
            </div>
          <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
          <div class="card-body bg-light">
            <h5 class="card-title text-right fw-bold">Hexa</h5>
            <p class="card-text text-right mb-3">تعلن شركه هكسا لتكنولوجيا المعلومات عن توفر فرصه تدريب
              في مجال التصميم الجرافيكي</p>
           <div class="d-flex mt-2 justify-content-end align-content-center">
            <div class="d-inline-flex align-items-center to_do">
              <div class="p-1" >مقبول</div>
            </div>
           </div>
          </div>
        </div>
        <div class="card mb-5 ">
             <div class="d-flex justify-content-between align-itmes-center">
              <img src="../assets/images/hexa.png" class=" p-2" width="100px" height="100px" style="margin-right: 20px;" alt="">

              <h5 class="my-auto ms-5"><a style="color: #6251A2;" class=" " href="{{url('/profilecompny')}}">
                عن الشركة
                </a>
              </h5>
              </div>
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <div class="card-body bg-light">
              <h5 class="card-title text-right fw-bold">Hexa</h5>
              <p class="card-text text-right mb-3">تعلن شركه هكسا لتكنولوجيا المعلومات عن توفر فرصه تدريب
                في مجال التصميم الجرافيكي</p>
             <div class="d-flex mt-2 justify-content-end align-content-center">
              <div class="d-inline-flex align-items-center unAccept">
                <div class="p-1">مرفوض</div>
              </div>
             </div>
            </div>



        </div>
     </div>
    <!-- content-wrapper ends -->
    <nav >
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">السابق</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">التالي</a>
        </li>
      </ul>
    </nav>

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>


@endsection
