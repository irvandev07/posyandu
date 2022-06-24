<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/admin/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/')}}/dist/css/adminlte.min.css">

    <title>Login</title>
  </head>
  <body>
        <div class="container text-center mt-15">
            <h3 class="m-4 text-primary">Login Admin</h3>
            <p>Silahkan pilih opsi login</p>


            <div class="d-flex justify-content-center">
                
                <ul class="nav bg-light" role="tablist">
                    <li class="nav-item">
                        <a href="#step1" id="step1-tab" class="nav-link active" aria-selected="true" data-toggle="tab" role="tab">Posyandu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#step2" id="step2-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab">Puskesmas</a>
                    </li>
                    <div class="panel rounded"></div>
                </ul>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="step1" aria-labelledby="step1-tab" role="tabpanel">
                    <div class="row justify-content-md-center mt-12">
                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-header">
                                <img src="admin/img/mz-logo-login.png" >
                                <div class="sub-title">
                                    Masuk panel administrator posyandu
                                </div>
                                </div>
                                <div class="icon-user">
                                    <h4 class="fas fa-user-shield"></h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-auth-small" action="{{url('/postloginpost')}}" method="POST">
                                    {{csrf_field()}}
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                        <input name= "username" type="text" class="form-control input-login" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                        <input name="password" type="password" class="form-control input-login" placeholder="Kata sandi">
                                        </div>
                                        <div class="register float-left">
                                            <label>
                                               <a href="/register"> Register disini </a>
                                            </label>
                                       </div>
                                        <button type="submit" class="btn btn-primary float-right">Masuk <i class="ti-angle-double-right" style="font-size: 12px"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                              
                    </div>
                </div>
                <div class="tab-pane fade" id="step2" aria-labelledby="step2-tab" role="tabpanel">
                    <div class="row justify-content-md-center mt-12">
                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-header">
                                <img src="admin/img/mz-logo-login.png" >
                                <div class="sub-title">
                                    Masuk panel administrator puskesmas
                                </div>
                                </div>
                                <div class="icon-user">
                                    <h4 class="fas fa-user-shield"></h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-auth-small" action="{{url('/postloginpus')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                        <input name ="username" type="text" class="form-control input-login" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                        </div>
                                        <input name="password" type="password" class="form-control input-login" placeholder="Kata sandi">
                                        </div>
                                        <div class="form-group">
                                        <label class="mz-check">
                                        </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary float-right">Masuk <i class="ti-angle-double-right" style="font-size: 12px"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>





        </div>











        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="admin/js/main.js"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
      </div>
   </body>
</html>