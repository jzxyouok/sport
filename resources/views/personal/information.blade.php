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
  <div class="container">
    <div class="row">
      <div class="text-center">
        <br><br><br>
        <img src="/image/test.jpg" alt="">
        <br><br><br>
      </div>
    </div>

    <table class="table">
      <tr>
        <th>昵称</th>
        <td>xxxx</td>
      </tr>
      <tr>
        <th>手机号</th>
        <td>18666666666</td>
      </tr>
    </table>

  </div>
@endsection

@section('js')
@endsection