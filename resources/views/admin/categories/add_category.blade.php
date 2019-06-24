@extends('layouts.adminLayout.admin_design');
@section('content');

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Главная</a>> <a href="#" class="current">Добавить клиента</a> </div>
    <h1>Клиенты</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Добавить клиента</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate">{{ csrf_field()}}
              <div class="control-group">
                <label class="control-label">ФИО : </label>
                <div class="controls">
                  <input type="text" name="category_name"  id="category_name" pattern="\D [^0-9]" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Тел:</label>
                <div class="controls">
                  <input type="number" name="tel" id="tel" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Email:</label>
                <div class="controls">
                  <input type="email" name="email" id="email" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Сервис:</label>

                <div class="controls">
                  <div class="list-inline">

                    <select  name="otkuda">
                      <option value="Внешний">Внеешний</option>
                      <option value="Внутренний">Внутренний</option>
                      <option value="Страх. грузов">Страхование грузов</option>
                    </select>

                </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">SMS:</label>
                <div class="controls">
                  <ul class="inline">
                  <li class="list-inline-item"><input type="radio" id="sms1" name="sms" value="1">
                  <label for="sms1">ДА</label></li>
                  <li class="list-inline-item"><input type="radio" id="sms2" name="sms" value="0" checked>
                  <label for="sms2">НЕТ</label></li>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Whatsapp:</label>
                <div class="controls">
                  <ul class="inline">

                <li class="list-inline-item"><input type='radio' name='wp' value='1' id="wp1" onclick="hideFields(false)" >
                  <label for="wp1">ДА</label></li>
                <li class="list-inline-item"><input type='radio' name='wp' value='0' id="wp2" onclick="hideFields(true)" checked>
                  <label for="wp2">НЕТ</label></li>

<div id='hidden_fields'>
        <label>Номер : </label><input type="text" name="wp_num" value="-" required>
</div>
<script type='text/javascript'>
        document.getElementById('hidden_fields').style.display = 'none';
function hideFields(hide){
        document.getElementById('hidden_fields').style.display = hide ? 'none' : 'block';
}
</script>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telegram:</label>
                <div class="controls">
                  <ul class="inline">

                  <li class="list-inline-item"><input type='radio' name='tg' value='1' id="tg1" onclick="hideFields_tg(false)" >
                    <label for="tg1">ДА</label></li>
                  <li class="list-inline-item"><input type='radio' name='tg' value='0' id="tg2" onclick="hideFields_tg(true)" checked>
                    <label for="tg2">НЕТ</label></li>

  <div id='hidden_fields_tg'>
          <label>Номер : </label><input type="text" name="tg_num" value="-" required>
  </div>
  <script type='text/javascript'>
          document.getElementById('hidden_fields_tg').style.display = 'none';
  function hideFields_tg(hide){
          document.getElementById('hidden_fields_tg').style.display = hide ? 'none' : 'block';
  }
  </script>
                  </ul>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Facebook:</label>
                <div class="controls">
                  <ul class="inline" name="fb">
                  <li class=""><input type="radio" id="wp1" name="fb" value="1">
                  <label for="fb1">ДА</label></li>
                  <li class=""><input type="radio" id="wp2" name="fb" value="0" checked>
                  <label for="fb2">НЕТ</label></li>
                      </ul>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">План:</label>
                <div class="controls">
                  <select  name="type">
                    <option value="1">План 1</option>
                    <option value="2">План 2</option>
                    <option value="3">План 3</option>
                    <option value="4">План 4</option>

                  </select>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Добавить категорию" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection;
