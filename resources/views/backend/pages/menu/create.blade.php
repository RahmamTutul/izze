@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-10 offset-md-1 mt-4">
          <div class="card">
             <div class="card-header">
                <h5>Manage Menu</h5>
             </div> 
             <div class="card-body">
                <div class="row">
                   <div class="col-md-6">
                      <h5 class="mb-4 ">Add New Menu</h5>
                      <form action="{{ route('admin.menus.store')}}" method="post">
                         @csrf
                          @if(count($errors) > 0)
                                <div class="alert alert-danger  alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    @foreach($errors->all() as $error)
                                            {{ $error }}<br>
                                    @endforeach
                                </div>
                            @endif
                         <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                  <label>Title</label>
                                  <input type="text" name="title" class="form-control">   
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                  <label>Parent</label>
                                  <select class="form-control" name="parent_id">
                                     <option selected disabled>Select Parent Menu</option>
                                     @foreach($allMenus as $key => $value)
                                        <option value="{{ $key }}">{{ $value}}</option>
                                     @endforeach
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                               <button class="btn btn-success">Save</button>
                            </div>
                         </div>
                      </form>
                   </div>
                   <div class="col-md-5 m-4">
                      <h5 class="mb-4">Your Menu List</h5>
                       <ul id="tree1">
                          @foreach($menus as $menu)
                             <li>
                                 {{ $menu->title }} <a href="{{ url('admin/menus/delete',$menu->id) }}" title="Menu" class="float-right text-danger confirmDelete"> <i class="mdi mdi-delete-forever"></i></a>
                                 @if(count($menu->childs))
                                     @include('backend.pages.menu.manageChild',['childs' => $menu->childs])
                                 @endif
                             </li>
                          @endforeach
                         </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
@stop

@push('script')

@endpush
