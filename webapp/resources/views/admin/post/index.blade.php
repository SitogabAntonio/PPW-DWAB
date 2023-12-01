@extends('layouts.app')

@section('content')

<div class="container">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h4>Post</h4>
            <a href="{{ url('admin/post/create') }}" class="btn btn-primary">Tambah Post</a>
        </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @forelse($posts as $key => $data)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->slug}}</td>
      <td>
        <a href="{{ url('admin/post/edit/' . $data->id) }}" class="btn btn-primary">Edit</a>
        @include('admin.post.delete')
      </td>
    </tr>
    @empty
    <td colspan="4" class="text-center" >Tidak ada data Post</td>
    @endforelse

  </tbody>
</table>
    </div>
</div>

@endsection
