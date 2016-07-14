@extends('layouts.app')

@section('title','场馆详情')

@section('page_id','stadium_detail')

@section('content')
  <div class="container" v-cloak>
    <div class="media"></div>
    <div class="media">
      <div class="media-left">
        <img class="media-object" style="width: 60px;  height: 60px;" src="/image/test.jpg" alt="">
      </div>
      <div class="media-body">
        <h4 class="media-heading">场馆1</h4>
        简介1
      </div>
      <div class="media-right">
        <p class="media-object" style="white-space:nowrap;">￥20/小时</p>

        <p>
          <a class="btn btn-sm btn-primary media-object" href="">立即预约</a>
        </p>
      </div>
    </div>
    <hr>

    <div class="swiper-container">
      <h4>场馆图片</h4>

      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="img-responsive" src="/image/test.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img class="img-responsive" src="/image/test.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img class="img-responsive" src="/image/test.jpg" alt="">
        </div>
      </div>
      <br><br>

      <div class="swiper-pagination"></div>
    </div>

    <hr>

    <div>
      <h4>场馆详情</h4>

      <p>描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。</p>
    </div>
  </div>
@endsection


@section('js')
  <script>
    var stadiumDetail = new Vue({
      el: '#stadium_detail',
      data: {},
      methods: {}
    });

    var stadiumSwiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true,
      slidesPerView: 1,
      spaceBetween: 5
    });

  </script>
@endsection