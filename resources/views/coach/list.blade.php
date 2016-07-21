@extends('layouts.app')

@section('title','教练预约')

@section('page_id','coach_list')

@section('css')
  <link rel="stylesheet" href="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <style>
    .bootstrap-tagsinput {
      display: block;
    }

    .form-group {
      padding-bottom: 15px;
    }

    .panel {
      margin: 5px;
    }

    a:focus, a:hover {
      text-decoration: none;
    }
  </style>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
             aria-controls="collapseOne">
            教练查询
          </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <form class="form-inline" action="">
              <div class="form-group">
                <label class="control-label sr-only">运动项目</label>

                <select class="form-control" name="" id="">
                  <option value="">运动项目</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label sr-only">教练级别</label>

                <select class="form-control" name="" id="">
                  <option value="">教练级别</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label sr-only">教练性别</label>

                <select class="form-control" name="" id="">
                  <option value="">教练性别</option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label sr-only">关键字</label>

                <input data-role="tagsinput" type="text" class="form-control" name="keyword" placeholder="请输入关键词">
              </div>
              <button class="btn btn-info btn-block">查找教练</button>
            </form>
          </div>
        </div>

      </div>

      <div class="panel panel-default" v-cloak>
        <div class="panel-heading" role="tab" id="headingTwo">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
             aria-expanded="false" aria-controls="collapseTwo">
            查询结果
          </a>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <div class="media" v-for="coach in coachData">
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
                  <a class="btn btn-sm btn-default media-object" href="">查看详情</a>
                </p>

              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <button class="btn btn-primary btn-block">预约该类型教练</button>
  <br>
</div>

@endsection


@section('js')
  <script src="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script>
    var coachList = new Vue({
      el: '#coach_list',
      data: {
        coachData: [
          {
            name: '教练1',
            abstract: '简介'
          },  {
            name: '教练2',
            abstract: '简介'
          }
        ]
      },
      methods: {}
    });

    $('.collapse').collapse();

  </script>
@endsection