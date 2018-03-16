@inject('image', 'App\Presenters\ImageSrcShowFrom')
<div class="mui-row">
  <div class="mui-col-xs-4"><hr /></div>
    <div class="mui-col-xs-4 mui-text-center">
      <span class="icon iconfont icon-shangpin1" style="font-size: 24px; color: #ed2a7a;"></span>
      优惠券商品
    </div>
    <div class="mui-col-xs-4"><hr /></div>
</div>
<div style="width: 100%; height: 5px;"></div>
<ul class="mui-table-view mui-grid-view">
  @foreach($coupons as $coupon)
    <li class="mui-table-view-cell mui-media mui-col-xs-6">
        <a class="a-can-do" href="{{ route('home.couponInfo', $coupon->id) }}">
            <img class="mui-media-object" src="{{ $image->imageSrc($coupon, $show_from) }}">
            <span class="mui-badge mui-badge-red" style="position:absolute; right: 0px; top: 20px; background-color: #ed2a7a;">
              {!! $image->showFlat($show_from, $coupon->flat) !!}
            </span>
            <div class="mui-media-body" style="height: 52px;">
              <p style="white-space: normal; max-height: 30px; color:#000; overflow: hidden;">{{ $coupon->goods_name }}</p>
              <p class="mui-text-left" style="margin-top: 5px;">
                <span style="font-size: 18px; color: #ed2a7a;">￥{{ $coupon->price_now }}</span>
                <span style="text-decoration: line-through; color: #929292;">￥{{ $coupon->price }}</span>
              </p>
            </div>
            <div class="mui-media-body mui-row" style="height: 2.2em;">
              <div class="mui-col-xs-7 coupon-info">{{ $coupon->coupon_info }}</div>
              <div class="mui-col-xs-5 coupon-take">马上领券</div>
            </div>
        </a>
    </li>
   @endforeach
    <li class="mui-text-center mui-col-xs-12">
      <a href="{{ route('home.coupon') }}" class="mui-btn mui-btn-outlined a-can-do" style="background-color: #ed2a7a; color: #fff;">查看更多淘宝优惠券</a>
    </li>
</ul>
