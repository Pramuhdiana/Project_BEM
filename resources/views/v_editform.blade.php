@extends ('home')
@section('title', 'Data Bem')
@section('header', 'Data Bem')
@section('isicontent')

<form action="/admin/updatebem/{{ $form->id }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group row">
        <label for="nik" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="nik" name="nik" value="{{ $form->nik }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ $form->name }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <select class="custom-select" name="jk" id="jk" required>
                <option value="{{ $form->jenis_kelamin }}">{{ $form->jenis_kelamin }}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="ttl" name="ttl" value="{{ $form->ttl }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="custom-select" name="jurusan" id="jurusan" required>
                <option value="{{ $form->jurusan }}">{{ $form->jurusan }}</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $form->alamat }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
           <img src="{{ url('foto/' .$form->foto) }}" width="80px">
           <input type="file" class="form-control-file" name="foto" id="foto" value="{{ old('foto') }}">
        </div>
      </div>
    <div class="form-group">
        <button class="btn btn-success"> Simpan Perubahan</button>
    </div>

<a href="/admin/dataform" class="btn btn-sm btn-warning"> Kembali </a>
</form>
@endsection