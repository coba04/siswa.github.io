@extends('layouts.master')
@section('isi')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                Data Ruang <button class="btn btn-info pull-right btn-xs" data-toggle="modal" data-target="#defaultModal">Tambah Data</button>
                </div>
                <div class="panel-body">
                <div class="table-resposive">
                <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Ruang</th>
                    <th>Kode Ruang</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                <tr>
                @foreach ($data as $d)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$d->nama_ruang}}</td>
                <td>{{$d->kode_ruang}}</td>
                <td>{{$d->keterangan}}</td>
                <td></td>
                </tr>

                @endforeach
                </table>
                </div>
                <div>
            </div>
        </div>
    </div>
    <form action="{{route('ruang.simpan')}}" method="POST" class="form-horizontal">
    @csrf
                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                         <label for="nama" class="col-sm-3 control-label">Nama Ruang</label>
                         <div class="col-sm-9">
                         <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Ruang">
                         </div>
                         </div>

                         <div class="form-group">
                         <label for="kode" class="col-sm-3 control-label">Kode Ruang</label>
                         <div class="col-sm-9">
                         <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan kode Ruang">
                         </div>
                         </div>

                         <div class="form-group">
                         <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                         <div class="col-sm-9">
                         <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan">
                         </div>
                         </div>
                               </div>
                               
                                    <button type="submit" class="btn btn-link wafes-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                           </div>
                        </div>
                        
                    </div>
                </div>
            </div>
</form>
@endsection