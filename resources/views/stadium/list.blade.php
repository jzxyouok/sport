@extends('layouts.app')

@section('title','场馆预约')

@section('page_id','stadium_list')

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
      <li role="presentation" v-for="data in stadiumData"><a href="#@{{ data.type }}" aria-controls="badminton" role="tab"
                                                             data-toggle="tab">@{{ data.type_ch }}</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" v-for="data in stadiumData" class="tab-pane" id="@{{ data.type }}">
        <div class="media"></div>
        <div class="media" v-for="stadium in data.stadiums">
          <div class="media-left">
            <a href="#">
              <img class="media-object" style="width: 60px;height: 60px;" src="/image/test.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">@{{ stadium.name }}</h4>
            @{{ stadium.abstruct }}
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
    var stadiumList = new Vue({
      el: '#stadium_list',
      data: {
        stadiumData: [{
          type: 'badminton',
          type_ch: '羽毛球',
          stadiums: [{
            name: '场馆1',
            abstruct: '简介1'
          }, {
            name: '场馆2',
            abstruct: '简介2'
          }]
        }, {
          type: 'pingpang',
          type_ch: '乒乓球',
          stadiums: [{
            name: '场馆3',
            abstruct: '简介3'
          }, {
            name: '场馆4',
            abstruct: '简介4'
          }]
        }]
      },
      methods: {}
    });

    $('li').first().children().trigger('click');
  </script>
@endsection