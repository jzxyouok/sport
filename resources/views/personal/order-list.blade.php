@extends('layouts.app')

@section('title','用户信息')

@section('page_id','personal_order_list')

@section('content')
  <div class="container" v-cloak>
    <br>

    <div class="panel panel-warning">
      <div class="panel-heading text-center">
        当前预约
      </div>
      <div class="panel-body">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" style="width: 60px;height: 60px;" src="/image/test.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">教练1</h4>
            约时间：2015-06-12 <br>
            预约时长：2小时
          </div>
          <div class="media-right">
            <a href="#" class="text-warning">
              <i style="margin: 20px 5px;font-size: 20px" class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </div>
          <hr>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        已结束预约
      </div>
      <div class="panel-body">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" style="width: 60px;height: 60px;" src="/image/test.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">场馆1</h4>
            约时间：2015-06-12 <br>
            预约时长：2小时
          </div>
          <div class="media-right">
            <a href="#" style="color: #ddd;">
              <i style="margin: 20px 5px;font-size: 20px" class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </div>
          <hr>
        </div>
      </div>
    </div>
    <br>
  </div>
@endsection


@section('js')
  <script>
    var personalOrderList = new Vue({
      el: '#personal_order_list',
      data: {
      },
      methods: {
      }
    });
  </script>
@endsection