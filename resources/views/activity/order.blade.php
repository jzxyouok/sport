@extends('layouts.app')

@section('title','活动预约')

@section('page_id','activity_order')

@section('content')
  <div class="container" v-cloak>
    <br>

    <form class="form-horizontal" action="localhost">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="panel panel-info">
        <div class="panel-heading text-center">
          活动申请订单
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="control-label col-xs-4">活动名称</label>

            <div class="col-xs-8">
              <input required class="form-control" type="text" placeholder="请输入活动名称">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">活动描述</label>

            <div class="col-xs-8">
              <textarea required class="form-control" rows="4" placeholder="请输入活动描述"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">活动日期</label>

            <div class="col-xs-8">
              <input required class="form-control" type="date" placeholder="请输入活动日期">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">活动地点</label>

            <div class="col-xs-8">
              <input required class="form-control" type="text" placeholder="请输入活动地点">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">是否需要教练</label>
            <div class="col-xs-8">
              <div class="radio-inline">
                <input name="need_coach" required type="radio" checked value=true>是
              </div>
              <div class="radio-inline">
                <input name="need_coach" required type="radio" value=false>否
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">是否需要裁判</label>

            <div class="col-xs-8">
              <div class="radio-inline">
                <input name="need_referee" required type="radio" checked value=true>是
              </div>
              <div class="radio-inline">
                <input name="need_referee" required type="radio" value=false>否
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">申请人</label>

            <div class="col-xs-8">
              <input required class="form-control" type="text" placeholder="请输入申请人姓名">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">预留电话</label>

            <div class="col-xs-8">
              <input required class="form-control" type="number" placeholder="请输入申请人手机号">
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="form-group">
            <label class="control-label col-xs-4">备注</label>

            <div class="col-xs-8">
              <textarea required class="form-control" placeholder="请输入备注信息" rows="3"></textarea>
            </div>
          </div>

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
    var activityOrder = new Vue({
      el: '#activity_order',
      data: {},
      methods: {}
    });
  </script>
@endsection