@extends('layouts/masterStudent')
@section('title' ,'حسابي')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/supervisor-profile.css')}}">


@endsection


<div class="main-panel">
    <div class="content-wrapper px-5">
      <!-- start_content   -->
      <section  class=" h-100  gradient-custom-2" >
        <div class=" h-100" >
          <div class="h-100">
            <div class="">
              <div class="card mx-auto mt-3 w-80"style="
              background-image: linear-gradient(45deg,#cfd0ec,#ffff);">
                <div class="rounded-top  text-white d-flex flex-row" style="
                    background-image: linear-gradient(45deg,#cfd0ec,#6251A2);
                 height:200px;">
                  <div class="ms-4 p-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="../assets/images/face1.jpg"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                    <button type="button" class="btn action p-2 text-white" 
                      style="z-index: 1;"><a class="text-white" href="{{url('/Student-edit')}}">
                      تعديل
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
                  <div class="mb-5  d-flex justify-content-center">
                    <!-- <h4 class=" mb-1 text-right mb-3 mx-2">معلوماتي</h4> -->
                    <div class="info   w-100  bg-white d-md-flex  d-flex-column  justify-content-center  align-items-center" style="background-color: #ecedfb6a;">
                      <div class=" py-4 px-  d-flex-column justify-content-between  align-items-center ">
                        <svg class="d-block mx-auto" height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true" class="octicon octicon-mark-github v-align-middle">
                          <path fill="#6251A2" d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
                        </svg>
                        <h6 class=" text-center mt-3">Github</h6>
                        <a href="https://github.com/"><p class=" text-center" style="color: black;">github.com</p></a>
                      </div> 
                      <div  class=" py-4 mx-5  d-flex-column justify-content-center  align-items-center ">
                        <svg class="d-block mx-auto" width="32" height="30" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16.9026 6.8512L12.4593 10.4642C11.6198 11.1302 10.4387 11.1302 9.59921 10.4642L5.11842 6.8512" stroke="#6251A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9089 19C18.9502 19.0084 21 16.5095 21 13.4384V6.57001C21 3.49883 18.9502 1 15.9089 1H6.09114C3.04979 1 1 3.49883 1 6.57001V13.4384C1 16.5095 3.04979 19.0084 6.09114 19H15.9089Z" stroke="#6251A2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        <h6 class=" text-center mt-3">البريد</h6>
                        <p class=" text-center email text-nowrap">ahmed.gmail.com</p>
                      </div> 
                      <div class="  py-4  d-flex-column justify-content-center  align-items-center ">
                        <svg class="d-block mx-auto" width="36" height="36" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M26.9953 15.9833C27.5738 16.021 28.0066 16.4599 27.9632 16.962L27.697 20.0125C27.4771 22.5292 25.0301 24.5 22.1236 24.5H5.87552C2.96906 24.5 0.522041 22.5292 0.302131 20.0125L0.035998 16.962C-0.00742371 16.4599 0.426793 16.021 1.00528 15.9833C1.58657 15.9651 2.08802 16.3213 2.13285 16.8247L2.39758 19.8739C2.53485 21.4447 4.06161 22.6763 5.87552 22.6763H22.1236C23.9375 22.6763 25.4657 21.4447 25.6016 19.8739L25.8677 16.8247C25.9125 16.3213 26.4266 15.9639 26.9953 15.9833ZM15.8068 0.5C17.9119 0.5 19.656 1.86931 19.9186 3.63558L22.6773 3.63664C25.6132 3.63664 28 5.71444 28 8.27005V12.4512C28 12.7758 27.8011 13.0749 27.4803 13.2378C24.023 14.9952 19.6433 16.0203 15.0499 16.157L15.0504 18.3438C15.0504 18.8471 14.5797 19.2556 13.9999 19.2556C13.42 19.2556 12.9493 18.8471 12.9493 18.3438L12.9484 16.1573C8.35963 16.0218 3.97961 14.9966 0.51966 13.2378C0.197499 13.0749 0 12.7758 0 12.4512V8.25789C0 5.70958 2.3938 3.63664 5.33667 3.63664L8.08107 3.63558C8.34375 1.86931 10.0878 0.5 12.193 0.5H15.8068ZM22.6773 5.46034H5.33667C3.55218 5.46034 2.10105 6.71504 2.10105 8.25789V11.9199C5.42591 13.488 9.61753 14.3474 13.9804 14.349L13.9999 14.3475L14.0154 14.348L14.6824 14.3419C18.8085 14.2566 22.7447 13.4069 25.8989 11.9199V8.27005C25.8989 6.71991 24.4548 5.46034 22.6773 5.46034ZM15.8068 2.3237H12.193C11.2498 2.3237 10.4536 2.88087 10.2185 3.63589H17.7813C17.5461 2.88087 16.7499 2.3237 15.8068 2.3237Z" fill="#6251A2"/>
                          </svg>
                          
                          
                          
                        <h6 class=" text-center mt-3">التخصص</h6>
                        <p class=" text-center">UI/UX</p>
                      </div> 
                   
                    </div>
                                       </div>
                  <div class="d-flex justify-content-between align-items-center mb-3 mx-2">
                    <h4 class="mb-0">من أنا</h4>
                  </div>
                  <div>
                    <p class="text-right p-4" style="background-color: #ecedfb6a;font-size: 16px;">
                        السلام عليكم، إسمي احمد وأنا مصمم جرافيك و مصمم واجهات المستخدم وتجربة الإستخدام ( UI/UX ) ، وخبير في تطوير وبرمجة التطبيقات
                    </p>
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
  </div






@endsection