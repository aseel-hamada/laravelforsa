
@extends('layouts/mastersupervisor')
@section('content')
@section('title' ,'  المتدربين ')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/supervisor-taskDetails.css')}}">
@endsection

<div class="main-panel" >
    <div class="content-wrapper">
      <!-- start_content   -->
      <!-- start search input  -->
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

                          <th class="text-center py-4">اسم المتدرب</th>
                          <th class="text-center py-4">رابط المهمة</th>
                          <th class="text-center py-4">الحالة</th>
                          <th class="text-center py-4">تاريخ التسليم</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle alert" role="alert">
                      <td class="py-3">
                          <div class="d-flex align-items-center ">
                              <div class="img-container">
                                  <img  src="../assets/images/face1.jpg"
                                      alt="">
                              </div>
                              <div class="px-2">
                                  <div class=" pb-1 text-center"> أحمد احمد</div>
                              </div>
                          </div>
                      </td>
                      <td class="py-3">
                          <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
                      </td>
                      <td class="py-3 d-flex justify-content-center">
                          <div class="d-inline-flex justify-content-center align-items-center to_do">
                              <div class=" p-1">done</div>
                          </div>
                      </td>
                      <td class="py-3">
                          <div class="text-center">21/2/2023</div>

                      </td>

                  </tr>
                  <tr class="align-middle alert" role="alert">
                    <td class="py-3">
                        <div class="d-flex align-items-center ">
                            <div class="img-container">
                                <img  src="../assets/images/face1.jpg"
                                    alt="">
                            </div>
                            <div class="px-2">
                                <div class=" pb-1 text-center"> أحمد احمد</div>
                            </div>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
                    </td>
                    <td class="py-3 d-flex justify-content-center">
                        <div class="d-inline-flex justify-content-center align-items-center to_do">
                            <div class=" p-1">done</div>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="text-center">21/2/2023</div>

                    </td>

                </tr>
                <tr class="align-middle alert" role="alert">
                  <td class="py-3">
                      <div class="d-flex align-items-center ">
                          <div class="img-container">
                              <img  src="../assets/images/face1.jpg"
                                  alt="">
                          </div>
                          <div class="px-2">
                              <div class=" pb-1 text-center"> أحمد احمد</div>
                          </div>
                      </div>
                  </td>
                  <td class="py-3">
                      <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
                  </td>
                  <td class="py-3 d-flex justify-content-center">
                      <div class="d-inline-flex justify-content-center align-items-center to_do">
                          <div class=" p-1">done</div>
                      </div>
                  </td>
                  <td class="py-3">
                      <div class="text-center">21/2/2023</div>

                  </td>

              </tr>
              <tr class="align-middle alert" role="alert">
                <td class="py-3">
                    <div class="d-flex align-items-center ">
                        <div class="img-container">
                            <img  src="../assets/images/face1.jpg"
                                alt="">
                        </div>
                        <div class="px-2">
                            <div class=" pb-1 text-center"> أحمد احمد</div>
                        </div>
                    </div>
                </td>
                <td class="py-3">
                    <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
                </td>
                <td class="py-3 d-flex justify-content-center">
                    <div class="d-inline-flex justify-content-center align-items-center active">
                        <div class=" p-1">to do</div>
                    </div>
                </td>
                <td class="py-3">
                    <div class="text-center">21/2/2023</div>

                </td>

            </tr>
            <tr class="align-middle alert" role="alert">
              <td class="py-3">
                  <div class="d-flex align-items-center ">
                      <div class="img-container">
                          <img  src="../assets/images/face1.jpg"
                              alt="">
                      </div>
                      <div class="px-2">
                          <div class=" pb-1 text-center"> أحمد احمد</div>
                      </div>
                  </div>
              </td>
              <td class="py-3">
                  <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
              </td>
              <td class="py-3 d-flex justify-content-center">
                  <div class="d-inline-flex justify-content-center align-items-center to_do">
                      <div class=" p-1">done</div>
                  </div>
              </td>
              <td class="py-3">
                  <div class="text-center">21/2/2023</div>

              </td>

          </tr>
          <tr class="align-middle alert" role="alert">
            <td class="py-3">
                <div class="d-flex align-items-center ">
                    <div class="img-container">
                        <img  src="../assets/images/face1.jpg"
                            alt="">
                    </div>
                    <div class="px-2">
                        <div class=" pb-1 text-center"> أحمد احمد</div>
                    </div>
                </div>
            </td>
            <td class="py-3">
                <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
            </td>
            <td class="py-3 d-flex justify-content-center">
                <div class="d-inline-flex justify-content-center align-items-center to_do">
                    <div class=" p-1">done</div>
                </div>
            </td>
            <td class="py-3">
                <div class="text-center">21/2/2023</div>

            </td>

        </tr>
        <tr class="align-middle alert" role="alert">
          <td class="py-3">
              <div class="d-flex align-items-center ">
                  <div class="img-container">
                      <img  src="../assets/images/face1.jpg"
                          alt="">
                  </div>
                  <div class="px-2">
                      <div class=" pb-1 text-center"> أحمد احمد</div>
                  </div>
              </div>
          </td>
          <td class="py-3">
              <div class="text-center"> <a href="https://github.com/Rewaa20/">معاينة المهمة</a></div>
          </td>
          <td class="py-3 d-flex justify-content-center">
              <div class="d-inline-flex justify-content-center align-items-center to_do">
                  <div class=" p-1">done</div>
              </div>
          </td>
          <td class="py-3">
              <div class="text-center">21/2/2023</div>

          </td>

      </tr>

                  </tbody>
              </table>
          </div>
      </div>
      <!-- end_content   -->
     <!-- start pagination  -->
     <div style="margin-top: 50px;">
      <nav  aria-label="Page navigation example">
        <ul class="pagination justify-content-center me-3">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
          </li>
        </ul>
      </nav>
         </div>
  <!-- end pagination  -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
      @endsection
