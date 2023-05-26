@extends('layouts/mastersupervisor')
@section('content')
@section('title' ,'  المهمات ')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/supervisor-tasks.css')}}">
@endsection


<div class="main-panel" >
  <div class="content-wrapper">
    <!-- start_content   -->
    <!-- start search input  -->
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
    <!-- end search input  -->


    <div class="container d-flex justify-content-center bg_table">

        <div class="table-wrap ">
            <table class="table  table-responsive">
                <thead>
                    <tr>

                        <th class="text-center py-4">عنوان المهمة</th>
                        <th class="text-center py-4">تاريخ النشر</th>
                        <th class="text-center py-4">تفاصيل المهمة</th>
                        <th class="text-center py-4">معاينة المهمة</th>
                        <th class="text-center py-4"> حذف</th>
                    </tr>
                </thead>
               <tbody>
                <tr class="align-middle alert" role="alert">
                  <td class="py-3">
                      <div class="d-flex align-items-center ">

                          <div class="px-2">
                              <div class=" pb-1 text-center">انشاء مشروع لارافيل</div>
                          </div>
                      </div>
                  </td>

                  <td class="py-3">
                      <div class="text-center">21/2/2023</div>

                  </td>
                  <td class="py-3">
                    <div class="text-center">
                      <button type="button" class="btn active">
                        <a   href="{{url('/supervisor_task_detailes')}}">التفاصيل</a>
                        </button>
                    </div>
                   </td>

                  <td class="py-3 d-flex justify-content-center">
                    <div class="d-inline-flex align-items-center  ">
                      <div class=" p-1">
                        <!-- Button trigger modal -->
                <button type="button" class="btn to_do" data-toggle="modal" data-target="#exampleModalCenter">
                معاينة
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title text-dark text-decoration-none pt-1" id="exampleModalLongTitle">
                      انشاء ملف prototype
                  </h6>

                  </div>
                  <div class="modal-body">
                    <p class="small text-dark text-right text-wrap">
                      قم بانشاء ملف prototype حسب الملف اللمرفق يوضح  الاحداث قم بانشاء ملف
                      prototype
                  </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-white" data-dismiss="modal">اغلاق</button>
                  </div>
                </div>
                </div>
                </div>
                      </div>
                  </div>
                  </td>
                  <td class="py-3">
                    <div class="text-center">
                      <a href="">
                        <svg data-bs-toggle="tooltip" data-placement="left" title="حذف" class="text-right mb-3 ms-3" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="#FFACAC" class="bi bi-x-circle-fill" viewBox="0 0 16 16"
                        style="margin-right: 10px;  margin-top: 17px;">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                    </svg>
                      </a>
                    </div>

                </td>
                </tr>

               </tbody>
            </table>
        </div>
    </div>
    <!-- end_content   -->
    <!-- start pagination  -->
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
    <!-- end pagination  -->

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->

  <!-- partial -->
</div>








@endsection
