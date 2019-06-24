@extends('layouts.adminLayout.admin_design');
@section('content');

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Главная</a>>  <a href="#" class="current">План №3</a> </div>
    <h1>Добавить сообщения ПЛАН №3</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Добавить сообщения ПЛАН №3</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/addMsg3') }}" name="add_plan3" id="add_plan3" novalidate="novalidate">{{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">Текст сообщения: </label>
                <div class="controls">
                  <textarea type="text" name="message"  id="message" ></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Дата отправки :</label>
                <div class="controls">
                  <?php $date =date('Y-m-d');
                  $date = strtotime($date)+86400;
                  $end = date('Y-m-d',$date); ?>
                  <input type="date" name="date" data-date-format="dd-mm-yyyy" value="<?php echo $end; ?>" class="datepicker span3">
                </div>
              </div>
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
