

    @extends('frontend.layouts.apps')

    @section('content') 

    
    <div class="body-content bg-page clearfix">
                <div class="container">
                    <div class="wrap-product">
                        <div class="row">
                            <div class="col-12">
                                <nav>
                                    <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                            <a href="index.htm" itemprop="item">
                                                <h3 itemprop="name">Trang chủ</h3>
                                                <meta itemprop="position" content="1">
                                            </a>
                                        <li class="breadcrumb-item active">
                                            <h1>{{ $name_cates_cate??'Tin Tức' }}</h1>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                                    <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                                        <h3>
                                            <a href="" style="text-transform: uppercase; font-size: 13pt;">
                                            {{ $name_cates_cate??'Tin Tức' }}</a>
                                        </h3>
                                    </li>
                                </ul>
                                <div style="padding:5px 0;">
                                </div>
                            </div>
                        </div>

                        <div class="clearfix pt-3">
                        </div>

                        @if(!empty($show_more))

                        <div class="row">
                            <div class="col-12 col-md-12">

                                {!!  $show_more   !!}
                            </div>
                        </div>        

                        <div class="clearfix pt-3">
                        </div>

                        @endif

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div id="getproducts" class="col-12 col-md-12">
                                        <div class="row product-list product-list-bycate">

                                            @isset($data)
                                            @foreach($data as $value)
                                            <div class="newscate-grid-0 col-6 col-md-4 col-lg-3">
                                                <div class="news-thumbnail-grid">
                                                    <a href="{{ route('details', $value->link) }}" data-id="15625">
                                                        <div class="thumbnail-grid">
                                                            <picture>
                                                                <source srcset="{{ asset($value->image) }}" type="image/webp">
                                                                <source srcset="{{ asset($value->image) }}" type="image/jpeg">
                                                                <img loading="lazy" src="{{ asset($value->image) }}" alt="{{ $value->title }}">
                                                                <span class="product-item-view product-item-view-1752" style="display:none;"></span>
                                                            </picture>
                                                        </div>
                                                        <div style="height:60px; padding:0 5px; color:#313131; font-weight:bold;">
                                                            {{ $value->title }}
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            @endforeach
                                            @endif
                                            
                                        </div>
                                        {{ $data->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix pt-3">
                        </div>
                        <div class="row">
                            <div class="category-viewed col-12 col-md-12">
                            </div>
                        </div>
                        <div class="clearfix pt-3">
                        </div>
                        <div class="row">
                            <div class="product-viewed col-12 col-md-12">
                            </div>
                        </div>
                        <div class="clearfix pt-3">
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
  
    @endsection
   
    


<!-- Load time: 0.126 seconds  / 4 mb-->
<!-- Powered by HuraStore 7.4.4, Released: 12-Aug-2018 / Website: www.hurasoft.vn -->