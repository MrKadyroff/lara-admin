<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
      if($request->isMethod('post')){
        $data = $request->all();
        $category = new Category;
        $category->name = $data['category_name'];
        $category->tel=$data['tel'];
        $category->tg_num= $data['tg_num'];
        $category->wp_num = $data['wp_num'];
        $category->email=$data['email'];
        $category->otkuda=$data['otkuda'];
        $category->wp=$data['wp'];
        $category->tg=$data['tg'];
        $category->fb=$data['fb'];
        $category->sms=$data['sms'];
        $category->type=$data['type'];
        $category->save();
        return redirect('admin/view-categories')->with('flash_message_success','Клиент успешно добавлен!');

      }
      return view('admin.categories.add_category');
    }

    public function editCategory(Request $request , $id = null){
      if($request->isMethod('post')){
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;
        Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'tel'=>$data['tel'],'email'=>$data['email'],'sms'=>$data['sms'],'type'=>$data['type'],'fb'=>$data['fb'],'tg'=>$data['tg'],'otkuda'=>$data['otkuda'],'wp'=>$data['wp']]);
        return redirect('/admin/view-categories')->with('flash_message_success','Данные изменены');
      }
      $categoryDetails = Category::where(['id'=>$id])->first();
      return view('admin.categories.edit_category')->with(compact('categoryDetails'));
    }
    public function deleteCategory(Request $request, $id =null){
    if(!empty($id)){
      Category::where(['id'=>$id])->delete();
      return redirect()->back()->with('flash_message_error','Категория удалена');
    }
    }

    public function viewCategories(){
      $categories = Category::get();
      $categories = json_decode(json_encode($categories));
      return view('admin.categories.view_categories')->with(compact('categories'));
    }
}
