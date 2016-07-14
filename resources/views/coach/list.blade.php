@extends('layouts.app')

@section('title','教练预约')

@section('page_id','coach_list')

@section('content')
  <nav class="nav navbar-btn navbar-fixed-top">
    <div class="container">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div class="container" v-cloak>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" v-for="data in coachData"><a href="#@{{ data.type }}" aria-controls="badminton" role="tab"
                                                           data-toggle="tab">@{{ data.type_ch }}</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" v-for="data in coachData" class="tab-pane" id="@{{ data.type }}">
        <div class="media"></div>
        <div class="media" v-for="coach in data.coaches">
          <div class="media-left">
            <a href="#">
              <img class="media-object" style="width: 60px;height: 60px;" src="/image/test.jpg" alt="">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">@{{ coach.name }}</h4>
            @{{ coach.abstruct }}
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
    var coachList = new Vue({
      el: '#coach_list',
      data: {
        coachData: [{
          type: 'badminton',
          type_ch: '羽毛球',
          coaches: [{
            name: '教练1',
            abstruct: '简介1'
          }, {
            name: '教练2',
            abstruct: '简介2'
          }]
        }, {
          type: 'pingpang',
          type_ch: '乒乓球',
          coaches: [{
            name: '教练3',
            abstruct: '简介3'
          }, {
            name: '教练4',
            abstruct: '简介4'
          }]
        }]
      },
      methods: {}
    });

    $('li').first().children().trigger('click');

  </script>
@endsection