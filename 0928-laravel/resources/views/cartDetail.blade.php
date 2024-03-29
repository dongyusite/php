
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="utf-8">
    <title>WangID通城——购物车</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ziy.css')}}">
    <!--  <script src="js/jquery-1.11.3.min.js" ></script>
    <script src="js/index.js" ></script>  -->
    <script type="text/javascript" src="{{asset('js/jquery1.42.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.SuperSlide.2.1.1.source.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/select.js')}}"></script>

</head>
<body>
<!--头部-->

<!--头部-->
<div id="header">
    <div class="header-box">
        <h3 class="huany">WangID本地购物商城欢迎您的到来！</h3>
        <ul class="header-left">
            <li class="bj">
                <a class="dib" href="#">贵阳市</a>
                <i class="ci-leftll">
                    <s class="jt">◇</s>
                </i>
                <div class="bj-1">
                    <h3>热门城市：</h3>
                    <a href="">北京</a><a href="">上海</a><a href="">天津</a><a href="">重庆</a><a href="">河北</a><a href="">山西</a><a href="">河南</a><a href="">辽宁</a><a href="">吉林</a><a href="">黑龙江</a><a href="">浙江</a><a href="">江苏</a><a href="">山东</a><a href="">安徽</a><a href="">内蒙古</a><a href="">湖北</a><a href="">湖南</a><a href="">广东</a><a href="">广西</a><a href="">江西</a><a href="">四川</a><a href="">海南</a><a href="">贵州</a><a href="">云南</a><a href="">西藏</a><a href="">陕西</a><a href="">甘肃</a><a href="">青海</a><a href="">宁夏</a><a href="">新疆</a><a href="">台湾</a><a href="">香港</a><a href="">澳门</a><a href="">海外</a><a href="qieh_cs.html">全部+</a>
                </div>
            </li>
        </ul>
        <ul class="header-right">
            <li class="denglu dengl_hou">
                <div>
                    <a class="red" href="退出">Hi~{{Session::get('admin_name')}}</a>
                    <i class="icon_plus_nickname"></i>
                    <i class="ci-leftll">
                        <s class="jt">◇</s>
                    </i>
                </div>
                <div class="dengl_hou_xial_k">
                    <div class="zuid_xiao_toux">
                        <a href="#"><img src="{{asset('images/toux.png')}}"></a>
                    </div>
                    <div class="huiy_dengj">
                        <a class="tuic_" href="#">退出</a>
                    </div>
                    <div class="toub_zil_daoh">
                        <a href="#">待处理订单</a>
                        <a href="#">我的收藏</a>
                        <a href="#">个人资料</a>
                    </div>
                </div>
            </li>
            <li class="shu"></li>
            <li class="denglu"><a class="ing_ps" href="#">我的收藏</a></li>
            <li class="shu"></li>
            <li class="denglu"><a class="ing_ps ps1" href="#">申请入驻</a></li>
            <li class="shu"></li>
            <li class="denglu"><a class="ing_ps ps2" href="#">客户服务</a></li>
            <li class="shu"></li>
            <li class="shouji bj">
                <a class="ing_ps ps3" href="#">手机通城</a>
                <i class="ci-right ">
                    <s class="jt">◇</s>
                </i>
                <div class="shouji1">
                    <img src="{{asset('images/mb_wangid.png')}}" class="shouji4">
                    <div class="shouji2">
                        <p>通城客户端</p>
                        <p class="red">首次下单满79元，送79元</p>
                    </div>
                    <div class="yi">
                        <img src="{{asset('images/mb_wangid.png')}}" class="shouji4">
                        <div class="er">
                            <p>通城微信公众号</p>
                            <p class="red">关注通城公众号的积分，换大礼</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!---->
<div class="yiny yiny_gouwc">
    <div class="beij_center">
        <div class="dengl_logo">
            <img src="{{asset('images/logo_1.png')}}">
            <h1>购物车</h1>
        </div>
    </div>
</div>
<div class="container">

    <div class="cart-login-tip fl" id="idnotlogin" act-not-login-info="" style="display: none;">
        您还没有登录！登录后购物车的商品将保存到您账号中。
        <a class="cart-login-btn" href="dengl.html">
            立即登录
        </a>
    </div>
</div>
<form action="{{url('Page/submit')}}" method="post">
    {{csrf_field()}}
<div class="beij_center">
    <div class="cart-main-header clearfix">
        <div class="cart-col-1">
            <input type="checkbox"  id="checkAll" class="jdcheckbox" >
        </div>
        <div class="cart-col-2">全选</div><!-- $page.site 主站 团购 抢购   style -->
        <div class="cart-col-3">商品信息</div>
        <div class="cart-col-4">
            <div class="cart-good-real-price">单价</div>
        </div>
        <div class="cart-col-5">数量</div>
        <div class="cart-col-6">
            <div class="cart-good-amount">小计</div>
        </div>
        <div class="cart-col-7">操作</div>
    </div>
</div>

<div style="display:none">{{$totalPrice = 0}}</div>
@forelse($cartList as $cart)
<div class="container" >

        <div class="cart-shop-goods"  >

            <div class="cart-shop-good"  id="del_{{$cart->id}}">
                <div class="cart-col-1">
                    <input type="checkbox" class="chk" aid="{{$cart->id}}" name="cid[]"   value="{{$cart->id}}" id="chk_{{$cart->id}}"  >
                </div>
                <div class="cart-col-2" style="height: 82px;" >
                    <a href="" target="_blank" class="g-img"><img src="{{asset("/upload/$cart->goods_pic")}}" alt=""   style="margin: 0 auto;"></a>
                </div>
                <div class="fl houj_c">
                    <div class="cart-dfsg" id="del"><div class="cart-good-name"><a href="#" target="_blank">{{$cart->goods_name}}</a></div></div>
                    <div class="cart-good-pro"></div>
                    <div class="cart-col-4"><div class="cart-good-real-price"  id="price_{{$cart->id}}">{{$cart->goods_price}}</div><div class="red"></div></div>
                    <div class="cart-col-5">
                        <div class="gui-count cart-count" >
                            <a href="javascript:mul_num({{$cart->id}})" gui-count-sub="" class="gui-count-btn gui-count-sub gui-count-disabled" >-</a>
                            <a href="javascript:add_num({{$cart->id}});" gui-count-add="" class="gui-count-btn gui-count-add">+</a>
                            <div class="gui-count-input"><input id="order_num_{{$cart->id}}" dytest="" class="" type="text" value="{{$cart->num}}"></div>
                        </div>
                    </div>

                    <div class="cart-col-6 ">
                        <div class="subTotal" id="subTotal_{{$cart->id}}">{{$cart->num * $cart->goods_price}}</div><!-- 重量展示(只展示全球百货的重量) --></div>
                </div>
                <div style="display: none">{{$totalPrice += $cart->num * $cart->goods_price}}</div>
                <div class="cart-col-7">
                    <div class="cart-good-fun delfixed">
                        <a href="javascript:del_cart({{$cart->id}},{{$cart->uid}})">删除</a>
                    </div>
                    <div class="cart-good-fun">
                        <a href="#">移入收藏夹</a>
                    </div>
                </div>
            </div>
        </div>
</div>

@empty
    您的购物车空空如也,还不滚去选购???
@endforelse

<div class="jies_beij">
    <div class="beij_center over_dis">

        <div class="qianm_shanc_yvf">

            <a href="javascript:void(0)" onclick="delSelect()">删除</a>
        </div>
                <div class="cart-col-1 cart_jies">
                    <div> <a href="{{url('Page/pageClassic')}}">继续购物</a>  </div>
                </div>
        <div class="jies_ann_bei">
            <p>一共 <span id="totalNum">{{$cartCount}}</span> 种商品 总计（不含运费）：<span id="total">￥{{$totalPrice}}</span></p>
{{--            <a href="tij_dingd.html" class="order_btn">去结算</a>--}}
            @if(!$cartCount==0)
            <input type="submit"   id="btn_id" value="去结算" class="order_btn">
           @endif

        </div>
    </div>
</div>
</form>

<div class="beij_center">
    <div class="investment_f">
        <div class="investment_title">
            <div class="ds_dg on_d">为您推荐</div>
            <div class="ds_dg">最近预览</div>
        </div>
        <div class="investment_con">
            <!---->
            <div class="picScroll_left_s"  style="display: block;">
                <div class="hd">
                    <a class="next next_you"></a>
                    <ul></ul>
                    <a class="prev prev_zuo"></a>
                </div>
                <div class="bd">
                    <ul class="picList">
                        <li>
                            <div class="pic"><a href="#" target="_blank"><img src="{{asset('images/lieb_tupi3.jpg')}}" /></a></div>
                            <div class="title">
                                <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                <div class="jiage_gouw"><span>¥2499.00</span></div>
                                <a href="#" class="cart_scroll_btn">加入购物车</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!---->
            <div class="picScroll_left_s" style="display: none;">
                <div class="picScroll_left_s_dsl">
                    <div class="dfgc">
                        <ul class="picList">


                            <li>
                                <div class="pic"><a href="#" target="_blank"><img src="{{asset('images/shangq_3.jpg')}}"></a></div>
                                <div class="title">
                                    <a href="#" target="_blank">喜芬妮春秋桑蚕丝长袖性感蕾丝花边女式睡衣家居服二</a>
                                    <div class="jiage_gouw"><span>¥2499.00</span></div>
                                    <a href="#" class="cart_scroll_btn">加入购物车</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //默认全选
    $('#checkAll').prop('checked','checked')
    $('.chk').each(function () {
        $(this).prop('checked','checked')
    });
    //点击全选
    $('#checkAll').click(function () {
        if($(this).is(":checked")){
            var n= 0;
            var total=0;
            $('.chk').each(function () {
                $(this).prop('checked','checked')
                if($(this).is(":checked")){
                    n++;
                    var id =$(this).attr('aid');
                    total+=parseFloat($('#subTotal_'+id).text());
                }
                $('#totalNum').text(n);
                $('#total').text(total);

            })
        }else{
            //点击全不选
            $('.chk').each(function () {
                $(this).removeAttr('checked');
                $('#totalNum').text(0);
                $('#total').text(0);

            })
        }
    });
    //    点击单选
    $('.chk').click(function () {
        $('#checkAll').removeAttr('checked');
        var n=0;
        var flag=true;
        var total=0;
        $('.chk').each(function () {
            if($(this).is(":checked")){
                n++;
                var id=$(this).attr('aid');
                total +=parseFloat($('#subTotal_'+id).text());
            }else{

                flag=false;
            }
        })
        $('#total').text(total);
        if(flag){
            $('#checkAll').prop('checked','checked');
        }
        $('#totalNum').text(n);
    })

</script>
<script>
    function add_num(id) {
        //1 添加数量
        var num_obj=$('#order_num_'+id);
        var new_num=parseInt(num_obj.val())+1;
        num_obj.val(new_num);
//    2 添加小计

        var price_obj = $('#price_'+id);
        var new_subTotal = parseFloat(price_obj.text()) * new_num;
        $('#subTotal_'+id).text(new_subTotal);
//    3 添加总计
//         var total=0;
//         $('.subTotal').each(function () {
//             total +=parseFloat($(this).text());
//         });
//         $('#total').text(total);



        $('#chk_'+id).prop('checked','checked');
        var flag=true;
        var price=0;
        var n=0;
        $('.chk').each(function () {
            if($(this).is(":checked")){
                n++;
                price = parseFloat($('#subTotal_'+$(this).attr('aid')).text())+$('#snbTotal_'+id).text();
            }else{
                flag=false;
            }
        });
        $('#totalNum').text(n);
        $('#total').text(price);
        if(flag){
            $('#checkAll').prop('checked','checked');
            var total = 0;
            $('.subTotal').each(function () {
                total += parseFloat($(this).text());
            });
            $('#total').text(total);
        }

//.ajax 添加数据库
        $.get("{{url('Page/cartChange')}}",{id:id,num:new_num})
    }



    function mul_num(id) {
        //1 减少数量
        var num_obj=$('#order_num_'+id);
        var new_num=parseInt(num_obj.val())-1;
        if( new_num >0){
            num_obj.val(new_num);


//    2 减少小计

            var price_obj = $('#price_' + id);
            var new_subTotal = parseFloat(price_obj.text()) * new_num;
            $('#subTotal_' + id).text(new_subTotal);
//    3 减少总计
//             var total = 0;
//             $('.subTotal').each(function () {
//                 total += parseFloat($(this).text());
//             });
//             $('#total').text(total);
//
            $('#chk_'+id).prop('checked','checked');
            var flag=true;
            var price=0;
            var n=0;
            $('.chk').each(function () {
                if($(this).is(":checked")){
                    n++;
                    price = parseFloat($('#subTotal_'+$(this).attr('aid')).text())+$('#snbTotal_'+id).text();
                }else{
                    flag=false;
                }
            });
            $('#totalNum').text(n);
            $('#total').text(price);
            if(flag){
                $('#checkAll').prop('checked','checked');
                var total = 0;
                $('.subTotal').each(function () {
                    total += parseFloat($(this).text());
                });
                $('#total').text(total);
            }
//4.ajax 减少修改数据库
            $.get("{{url('Page/cartChange')}}",{id:id,num:new_num})
        }



    }

    function del_cart(id ,uid) {
        if(confirm('谁他妈的买小米?')){
            $('#del_'+id).remove();
            $.get("{{url('Page/cartDel')}}",{id:id,uid:uid},function (data) {
                if(data.status===1){
                    alert('我他妈的卖你的小米!!');
                    $('#totalNum').text(data.count);
                    var total=0;
                    $('.subTotal').each(function () {
                        total +=parseFloat($(this).text());
                    });
                    $('#checkAll').prop('checked','checked');
                    $('#total').text(total);

                   location.href="{{url('Page/cartDetail')}}";

                }
            },'json')
        }
    }
</script>
<script>
    function delSelect() {
        var ids=[];
        var flag=false;
        $('.chk').each(function () {
            if($(this).is(":checked")){
                ids.push($(this).attr('aid'));
                $('#del_'+$(this).attr('aid')).remove();
                $('#total').text(0);
                $('#totalNum').text(0);
                flag = true;
            }

        });

        if(!flag){
            alert('你咋不吃烤山药呢!嘿嘿!')
            return false;
        }
        $.get("{{url('Page/DelSelect')}}",{ids:ids},function (data) {
            if(data.status===1){
                alert('删除成功!')
            }
        },'json')
    }
</script>

<script type="text/javascript">
    $(function(){

        /*tab标签切换*/
        function tabs(tabTit,on,tabCon){
            $(tabCon).each(function(){
                $(this).children().eq(0).show();

            });
            $(tabTit).each(function(){
                $(this).children().eq(0).addClass(on);
            });
            $(tabTit).children().click(function(){
                $(this).addClass(on).siblings().removeClass(on);
                var index = $(tabTit).children().index(this);
                $(tabCon).children().eq(index).show().siblings().hide();
            });
        }
        tabs(".investment_title","on_d",".investment_con");

    })
</script>
<script type="text/javascript">
    jQuery(".picScroll_left_s").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});
</script>

<!--底部-->
<div class="dib_beij dib_beij_ger_zhongx">
    <div class="dib_jvz_beij">
        <div class="shangp_baoz">
            <p>本地购物&nbsp;&nbsp;看得见的商品</p>
            <p class="beng1">正品行货&nbsp;&nbsp;购物无忧</p>
            <p class="beng2">低价实惠&nbsp;&nbsp;帮你省钱</p>
            <p class="beng3">本地直发&nbsp;&nbsp;专业配送</p>
        </div>
        <div class="zhongj_youx">
            <div class="lieb_daoh">
                <h4>物流配送</h4>
                <ul>
                    <li><a href="#">配送查询</a></li>
                    <li><a href="#">配送服务</a></li>
                    <li><a href="#">配送费用</a></li>
                    <li><a href="#">配送时效</a></li>
                    <li><a href="#">签收与验货</a></li>
                </ul>
            </div>
            <div class="lieb_daoh">
                <h4>支付与账户</h4>
                <ul>
                    <li><a href="#">货到付款</a></li>
                    <li><a href="#">在线支付</a></li>
                    <li><a href="#">门店支付</a></li>
                    <li><a href="zhangh_anq.html">账户安全</a></li>
                </ul>
            </div>
            <div class="lieb_daoh">
                <h4>购物帮助</h4>
                <ul>
                    <li><a href="#">购物保障</a></li>
                    <li><a href="#">购物流程</a></li>
                    <li><a href="#">焦点问题</a></li>
                    <li><a href="#">联系我们</a></li>
                </ul>
            </div>
            <div class="lieb_daoh">
                <h4>售后服务</h4>
                <ul>
                    <li><a href="#">退换货服务</a></li>
                    <li><a href="#">退款说明</a></li>
                    <li><a href="#">专业维修</a></li>
                    <li><a href="#">延保服务</a></li>
                    <li><a href="#">家电回收</a></li>
                </ul>
            </div>
            <div class="lieb_daoh">
                <div class="kef_dianh">
                    <p>客服电话</p><span>400-6677-937</span>
                </div>
                <div class="kef_dianh kef_dianh_youx">
                    <p>意见收集邮箱</p><p>Ask@wangid.com</p>
                </div>
            </div>
            <div class="lieb_daoh lieb_daoh_you">
                <div class="erw_ma_beij">
                    <div class="erw_m">
                        <h1><img src="{{asset('images/mb_wangid.png')}}"></h1>
                        <span>扫码下载通城客户端</span>
                    </div>
                    <div class="erw_m">
                        <h1><img src="{{asset('images/mb_wangid.png')}}"></h1>
                        <span>扫码下载通城客户端</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="beia_hao">
            <p>京ICP备：14012449号 黔ICP证：B2-20140009号  </p>
            <p class="gonga_bei">京公网安备：11010602030054号</p>
            <div class="renz_">
                <span></span>
                <span class="span1"></span>
                <span class="span2"></span>
                <span class="span3"></span>
            </div>
        </div>
    </div>
</div>












</body>
</html>
