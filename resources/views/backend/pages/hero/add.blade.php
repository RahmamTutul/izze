@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="content-wrapper">
  <div class="col-md-8 grid-margin stretch-card  m-auto ">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title text-primary mt-3">Modify Hero section</h4>
      </div>
      <div class="card-body">
        <div class="mb-3">
          @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
          @endforeach
        </div>
        <form class="forms-sample" action="{{'/admin/hero/index'}}" method="POST" enctype="multipart/form-data">@csrf
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">App Name</label>
            <div class="col-sm-7">
              <input type="text" name="name" class="form-control" id="exampleInputUsername2" value="{{ $data->name }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-7">
              <input type="text" name="title" class="form-control" id="exampleInputUsername2" value="{{ $data->title }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Background Text</label>
            <div class="col-sm-7">
              <input type="text" name="background" class="form-control" id="exampleInputUsername2" value="{{ $data->background }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Facebook Link</label>
            <div class="col-sm-7">
              <input type="text" name="fb" class="form-control" id="exampleInputUsername2" value="{{ $data->fb }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tweeter Link</label>
            <div class="col-sm-7">
              <input type="text" name="tw" class="form-control" id="exampleInputUsername2" value="{{ $data->tw }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Youtube Link</label>
            <div class="col-sm-7">
              <input type="text" name="yt" class="form-control" id="exampleInputUsername2" value="{{ $data->yt }}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">LinkedIn </label>
            <div class="col-sm-7">
              <input type="text" name="li" class="form-control" id="exampleInputUsername2" value="{{ $data->li }}" required>
            </div>
          </div>
          <div class="form-group row">
            <img style="width: 120px; height:auto; float:right;  margin-bottom:30px" src="{{asset('storage/images/admin/hero/'.$data['image'])}}" alt="No image" srcset="">
            <label for="Image" class="col-sm-3 col-form-label">Hero Image</label>
            <div class="col-sm-9">
              <input type="file" name="image" class="form-control" id="Image">
            </div>
          </div>
          <button id="AddNew" type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')

@endpush
