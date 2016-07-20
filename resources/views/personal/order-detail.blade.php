@extends('layouts.app')

@section('title','预约记录')

@section('page_id','personal_order_detail')

@section('content')
  <div class="container" v-cloak>
    <br>

    <div class="form-horizontal" action="localhost">
      <div class="panel panel-success">
        <div class="panel-heading text-center">
          预约订单
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="control-label col-xs-4">预约项目</label>

            <div class="col-xs-8">
              <p required class="form-control-static">羽毛球</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">教练级别</label>

            <div class="col-xs-8">
              <p required class="form-control-static">特长生</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">教练性别</label>

            <div class="col-xs-8">
              <p required class="form-control-static">男</p>
            </div>
          </div>
          <div class="form-group">
            <label for="location" class="control-label col-xs-4">预约场地</label>
            <div class="col-xs-8">
              <p required class="form-control-static">XX羽毛球馆</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预约日期</label>

            <div class="col-xs-8">
              <p required class="form-control-static">2015-06-12</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预约时长</label>

            <div class="col-xs-8">
              <p required class="form-control-static">2小时</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预约人</label>

            <div class="col-xs-8">
              <p required class="form-control-static">王大锤</p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预留电话</label>

            <div class="col-xs-8">
              <p required class="form-control-static">13232323232</p>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="form-group">
            <label class="control-label col-xs-4">备注</label>

            <div class="col-xs-8">
              <p required class="form-control-static">备注备注</p>
            </div>
          </div>


          <div class="clearfix"></div>
          <hr>
          <br>
          <table class="table">
            <tr>
              <th class="col-xs-4">预付金额</th>
              <td class="col-xs-8"><b class="text-danger">￥40元</b></td>
            </tr>
          </table>
        </div>
      </div>

    </div>
    <br>
  </div>
@endsection


@section('js')
  <script>
    var personalOrderDetail = new Vue({
      el: '#personal_order_detail',
      data: {},
      methods: {}
    });

  </script>
@endsection