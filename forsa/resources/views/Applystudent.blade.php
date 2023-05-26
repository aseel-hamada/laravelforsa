@extends('layouts/masterStudent')
@section('title' ,' تقديم الطلب')

@section('content')


@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/student-apply.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

@endsection


<div class="main-panel" >
    <div class="content-wrapper">
      <!-- start_content   -->



      <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="card p-4 " id="card">
                    <div class="text-center">
                        <img class="rounded-circle"  src="{{asset('assets/images/hexa.png')}}" height="100px" width="100px">
                    </div>
                    <form action="#" method="post">
                        <div class="form-group mt-4">
                            <label for="selectBox" class="textselect">اختار التخصص</label>
                            <select class="form-select formclass" id="selectBox" aria-label="Default select example">
                                <option selected>ui  </option>
                                <option value="1">ux</option>
                                <option value="2">vue.js</option>
                                <option value="3">laravel</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="messageBox" class="textselect"> لماذا سيتم اختياري؟</label>
                            <textarea class="form-control formclass Box" id="messageBox" rows="4"></textarea>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="button" class="btn btn-primary btn-xs" id="button"> تقديم الطلب </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- <footer class="footer">
      <div class="container-fluid d-flex justify-content-center clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © forsa.com 2023</span>
      </div>
    </footer> -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
@endsection
