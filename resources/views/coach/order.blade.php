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
          <div class="form-group">
            <label class="control-label col-xs-4">预约项目</label>

            <div class="col-xs-8">
              <select class="form-control" name="" id="">
                <option value="">运动项目</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">教练级别</label>

            <div class="col-xs-8">
              <select class="form-control" name="" id="">
                <option value="">教练级别</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">教练性别</label>

            <div class="col-xs-8">
              <select class="form-control" name="" id="">
                <option value="">教练性别</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="location" class="control-label col-xs-4">预约场地</label>

            <div class="col-xs-8">
              <input required id="location" name="location" class="form-control" type="text" placeholder="请输入预约场地">
            </div>
          </div>
          <div class="form-group">
            <label for="date" class="control-label col-xs-4">预约日期</label>

            <div class="col-xs-8">
              <input required id="date" name="date" class="form-control" type="date" placeholder="请选择日期">
            </div>
          </div>
          <div class="form-group">
            <label for="time" class="control-label col-xs-4">预约时长</label>

            <div class="col-xs-8">
              <select required id="time" name="time" class="form-control">
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
          <div class="form-group">
            <label for="person" class="control-label col-xs-4">预约人</label>

            <div class="col-xs-8">
              <input required id="person" name="person" class="form-control" type="text" placeholder="请输入预约人姓名">
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="control-label col-xs-4">预留电话</label>

            <div class="col-xs-8">
              <input required id="phone" name="phone" class="form-control" type="number" placeholder="请输入预约人手机号">
            </div>
          </div>
          <p class="text-danger" style="float: right;">请输入正确的手机号!</p>
          <div class="clearfix"></div>
          <div class="form-group">
            <label for="remark" class="control-label col-xs-4">备注</label>

            <div class="col-xs-8">
              <textarea required id="remark" name="remark" class="form-control" placeholder="请输入备注信息" rows="3"></textarea>
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
      el: '#coach_order'
    });
  </script>
@endsection