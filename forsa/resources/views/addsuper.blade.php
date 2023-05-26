@extends('layouts/mastercompny')
@section('content')

@section('styles')
<link rel="stylesheet" href=" {{asset('assets/css/company-addsuper.css')}}">
@endsection

<div class="main-panel">
    <div class="content-wrapper">
        <!-- start_content   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h3 class="text-center py-3" style="margin-top: 20px; margin-bottom: 30px;">اضافة مشرف جديد</h3>
                    <form action="../الشركة/ShowSuper.html" class="d-flex flex-column mt-2">
                        <div class="d-flex md-col justify-content-between align-items-center" style="margin-bottom: 20px;">
                            <div class="d-flex mb-3 w-50 w-lg-60 name">
                                <input name="namesuper" class="w-100  mx-auto py-1 code  text-secondary"
                                    type="text" placeholder="الاسم"><br>
                            </div>
                            <div class="d-flex mb-3 w-50 w-lg-60 ">
                                <input name="password" class="w-100  mx-auto py-1 code   text-secondary"
                                    type="password" placeholder="كلمة المرور "><br>
                            </div>
                        </div>
                        <div class="d-flex md-col justify-content-between align-items-center">
                            <div class="d-flex mb-3 w-50 w-lg-60 name">
                                <input name="namesuper" class="w-100  mx-auto py-1 code  text-secondary"
                                    type="text" placeholder="رمز التعريف "><br>
                            </div>
                            <div class="d-flex mb-3 w-50 w-lg-60 ">
                                <select name="specialty" class="w-100  mx-auto py-1 code" style="color:#828282">
                                    <option value="" selected disabled hidden> التخصص</option>
                                    <option value="UI UX">UI UX</option>
                                    <option value="web developer">web developer</option>
                                    <option value="web desgin">web desgin</option>
                                </select>
                                <!-- <input name="password" class="w-100  mx-auto py-1 code   text-secondary" type="password" placeholder="التخصص"><br> -->
                            </div>
                        </div>
                        <button type="submit" class="btn  text-white "
                            style="background-color: #6251A2; width: 180px;  margin: auto;margin-top: 40px; margin-bottom: 40px; font-size: 18px;">إضافة </button>


                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>


@endsection
