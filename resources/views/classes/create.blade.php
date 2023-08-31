<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rrgister form</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form method='post' action="{{route('StoreCourse')}}" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="text" name="title" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Title">
                </div>
                <div class="form-group">
                  <input type="text"  name="desc" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="description">
                </div>
                <div class="form-group">
                  <input type="text"  name="seats" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="seatts">
                </div>
                <div class="form-group">
                  <input type="text"  name="fees" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="fees">
                </div>
                <div class="form-group">
                  <input type="text"  name="class_time" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="class_time">
                </div>
                <div class="form-group">
                  <input type="text" name="age_of_kids" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="age_of_kids">
                </div>
                <!-- <div class="form-group" >
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                  </select>
                </div> -->
              
                <div class="mb-4">
                
                </div>
                <div class="mt-3">
                <button type="submit" btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn>Create </button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
