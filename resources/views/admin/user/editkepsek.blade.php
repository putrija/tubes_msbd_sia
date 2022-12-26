@extends('template_backend.home')
@section('heading', 'Menambahkan Kepala Sekolah')
@section('page')
  <li class="breadcrumb-item active">Menambahkan Kepala Sekolah</li>
@endsection
@section('content')

<div class="col-md-12">
<form action="{{ route('editkepsek2') }}" method="post" >
  @csrf
  <div class="form-group">
    <label for="id_card_guru">Masukkan ID CARD Guru</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id_card_guru" placeholder="00001" name="id_card_guru">
    </div>
  </div>` 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Tambahkan sebagai Kepala Sekolah</button>
    </div>
  </div>
</form>
</div>


@endsection
@section('script')
  <script>
    $(document).ready(function(){
        $('#role').change(function(){
            var kel = $('#role option:selected').val();
            if (kel == "Guru") {
              $("#noId").html('<label for="nomer">Nomer Id Card</label><input id="nomer" type="text" maxlength="5" onkeypress="return inputAngka(event)" placeholder="No Id Card" class="form-control" name="nomer" autocomplete="off">');
            } else if(kel == "Siswa") {
              $("#noId").html(`<label for="nomer">Nomer Induk Siswa</label><input id="nomer" type="text" placeholder="No Induk Siswa" class="form-control" name="nomer" autocomplete="off">`);
            } else if(kel == "Admin" || kel == "Operator") {
              $("#noId").html(`<label for="name">Username</label><input id="name" type="text" placeholder="Username" class="form-control" name="name" autocomplete="off">`);
            } else {
              $("#noId").html("")
            }
        });
    });
    
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataUser").addClass("active");
  </script>
@endsection