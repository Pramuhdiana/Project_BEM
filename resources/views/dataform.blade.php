@extends ('home')
@section('title', 'Data Bem')
@section('header', 'Data Bem')
@section('isicontent')


<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama Lengkap</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      
      <?php $no = 1; ?>
      @foreach ($form as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nik}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->ttl}}</td>
      <td>{{$data->jurusan}}</td>
      <td>{{$data->alamat}}</td>
      <td><img src="{{ url('foto/' .$data->foto) }}" width="80px"></td>
      <td>
                <a href="/admin/editbem/{{ $data->id }}" class="btn btn-sm btn-warning"> Edit </a>
                <a href="/admin/deletebem/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
            </td>
        @endforeach
    </tr>
  </tbody>
</table>
@endsection