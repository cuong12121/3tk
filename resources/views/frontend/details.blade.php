@extends('frontend.layouts.apps')

@section('content')


<style>
    .html5gallery-elem-0 a
    {
    position: absolute;
    left: -99999px;
    }
    .html5gallery-elem-0
    {
    box-shadow: none;
    padding: 0;
    width: 100% !important;
    height: 100% !important;
    }
    .html5gallery-box-0
    {
    margin: 0;
    padding: 0;
    left: 0;
    top: 0;
    }
    .html5gallery-box-0 img
    {
    width: 100% !important;
    height: 100% !important;
    left: 0 !important;
    top: 0 !important;
    }
    .html5gallery-elem-img-0
    {
        width: 100% !important;
    }
    .html5gallery-title-0
    {
        top: auto;
        bottom: 0px;
        display: none;
        padding: 0;
    }
    .html5gallery-tn-title-0
    {
    height: 0;
    }

    
</style>

<style>
    input[type=radio] + label, input[type=checkbox] + label {
    border: 1px solid #e6e6e6;
    display: inline-block;
    padding: 6px 8px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    color: #333;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-color: #fff;
    font-weight: 300;
    margin-left: 3px;

    }

    input[type=radio]:checked + label, input[type=checkbox]:checked + label {
        background-image: none;
        outline: 0;
        background-color: #c5232b;
        color: #fff;
    }

   
    input[type=radio], input[type=checkbox] {
        display: none;
    }


/*    style modal*/

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

/*endstylemodal*/

</style>

<?php

    $groupProduct = DB::table('group_product')->select('name', 'link', 'id', 'product_id')->get();

    foreach($groupProduct as $groupProducts ){

        if(!empty(json_decode($groupProducts->product_id))){

            if(in_array($data['id'],json_decode($groupProducts->product_id))){

                $groupName = $groupProducts->name;

                $groupLink = $groupProducts->link;

                $groupProductId =  $groupProducts->id;

                
            }
        }
    }

    $check_deal =  Cache::get('deals')->where('product_id', $data->id);

    $now = \Carbon\Carbon::now();
   
    if(!empty($check_deal)){

        $check_deal =  $check_deal->all();

        if(!empty($check_deal)){
            $check_deal = reset($check_deal);
        }

        $deal_check_add = false;
        
        if(!empty($check_deal) && !empty($check_deal->deal_price) &&$check_deal->active==1){
             
            $timeDeal_star = $check_deal->start;
            $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);
            $timeDeal_end = $check_deal->end;
            $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);
            $timestamp = $now->diffInSeconds($timeDeal_end);


            if($now->between($check_deal->start, $check_deal->end)){
                $deal_check_add = true;
               
                $price_old = $data->Price;
                $text = '<b>MUA ONLINE GIÁ SỐC: </b>';
                $data->Price = $check_deal->deal_price;
                $percent = ceil((int)$price_old/$data->Price);
            }
        }
        
    }


?>

<?php 

    $images_products = App\Models\image::where('product_id', $data->id)->select('image')->get();

?>



<style type="text/css">
    .crazy-deal-details.pc {
    margin: 8px;
    height: 29px;
    overflow: hidden;
    background-position: 0 0;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.crazy-deal-details-right {
    position: relative;
    margin-left: 167px;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-between;
}

.crazy-deal-details-countdown {
    font-weight: bold;
}

.clock{
    font-weight: bold;
}
</style>

<div class="body-content bg-page clearfix">
    <div class="container">
        <div class="wrap-product">
            <div class="row">
                <nav>
                    <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a href="{{ route('homeFe') }}" itemprop="item">
                                <h2 itemprop="name">Trang chủ</h2>
                                <meta itemprop="position" content="1">
                            </a>
                        </li>
                         @if(!empty($groupLink))
                        <li class="breadcrumb-item">
                            <a href="{{ route('details', $groupLink??'') }}">
                            <span>
                                {{ @$groupName }}
                            </span>
                            </a>
                        </li>
                        @endif
                    </ol>
                </nav>
            </div>
            <div class="owlRespon-1 boxbanner-31">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pdetail-name">
                        <h1>
                            {{ $data->Name }}
                        </h1>
                        <ul class="list-inline pdetail-ratings">
                            <li class="product-review-list">
                                <img src="../images/star.png" height="17">
                                &nbsp;|&nbsp;<a href="#danhgia">
                                (0) Đánh giá
                                </a>&nbsp;|&nbsp;(1850) Đã bán
                            </li>
                        </ul>
                        <div class="pdetail-social">
                            <!-- Load Facebook SDK for JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="product-detail">
                <div class="row">
                    <div class="col-12 col-md-9 pdetail-des">
                        <div style="padding: 0 5px;">
                            <div class="row">
                                <div id="pdetail-images" class="col-12 col-md-6 pdetail-images">
                                    <div style="padding: 0 5px;">
                                        <div class="sp-wrap">
                                            <div class="">


                                                <link rel="stylesheet" type="text/css" href="../slidesanpham/images/template.css">
                                               
                                                <div class="moduletable clearfix">
                                                    <div id="slidehome" class="slidehome">
                                                        <script src="../slidesanpham/images/html5gallery.js"></script>
                                                        <div style="width: 100%; overflow: hidden">
                                                            <div style="display: none; margin: 0 auto;" id="mygallery1" data-skin="gallery" data-width="500" data-height="500" data-resizemode="fill" data-responsive="true">
                                                                
                                                                <a href="{{ asset($data->Image) }}">
                                                                <img alt="{{ $data->Name }}" src="{{ asset($data->Image) }}" style="border: 1px solid #e7e7e7;"></a>

                                                              
                                                                @if(isset($images_products))


                                                                @foreach( $images_products as $image)
                                                            
                                                                <a href="{{ asset($image->image) }}">
                                                                <img alt="Giày Bảo Hộ Lao Động Dynamica S3 " src="{{ asset($image->image) }}" style="border: 1px solid #e7e7e7;"></a>

                                                            
                                                                @endforeach

                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pdetail-des">
                                    <div class="clearfix">
                                    </div>
                                    <div>
                                        <div class="pdetail-info">
                                            <div class="pdetail-price">
                                                <div class="pdetail-price-box">
                                                    <h3>
                                                        <span id="ContentPlaceHolder1_Repeater2_Labelgia19_0" style="font-size:18pt;font-weight:bold;">{{ str_replace(',' ,'.', number_format($data->Price)) }}</span>₫
                                                    </h3>
                                                    <div style="position: relative; z-index: 9999999;">
                                                        <div style="position: absolute; top: -1px; z-index: 9999999; left: -2px;">
                                                            <img src="../icon/lien-he.png">
                                                        </div>
                                                    </div>
                                                    <p class="product-price-regular" style="padding-top: 13px;">
                                                        <span id="ContentPlaceHolder1_Repeater2_Labelgia191_0"><font size="4"></font></span>
                                                    </p>
                                                </div>

                                                @if(!empty($text))
                                                <div class="crazy-deal-details pc" style="background-image:url('{{ asset('images-details/flashsale.png')}}'); height:38px"> <div class="crazy-deal-details-right"> <time class="crazy-deal-details-countdown" data-spm-anchor-id="a2o4n.pdp_revamp.0.i0.89db8552daSXV6">Kết thúc sau <span class="crazy-deal-details-countdown-time clock">31:19:10</span></time>  </div> </div>

                                                @endif
                                            </div>
                                            <span id="ContentPlaceHolder1_chkmau">

                                              

                                                @if(!empty($color_product) && $color_product->count()>0)
                                                @foreach($color_product as $key => $value)
                                                <input id="ContentPlaceHolder1_chkmau_{{ $key }}" type="radio" name="ctl00$ContentPlaceHolder1$chkmau" value="{{ @$value->name }}" class="click-show-image" data-id="{{ @asset($value->image) }}">
                                                <label for="ContentPlaceHolder1_chkmau_{{ $key }}">{{ @$value->name }}</label>
                                                @endforeach
                                                @endif

                                            <br>
                                            <br>
                                            <span id="ContentPlaceHolder1_chksize">
                                               
                                                @if(isset($size_pd) && count($size_pd)>0)

                                                @foreach($size_pd as $key => $val)
                                                <input id="ContentPlaceHolder1_chksize_{{ $key }}" type="radio" name="ctl00$ContentPlaceHolder1$chksize" value="{{ @$val }}" class="click-selected-size">
                                                <label for="ContentPlaceHolder1_chksize_{{ $key }}">{{ @$val }} </label>

                                                @endforeach

                                                @endif

                                            </span>

                                            <div style="padding-top: 6px;" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                                                <span>Thương hiệu: </span><a href="../safety-Jogger--bi-165.html" itemprop="url"><span itemprop="name">
                                                Safety Jogger - Bỉ
                                                </span></a>
                                            </div>
                                            <div style="padding-top: 6px;" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                                                <span>Lĩnh vực: </span><a href="../san-xuat-cong-nghiep-136.html" itemprop="url"><span itemprop="name">
                                                Sản xuất công nghiệp
                                                </span></a>
                                            </div>
                                            <div style="padding-top: 6px;" class="stock">
                                                <span>Tình trạng:</span> <i class="fa fa-check"></i>
                                                Còn hàng
                                            </div>
                                            <div style="padding-top: 10px;">
                                                <div class="pdetail-promotion">
                                                    <p class="pdetail-promotion-title">
                                                        <i class="fa fa-gift" aria-hidden="true"></i>Khuyến mại
                                                    </p>
                                                    <div class="pdetail-promotion-body" style="line-height: 25px;">
                                                        <b>
                                                        </b>
                                                        <p>
                                                            <img alt="" src="../uploads/images/check1.png" style="width: 20px; height: 16px;">B&aacute;o gi&aacute; đại l&yacute;:&nbsp;<strong>0869035913</strong><br>
                                                            <img alt="" src="../uploads/images/check1.png" style="width: 20px; height: 16px;">Chiết khấu th&ecirc;m 2-5% khi đặt mua qua website
                                                        </p>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="" style="padding-top: 10px; text-align: center;">
                                           
                                          
                                            <img href="javascript:void(0)" onclick="addToCart({{ $data->id }})"  src="../icon/muangay.png" style="cursor: pointer;">
                                            <img href="javascript:void(0)" onclick="addCartFast({{ $data->id }})"  src="../icon/themvaogiohang.png" style="cursor: pointer;">
                                              
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 pdetail-des">
                                    <div class="pdetail-attrfeatured">
                                        {!!  $data->Specifications  !!}

                                        {!! @$data->Detail !!}
                                        <p>
                                            &nbsp;
                                        </p>
                                    </div>
                                    <div id="danhgia" style="padding: 20px 0;">
                                        <div style="font-size: 15pt;">
                                            ĐÁNH GIÁ SẢN PHẨM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pdetail-des">
                        <div style="padding: 0 5px;">
                            <h3 class="title-category" style="font-size: 14pt; font-weight: bold;">
                                Hỗ trợ trực tuyến
                            </h3>
                            <div style="background-color: #f9f9f9; padding: 0 10px;">
                                <div style="border-top: 1px solid #e7e7e7; padding: 5px 0;">
                                    <div style="color: #313131; font-weight: bold; font-size: 10pt; padding-top: 5px;">
                                        Ms Minh Ngọc
                                    </div>
                                    <div style="color: #313131; font-style: italic; font-size: 10pt;">
                                        HotLine
                                    </div>
                                    <div style="padding-bottom: 5px;">
                                        <a href="tel:0869035913" target="_blank" style="color: red; font-weight: bold;
                                            font-size: 11pt;">
                                        0869035913</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="wrapbox-pList">
                    <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                        <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                            <h3>
                                <a href="" style="text-transform: uppercase; font-size: 13pt;">Sản phẩm tương tự</a>
                            </h3>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="row product-list product-list-bycate">
                            @if(isset($other_product))

                            @foreach($other_product as  $value)
                            <div class="col-6 col-md-2 col-lg-2">

                               
                                @if($value->active==1 && $value->id != $data->id)
                                <div class="card mb-4">
                                    <a href="{{ route('details', $value->Link) }}" data-id="20645" class="product-item">
                                        <div class="card-img-top">
                                            <picture>
                                                <source srcset="{{ asset($value->Image) }}" type="image/webp">
                                                <source srcset="{{ asset($value->Image) }}" type="image/jpeg">
                                                <img loading="lazy" src="{{ asset($value->Image) }}" alt="{{ $value->Name }}">
                                                <span class="product-item-view product-item-view-1752" style="display:none;"></span>
                                            </picture>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title product-name">
                                                <b>
                                                {{ $value->Name }}</b>
                                            </h5>
                                            <p class="card-text product-price">
                                                <span id="ContentPlaceHolder1_Repeater566_Repeater244_0_Labelgia19_0"><b>{{ str_replace(',' ,'.', number_format($data->Price)) }}</b></span>₫ <span class="product-price-regular">
                                                <span id="ContentPlaceHolder1_Repeater566_Repeater244_0_Labelgia191_0"></span></span>
                                            </p>
                                           <!--  <div style="position: relative; z-index: 9999999;">
                                                <div style="position: absolute; top: -29px; z-index: 9999999; left: -2px;">
                                                    <img src="../icon/lien-he.jpg" height="24">
                                                </div>
                                            </div> -->
                                        </div>
                                    </a>
                                </div>
                                @endif
                            
                            </div>
                            @endforeach
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
        <div class="clearfix pt-3">
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>
    </div>
</div>


<script type="text/javascript">

    var modal = document.getElementById("myModal");

    // click show modal

    colors_selected = [];

    size_selected = [];


    var modalImg = document.getElementById("img01");
      
    $('.click-show-image').click(function() {

        colors_selected = [];

        value = $(this).attr('value');

        colors_selected.push(value);

        modal.style.display = "block";

        const img = $(this).attr('data-id');

        modalImg.src = img;

         console.log(colors_selected);
        
       
    });


    $('.click-selected-size').click(function () {

        value = $(this).attr('value');

        size_selected = [];

        size_selected.push(value);

    })

   
    

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }


    $("#mygallery1").html5gallery({
        effects: 'fade',
        thumbwidth: 70,
        thumbheight: 70,
        thumbshowtitle: false,
        thumbshadow: false,
        easing: "linear",
        duration: 500
    });

    function addCartFast(id) {


         bugs = false;

        @if(!empty($color_product) && $color_product->count()>0)
            
            if(colors_selected.length===0){

                bugs = true;

                alert('bạn chưa chọn màu sản phẩm');
            } 

        @endif

        @if(isset($size_pd) && count($size_pd)>0) 
           
            
            if(size_selected.length ===0){

                bugs = true;

                alert('bạn chưa chọn kích thước sản phẩm');
            } 

        @endif 

        if(!bugs){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $.ajax({
                type: 'POST',
                url: "{{ route('addcartfast') }}",
                data: {
                    product_id: id,
                    color: colors_selected[0],

                    size:size_selected[0]
                       
                },
                success: function(result){
                    $('#header_lblmess').text('Giỏ hàng ('+result+')')
                   
                    $('.number-cart').text(result);
                    alert('Thêm sản phẩm vào giỏ hàng thành công !');

                }
            });

        }
        
    }

    function addToCart(id) {

        let bugs = false;

        @if(!empty($color_product) && $color_product->count()>0)

        
        if(colors_selected.length===0){

            bugs = true;
            alert('bạn chưa chọn màu sản phẩm');
        } 

        @endif

        @if(isset($size_pd) && count($size_pd)>0) 

       
        if(size_selected.length ===0){

            bugs = true;

            alert('bạn chưa chọn kích thước sản phẩm');
        } 

        @endif 

    
        if(!bugs){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $.ajax({
                type: 'POST',
                url: "{{ route('cart') }}",
                data: {
                    product_id: id,
                    gift_check:'',
                    color:colors_selected[0],

                    size:size_selected[0]
                       
                },
                beforeSend: function() {
                   
                    $('.loader').show();

                },
                success: function(result){
        
                    window.location.href = "{{ route('cart-details') }}";
                }

            });
        }    
    }

     @if(!empty($text))

        // đếm thời gian 

         //document.getElementById('svg').innerHTML = xmlSvg;
                                        
        time = '{{ @$timestamp }}';
        number_deal_product =10;
        //in time 
        var h = 12;
        var i = 0;
        var s = 0;
    
        amount = time //calc milliseconds between dates
        days = 0;
        hours = 0;
        mins = 0;
        secs = 0;
        out = "";
    
    
        hours = Math.floor(amount / 3600);
        amount = amount % 3600;
        mins = Math.floor(amount / 60);
        amount = amount % 60;
        secs = Math.floor(amount);
            
            
    
    
        //time run 
        if(parseInt(time)>0 && parseInt(number_deal_product)>0){
         h = hours;
          m = mins;
          s = secs;
        }   
        else{
            let today =  new Date();
            h = 99 - parseInt(today.getHours());
            m = 59 - parseInt(today.getMinutes());
            s = 59 - parseInt(today.getSeconds());
            
        }

        start();    
        function start()
        {

              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt($('.hour').text());

              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              if (h == -1){

                $('.crazy-deal-details').remove();

                $('.pdetail-price b').remove();
                $('.pdetail-price-box b').remove();
                priceChange = '{{  str_replace(',' ,'.', number_format($price_old))  }}'   ;
                $('.pdetail-price-box h3').text(priceChange);

              }



              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/



              var hour =  h.toString();

              var seconds =  s.toString();

              var minutes =  m.toString();



              // $('.hourss').text(h<10?'0'+hour:''+hour);
              // $('.secondss').text(s<10?'0'+seconds:''+seconds);
              // $('.minutess').text(m<10?'0'+minutes:''+minutes);

            let currentHour = h<10?'0'+hour:''+hour;
            let currentMinutes = m<10?'0'+minutes:''+minutes;
            let currentSeconds = s<10?'0'+seconds:''+seconds;

    
            let currentTimeStr =currentHour + ":" + currentMinutes + ":" + currentSeconds;

          

            $('.clock').html(currentTimeStr);

              // Insert the time string inside the DOM
           

              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();


              }, 1000);
        }
    @endif 
</script>
@endsection