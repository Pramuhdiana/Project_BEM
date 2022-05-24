@extends ('home')
@section('title', 'Data User')
@section('header', 'Data User')
@section('isicontent')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama User</th>
      <th scope="col">Email</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach ($user as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->level}}</td>
      <td>
        <a href="/admin/edituser/{{ $data->id }}" class="btn btn-sm btn-warning"> Edit </a>
        <a href="/admin/deleteuser/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
    </td>
        @endforeach
    </tr>
  </tbody>
</table>
@endsection