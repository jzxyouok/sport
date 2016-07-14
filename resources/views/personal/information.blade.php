@extends('layouts.app')

@section('title','用户信息')

@section('page_id','personal_information')

@section('content')
  <div class="container" v-cloak>
    <form action="" class="has-success">
      <div class="media"></div>
      <div class="media">
        <div class="media-left">
          <img class="media-object" style="width: 60px;  height: 60px;" src="/image/test.jpg" alt="">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><span>王大锤</span><input class="form-control edit hidden" type="text"></h4>
          <span>简介</span><input class="form-control input-sm hidden edit" type="text">
        </div>
        <div class="media-right">

          <p>
            <a id="edit_button" class="media-object" @click="edit()"><i class="glyphicon glyphicon-edit"></i></a>
            <a id="cancel_button" class="media-object hidden" @click="cancelEdit()"><i
              class="glyphicon glyphicon-remove"></i></a>
          </p>
        </div>
      </div>
      <hr>

      <div class="swiper-container">
        <h4>照片展示</h4>

        <div class="swiper-wrapper">
          <div v-for="image in image_url" class="swiper-slide">
            <img class="img-responsive" :src="image" alt="">
            <button class="btn btn-warning btn-block hidden edit">删除这张图片</button>
          </div>
          <div v-for="image in upload_image" class="swiper-slide">
            <img class="img-responsive" :src="image" alt="">
            <button class="btn btn-warning btn-block edit">删除这张图片</button>
          </div>
        </div>

        <br><br>

        <div class="swiper-pagination"></div>
      </div>

      <h4 class="hidden edit">上传图片</h4>
      <input id="123" class="form-control hidden edit" type="file" onchange="personalInformation.imgPreview(this)">
      <hr>

      <div>
        <h4>详细描述</h4>

        <p><span>描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。</span>
          <textarea class="form-control hidden edit">描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。描述。。</textarea>
        </p>


      </div>
      <hr>

      <div>
        <h4>价格设置</h4>

        <p>￥<span>20</span><input class="form-control input-sm hidden edit" type="text"
                                  style="width: 8em; display: inline;">/小时
        </p>

      </div>

      <button class="btn btn-warning btn-block hidden edit" type="button" @click="finishEdit()">确定</button>
    </form>
    <br>
  </div>
@endsection


@section('js')
  <script src="{{asset('/')}}vendor/tencent_cloud_sdk/sdk/qcloud_sdk.js"></script>
  <script src="{{asset('/')}}vendor/tencent_cloud_sdk/sdk/swfobject.js"></script>
  <script>
    var personalInformation = new Vue({
      el: '#personal_information',
      data: {
        image_url:['/image/test.jpg','/image/test1.jpg'],
        upload_image: []
      },
      methods: {
        imgPreview: function (e) {
          var reader = new FileReader();
          reader.readAsDataURL(e.files[0]);
          reader.onloadend = function () {
            personalInformation.upload_image.push(reader.result);
            personalInformation.$nextTick(function () {
              personalSwiper.update();
              personalSwiper.slideTo(personalSwiper.slides.length);
            });
          }
        },
        edit: function () {
          $('.edit').removeClass('hidden');
          $('.edit').siblings('span').addClass('hidden');
          $('#edit_button').addClass('hidden');
          $('#cancel_button').removeClass('hidden');
        },
        finishEdit: function () {

          var bucketName = "sport";

          var cos = new CosCloud("10052000", "/vendor/tencent_cloud_sdk/Sign.php");

          var successCallBack = function (result) {
            console.log('成功!');
            result = JSON.parse(result);
            personalInformation.image_url.push(result.data.source_url);
            personalInformation.upload_image.$remove(personalInformation.upload_image[0]);
          };

          var errorCallBack = function (result) {
            console.log('失败!');
            console.log(result);
          };

          function dataURLtoBlob(dataurl) {
            var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
              bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
            while (n--) {
              u8arr[n] = bstr.charCodeAt(n);
            }
            return new Blob([u8arr], {type: mime});
          }

          var length = personalInformation.upload_image.length;

          for (i = 0; i < length; i++) {
            var file = dataURLtoBlob(personalInformation.upload_image[0]);
            var d = new Date();
            var time = "/"+d.getFullYear()+"_"+(d.getMonth()+1)+"_"+d.getDate()+"_"+d.getHours()+"_"+d.getMinutes()+"_"+d.getSeconds()+"_"+d.getMilliseconds()+"_"+Math.round(Math.random()*10000000);
            cos.uploadFile(successCallBack, errorCallBack, bucketName, time, file);
          }

          $('.edit').addClass('hidden');
          $('.edit').siblings('span').removeClass('hidden');
          $('#edit_button').removeClass('hidden');
          $('#cancel_button').addClass('hidden');

        },
        cancelEdit: function () {
          $('.edit').addClass('hidden');
          $('.edit').siblings('span').removeClass('hidden');
          $('#edit_button').removeClass('hidden');
          $('#cancel_button').addClass('hidden');
        }
      }
    });

    var personalSwiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true,
      slidesPerView: 1,
      spaceBetween: 5
    });

  </script>
@endsection