@extends('layoutadm.master')

@section('content')
<div>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="isi">isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukan isi pertanyaan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


</div)


@endsection