@extends('layouts.master')
@section('content')
<div class="mt-3 ml-3 mr-3">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <a href="/proyek/create" class="btn btn-primary mb-3">Create New Question</a>
            <table class="table table-bordered">
                <thead>                  
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($projects as $key => $project)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $project->nama }}</td>
                        <td>{{ $project->deskripsi }}</td>
                        <td>{{ $project->tanggal_mulai }}</td>
                        <td>{{ $project->tanggal_deadline }}</td>
                        <td>{{ $project->status }}</td>
                        <td style="display: flex;">
                            <a href="/pertanyaan/{{$question->id}}" class="btn btn-sm btn-info mr-1">Show</a>
                            <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-sm btn-info mr-1">Edit</a>
                            <form action="/pertanyaan/{{$question->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-sm btn-danger">
                            </form>
                        </td>
                    </tr>
                
                @empty
                <tr>
                    <td colspan="4" align="center">No Questions</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
        </div> -->
    </div>
</div>
@endsection
