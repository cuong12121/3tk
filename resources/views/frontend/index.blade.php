@extends('frontend.layouts.apps')

@section('content') 

<style type="text/css">
    
    .home-news1 .news-item-1 .img{
        height: auto !important;
    }
    #ContentPlaceHolder1_Datalist291_Labelgia19_0 font{
        font-weight: bold;
    }
</style>

<div class="body-content bg-page">
    <div class="container">
        <div class="page-home">
            <div class="row">
                <div class="col-12">
                    <div id="home-slide" class="row">
                        <div class="col-md-12 col-12">
                            <div class="home-slide">
                                <script src="{{ asset('slide1/js/jssor.slider-27.0.3.min.js') }}" type="text/javascript"></script>
                                <script type="text/javascript">
                                    jssor_1_slider_init = function() {
                                    
                                        var jssor_1_SlideoTransitions = [
                                          [{b:-1,d:1,o:-0.7}],
                                          [{b:900,d:2000,x:-379,e:{x:7}}],
                                          [{b:900,d:2000,x:-379,e:{x:7}}],
                                          [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
                                        ];
                                    
                                        var jssor_1_options = {
                                          $AutoPlay: 1,
                                          $SlideDuration: 1500,
                                          $SlideEasing: $Jease$.$OutQuint,


                                          $Cols: 1,
                                          $Align: 0,
                                          $CaptionSliderOptions: {
                                            $Class: $JssorCaptionSlideo$,
                                            $Transitions: jssor_1_SlideoTransitions
                                          },
                                          $ArrowNavigatorOptions: {
                                            $Class: $JssorArrowNavigator$
                                          },
                                          $BulletNavigatorOptions: {
                                            $Class: $JssorBulletNavigator$
                                          }
                                        };
                                    
                                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                                    
                                        /*#region responsive code begin*/
                                    
                                        var MAX_WIDTH = 3000;
                                    
                                        function ScaleSlider() {
                                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                                            var containerWidth = containerElement.clientWidth;
                                    
                                            if (containerWidth) {
                                    
                                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                                    
                                                jssor_1_slider.$ScaleWidth(expectedWidth);
                                            }
                                            else {
                                                window.setTimeout(ScaleSlider, 30);
                                            }
                                        }
                                    
                                        ScaleSlider();
                                    
                                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                        /*#endregion responsive code end*/
                                    };
                                </script>
                                <link href="css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css">
                                <style>
                                    /*jssor slider loading skin spin css*/
                                    .jssorl-009-spin img {
                                    animation-name: jssorl-009-spin;
                                    animation-duration: 3s;
                                    animation-iteration-count: infinite;
                                    animation-timing-function: linear;
                                    }
                                    @keyframes jssorl-009-spin {
                                    from { transform: rotate(0deg); }
                                    to { transform: rotate(360deg); }
                                    }
                                    /*jssor slider bullet skin 032 css*/
                                    .jssorb032 {position:absolute;}
                                    .jssorb032 .i {position:absolute;cursor:pointer;}
                                    .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
                                    .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
                                    .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
                                    .jssorb032 .i.idn {opacity:.3;}
                                    /*jssor slider arrow skin 051 css*/
                                    .jssora051 {display:block;position:absolute;cursor:pointer;}
                                    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                                    .jssora051:hover {opacity:.8;}
                                    .jssora051.jssora051dn {opacity:.5;}
                                    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                                </style>
                                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px;
                                    width: 960px; height: 360px; overflow: hidden; visibility: hidden;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px;
                                        left: 0px; width: 100%; height: 100%; text-align: center; background-color: #fff;">
                                       
                                    </div>
                                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px;
                                        width: 960px; height: 360px; overflow: hidden;">

                                        @if(isset($banners))

                                        @foreach($banners as $value)

                                         <div data-p="225.00">
                                            <a href="{{ $value->link }}" target="_blank">
                                            <img src="{{ asset($value->image) }}" width="100%" alt="Banner Slide"></a>
                                        </div>
                                       
                                        @endforeach
                                        @endif
                                       
                                        
                                    </div>
                                    <!-- Bullet Navigator -->
                                    <div data-u="navigator" class="jssorb032" style="position: absolute; bottom: 12px;
                                        right: 12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                        <div data-u="prototype" class="i" style="width: 16px; height: 16px;">
                                            <svg viewbox="0 0 16000 16000" style="position: absolute; top: 0; left: 0; width: 100%;
                                                height: 100%;">
                                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Arrow Navigator -->
                                    <div data-u="arrowleft" class="jssora051" style="width: 65px; height: 65px; top: 0px;
                                        left: 25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                        <svg viewbox="0 0 16000 16000" style="position: absolute; top: 0; left: 0; width: 100%;
                                            height: 100%;">
                                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                        </svg>
                                    </div>
                                    <div data-u="arrowright" class="jssora051" style="width: 65px; height: 65px; top: 0px;
                                        right: 25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                        <svg viewbox="0 0 16000 16000" style="position: absolute; top: 0; left: 0; width: 100%;
                                            height: 100%;">
                                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <script type="text/javascript">jssor_1_slider_init();</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="boxbanner-13">
                </div>
            </div>
        </div>
        <div class="clearfix pt-3 is-mhide">
        </div>
        <div class="mhome-menu" style="display: none;">
            <ul class="list-unstyled">
                <li class="v-menu-item"><a data-id="699" href="bao-ve-dau-11.html" title="Bảo Vệ Đầu"><span>
                    Bảo Vệ Đầu</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="bao-ve-mat-21.html" title="Bảo Vệ Mắt"><span>
                    Bảo Vệ Mắt</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="bao-ve-ho-hap-31.html" title="Bảo Vệ Hô Hấp"><span>
                    Bảo Vệ Hô Hấp</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="bao-ve-tai-41.html" title="Bảo Vệ Tai"><span>
                    Bảo Vệ Tai</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="dai-an-toan-51.html" title="Đai An Toàn"><span>
                    Đai An Toàn</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="gang-tay-bao-ho-lao-dong-61.html" title="Găng Tay Bảo Hộ Lao Động"><span>
                    Găng Tay Bảo Hộ Lao Động</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="quan-ao-bao-ho-71.html" title="Quần Áo Bảo Hộ"><span>
                    Quần Áo Bảo Hộ</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="giay-bao-ho-lao-dong-421.html" title="Giày Bảo Hộ Lao Động"><span>
                    Giày Bảo Hộ Lao Động</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="tat-bao-ho-391.html" title="Tất Bảo Hộ"><span>
                    Tất Bảo Hộ</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="ung-bao-ho-381.html" title="Ủng Bảo Hộ"><span>
                    Ủng Bảo Hộ</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="phong-chay-chua-chay-151.html" title="Phòng cháy, chữa cháy"><span>
                    Phòng cháy, chữa cháy</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
                <li class="v-menu-item"><a data-id="699" href="thiet-bi-may-moc-khac-321.html" title="Thiết bị máy móc khác"><span>
                    Thiết bị máy móc khác</span> <span class="menu-item-view menu-item-view-699" style="display: none;">
                    </span></a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
            </div>
        </div>

        @if(!empty($product_sale)&&$product_sale->count()>0)
        <div class="row">
            <div class="col-12">
                <div class="product-bestseller">
                    <div class="boxbanner-4">
                        <div class="banner-list">
                        </div>
                    </div>
                    <div class="product-list pList-olw-4">
                        @foreach($product_sale as $keys => $value)
                        @if($value->active==1)
                        <div class="card mb-4">
                            <a href="{{ route('details', $value->Link) }}" data-id="392" class="product-item">
                                <div class="card-img-top">
                                    <span class="product-type product-type-52" style="display: block; position: absolute;
                                        left: 9px; bottom: -5px; width: 145px; height: 22px; background-size: contain;
                                        z-index: 20; background: url(images/upload/no-img.png) no-repeat center center;">
                                    </span><span class="product-type product-type-27" style="display: block; position: absolute;
                                        left: 9px; bottom: -5px; width: 145px; height: 22px; background-size: contain;
                                        z-index: 998; background: url(images/upload/no-img.png) no-repeat center center;">
                                    </span>
                                    <p class="product-brand" style="background: url( images/upload/Logo SJ-Official.png ) no-repeat left center;">
                                    </p>
                                    <picture>
                                        <source srcset="{{ asset($value->Image) }}" type="image/webp">
                                        <source srcset="{{ asset($value->Image) }}" type="image/jpeg">
                                        <img loading="lazy" src="{{ asset($value->Image) }}" alt="Giày Bảo Hộ Lao Đông Bestrun S3">
                                        <span class="product-item-view product-item-view-392" style="display:none;"></span>
                                    </picture>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title product-name">
                                        {{  $value->Name }}
                                    </h5>
                                    <p class="card-text product-price">
                                        <span id="ContentPlaceHolder1_Datalist291_Labelgia19_0"><b><font size="5">{{  @str_replace(',' ,'.', number_format($value->Price))  }}</font></b></span>₫ <span class="product-price-regular"><span id="ContentPlaceHolder1_Datalist291_Labelgia191_0"></span></span>
                                    </p>
                                    <div style="color: #515151;">
                                    </div>
                                    <div style="padding:5px; text-align:center;">
                                        <img src="icon/muangay2.png" height="35">
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endif
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>

        @endif





        @foreach($group as $key => $groups)

        <?php 
         
            $hot = DB::table('hot')->select('product_id')->where('group_id', $groups->id)->orderBy('orders', 'asc')->get()->pluck('product_id');

            $data = App\Models\product::whereIn('id', $hot->toArray())->orderBy('orders_hot', 'desc')->get();
        ?>
        @if(count($hot->toArray())>0)
        <div class="row">
            <div class="col-12">
                <div class="wrapbox-pList">
                    <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                        <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                            <h3>
                                <a href="bao-ve-dau-11.html" style="text-transform: uppercase; font-size: 13pt;">
                                {{  @$groups->name }}</a>
                            </h3>
                        </li>
                        <!-- <li class="wrapbox-getProducts" data-w="3" data-cid="17">
                            <h3>
                                <a href="tim-thuong-hieu.aspx.html?tongtrongluong=36&loaitin=1">
                                COV</a>
                            </h3>
                        </li>
                        <li class="wrapbox-getProducts" data-w="3" data-cid="17">
                            <h3>
                                <a href="tim-thuong-hieu.aspx-1.html?tongtrongluong=6&loaitin=1">
                                Delta plus - Pháp</a>
                            </h3>
                        </li>
                        <li class="wrapbox-getProducts" data-w="3" data-cid="17">
                            <h3>
                                <a href="tim-thuong-hieu.aspx-2.html?tongtrongluong=4&loaitin=1">
                                Blue Eagle - Đài Loan</a>
                            </h3>
                        </li>
                        <li class="wrapbox-getProducts" data-w="3" data-cid="17">
                            <h3>
                                <a href="tim-thuong-hieu.aspx-3.html?tongtrongluong=11&loaitin=1">
                                Sseda - Hàn Quốc</a>
                            </h3>
                        </li>
                        <li class="wrapbox-getProducts" data-w="3" data-cid="17">
                            <h3>
                                <a href="tim-thuong-hieu.aspx-4.html?tongtrongluong=10&loaitin=1">
                                Kujie - Hàn Quốc</a>
                            </h3>
                        </li> -->
                    </ul>
                    <div class="wrapbox-loadProducts wrapbox-loadProducts-3">
                        <div class="wrapbox-loadProduct wrapbox-loadProduct-3-17">
                            <div class="product-list pList-olw">

                                @if($data->count()>0)
                                @foreach($data as $datas)
                                <div class="card mb-4">
                                    <a href="{{ route('details', $datas->Link) }}" data-id="1752" class="product-item">
                                        <div class="card-img-top">
                                            <span class="product-type product-type-51" style="display: block;
                                                position: absolute; left: 9px; bottom: -5px; width: 145px; height: 22px; background-size: contain;
                                                z-index: 20; background: url(images/upload/no-img.png) no-repeat center center;">
                                            </span><span class="product-type product-type-27" style="display: block; position: absolute;
                                                left: 9px; bottom: -5px; width: 145px; height: 22px; background-size: contain;
                                                z-index: 998; background: url(images/upload/no-img.png) no-repeat center center;">
                                            </span>
                                            <p class="product-brand" style="background: url( images/upload/images.jpg ) no-repeat left center;">
                                            </p>
                                            <picture>
                                                <source srcset="{{ asset($datas->Image) }}" type="image/webp">
                                                <source srcset="{{ asset($datas->Image) }}" type="image/jpeg">
                                                <img loading="lazy" src="{{ asset($datas->Image) }}" alt="{{ $datas->Name }}">
                                                <span class="product-item-view product-item-view-1752" style="display:none;"></span>
                                            </picture>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title product-name" style="height:39px;">
                                                <b>{{ $datas->Name }}</b>
                                            </h5>
                                            <p class="card-text product-price">
                                                <span id="ContentPlaceHolder1_Repeater661_Datalist29_0_Labelgia199_0"><b><font size="3" style="font-weight:bold;">{{ str_replace(',' ,'.', number_format($datas->Price)) }}</font></b></span>₫ <span class="product-price-regular"><span id="ContentPlaceHolder1_Repeater661_Datalist29_0_Labelgia1991_0"></span></span>
                                            </p>


                                            <div style="position:relative; z-index:9999999;">
                                                <div style="position:absolute; top:-29px; z-index:9999999; left:-2px;">
                                                    <img src="icon/lien-he.png" height="24">
                                                </div>
                                            </div>


                                            <div class="product-promotionshort-box">
                                                <p class="product-promotionshort">
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                               
                            </div>
                            <a class="viewmore viewmorecate" href="{{ route('details', @$groups->link)  }}">
                            <span>Xem tất cả</span></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
               
            </div>
        </div>

        @endif

        @endforeach

        <div class="clearfix pt-3"> </div>
        <div class="row" style="padding-top:30px;">
            <div class="col-md-12">
                <div class="boxbanner-homeheadintro">
                    <p>BẢO HỘ NGÀNH - LĨNH VỰC</p>
                </div>
                <div class="product-list pList-olw">
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="san-xuat-cong-nghiep-136.html">
                            <img src="images/upload/linhvuc6.jpg" alt="Sản xuất công nghiệp" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="san-xuat-cong-nghiep-136.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Sản xuất công nghiệp</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="bao-ve-hoa-chat-86.html">
                            <img src="images/upload/linhvuc2.jpg" alt="Bảo vệ hóa chất" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="bao-ve-hoa-chat-86.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Bảo vệ hóa chất</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="vat-tu-phong-sach-76.html">
                            <img src="images/upload/linhvuc1.jpg" alt="Vật tư phòng sạch" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="vat-tu-phong-sach-76.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Vật tư phòng sạch</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="nhiet-do-cao-96.html">
                            <img src="images/upload/linhvuc3.jpg" alt="Nhiệt độ cao" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="nhiet-do-cao-96.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Nhiệt độ cao</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="bao-ho-nganh-dien-116.html">
                            <img src="images/upload/linhvuc4.jpg" alt="Bảo hộ ngành điện" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="bao-ho-nganh-dien-116.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Bảo hộ ngành điện</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="khong-gian-han-che-126.html">
                            <img src="images/upload/linhvuc5.jpg" alt="Không gian hạn chế" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="khong-gian-han-che-126.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Không gian hạn chế</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="cuu-ho-tren-cao-146.html">
                            <img src="images/upload/linhvuc7.jpg" alt="Cứu hộ trên cao" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="cuu-ho-tren-cao-146.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Cứu hộ trên cao</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div style="padding:10px;">
                            <a href="bao-ho-nganh-y-te-156.html">
                            <img src="images/upload/linhvuc8.jpg" alt="Bảo hộ ngành y tế" style="border: 1px solid #e7e7e7;" width="100%"></a>
                            <div style="padding: 8px 0; text-align: center; height: 55px;">
                                <a href="bao-ho-nganh-y-te-156.html" style="text-transform: uppercase; font-weight: bold; font-size: 10pt;">
                                Bảo hộ ngành y tế</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix pt-3"> </div>
        <div class="clearfix pt-3">
        </div>
        <div class="row" style="padding-top:30px;">
            <div class="col-md-9">
                <h2 class="home-news-head" style=" text-transform:uppercase;">
                    Tin tức nổi bật
                </h2>
                <div class="home-news1">
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <a href="tin-tuc/cac-moi-nguy-hiem-co-the-xay-ra-trong-moi-truong-dien-41214.html" title="CÁC MỐI NGUY HIỂM CÓ THỂ XẢY RA TRONG MÔI TRƯỜNG ĐIỆN" data-id="15471">
                                <div class="mobile-hide" style="height:350px; overflow:hidden;">
                                    <img src="images/New/HQ%205.jpg" alt="CÁC MỐI NGUY HIỂM CÓ THỂ XẢY RA TRONG MÔI TRƯỜNG ĐIỆN" width="100%">
                                </div>
                                <div class="mobile-block" style="height:55px; overflow:hidden;">
                                    <img src="images/New/HQ%205.jpg" alt="CÁC MỐI NGUY HIỂM CÓ THỂ XẢY RA TRONG MÔI TRƯỜNG ĐIỆN" width="100%">
                                </div>
                            </a>
                        </div>
                        <div class="name">
                            <a href="tin-tuc/cac-moi-nguy-hiem-co-the-xay-ra-trong-moi-truong-dien-41214.html" title="CÁC MỐI NGUY HIỂM CÓ THỂ XẢY RA TRONG MÔI TRƯỜNG ĐIỆN">
                            CÁC MỐI NGUY HIỂM CÓ THỂ XẢY RA TRONG MÔI TRƯỜNG ĐIỆN</a>
                        </div>
                    </div>
                    <div class="item news-item news-item-2">
                        <div class="img">
                            <a href="tin-tuc/khat-quat-chung-ve-mu-bao-ho-lao-dong-41204.html" title="KHÁT QUÁT CHUNG VỀ MŨ BẢO HỘ LAO ĐỘNG" data-id="15412">
                                <div class="mobile-hide" style="height:80px; overflow:hidden;">
                                    <img src="images/New/3tk%20%284%29.png" alt="KHÁT QUÁT CHUNG VỀ MŨ BẢO HỘ LAO ĐỘNG" width="100%">
                                </div>
                                <div class="mobile-block" style="height:55px; overflow:hidden;">
                                    <img src="images/New/3tk%20%284%29.png" alt="KHÁT QUÁT CHUNG VỀ MŨ BẢO HỘ LAO ĐỘNG" width="100%">
                                </div>
                            </a>
                        </div>
                        <div class="name">
                            <a href="tin-tuc/khat-quat-chung-ve-mu-bao-ho-lao-dong-41204.html" title="Có nên mua laptop gaming để làm đồ họa không? Top 6 laptop gaming làm đồ họa đáng mua nhất 2022">
                            KHÁT QUÁT CHUNG VỀ MŨ BẢO HỘ LAO ĐỘNG</a>
                        </div>
                    </div>
                    <div class="item news-item news-item-2">
                        <div class="img">
                            <a href="tin-tuc/top-5-doi-giay-bao-ho-cach-dien-tot-nhat-hien-nay--41194.html" title="TOP 5 ĐÔI GIÀY BẢO HỘ CÁCH ĐIỆN TỐT NHẤT HIỆN NAY " data-id="15412">
                                <div class="mobile-hide" style="height:80px; overflow:hidden;">
                                    <img src="images/New/3tk%20%282%29.png" alt="TOP 5 ĐÔI GIÀY BẢO HỘ CÁCH ĐIỆN TỐT NHẤT HIỆN NAY " width="100%">
                                </div>
                                <div class="mobile-block" style="height:55px; overflow:hidden;">
                                    <img src="images/New/3tk%20%282%29.png" alt="TOP 5 ĐÔI GIÀY BẢO HỘ CÁCH ĐIỆN TỐT NHẤT HIỆN NAY " width="100%">
                                </div>
                            </a>
                        </div>
                        <div class="name">
                            <a href="tin-tuc/top-5-doi-giay-bao-ho-cach-dien-tot-nhat-hien-nay--41194.html" title="Có nên mua laptop gaming để làm đồ họa không? Top 6 laptop gaming làm đồ họa đáng mua nhất 2022">
                            TOP 5 ĐÔI GIÀY BẢO HỘ CÁCH ĐIỆN TỐT NHẤT HIỆN NAY </a>
                        </div>
                    </div>
                    <div class="item news-item news-item-2">
                        <div class="img">
                            <a href="tin-tuc/cau-tao-cua-thiet-bi-tro-tho-scba-t8000-model-t805-mlk-t-type-2-honeywell-41184.html" title="CẤU TẠO CỦA THIẾT BỊ TRỢ THỞ SCBA T8000 MODEL T805-MLK- T TYPE 2 HONEYWELL" data-id="15412">
                                <div class="mobile-hide" style="height:80px; overflow:hidden;">
                                    <img src="images/New/SCBA.jpg" alt="CẤU TẠO CỦA THIẾT BỊ TRỢ THỞ SCBA T8000 MODEL T805-MLK- T TYPE 2 HONEYWELL" width="100%">
                                </div>
                                <div class="mobile-block" style="height:55px; overflow:hidden;">
                                    <img src="images/New/SCBA.jpg" alt="CẤU TẠO CỦA THIẾT BỊ TRỢ THỞ SCBA T8000 MODEL T805-MLK- T TYPE 2 HONEYWELL" width="100%">
                                </div>
                            </a>
                        </div>
                        <div class="name">
                            <a href="tin-tuc/cau-tao-cua-thiet-bi-tro-tho-scba-t8000-model-t805-mlk-t-type-2-honeywell-41184.html" title="Có nên mua laptop gaming để làm đồ họa không? Top 6 laptop gaming làm đồ họa đáng mua nhất 2022">
                            CẤU TẠO CỦA THIẾT BỊ TRỢ THỞ SCBA T8000 MODEL T805-MLK- T TYPE 2 HONEYWELL</a>
                        </div>
                    </div>
                    <div class="item news-item news-item-2">
                        <div class="img">
                            <a href="tin-tuc/cac-bien-phap-an-toan-tren-cong-truong-xay-dung-41174.html" title="CÁC BIỆN PHÁP AN TOÀN TRÊN CÔNG TRƯỜNG XÂY DỰNG" data-id="15412">
                                <div class="mobile-hide" style="height:80px; overflow:hidden;">
                                    <img src="images/New/2604.jpg" alt="CÁC BIỆN PHÁP AN TOÀN TRÊN CÔNG TRƯỜNG XÂY DỰNG" width="100%">
                                </div>
                                <div class="mobile-block" style="height:55px; overflow:hidden;">
                                    <img src="images/New/2604.jpg" alt="CÁC BIỆN PHÁP AN TOÀN TRÊN CÔNG TRƯỜNG XÂY DỰNG" width="100%">
                                </div>
                            </a>
                        </div>
                        <div class="name">
                            <a href="tin-tuc/cac-bien-phap-an-toan-tren-cong-truong-xay-dung-41174.html" title="Có nên mua laptop gaming để làm đồ họa không? Top 6 laptop gaming làm đồ họa đáng mua nhất 2022">
                            CÁC BIỆN PHÁP AN TOÀN TRÊN CÔNG TRƯỜNG XÂY DỰNG</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="home-news-head home-news-head2">
                    VIDEO <a href="video.html">Xem thêm</a>
                </h2>
                <div class="home-news2 mobile-hide">
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/r12rak3ab9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/KFxL-rB4qw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="home-news2 mobile-block">
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/r12rak3ab9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/KFxL-rB4qw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/gwymQbqR-pg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="item news-item news-item-1">
                        <div class="img">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/l4qWEZIhGkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection