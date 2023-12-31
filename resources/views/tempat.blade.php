@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Tempat Olahraga</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tempat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Tempat</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add Tempat</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Update At</th>
                      <th style="width: 140px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($listUser as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->judul }}</td>
                      <td>{{ $data->updated_at }}</td>
                      <td>
                         
                        <a href="#">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        |
                        <a href="#">
                            <i class="fa fa-trash red"></i>
                        </a>
                    </td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

      </div>
      
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Tempat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              
              <form method="POST" action="{{ route('tempat.store') }}" role="form" enctype="multipart/form-data">
                @csrf  
              <div class="modal-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="name">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="text" class="form-control" placeholder="Masukkkan ..." name="judul">
                      </div>
                    </div>

                  

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pilih Category</label>
                        <select class="form-control" name="category_id">
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="deskripsi"></textarea>
                      </div>
                 
                
                  <div class="form-group">
                    <label for="exampleInputFile">File Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
              </form>
            </div>
    </div>
  </div>
</div>
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
