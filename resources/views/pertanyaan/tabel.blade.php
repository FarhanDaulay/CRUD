@extends('layoutadm.master')

@section('content')

    <div class="ml-3 mt-3">
        <h1>Data Pertanyaan</h1>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pertanyaan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diperbaharui</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $question)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td> {{ $question->judul}} </td>
                        <td> {{ $question->isi}} </td>
                        <td> {{ $question->tanggal_dibuat}} </td>
                        <td> {{ $question->tanggal_diperbaharui}} </td>
                        <td> <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info">Show</a>
                    </tr>

                    @endforeach
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <a href="/pertanyaan/create" class="btn btn-primary">
            Memasukkan Pertanyaan lagi
        </a>
    </div>

@endsection