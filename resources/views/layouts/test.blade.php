@extends('layouts.app')

@section('title','test')

@section('page_id','test')

@section('content')
  <div class="container">
    <table class="table">
      <tr class="active">
        <th>约健康</th>
      </tr>
      <tr>
        <td><a href="/activity/list">预约活动列表</a></td>
      </tr>
      <tr>
        <td><a href="/activity/detail">活动详情</a></td>
      </tr>
      <tr class="active">
        <th>约教练</th>
      </tr>
      <tr>
        <td><a href="/coach/list">教练列表</a></td>
      </tr>
      <tr>
        <td><a href="/coach/detail">教练信息</a></td>
      </tr>
      <tr>
        <td><a href="/coach/order">教练预约订单</a></td>
      </tr>
      {{--<tr>--}}
      {{--<th>约场馆</th>--}}
      {{--</tr>--}}
      {{--<tr>--}}
      {{--<td><a href="/stadium/list">场馆列表</a></td>--}}
      {{--</tr>--}}
      {{--<tr>--}}
      {{--<td><a href="/stadium/detail">场馆信息</a></td>--}}
      {{--</tr>--}}
      {{--<tr>--}}
      {{--<td><a href="/stadium/order">场馆预约</a></td>--}}
      {{--</tr>--}}
      <tr class="active">
        <th>个人信息</th>
      </tr>
      <tr>
        <td><a href="/personal/information">个人信息</a></td>
      </tr>
      <tr class="active">
        <th>预约信息</th>
      </tr>
      <tr>
        <td><a href="/personal/order-list">预约列表</a></td>
      </tr>
      <tr>
        <td><a href="/personal/order-detail">预约详情</a></td>
      </tr>
    </table>
  </div>
@endsection


@section('js')
  <script>

  </script>
@endsection