@extends('frontend.layouts.apps')

@section('content')

 <?php  
        $data_cart = Gloudemans\Shoppingcart\Facades\Cart::content();

       

        $arrPrice = [];
        $key = 0;
        
    ?>

<style>
    .remove-cart{
        cursor: pointer;
    }
</style>
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
                                <h1>Giỏ hàng</h1>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="padding:5px;">
                    <br>
                    <div style="border: 1px solid #dddddd; border-radius: 5px;">


                        <table cellspacing="0" cellpadding="3" rules="all" id="ContentPlaceHolder1_grdGioHang" style="border-color:White;border-width:0px;width:100%;border-collapse:collapse;">
                            <tbody>
                                <tr align="center" valign="middle" style="background-color:White;border-width:0px;font-family:Tahoma;font-size:11px;font-weight:bold;height:25px;">
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">SL</th>
                                    <th scope="col">Tạm tính</th>
                                    <th scope="col" abbr="ImgButton">&nbsp;</th>
                                    <th scope="col" abbr="ImgButton">&nbsp;</th>
                                </tr>

                                @if(!empty($data_cart) && count($data_cart)>0 )

                                @foreach($data_cart as $data)

                                <?php 

                                    $price = (int)$data->price*(int)$data->qty;
                                    $key++;
                                    array_push($arrPrice, $price);

                                    $infoProducts = App\Models\product::find($data->id);

                                ?>
                                <tr style="border-width:0px;font-family:Tahoma;font-size:11px;height:25px;">
                                    <td align="left">
                                        <img src="{{ asset($infoProducts->Image) }}" width="50">
                                    </td>
                                    <td align="left">
                                        <b>{{ $data->name }}</b>
                                        <br>
                                        <span id="ContentPlaceHolder1_grdGioHang_Labelgia_0" style="color:Red;font-size:9pt;">{{ number_format($data->price , 0, ',', '.')}}</span>
                                        <span style="color: Red; font-size: 8pt;">₫</span><br>

                                        @if(!empty($data->options['size']))

                                        <span>kích thước chọn: {{ $data->options['size'] }}</span>

                                        @endif

                                        @if(!empty($data->options['color']))

                                        <span>màu sắc chọn: {{ $data->options['color'] }}</span>

                                        @endif
                                        <span id="ContentPlaceHolder1_grdGioHang_lbltenmau_0" style="font-size:10pt;"></span>&nbsp;<span id="ContentPlaceHolder1_grdGioHang_lbltensize_0" style="font-size:10pt;"></span>
                                    </td>
                                    <td align="left" style="width:40px;white-space:nowrap;">
                                        <input name="sl" type="number" value="{{ $data->qty }}" id="ContentPlaceHolder1_grdGioHang_txtSoLuong_0" min="1" max="50" step="1" style="color:#313131;border-color:Silver;border-width:1px;border-style:Solid;font-size:11pt;height:25px;width:40px;">
                                    </td>
                                    <td align="left" style="width:90px;">
                                        <span id="ContentPlaceHolder1_grdGioHang_Labeltt_0" style="color:Red;font-size:9pt;font-weight:bold;">{{ number_format($data->price , 0, ',', '.')}}</span>  
                                        <span style="color: Red; font-size: 8pt; font-weight: bold;">₫</span>
                                        
                                    </td>
                                    <td style="height:16px;">
                                        <button type="submit">
                                            <img src="{{ asset('icon/capnhat2.png')  }}">
                                        </button>
                                       

                                    <td style="height:16px;">
                                        <img src="{{ asset('icon/xoa.png')}}" onclick="removeProductCart('{{ $data->rowId }}')" class="remove-cart">
                                        
                                    </td>

                                </tr>


                                @endforeach

                                @endif

                            </tbody>
                        </table>

                        <?php 

                            $totalPrice = array_sum($arrPrice);
                        ?>
                        <div style="padding: 10px;">
                            <div>
                            </div>
                        </div>
                        <br>
                        <div style="background-color: #f9f9f9; border-top: 1px solid #dddddd; border-radius: 0 0 5px 5px;">
                            <div class="row">
                                <div class="col-md-6" style="padding:5px;">
                                </div>
                                <div class="col-md-6" style="padding:5px;">
                                    <div style="padding: 5px 10px; text-align: right;">
                                        Tạm tính: <span id="ContentPlaceHolder1_lblTongTien"><font face="Arial" color="Red" size="3"></font></span><span style="color: Red; font-weight: bold;">{{ number_format($totalPrice , 0, ',', '.')}} ₫</span>
                                    </div>
                                    <div style="padding: 5px 10px; text-align: right;">
                                        Phí vận chuyển: <span id="ContentPlaceHolder1_lblphivanchuyen"><font face="Arial" color="Red" size="2"></font></span><span style="color: Red; font-weight: bold;">0₫</span>
                                    </div>
                                    <div style="padding: 8px 10px; text-align: right; border-top:1px solid #e7e7e7; font-size:13pt;">
                                        Tổng cộng: <span id="ContentPlaceHolder1_lblTongTien1"><b><font face="Arial" color="Red"></font></b></span><span style="color: Red; font-weight: bold;">{{ number_format($totalPrice , 0, ',', '.')}}₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 20px;">
                            <p>
                                <img alt="" src="uploads/images/check1.png" style="width: 20px; height: 16px;">Miễn ph&iacute; vận chuyển với đơn h&agrave;ng tr&ecirc;n 300k
                            </p>
                            <p>
                                <img alt="" src="uploads/images/check1.png" style="width: 20px; height: 16px;"><strong>Kh&aacute;ch h&agrave;ng chuyển khoản mua h&agrave;ng theo th&ocirc;ng tin:</strong>
                            </p>
                            <ul>
                                <li>
                                    Số t&agrave;i khoản:&nbsp;10321660084011
                                </li>
                                <li>
                                    Chủ t&agrave;i khoản: CONG TY CO PHAN SAN XUAT VA THUONG MAI 3TK
                                </li>
                                <li>
                                    Ng&acirc;n h&agrave;ng:&nbsp; Ng&acirc;n H&agrave;ng TMCP Kỹ Thương Việt Nam (Techcombank) - Chi
                                    <div>
                                        Nh&aacute;nh Thăng Long
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding:5px;">
                    <form method="post" action="{{ route('order') }}">
                        @csrf
                        <div style="border: 1px solid #dddddd; border-radius: 5px; font-size: 10pt;">
                            <div style="background-color: #f9f9f9; border-bottom: 1px solid #dddddd; border-radius: 5px 5px 0 0;">
                                <div style="font-size: 12pt; font-weight: bold; padding: 8px; text-transform: uppercase;">
                                    <img src="images/icon-user.png" height="20">
                                    Thông tin mua hàng
                                </div>
                            </div>
                            <div style="padding: 5px 20px 20px 20px; background-color: #fbf9f9;">
                                <p style="padding: 0 0 10px 0; color: #00aae2;">
                                    - Quý khách vui lòng điền đầy đủ thông tin để giao hàng.<br>
                                    - Ký hiệu (*) là ô bắt buộc nhập
                                </p>
                                <span id="ContentPlaceHolder1_lbldonggoi"></span>
                                <div class="row">
                                    <div class="col-md-6" style="padding:5px;">
                                        <div class="row">
                                            <div class="col-md-12" style="padding:5px;">
                                                <input name="name" type="text" id="ContentPlaceHolder1_txthoten" class="form-control" placeholder=" Họ tên(*)" required>
                                            </div>
                                            <div class="col-md-12" style="padding:5px;">
                                                <input name="phone_number" type="text" id="ContentPlaceHolder1_txttel" class="form-control" placeholder=" Điện thoại(*)" required>
                                            </div>
                                            <div class="col-md-12" style="padding:5px;">
                                                <input name="mail" type="text" id="ContentPlaceHolder1_txtemail" class="form-control" placeholder=" Nhập email để nhận thông tin đơn(*)" required>
                                            </div>
                                            <div class="col-md-12" style="padding:5px;">
                                                <input name="address" type="text" id="ContentPlaceHolder1_txtdiachi" class="form-control" placeholder=" Địa chỉ" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding:10px 5px;">
                                       
                                        <div style="padding:5px 5px 0 5px;">
                                            <b>HÌNH THỨC THANH TOÁN</b>
                                        </div>
                                        <div style="padding:5px;">
                                            
                                                <option value=" Thanh toán khi giao hàng (COD)"> Thanh to&#225;n khi giao h&#224;ng (COD)</option>
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div style="background-color: #f9f9f9; border-bottom: 1px solid #dddddd; border-top: 1px solid #dddddd;">
                                <div style="font-size: 12pt; font-weight: bold; padding: 8px; text-transform: uppercase;">
                                    <img src="/images/icon-tt.png" height="20" />
                                    Hình thức thanh toán
                                </div>
                                </div>
                                <div style="padding: 15px; font-size: 9pt; line-height: 28px;">
                                <div class="pay-info-body">
                                    <div class="pay-info-text">
                                        <div class="payment">
                                            <input type="radio" data-link="paymentType" id="payment1" name="payment" value="Giao hàng và thu tiền tại nhà"
                                                checked="checked">
                                            <label for="payment1">
                                                <span></span>Giao hàng và thu tiền tại nhà</label>
                                        </div>
                                        <div class="payment">
                                            <input type="radio" data-link="paymentType" id="payment3" name="payment" value="Chuyển khoản qua máy ATM & Ngân hàng">
                                            <label for="payment3">
                                                <span></span>Chuyển khoản qua máy ATM & Ngân hàng</label>
                                        </div>
                                    </div>
                                </div>
                                </div> -->
                        </div>
                        <div style="text-align: right; padding-top: 10px;">
                            <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1" id="ContentPlaceHolder1_ImageButton1" src="images/gui-don-hang.png" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$ImageButton1&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))">
                        </div>
                        <div style="text-align: right; padding-top:13px;">
                            <a href="san-pham.html" style="color: #0598c8;">
                            <img src="images/pre1.png">
                            Chọn thêm sản phẩm khác</a>
                            <br>
                            &nbsp;<br>
                            &nbsp;
                        </div>
                    </form>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function removeProductCart(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('removeCart') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
              
                window.location.reload();

              
                
            }
        });


    }
</script>

@endsection