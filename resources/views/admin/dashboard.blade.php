@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}"  class="tip-bottom"><i class="icon-home"></i>Главная</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container ">
    <div class="quick-actions_homepage">
      <ul class="quick-actions ">
        <li class="bg_lb"> <a href="{{ url('admin/dashboard')}}"> <i class="icon-dashboard"></i>Панель управления </a> </li>
        <li class="bg_lg "> <a href="{{ url('admin/add-category')}}"> <i class="icon-user"></i> Добавить клиента</a> </li>
        <li class="bg_ly"> <a href="{{ url('admin/messages/view_message5')}}"> <i class="icon-inbox"></i>Сообщения </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-bullhorn"></i> Социальные сети</a> </li>
        <!-- <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li> -->


      </ul>
    </div>
<!--End-Action boxes-->

<!--Chart-box-->

<!--End-Chart-box-->
<div class="row-fluid">
  <div class="widget-box">
          <!-- <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
            <h5>Опции чата</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG4">
            <div class="chat-users panel-right2">
              <div class="panel-title">
                <h5>Пользователи</h5>
              </div>
              <div class="panel-content nopadding">
                <ul class="contact-list">
                  <li id="user-Alex" class="online"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/av1.jpg') }}" /> <span>Alex</span></a></li>
                  <li id="user-Linda"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/av2.jpg') }}" /> <span>Linda</span></a></li>
                  <li id="user-John" class="online new"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/av3.jpg') }}" /> <span>John</span></a><span class="msg-count badge badge-info">3</span></li>
                  <li id="user-Mark" class="online"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/av4.jpg') }}" /> <span>Mark</span></a></li>
                  <li id="user-Maxi" class="online"><a href=""><img alt="" src="{{ asset('images/backend_images/demo/av5.jpg') }}" /> <span>Maxi</span></a></li>
                </ul>
              </div>
            </div> -->
            <!-- <div class="chat-content panel-left2">
              <div class="chat-messages" id="chat-messages">
                <div id="chat-messages-inner"></div>
              </div>
              <div class="chat-message well">
                <button class="btn btn-success">Send</button>
                <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
            </div> -->
          </div>
        </div>




      </div>
    </div>
  </div>
</div>

@endsection
