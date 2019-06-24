@extends('layouts.adminLayout.admin_design');
@section('content');

<div id="content">
  <div id="content-header">
    <h1>Редактировать Сообщение id:{{$messagesDetails->id}}</h1>
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Редактировать</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/messages/edit-messages/'.$messagesDetails->id) }}" name="edit_msg" id="edit_msg" novalidate="novalidate">{{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Сообщение : </label>
                <div class="controls">
                  <input type="textarea"  name="message"  id="message" value="{{$messagesDetails->message}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">План : </label>
                <div class="controls">
                  <input name="plan" id="plan" value="{{$messagesDetails->plan}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" >Дата:</label>
                <div class="controls">
                  <input type="text" name="date" id="date" value="{{$messagesDetails->date}}">
                </div>
              </div>
              <div class="control-group">
                <!-- <label class="control-label">Количество : </label>
                <div class="controls">
                  <input name="quantity" id="quantity" value="{{$messagesDetails->quantity}}">
                </div>
              </div> -->
              <!-- <div class="control-group">
                <label class="control-label">Черед : </label>
                <div class="controls">
                  <input name="turn" id="turn" value="{{$messagesDetails->turn}}">
                </div>
              </div> -->





              </div>
              <div class="form-actions">
                <input type="submit" value="Изменить" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection;
