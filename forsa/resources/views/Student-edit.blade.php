@extends('layouts/masterStudent')
@section('title' ,'حسابي|تعديل')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/supervisor-profile.css')}}">


@endsection

<div class="main-panel">
    <div class="content-wrapper px-5 ">
      <!-- start_content   -->
      <section  class="h-100  gradient-custom-2" >
        <div class=" h-100" >
          <div class="h-100">
            <div class="">
              <div class="card w-80 mx-auto mt-3"style="
              background-image: linear-gradient(45deg,#cfd0ec,#ffff);">
                <div class="rounded-top  text-white d-flex flex-row" style="
                    background-image: linear-gradient(45deg,#cfd0ec,#6251A2);
                 height:200px;">
                  <div class="ms-4 p-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <div class="overlay  text-white">
                      <input class="custom-file-input" type="file" style="z-index: 100; margin-top:0px;"> 
                      <p>تعديل الصورة</p> 
                    </div>
                    <img src="{{asset('assets/images/face1.jpg')}}"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-3 mb-2"
                      style="width: 150px; z-index: 1">
                    <button type="button" class="btn action p-2 text-white" 
                      style="z-index: 1;"><a class="text-white" href="{{url('/profileStudent')}}">
                      حفظ
                    </a>
                    </button>
                  </div>
                  <div class="" style="margin-top: 130px; margin-right: 30px;">
                    <h5 class="text-center">أحمد أحمد</h5>
                    <p class="text-center">UX/UI</p>
                  </div>
                </div>
                <div class="p-4 text-black">
                  <div class="d-flex justify-content-end text-center py-1">
                    <div>
                      <p class="mb-1 h5"></p>
                      <p class="small text-muted mb-0"></p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <h5 class="text-right">معلوماتي</h5>
                  <div class=" edit my-3">
                <input name="code" class=" py-2   " type="text" placeholder="حساب Github"><br>
                <input name="code" class=" py-2   " type="text" placeholder="التخصص "><br>
                <input name="code" class=" py-2  " type="text" placeholder=" البريد الالكتروني"><br>
            </div>
                  <div class="d-flex justify-content-between align-items-center mt-4 mb-1 mx-2">
                    <h5 class="mb-0 mt-3">من أنا</h5>
                  </div>
                  <div>
                    <textarea class="text-right w-100" rows="4" style="font-size: 16px;">
                        السلام عليكم، إسمي احمد وأنا مصمم جرافيك و مصمم واجهات المستخدم وتجربة الإستخدام ( UI/UX ) ، وخبير في تطوير وبرمجة التطبيقات
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end_content   -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
   
    <!-- partial -->
  </div>




@endsection
