@extends('layouts.adminLayout.admin_design');
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Категории</h1>
    @if(Session::has('flash_message_error'))
       <div class="alert alert-error alert-block">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <center><strong>{!! session('flash_message_error') !!}</strong></center>
       </div>
       @endif
         @if(Session::has('flash_message_success'))
       <div class="alert alert-success alert-block">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <center><strong>{!! session('flash_message_success') !!}</strong></center>
       </div>
       @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Таблица</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Категория</th>
                  <th>Текст</th>
                  <th>Действия</th>
                  <th>-----</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr class="gradeX">
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->url }}</td>
                  <td class="center"><a href="{{ url('/admin/edit-category/'.$category->id) }}" class="btn btn-primary ">Изменить</a> <a  href="{{ url('/admin/delete-category/'.$category->id) }}" class=" deletebtn btn btn-danger ">Удалить</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
