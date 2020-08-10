@extends('layouts.master')
@section('content')
<div class="mt-3 ml-3 mr-3">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Question</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/proyek/{{$question->id}} " method="POST">
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $question->nama) }}" id="nama" placeholder="Enter nama" required>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $question->deskripsi) }}" id="deskripsi" placeholder="deskripsi" required>
                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="text" name="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai', $question->tanggal_mulai) }}" id="tanggal_mulai" placeholder="tanggal_mulai" required>
                @error('tanggal_mulai')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="tanggal_deadline">Tanggal Deadline</label>
                <input type="text" name="tanggal_deadline" class="form-control" value="{{ old('tanggal_deadline', $question->tanggal_deadline) }}" id="tanggal_deadline" placeholder="tanggal_deadline" required>
                @error('tanggal_deadline')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="{{ old('status', $question->status) }}" id="status" placeholder="status" required>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
        <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection