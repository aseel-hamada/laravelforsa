@extends('layouts/masterAdmin')
@section('title' ,'التخصصات')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/admin-specialty.css')}}">

@endsection

@section('content')
@section('content')

<div class="main-panel" >
    <div class="content-wrapper">
      <!-- start_content   -->
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
      <div class="container d-flex justify-content-center bg_table">
        <div class="table-wrap">
            <table class="table  table-responsive">
                <thead>
                    <tr>
                        <th class="text-center py-4">#</th>
                        <th class="text-center py-4">اسم التخصص</th>
                        <th class="text-center py-4"> المزيد</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle alert" role="alert">
                        <td class="py-3">
                          <div class="text-center">1</div>
                        </td>
                        <td class="py-3">
                            <div class="text-center"> تصميم ويب </div>
                        </td>
                        <td class="py-3">

                            <div class="text-center">
                                <a href="#">
                                    <svg data-bs-toggle="tooltip" data-placement="left" title="تعديل" data-toggle="modal" data-target="#udateModal"  width="25" height="25" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33.9796 31.9065C35.0938 31.9065 36 32.8245 36 33.9533C36 35.0841 35.0938 36 33.9796 36H22.5594C21.4452 36 20.5389 35.0841 20.5389 33.9533C20.5389 32.8245 21.4452 31.9065 22.5594 31.9065H33.9796ZM26.0597 1.39813L29.0097 3.74157C30.2195 4.68754 31.0259 5.93451 31.3018 7.24598C31.6202 8.68859 31.2806 10.1054 30.3256 11.3309L12.7528 34.0558C11.9463 35.0878 10.7578 35.6683 9.48443 35.6898L2.48079 35.7758C2.09877 35.7758 1.78043 35.5178 1.69553 35.1523L0.103797 28.2509C-0.172104 26.9825 0.103797 25.671 0.910277 24.6605L13.3683 8.53595C13.5805 8.27795 13.9625 8.2371 14.2172 8.42845L19.4593 12.5993C19.7989 12.8788 20.2658 13.0293 20.7539 12.9648C21.7939 12.8358 22.4942 11.8899 22.3881 10.8794C22.3244 10.3634 22.0698 9.93341 21.7302 9.61092C21.6241 9.52492 16.6366 5.52602 16.6366 5.52602C16.3183 5.26803 16.2546 4.79504 16.5093 4.4747L18.483 1.91411C20.3082 -0.429327 23.4917 -0.644321 26.0597 1.39813Z" fill="#6251A2"/>
                                        </svg>

                                  </a>

                              <a href="#">
                                <svg data-bs-toggle="tooltip" data-placement="left" title="حذف" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFACAC" class="bi bi-x-circle-fill" viewBox="0 0 16 16" style="margin-right: 5px;">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                              </a>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#exampleModal" >
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
        أضف تخصص
      </button>
      <!-- Modal Add specialty -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 165px;">
          <div class="modal-content" style="background-color: #DBDEEE; width: 110%; height: 248px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4 style="float: right; padding-right:38px; margin-top:15px">أضف تخصص :</h4>
              <input type="text" style="
                width: 440px;
                height: 43px;
                padding-right: 15px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-top: 19px;
                border: 1px solid #6251A2; ">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
              <button type="button" class="btn btn-primary" style="background-color: #6251A2; border-color: #6251A2;">إضافة</button>
            </div>
          </div>
        </div>
      </div>



       <!-- Modal Update specialty -->
       <div class="modal fade" id="udateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 165px;">
           <div class="modal-content" style=" width: 110%; height: 248px;">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <h3 style="text-align: center;">اسم تخصص :</h3>
               <input type="text" style="
                 width: 440px;
                 height: 49px;
                 padding-right: 15px;
                 margin-left: auto;
                 margin-right: auto;
                 display: block;
                 margin-top: 19px; "
                 placeholder="اسم التخصص ..">
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
               <button type="button" class="btn btn-primary" style="background-color: #6251A2; border-color: #6251A2;">حفظ</button>
             </div>
           </div>
         </div>
       </div>
      <!-- end_content   -->
      <nav style="margin-top: 50px;">
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
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>


@endsection
