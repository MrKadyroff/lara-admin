@extends('layouts.adminLayout.admin_design');
@section('content');

<div id="content">
  <div id="content-header">
    <h1>Редактировать данные</h1>
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
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-category/'.$categoryDetails->id) }}" name="edit_category" id="edit_category" novalidate="novalidate">{{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">ФИО : </label>
                <div class="controls">
                  <input type="text" name="category_name"  id="category_name" value="{{$categoryDetails->name}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Тел : </label>
                <div class="controls">
                  <input name="tel" id="tel" value="{{$categoryDetails->tel}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" >Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email" value="{{$categoryDetails->email}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Сервис:</label>

                <div class="controls">
                  <div class="list-inline">
                      <p> Выбран :{{ $categoryDetails->otkuda}}</p>
                    <select  name="otkuda">
                      <option value="1">Внеешний</option>
                      <option value="2">Внутренний</option>
                      <option value="3">Страхование грузов</option>
                    </select>

                </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">SMS:</label>
                <div class="controls">
                  <p> Выбран :{{ $categoryDetails->sms}}</p>
                  <ul class="inline">
                  <li class="list-inline-item"><input type="radio" id="sms1" name="sms" value="1">
                  <label for="sms1">1</label></li>
                  <li class="list-inline-item"><input type="radio" id="sms2" name="sms" value="0" checked="checked">
                  <label for="sms2">0</label></li>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Whatsapp:</label>
                <div class="controls">
                  <p> Выбран :{{ $categoryDetails->wp}}</p>
                  <ul class="inline">
                  <li class="list-inline-item"><input type="radio" id="wp1" name="wp" value="1">
                  <label for="wp1">1</label></li>
                  <li class="list-inline-item"><input type="radio" id="wp2" name="wp" value="0" checked="checked">
                  <label for="wp2">0</label></li>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telegram:</label>
                <div class="controls">
                  <p> Выбран :{{ $categoryDetails->tg}}</p>
                  <ul class="inline">
                  <li class="list-inline-item"><input type="radio" id="tg1" name="tg" value="1">
                  <label for="tg1">1</label></li>
                  <li class="list-inline-item"><input type="radio" id="tg2" name="tg" value="0" checked="checked">
                  <label for="tg2">0</label></li>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Facebook:</label>
                <div class="controls">
                  <p> Выбран :{{ $categoryDetails->fb}}</p>
                  <ul class="inline" name="fb">
                  <li class=""><input type="radio" id="wp1" name="fb" value="1">
                  <label for="fb1">1</label></li>
                  <li class=""><input type="radio" id="wp2" name="fb" value="0" checked="checked">
                  <label for="fb2">0</label></li>
                      </ul>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Тип:</label>
                <div class="controls">
                  <p> Выбран план:{{ $categoryDetails->type}}</p>

                  <select  name="type">
                    <option value="1">План 1</option>
                    <option value="2">План 2</option>
                    <option value="3">План 3</option>
                    <option value="4">План 4</option>

                  </select>



                </div>
              </div>

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
