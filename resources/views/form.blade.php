@extends ('home')
@section('title', 'Form')
@section('header')
<center>
    <header><h3>Form Pendaftaran Badan Eksekutif Mahasiswa </h3> </header>
    </center>
@endsection
@section ('isicontent')
<form action="/form/tambah" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="nik">NIK</label>
    <input type="number" id="nik" name="nik" class="form-control" aria-describedby="passwordHelpBlock" required>
    <div class="invalid-feedback">
        Wajib diisi.
      </div>
    </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="name">Nama Depan</label>
        <input type="text" class="form-control" name="name" id="name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastname">Nama Belakang</label>
        <input type="text" class="form-control" name="lastname" id="lastname" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">

        <div class="col-md-3 mb-3">
            <label for="jk">Jenis Kelamin</label>
            <select class="custom-select" id="jk" name="jk" required>
                <option selected disabled value="">...</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">
              Wajib diisi.
            </div>
          </div>
        <div class="col-md-3 mb-3">
          <label for="ttl">Tanggal Lahir</label>
          <input type="date" class="form-control" name="ttl" id="ttl" required>
          <div class="invalid-feedback">
            Wajib diisi.
          </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="jurusan">Jurusan</label>
            <select class="custom-select" name="jurusan" id="jurusan" required>
                <option selected disabled value="">...</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
            <div class="invalid-feedback">
              Wajib diisi.
            </div>
          </div>
      </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        <div class="invalid-feedback">
          Wajib diisi.
        </div>
      </div>
      
    </div>
     <div class="form-row">
    <div class="form-group col-md-6">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file" name="foto" id="foto" value="{{ old('foto') }}">
      </div>
     </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
  
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

@endsection