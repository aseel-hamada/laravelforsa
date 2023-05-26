@extends('layouts/masterStudent')
@section('title' ,'ارشيف المهام')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/student-tasksarchive.css')}}">
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

             <h3 class="my-auto ms-5"><a style="color: #6251A2;" class="btn fw-bold" href="../Company/profile_company.html">
               30/06/2001
               </a>
             </h3>
           </div>
         <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
         <div class="card-body bg-light">
           <h5 class="card-title text-right fw-bold">انشاء ملف prototype</h5>
           <p class="card-text text-right mb-3">قم بانشاء ملف prototype حسب الملف اللمرفق يوضح  الاحداث قم بانشاء ملف
            prototype</p>
          <div class="d-flex mt-2 justify-content-end align-content-center">
            <div class="d-inline-flex align-items-center to_do">
              <div class="p-1">done</div>
          </div>
        </div>
         </div>
       </div>

       <div class="card mb-5 ">
        <div class="d-flex justify-content-between align-itmes-center p-3">
          <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
            <path fill="#6251A2" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
          </svg>

           <h3 class="my-auto ms-5"><a style="color: #6251A2;" class="btn fw-bold" href="../Company/profile_company.html">
             30/06/2001
             </a>
           </h3>
         </div>
       <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
       <div class="card-body bg-light">
         <h5 class="card-title text-right fw-bold">انشاء ملف prototype</h5>
         <p class="card-text text-right mb-3">قم بانشاء ملف prototype حسب الملف اللمرفق يوضح  الاحداث قم بانشاء ملف
          prototype</p>
        <div class="d-flex mt-2 justify-content-end align-content-center">

            <div class="d-inline-flex align-items-center active">
              <div class="p-1">to do</div>
            </div>
        </div>
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




@endsection
