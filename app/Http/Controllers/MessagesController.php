<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Messages;



class MessagesController extends Controller
{
    public function plan1(){
      return view('admin.messages.plan1');
    }
    public function plan2(){
      return view('admin.messages.plan2');
    }
    public function plan3(){
      return view('admin.messages.plan3');
    }
    public function plan4(){
      return view('admin.messages.plan4');
    }
    public function add_plan1(Request $request){
      if($request->isMethod('post')){
        $data = Input::all();
        $check = DB::table('messages')->insertGetId(array(
            'plan'      => '1',
            'message'     => $data['message'],
            'date'      => $data['date'],
            'sended' => '0',
            'tg_send'=>'0',
            'fb_send'=>'0',
            'sms_send'=>'0'
          ));
        return redirect('admin/messages/plan1')->with('flash_message_success','Сообщение успешно добавлено!');
    }
}
public function add_plan2(Request $request){
  if($request->isMethod('post')){
    $data = Input::all();
    $check = DB::table('messages')->insertGetId(array(
        'plan'      => '2',
        'message'     => $data['message'],
        'date'      => $data['date'],
        'sended' => '0',
        'tg_send'=>'0',
        'fb_send'=>'0',
        'sms_send'=>'0'
      ));
    return redirect('admin/messages/plan2')->with('flash_message_success','Сообщение успешно добавлено!');
}
}
public function add_plan3(Request $request){
  if($request->isMethod('messages')){
    $data = Input::all();
    $check = DB::table('plan')->insertGetId(array(
        'plan'      => '3',
        'message'     => $data['message'],
        'date'      => $data['date'],
        'sended' => '0',
        'tg_send'=>'0',
        'fb_send'=>'0',
        'sms_send'=>'0'
      ));
    return redirect('admin/messages/plan2')->with('flash_message_success','Сообщение успешно добавлено!');
}
}
public function add_plan4(Request $request){
  if($request->isMethod('post')){
    $data = Input::all();
    $check = DB::table('messages')->insertGetId(array(
        'plan'      => '4',
        'message'     => $data['message'],
        'date'      => $data['date'],
        'sended' => '0',
        'tg_send'=>'0',
        'fb_send'=>'0',
        'sms_send'=>'0'
      ));
    return redirect('admin/messages/plan4')->with('flash_message_success','Сообщение успешно добавлено!');
}
}

public function viewMsg1(){
// plan1 msg
    $msg = Messages::where('plan', '=', 1)->get();
    $msg = json_decode(json_encode($msg));
    return view('admin.messages.view_message1')->with(compact('msg'));

}
public function viewMsg2(){
// plan1 msg
    $msg = Messages::where('plan', '=', 2)->get();
    $msg = json_decode(json_encode($msg));
    return view('admin.messages.view_message2')->with(compact('msg'));

}
public function viewMsg3(){
// plan1 msg
    $msg = Messages::where('plan', '=', 3)->get();
    $msg = json_decode(json_encode($msg));
    return view('admin.messages.view_message3')->with(compact('msg'));

}
public function viewMsg4(){
// plan1 msg
    $msg = Messages::where('plan', '=', 4)->get();
    $msg = json_decode(json_encode($msg));
    return view('admin.messages.view_message4')->with(compact('msg'));

}

public function viewMsg5(){
// plan1 msg

    $msg = Messages::get();
    $msg = json_decode(json_encode($msg));
    return view('admin.messages.view_message5')->with(compact('msg'));

}

public function deleteMsg(Request $request, $id =null){
if(!empty($id)){
  Messages::where(['id'=>$id])->delete();
  return redirect()->back()->with('flash_message_error','Сообщение удалено');
}
}
public function editMsg(Request $request , $id = null){
  if($request->isMethod('post')){
    $msg = $request->all();
    // echo "<pre>"; print_r($data); die;
    Messages::where(['id'=>$id])->update(['plan'=>$msg['plan'],'message'=>$msg['message'],'date'=>$msg['date']]);
    return redirect('/admin/messages/view_message5')->with('flash_message_success','Данные изменены');
  }
  $messagesDetails = Messages::where(['id'=>$id])->first();
  return view('admin.messages.edit_message')->with(compact('messagesDetails'));
}
public function newMsg(){
  return view('admin.messages.new_message');
}

public function addNewMsg(Request $request){
  if($request->isMethod('post')){
    $data = Input::all();
    $check = DB::table('messages')->insertGetId(array(
        'plan' => $data['plan'],
        'message' => $data['message'],
        'date'   => $data['date'],
        'sended' => '0',
        'tg_send' => '0',
        'fb_send' => '0',
        'sms_send' => '0',
      ));
    return redirect('admin/messages/new_message')->with('flash_message_success','Новое сообщение создано успешно!');
}
}

}
