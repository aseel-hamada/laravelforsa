@extends('layouts/mastercompny')
@section('title' ,'المشرفين')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/company-super.css')}}">
@endsection
<div class="main-panel">
    <div class="content-wrapper">
        <!-- start_content   -->
        <div class="box mt-3">
            <form class="d-flex justify-content-center align-items-center" name="search">
                <input type="text" placeholder="ابحث..." class="input" name="txt"
                    onmouseout="this.value = ''; this.blur();">
                <div class=" btn_ser btn text-white ">
                    <svg width="20" height="20" viewBox="0 0 41 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.478 0C30.218 0 38.954 8.736 38.954 19.476C38.954 24.5431 37.0094 29.1646 33.8273 32.633L40.0888 38.8814C40.6748 39.4674 40.6768 40.4154 40.0908 41.0014C39.7988 41.2974 39.4128 41.4434 39.0288 41.4434C38.6468 41.4434 38.2628 41.2974 37.9688 41.0054L31.6317 34.686C28.2981 37.3557 24.0714 38.954 19.478 38.954C8.738 38.954 0 30.216 0 19.476C0 8.736 8.738 0 19.478 0ZM19.478 3C10.392 3 3 10.39 3 19.476C3 28.562 10.392 35.954 19.478 35.954C28.562 35.954 35.954 28.562 35.954 19.476C35.954 10.39 28.562 3 19.478 3Z"
                            fill="white" />
                    </svg>
                </div>


            </form>
        </div>


        <div class="container d-flex justify-content-center bg_table">

            <div class="table-wrap ">
                <table class="table  table-responsive">
                    <thead>
                        <tr>

                            <th class="text-center py-3">
                                <h3>المشرفين</h3>
                            </th>
                            <th class="text-center py-3"> </th>
                            <th class="text-center py-3"> </th>
                            <th class="text-center py-3"> </th>
                            <th class="text-center py-3"><a class="btn addsuper"
                                    href="{{url('/addsuper')}}">إضافة مشرف </a> </th>

                        </tr>
                        <tr>

                            <th class="text-center py-4">صورة المشرف </th>
                            <th class="text-center py-4">اسم المشرف</th>
                            <th class="text-center py-4">التخصص </th>
                            <th class="text-center py-4">البريد الالكتروني</th>
                            <th class="text-center py-4"> المزيد</th>
                        </tr>
                    </thead>
                    <tbody>



                        <tr class="align-middle alert" role="alert">
                            <td class="py-3">
                                <div class="d-flex align-items-center imgstudent">
                                    <div class="img-container">
                                        <img src="../assets/images/face1.jpg" alt="">
                                    </div>
                                </div>
                            </td>

                            <td class="py-3">
                                <div class="text-center">محمود علي زكريا</div>
                            </td>
                            <td class="py-3">
                                <div class="text-center"> UX/UI</div>
                            </td>
                            <td class="py-3">
                                <div class="text-center">Mahmmoudali45@gmail.com </div>
                            </td>
                            <td class="py-3">
                                <div class="text-center">
                                    <a href="{{url('/supervisor-profile')}}">
                                        <svg data-bs-toggle="tooltip" data-placement="left" title="معاينة الملف" width="30" height="30" viewBox="0 0 35 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                            <rect width="35" height="35" rx="17.5" fill="#6251A2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.2325 9.13037C21.7267 9.13349 25.7624 12.1466 28.0291 17.1918C28.1182 17.3882 28.1182 17.6106 28.0291 17.8071C25.7635 22.8532 21.7267 25.8664 17.2325 25.8695H17.2259C12.7317 25.8664 8.69598 22.8532 6.42929 17.8071C6.34128 17.6106 6.34128 17.3882 6.42929 17.1918C8.69598 12.1466 12.7328 9.13349 17.2259 9.13037H17.2325ZM17.2292 10.6894C13.4956 10.6905 10.0901 13.2297 8.069 17.4994C10.0901 21.7702 13.4945 24.3094 17.2292 24.3104C20.9639 24.3094 24.3683 21.7702 26.3894 17.4994C24.3683 13.2297 20.9639 10.6905 17.2292 10.6894ZM17.2289 13.4342C19.5727 13.4342 21.4797 15.2583 21.4797 17.5002C21.4797 19.7411 19.5727 21.5642 17.2289 21.5642C14.885 21.5642 12.9791 19.7411 12.9791 17.5002C12.9791 15.2583 14.885 13.4342 17.2289 13.4342ZM17.2289 14.9933C15.7837 14.9933 14.609 16.1179 14.609 17.5002C14.609 18.8816 15.7837 20.0051 17.2289 20.0051C18.6741 20.0051 19.8498 18.8816 19.8498 17.5002C19.8498 16.1179 18.6741 14.9933 17.2289 14.9933Z"
                                                fill="#DBDEEE" />
                                        </svg>
                                    </a>
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

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>


@endsection
