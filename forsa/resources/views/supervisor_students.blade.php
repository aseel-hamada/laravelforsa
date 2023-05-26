@extends('layouts/mastersupervisor')
@section('content')
@section('title' ,'  المتدربين ')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/supervisor-students.css')}}">
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
              <table class="table w-100 table-responsive">
                  <thead>
                      <tr>

                          <th class="text-center py-4">اسم المتدرب</th>
                          <th class="text-center py-4"> البريد الالكتروني</th>
                          <th class="text-center py-4">بدأ منذ</th>
                          <th class="text-center py-4"> انهاء التدريب</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="align-middle alert" role="alert">
                          <td class="py-3">
                              <div class="d-flex align-items-center ">
                                  <div class="img-container">
                                    <a href="{{url('/Studenthome')}}">
                                      <img  src="{{asset('assets/images/face1.jpg')}}"
                                          alt="">
                                        </a>
                                  </div>
                                  <div class="px-2">
                                      <div class=" pb-1 text-center"> أحمد احمد</div>
                                  </div>
                              </div>
                          </td>
                          <td class="py-3">
                              <div class="text-center"> ahmed@gmail.com</div>
                          </td>
                          <td class="py-3">
                              <div class="text-center">21/2/2023</div>

                          </td>
                          <td class="py-3 d-flex justify-content-center">
                              <div class="d-inline-flex align-items-center  to_do">
                                  <div class=" p-1">finished</div>
                              </div>
                          </td>

                      </tr>

                      <tr class="align-middle alert" role="alert">
                          <td class="py-3">
                              <div class="d-flex align-items-center ">
                                  <div class="img-container">
                                    <a data-bs-toggle="tooltip" data-placement="left" title="معاينة" href="{{url('/Studenthome')}}">
                                        <img  src="{{asset('assets/images/face1.jpg')}}"
                                            alt="">
                                          </a>
                                  </div>
                                  <div class="px-2">
                                      <div class=" pb-1 text-center"> أحمد احمد</div>
                                  </div>
                              </div>
                          </td>
                          <td class="py-3">
                              <div class="text-center"> ahmed@gmail.com</div>
                          </td>
                          <td class="py-3">
                              <div class="text-center">21/2/2023</div>

                          </td>
                          <td class="py-3 d-flex justify-content-center">
                              <div class="d-inline-flex align-items-center   active">
                                  <div class=" p-1 "><a style="color:#148F78" href="#" >finish</a></div>
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
