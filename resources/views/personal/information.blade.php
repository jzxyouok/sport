@extends('layouts.app')

@section('title','用户信息')

@section('page_id','personal_information')

@section('css')
  <style>
    img {
      width: 85px;
      height: 85px;
      border-radius: 100%;
      border: 5px solid #eee;
    }
    table {
      font-size: 140%;
    }
  </style>
@endsection

@section('content')
  <div class="container" v-cloak>
    <div class="row">
      <div class="text-center">
        <br><br><br>
        <img src="/image/test.jpg" alt="">
        <br><br><br>
      </div>
    </div>

    <table class="table">
      <tr>
        <th>姓名</th>
        <td v-show="!edit_status">@{{ form.name }}</td>
        <td v-show="edit_status"><input name="name" v-model="post.name" type="text" placeholder="请输入姓名"></td>
      </tr>
      <tr>
        <th>手机号</th>
        <td v-show="!edit_status">@{{ form.phone }}</td>
        <td v-show="edit_status"><input name="phone" v-model="post.phone" type="number" placeholder="请输入手机号"></td>
      </tr>
      <tr>
        <th>邮箱</th>
        <td v-show="!edit_status">@{{ form.email }}</td>
        <td v-show="edit_status"><input name="email" v-model="post.email" type="email" placeholder="请输入邮箱"></td>
      </tr>
    </table>

    <button v-show="!edit_status" class="btn btn-primary btn-lg col-xs-12" @click='edit'>编辑个人信息</button>
    <button v-show="edit_status" class="btn btn-warning btn-lg col-xs-6" @click='cancel'>取消</button>
    <button v-show="edit_status" class="btn btn-success btn-lg col-xs-6" @click='updata'>确认</button>

  </div>
@endsection

@section('js')
  <script>
    var personal_information = new Vue({
      el: '#personal_information',
      data: {
        edit_status: false,
        form: {
          name: 'XXX',
          phone: '12323232323',
          email: '123@123.com'
        },

        post: {
          name: null,
          phone: null,
          email: null
        }
      },
      methods: {
        edit: function () {
          this.post.name = this.form.name;
          this.post.phone = this.form.phone;
          this.post.email = this.form.email;

          this.edit_status = true;
        },
        updata: function () {
//          $.post('/',{data:this.post},function (data) {
//            if(data.success){
//              this.edit_status = false;
//            }}
//          );
          this.edit_status = false;
        },
        cancel: function () {
          this.edit_status = false;
        }
      }
    });
  </script>
@endsection