@extends('layouts/mastercompny')
@section('content')
@section('styles')


<link rel="stylesheet" href="{{asset('assets/css/company-edit.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/mobiscroll.javascript.min.css')}}">

<script src="{{asset('assets/js/mobiscroll.javascript.min.js')}}"></script>

<script>
  // Ignore this in your implementation
  window.isMbscDemo = true;
</script>

@endsection
<div class="main-panel">
    <div class="content-wrapper">
        <!-- start_content   -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <h4 class="text-right mb-3 ms-3">معلومات الشركة</h4>
            <a class="btn   me-3" href="{{url('/profilecompny')}}" style="margin-left: 50px; background-color: #6251A2 !important; color: white;">حفظ</a>
        </div>
        <div class="container-fluid  d-lg-flex d-flex-column justify-content-center  ">
          <div class="d-flex flex-column col-lg-6 col-12 col-sm-12  justify-content-between ">
            <div class="card  " >
                <div class="card-body pt-2 ">
                 <div class="mx-0" style="    width: 300px;
                 background-image: url(assets/images/smalllogo.png);
                 background-repeat: no-repeat;
                 background-size: contain;
                 height: 106px;">
                    <div class="overlay2 text-white" >
                        <input class="custom-file-input" type="file" style="z-index: 100; margin-top:0px;">
                        <svg style="position: absolute; left:13px;top:10px"  width="20" height="20" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.9796 31.9065C35.0938 31.9065 36 32.8245 36 33.9533C36 35.0841 35.0938 36 33.9796 36H22.5594C21.4452 36 20.5389 35.0841 20.5389 33.9533C20.5389 32.8245 21.4452 31.9065 22.5594 31.9065H33.9796ZM26.0597 1.39813L29.0097 3.74157C30.2195 4.68754 31.0259 5.93451 31.3018 7.24598C31.6202 8.68859 31.2806 10.1054 30.3256 11.3309L12.7528 34.0558C11.9463 35.0878 10.7578 35.6683 9.48443 35.6898L2.48079 35.7758C2.09877 35.7758 1.78043 35.5178 1.69553 35.1523L0.103797 28.2509C-0.172104 26.9825 0.103797 25.671 0.910277 24.6605L13.3683 8.53595C13.5805 8.27795 13.9625 8.2371 14.2172 8.42845L19.4593 12.5993C19.7989 12.8788 20.2658 13.0293 20.7539 12.9648C21.7939 12.8358 22.4942 11.8899 22.3881 10.8794C22.3244 10.3634 22.0698 9.93341 21.7302 9.61092C21.6241 9.52492 16.6366 5.52602 16.6366 5.52602C16.3183 5.26803 16.2546 4.79504 16.5093 4.4747L18.483 1.91411C20.3082 -0.429327 23.4917 -0.644321 26.0597 1.39813Z" fill="white"/>
                            </svg>
                         </div>
                        </div>

                        <p class=" text-right">اسم الشركة : <br> <input class="" type="text" name="namecompany"></p>
                        <p class=" text-right">تخصص الشركة :</p>
                        <div mbsc-page class="demo-multiple-select">
                          <div style="height:100%">
                                  <label>

                          <input mbsc-input name="values[]" id="demo-multiple-select-input" placeholder="اختر التخصصات" data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                      </label>
                      <select id="demo-multiple-select" multiple>
                          <option value="1">برمجيات</option>
                          <option value="2">لارافيل</option>
                          <option value="3">تصميم واجهات</option>
                      </select>
                          </div>
                      </div>
                        <p class=" text-right">البريد الالكتروني : <br>  <input class="" type="email" name="emailcompany"></span></p>
                        <p class=" text-right">رقم الهاتف :  <br>  <input  class="" type="phone" name="numbercompany"></p>
                        <p class=" text-right"> العنوان : <br>  <input class="" type="text" name="addresscompany"></p>
              </div>
                </div>

               <h4 class="text-right mb-3 ms-3 mt-4"  >عن الشركة</h4>
               <div class="card" >
                <div class="card-body">
                    <textarea  rows="6"  name="aboutcompanyedit" class="" ></textarea>
                </div>
              </div>
          </div>
          <div class="col-lg-6 col-12 col-sm-12 mt-5 mt-lg-0">
            <div class="overlay text-white">
                <input class="custom-file-input" type="file" style="z-index: 100; margin-top:0px;">
                <svg style="position: absolute; left:13px;top:10px"  width="20" height="20" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.9796 31.9065C35.0938 31.9065 36 32.8245 36 33.9533C36 35.0841 35.0938 36 33.9796 36H22.5594C21.4452 36 20.5389 35.0841 20.5389 33.9533C20.5389 32.8245 21.4452 31.9065 22.5594 31.9065H33.9796ZM26.0597 1.39813L29.0097 3.74157C30.2195 4.68754 31.0259 5.93451 31.3018 7.24598C31.6202 8.68859 31.2806 10.1054 30.3256 11.3309L12.7528 34.0558C11.9463 35.0878 10.7578 35.6683 9.48443 35.6898L2.48079 35.7758C2.09877 35.7758 1.78043 35.5178 1.69553 35.1523L0.103797 28.2509C-0.172104 26.9825 0.103797 25.671 0.910277 24.6605L13.3683 8.53595C13.5805 8.27795 13.9625 8.2371 14.2172 8.42845L19.4593 12.5993C19.7989 12.8788 20.2658 13.0293 20.7539 12.9648C21.7939 12.8358 22.4942 11.8899 22.3881 10.8794C22.3244 10.3634 22.0698 9.93341 21.7302 9.61092C21.6241 9.52492 16.6366 5.52602 16.6366 5.52602C16.3183 5.26803 16.2546 4.79504 16.5093 4.4747L18.483 1.91411C20.3082 -0.429327 23.4917 -0.644321 26.0597 1.39813Z" fill="white"/>
                </svg>
            </div>
            <img src="assets/images/table.png" width="100%" height="100%" >
          </div>



             </div>

        </div>

    </div>



      <script>

        mobiscroll.setOptions({
        locale: mobiscroll.localeAr,                                         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                                                        // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                                                // More info about themeVariant: https://docs.mobiscroll.com/5-24-1/javascript/select#opt-themeVariant
        });

        mobiscroll.select('#demo-multiple-select', {
        inputElement: document.getElementById('demo-multiple-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-24-1/javascript/select#opt-inputElement
        });
        </script>

@endsection
