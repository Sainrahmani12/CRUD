@extends('welcome')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Merk</th>
      <th scope="col">Rasa</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($Mie as $m)
    <tr>
      <th>{{$m->id}}</th>
      <td>{{$m->Merk}}</td>
      <td>{{$m->Rasa}}</td>
      <td>{{$m->Harga}}</td>
      <td><img src="{{url('storage/', $m->Gambar)}}" alt="" width="100px"></td>
      <td>
      <form action="{{route('Mie.destroy', $m->id)}}" method="POST">  
          @csrf
          @method('DELETE')
      <a href="{{route('Mie.edit', $m->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <button class="btn btn-danger" type="submit">Delete</button>
    </form>  
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection