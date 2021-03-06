@extends('layouts.adminLayout.admin_design');
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Главная</a>> <a href="#" class="current">Таблица</a> </div>
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
      <h5>Все сообщения</h5><a href="{{ url('/admin/add-category') }}" class="btn btn-success btn-block">Добавить</a>
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
                  <th>ФИО</th>
                  <th>Тел:</th>
                  <th>Whatsapp</th>
                  <th>Telegram</th>
                  <th>email</th>
                  <th>Откуда</th>
                  <th>Whatsapp</th>
                  <th>Facebook</th>
                  <th>Telegram</th>
                  <th>SMS</th>
                  <th>План</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr class="gradeX">
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->tel }}</td>
                  <td>{{$category->wp_num}}</td>
                  <td>{{ $category->tg_num}}</td>
                  <td>{{ $category->email }}</td>
                  <td>{{ $category->otkuda }}</td>
                  <td>{{ $category->wp }}</td>
                  <td>{{ $category->fb }}</td>
                  <td>{{ $category->tg }}</td>
                  <td>{{ $category->sms }}</td>
                  <td>{{ $category->type }}</td>
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
