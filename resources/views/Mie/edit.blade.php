@extends('welcome')

@section('content')

<form action="{{route('Mie.update', $Mie->id)}}" enctype="multipart/form-data" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Merk</label>
    <input type="text" class="form-control" name="Merk" value="{{$Mie->Merk}}" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rasa</label>
    <input type="text" class="form-control" name="Rasa" value="{{$Mie->Rasa}}" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" name="Harga" value="{{$Mie->Harga}}" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gambar</label>
    <input type="file" class="form-control" name="Gambar" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection