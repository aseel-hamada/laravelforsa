@extends('layouts/mastercompny')
@section('title' ,'الصفحة الرئيسية')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/company-profile.css')}}">
@endsection

<div class="main-panel">
    <div class="content-wrapper">
        <!-- start_content   -->
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <h4 class="text-right mb-3 ms-3">معلومات الشركة</h4>
            <a class="btn edit  me-3" href="{{url('/edit_company')}}" style="margin-left: 50px; background-color: #6251A2 !important; color: white;">تعديل</a>
        </div>


        <div class="container-fluid  d-lg-flex d-flex-column justify-content-center  ">
          <div class="d-flex flex-column col-lg-6 col-12 col-sm-12  justify-content-between ">
            <div class="card  " >
                <div class="card-body">
                    <p class="text-right">شعار الشركة : <img src="../assets/images/smalllogo.png" alt="logo company" class="smalllogo"></p>
                    <p class="text-right">اسم الشركة :  <span class="card-span">Newline Tech</span></p>
                    <p class="text-right">التخصص :  <span class="card-span specialty" >تصميم وتطوير صفحات الويب</span></p>
                    <p class="text-right">البريد الالكتروني :  <span class="card-span email" ><a>info@newline.ps</a></span></p>
                    <p class="text-right">رقم الهاتف :  <span class="card-span phone">799 998 5 059 </span></p>
                   <p class=" text-right" >العنوان :  <span class="text-wrap d-flex-column justify-content-center align-items-center" >  السامر- عمارةالمدينة مقابل محطة شعت الطابق الثاني gaza_شقة 203</span></p>
                </div>
              </div>
               <h4 class="text-right mb-3 ms-3 mt-4"  >عن الشركة</h4>
               <div class="card  " >
                <div class="card-body">
                    <p class="card-text text-right text-warp  "style="font-size: 18px; line-height:1.6" >هي شركة رائدة في برمجة تطبيقات الهواتف الذكية وتقديم حلول الأعمال. توصلنا إلى عملاء رائعين لتمكينهم من استخدام تطبيقات الويب والجوال القوية ، والتي حققت نتائج قوية لأعمالهم. قام فريق الخبراء لدينا من مطوري
                        الأجهزة المحمولة والويب بإنشاء تطبيقات للهاتف المحمول والويب   .</p>
                </div>
              </div>
          </div>
          <div class="col-lg-6 col-12 col-sm-12 mt-5 mt-lg-0">
             <img src="../assets/images/table.png" width="100%" height="100%" >
          </div>



             </div>
        </div>

    </div>

    @endsection
