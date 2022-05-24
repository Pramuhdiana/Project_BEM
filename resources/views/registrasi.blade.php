<title>BEM - Registrasi</title>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('template')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
              <img src="{{asset('logo')}}/logo.jfif" alt="" width="550px">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran</h1>
              </div>
              <form method="POST" action="/registrasi" class="user">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"> 

                      <div class="col-sm-6">                 
                           </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="level" id="level" value="user" hidden readonly placeholder="Level">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                </div>
             <button class="btn btn-primary btn-user btn-block"" type="submit">Buat Akun</button>
              </form>
           
              <div class="text-center">
                <a class="small" href="/login">Kembali Kehalaman Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
