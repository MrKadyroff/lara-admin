@extends('layouts.adminLayout.admin_design');
@section('content');

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Главная</a>> <a href="#" class="current">Новое сообщение</a> </div>
    <h1>Новое сообщение</h1>
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
            <h5>Сообщения</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/new-mes') }}" name="add_plan1" id="add_plan1" novalidate="novalidate">{{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Текст сообщения: </label>
                <div class="controls">
                  <textarea type="text" name="message"  id="message" placeholder="Добрый день!"></textarea>
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">План :</label>
                <div class="controls">
                  <select  name="plan">
                    <option value="1">План 1</option>
                    <option value="2">План 2</option>
                    <option value="3">План 3</option>
                    <option value="4">План 4</option>
                  </select>

                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Дата отрпавки :</label>
                <div class="controls">
                  <?php $date =date('Y-m-d');
                  $date = strtotime($date)+86400;
                  $end = date('Y-m-d',$date); ?>
                  <input type="date" name="date" data-date-format="dd-mm-yyyy" value="<?php echo $end; ?>" class="datepicker span3">
              </div>
                          </div>
              <!-- <div class="control-group">
                <label class="control-label">Количество отправлений :</label>
                <div class="controls">
                  <input type="number" name="quantity" id="quantity" required>
                </div>
              </div>
          <div class="control-group">
                <label class="control-label">Очередность :</label>
                <div class="controls">
              <input type="number" name="turn" value="turn">
                </div>
              </div> -->
              <div class="form-actions">
                <input type="submit" value="Добавить" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection;
