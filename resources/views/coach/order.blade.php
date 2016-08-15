@extends('layouts.app')

@section('title','教练预约')

@section('page_id','coach_order')

@section('content')
  <div class="container" v-cloak>
    <br>

    <form class="form-horizontal" action="localhost">
      <div class="panel panel-info">
        <div class="panel-heading text-center">
          教练预约订单
        </div>
        <div class="panel-body">
          <table class="table">
            <tr>
              <th class="col-xs-4">教练名称</th>
              <td class="col-xs-8">教练1</td>
            </tr>
            <tr>
              <th class="col-xs-4">简介</th>
              <td class="col-xs-8">简介</td>
            </tr>
            <tr>
              <th class="col-xs-4">价格</th>
              <td class="col-xs-8">￥20/小时</td>
            </tr>
          </table>
          <hr>
          <br>

          <div class="form-group">
            <label class="control-label col-xs-4">预约地点</label>

            <div class="col-xs-8">
              <input required class="form-control" type="text" placeholder="请输入预约地点">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-4">预约日期</label>

            <div class="col-xs-8">
              <input required class="form-control" type="date">
              <!--<div class="input-group date" id="datetimepicker" data-date="2012-02-12">-->
              <!--<input class="form-control" size="16" type="text" value="">-->
              <!--<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>-->
              <!--</div>-->
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预约时长</label>

            <div class="col-xs-8">
              <select required class="form-control">
                <option disabled selected value="">请选择预约时间</option>
                <option value="1">1小时</option>
                <option value="2">2小时</option>
                <option value="3">3小时</option>
                <option value="4">4小时</option>
                <option value="5">5小时</option>
                <option value="6">6小时</option>
                <option value="7">7小时</option>
                <option value="8">8小时</option>
              </select>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="form-group">
            <label class="control-label col-xs-4">备注</label>

            <div class="col-xs-8">
              <textarea required class="form-control" type="number" placeholder="请输入备注信息" rows="2"></textarea>
            </div>
          </div>

          <div class="clearfix"></div>
          <hr>
          <br>
          <table class="table">
            <tr>
              <th class="col-xs-4">预付金额</th>
              <td class="col-xs-8"><b class="text-danger">￥20元</b></td>
            </tr>
          </table>
        </div>
      </div>

      <button type="submit" class="btn btn-block btn-info btn-lg">确认订单，并支付</button>
    </form>
    <br>
  </div>
@endsection


@section('js')
  <script>
    var coachOrder = new Vue({
      el: '#coach_order',
      data: {},
      methods: {}
    });
  </script>
@endsection