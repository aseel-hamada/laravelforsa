
@extends('layouts/masterStudent')
@section('title' ,' المهام')

@section('content')


@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/student-home.css')}}">

@endsection


<div class="main-panel" style="background-color: #DBDEEE;">
    <div class="content-wrapper">
      <!-- start_content   -->
      <!-- <div class="back"></div> -->
      <div class="container mt-5 d-flex flex-column align-items-center">
        <div class="card mb-5 ">
          <div class="d-flex justify-content-between align-itmes-center p-3">
            <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
              <path fill="#6251A2" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
            </svg>

            <h5 class="my-auto ms-5" style="color: #6251A2;" class=" " href="{{url('/profilecompny')}}">
                 21/2/2000

              </h5>
           </div>
         <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
         <div class="card-body bg-light">
           <h5 class="card-title text-right fw-bold">انشاء ملف prototype</h5>
           <p class="card-text text-right mb-3">قم بانشاء ملف prototype حسب الملف اللمرفق يوضح  الاحداث قم بانشاء ملف
            prototype</p>
          <div class="d-flex mt-2 justify-content-end align-content-center">
           <button class="btn btn-small btnH " style="background-color: #6251A2;">
              <a class="text-white" href="Apply.html"  data-toggle="modal" data-target="#exampleModalCenter" style="text-decoration: none;">تسليم </a></button>
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

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->


 <!-- اا  -->

 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" style="background-color:#DBDEEE">
    <div class="modal-header">
      <h6 class="modal-title text-dark text-decoration-none pt-1" id="exampleModalLongTitle">
        تعليمات تسليم المهمة
    </h6>

    </div>
    <div class="modal-body">
      <div class="small text-dark text-right text-wrap">
        <h5>التسليم عن طريق رابط</h5>
        <p class="mb-4">قم برفع المهمة  اما على github وإرفاق الرابط الخاص بالمهمة او رفعها على  google drive وارفاق رابط  google drive الخاص بها </p>
        <form action="#" class="d-flex mb-4">
          <input type="text" class="form-control mr-3" placeholder="الرابط الخاص بالمهمة">
          <input type="submit" class="btn modalinput  send" data-dismiss="modal" style="background-color: #148F78; color: white;margin-right: 8px;" value="تسليم">
        </form>
      </div>
    </div>

  </div>


  </div>
 </div>
@endsection
