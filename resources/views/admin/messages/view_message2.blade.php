@extends('layouts.adminLayout.admin_design');
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Главная</a>> <a href="#" class="current">Таблица</a> </div>
    <h1>Все сообщения ПЛАН №2</h1>
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
      <h5>Все сообщения</h5><a href="{{ url('/admin/messages/plan2') }}" class="btn btn-success btn-block">Добавить</a>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Все сообщения</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>План</th>
                  <th>Текст сообщения</th>
                  <!-- <th>Количество отпр.</th>
                  <th>Очередь отправки</th> -->
                  <th>Whatsapp</th>
                  <th>Telegram</th>
                  <th>Facebook</th>
                  <th>SMS</th>
                  <th>Функции</th>

                </tr>
              </thead>
              <tbody>
                @foreach($msg as $msg)
                <tr class="gradeX">
                  <td>{{ $msg->id }}</td>
                  <td>{{ $msg->plan }}</td>
                  <td>{{ $msg->message }}</td>
                  <td>{{ $msg->sended }}</td>
                  <td>{{ $msg->tg_send }}</td>
                  <td>{{ $msg->fb_send }}</td>
                  <td>{{ $msg->sms_send }}</td>
                  <td class="center"> <a href="{{ url('admin/messages/edit-messages/'.$msg->id) }}" class="btn  ">Изменить</a> <a  href="{{ url('/admin/delete-messages/'.$msg->id) }}" class=" deletebtnmsg btn btn-danger ">Удалить</a>  </td>
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
