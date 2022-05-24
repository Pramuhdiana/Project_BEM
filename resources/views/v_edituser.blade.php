@extends ('home')
@section('title', 'Data User')
@section('header', 'Data User')
@section('isicontent')
<form action="/admin/updateuser/{{ $user->id }}" method="POST">
    @csrf
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama </th>
      <th scope="col">Level</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td>
        
           <input type="text" class="form-control" id="name" name="name" placeholder="{{$user->name}}" value="{{$user->name}}">
        
        </td> 
        <td>
           
            <select class="custom-select" name="level" id="level" required>
                <option value="{{ $user->level }}">{{ $user->level }}</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
           
           </td> 
       <td>
        
           <input type="text" class="form-control" id="email" name="email" placeholder="{{$user->email}}" value="{{$user->email}}">
           <input type="password" class="form-control" id="password" name="password" placeholder="{{$user->password}}" value="{{$user->password}}" hidden readonly> 
        
        </td> 
    
         
      <td>
      <div class="form-group">
                <button class="btn btn-success"> Simpan Catatan</button>
            </div>
  
      <a href="/admin/datauser" class="btn btn-sm btn-warning"> Kembali </a>
            </td>
    </tr>
  </tbody>
</table>
        
</form>
@endsection