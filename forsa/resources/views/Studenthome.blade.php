@extends('layouts/masterStudent')
@section('title' ,'الصفحة الرئيسية')

@section('content')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/student-home.css')}}">

@endsection

<div class="main-panel" >
    <div class="content-wrapper">
      <!-- start_content   -->
      <!--  search-->
      <div class="box mt-3">
        <form class="d-flex justify-content-center align-items-center" name="search">
            <input type="text" placeholder="ابحث..." class="input" name="txt" onmouseout="this.value = ''; this.blur();">
            <div class=" btn_ser btn text-white ">
              <svg width="20" height="20" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.478 0C30.218 0 38.954 8.736 38.954 19.476C38.954 24.5431 37.0094 29.1646 33.8273 32.633L40.0888 38.8814C40.6748 39.4674 40.6768 40.4154 40.0908 41.0014C39.7988 41.2974 39.4128 41.4434 39.0288 41.4434C38.6468 41.4434 38.2628 41.2974 37.9688 41.0054L31.6317 34.686C28.2981 37.3557 24.0714 38.954 19.478 38.954C8.738 38.954 0 30.216 0 19.476C0 8.736 8.738 0 19.478 0ZM19.478 3C10.392 3 3 10.39 3 19.476C3 28.562 10.392 35.954 19.478 35.954C28.562 35.954 35.954 28.562 35.954 19.476C35.954 10.39 28.562 3 19.478 3Z" fill="white"/>
                </svg>
            </div>
        </form>
      </div>

            <!--  search-->


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
            <button class="btn btn-small btnH " style="background-color: #6251A2;">
               <a class="text-white " href="{{url('/Applystudent')}}" >سجل الان</a></button>
             <!-- <button class="btn  btn-small " style="background-color: #AEEDE4;">
              <a class="text-white text-small" href="#">  بروفايل الشركة</a></button> -->
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
           <button class="btn btn-small btnH" style="background-color: #6251A2;">
              <a class="text-white " href="{{url('/Applystudent')}}" >سجل الان</a></button>
            <!-- <button class="btn  btn-small " style="background-color: #AEEDE4;">
             <a class="text-white text-small" href="#">  بروفايل الشركة</a></button> -->
          </div>
         </div>
       </div>

      </div>

      <nav>
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

    </div>


    <!-- partial -->
  </div>


@endsection
