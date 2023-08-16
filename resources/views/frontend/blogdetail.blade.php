

    @extends('frontend.layouts.apps')

    @section('content') 

    <?php 
        $content = preg_replace("/<a(.*?)>/", "<a$1 target=\"_blank\">",  $data->content);
    ?>

    <div class="body-content bg-page clearfix">
        <div class="container">
            <div class="wrap-product">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                    <a href="../index.htm" itemprop="item">
                                        <h3 itemprop="name">Trang chủ</h3>
                                        <meta itemprop="position" content="1">
                                    </a>
                                <li class="breadcrumb-item active">
                                    <h1>Tin tức</h1>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="nav-newscate-child">
                            <h2 class="title">
                                Dịch vụ nổi bật
                            </h2>
                            <ul class="navbar-nav">
                                <li class="nav-item "><a href="../dich-vu/dich-vu-scba-674.html">Dịch Vụ SCBA</a></li>
                                <li class="nav-item "><a href="../dich-vu/quan-ao-chong-ho-quang-dien-694.html">Quần Áo Chống Hồ Quang Điện</a></li>
                            </ul>
                        </div>
                        <div class="nav-newscate-child">
                            <h2 class="title">
                                BẢO HỘ NGÀNH - LĨNH VỰC
                            </h2>
                            <?php 

                                $field = App\Models\groupProduct::where('parent_id', 13)->select('link', 'name')->get()
                            ?>

                            @if(!empty($field) && $field->count()>0)
                            <ul class="navbar-nav">
                                @foreach($field as $value)
                                <li class="nav-item "><a href="{{ route('details', $value->link) }}">{{ $value->name }}</a></li>
                                @endforeach
                               
                               
                            </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        <div class="news-detail row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="news-item-content-box">
                                    <h1 class="news-title text-color">
                                        {{ $data->title }}
                                    </h1>
                                    <div class="news-item-description">
                                        {!!   $content  !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                            <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                                <h3>
                                    <a href="" style="text-transform: uppercase; font-size: 13pt;">
                                    TIn KHÁC</a>
                                </h3>
                            </li>
                        </ul>
                        <div style="padding-top :15px;">
                            @if(isset($related_news))
                            @foreach($related_news as $news)
                            @if($news->id != $data->id)
                            <div style="padding: 5px 0 0 5px; font-size: 11pt;">
                                <img src="../icon/muitenn.png" alt="Icon">
                                <a href="{{ route('details', $news->link) }}">
                                    {{ $news->title }}
                                </a>
                            </div>

                            @endif
                            @endforeach
                             @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection




   
