@extends('layouts.app')

@section('title','活动列表')

@section('page_id','activity_list')

@section('content')
  {{--<nav class="nav navbar-btn navbar-fixed-top">--}}
    {{--<div class="container">--}}
      {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control" placeholder="Search for...">--}}
      {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-default" type="button">Go!</button>--}}
      {{--</span>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</nav>--}}
  {{--<br><br><br>--}}
  <div class="container" v-cloak>
    <ul class="nav nav-tabs" role="tablist" style="border-bottom: 1px solid #ddd;">
      <li role="presentation" v-for="data in activityData"><a href="#@{{ data.type }}" aria-controls="badminton"
                                                              role="tab"
                                                              data-toggle="tab">@{{ data.type_ch }}</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" v-for="data in activityData" class="tab-pane" id="@{{ data.type }}">
        <div class="media"></div>
        <div class="media" v-for="activity in data.activities">
          <div class="media-left">
            <a href="#">
              <img class="media-object" style="width: 60px;height: 60px;" src="/image/test.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">@{{ activity.name }}</h4>
            <div>
              <span>@{{ activity.abstruct }}</span>
              <span>/￥@{{ activity.fee }}</span>
            </div>

          </div>
          <div class="media-right">
            <p>
              <a class="btn btn-sm btn-primary media-object" href="">查看详情</a>
            </p>

            <p>
              <a class="btn btn-sm btn-primary media-object" href="">立即预约</a>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('js')
  <script>
    var activityList = new Vue({
      el: '#activity_list',
      data: {
        activityData: [{
          type: 'badminton',
          type_ch: '羽毛球',
          activities: [{
            name: '活动1',
            abstruct: '地点1',
            fee: '100'
          }, {
            name: '活动2',
            abstruct: '地点2',
            fee: '100'
          }]
        }, {
          type: 'riding',
          type_ch: '骑行',
          activities: [{
            name: '活动3',
            abstruct: '50km',
            fee: '100'
          }, {
            name: '活动4',
            abstruct: '50km',
            fee: '100'
          }]
        },{
          type: 'run',
          type_ch: '健康跑',
          activities: [{
            name: '活动5',
            abstruct: '10km',
            fee: '100'
          }, {
            name: '活动6',
            abstruct: '10km',
            fee: '100'
          }]
        }]
      },
      methods: {}
    });

    $('li').first().children().trigger('click');
  </script>
@endsection