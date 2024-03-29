<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <link href="{{asset('Admin/css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ziy.css')}}">
    <!--  <script src="js/jquery-1.11.3.min.js" ></script>
    <script src="js/index.js" ></script>  -->
    <!-- <script type="text/javascript" src="js/jquery1.42.min.js"></script> -->

    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.SuperSlide.2.1.1.source.js')}}"></script>

</head>
<body>
<!--侧边-->
<div class="jdm-toolbar-wrap J-wrap">
    <div class="jdm-toolbar J-toolbar">
        <div class="jdm-toolbar-panels J-panel"></div>
        <div class="jdm-toolbar-tabs J-tab">
            <div data-type="bar" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-ger">
                <i class="tab-ico"></i>
                <em class="tab-text">购物车</em>
            </div>
            <div data-type="bar" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-cart">
                <i class="tab-ico"></i>
                <em class="tab-text">购物车</em>
            </div>
            <div data-type="bar" clstag="h|keycount|cebianlan_h_follow|btn" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-follow" data-name="follow" data-login="true">
                <i class="tab-ico"></i>
                <em class="tab-text">我的关注</em>
            </div>
        </div>
        <div class="J-trigger jdm-toolbar-tab jdm-tbar-tab-message" data-name="message"><a target="_blank" href="#">
                <i class="tab-ico"></i>
                <em class="tab-text">我的消息
                </em></a>
        </div>
    </div>
    <div class="jdm-toolbar-footer">
        <div data-type="link" id="#top" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-top">
            <a href="#" clstag="h|keycount|cebianlan_h|top">
                <i class="tab-ico"></i>
                <em class="tab-text">顶部</em>
            </a>
        </div>
    </div>
    <div class="jdm-toolbar-mini"></div>
    <div id="J-toolbar-load-hook" clstag="h|keycount|cebianlan_h|load"></div>
</div>


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
            <li class="denglu">Hi~{{Session::get('admin_name')}}<a class="red" href="{{url('Page/login')}}">登录</a> <a href="{{url('Page/Out')}}">退出</a></li>
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
<!--搜索栏-->
<div class="toub_beij">
    <div class="logo"><a href="./"><img src="{{asset('images/logo.png')}}"></a></div>
    <div class="search">
        <input type="text" value="家电一折抢" class="text" id="textt">
        <button class="button">搜索</button>
    </div>
    <div class="right">
        <i class="gw-left"></i>
        <i class="gw-right"></i>
        <div class="sc">
            <i class="gw-count">0</i>
            <i class="sd"></i>
        </div>
        <a href="gouw_che.html">我的购物车</a>
        <div class="dorpdown-layer">
            <ul>
                <li class="meiyou">
                    <img src="{{asset('images/settleup-nogoods.png')}}">
                    <span>购物车中还没有商品，赶紧选购吧！</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="hotwords">
        <a class="biaoti">热门搜索：</a>
        <a href="#">新款连衣裙</a>
        <a href="#">四件套</a>
        <a href="#">潮流T恤</a>
        <a href="#">时尚女鞋</a>
        <a href="#">乐1</a>
        <a href="#">特步女鞋</a>
        <a href="#">威士忌</a>
    </div>
</div>
<!--店铺-->
<div class="dianp_logo_beij">
    <div class="dianp_logo_img">
        <img src="{{asset('images/dianp_logo_beij.jpg')}}">
    </div>
    <div class="beij_center dianp_xianq_fud_beij">
        <div class="dianp_mingx">
            <div class="dianp_minc">
                <p>智汇礼品官方旗舰店</p>
                <div class="services-stars f_f1">
                    <span class="star"><i style="width:81.2819333333%">星星</i></span>
                    <span class="score">4.0</span>分
                </div>
                <div class="dianp_sc">
                    <a href="#" class="btn-collect"><i class="sprite-enter"></i>收藏店铺</a>
                </div>
                <div class="dianp_sc">
                    <a href="#" class="btn-collect"><i class="sprite_3"></i>联系商家</a>
                </div>
                <div class="jingr_guanw_anniu">
                    <a href="#">进入官网</a>
                </div>
            </div>
            <div class="dianp_diz">
                <div class="zuo_diz"><p>地址：贵州省贵阳市云岩区大亨大厦16层</p></div>
                <div class="zuo_diz_2">
                    <span>电话：0852-8667011</span>
                    <span>联系人：潘中全</span>
                    <span>营业时间：09:00至18:00</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dianp_daoh_beij">
    <div class="beij_center">
        <div class="dp_daoh_ul">
            <ul>
                <li class="dp_dh_li"><a href="{{url('/')}}" class="lin_color">首页</a></li>
                <li class="dp_dh_li">
                    <a href="shagnj_lieb.html" class="lin_color">全部商品<i class="ci-leftll"><s class="jt">◇</s></i></a>
                    <div class="quanb_shangp_lieb">
                        <dl>
                            <dt><a href="#">工艺礼品专区</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">扇子</a></li>
                                    <li><a href="#">刀剑</a></li>
                                    <li><a href="#">香炉</a></li>
                                    <li><a href="#">摆件</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">美妆礼品</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">化妆镜</a></li>
                                    <li><a href="#">指甲刀</a></li>
                                    <li><a href="#">修脚刀</a></li>
                                    <li><a href="#">梳子</a></li>
                                    <li><a href="#">首饰盒</a></li>
                                    <li><a href="#">掏耳朵工具</a></li>
                                    <li><a href="#">美妆工具</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">礼品文具专区</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">日记本/笔记本</a></li>
                                    <li><a href="#">同学录</a></li>
                                    <li><a href="#">文房四宝</a></li>
                                    <li><a href="#">笔类</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">礼盒专区</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">礼品盒</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">婚庆节庆</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">婚房布置</a></li>
                                    <li><a href="#">婚庆摆件</a></li>
                                    <li><a href="#">喜糖盒</a></li>
                                    <li><a href="#">手捧花</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">情侣礼物专区</a></dt>
                            <dd>
                                <ul>
                                    <li><a href="#">送女友/送老婆</a></li>
                                    <li><a href="#">送男友/老公</a></li>
                                    <li><a href="#">情侣专区</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dt><a href="#">教师节礼物</a></dt>
                            <dd>
                                <ul>
                                    <li></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </li>
                <li class="dp_dh_li"><a href="#" class="lin_color">分销商品</a></li>
                <li class="dp_dh_li"><a href="#" class="lin_color">化妆镜</a></li>
                <li class="dp_dh_li"><a href="#" class="lin_color">摆件</a></li>
                <li class="dp_dh_li"><a href="#" class="lin_color">连衣裙</a></li>
                <li class="dp_dh_li"><a href="shagnj_dianp_jies.html" class="lin_color">店铺简介</a></li>
            </ul>
        </div>
    </div>
</div>

<!--lieb-->
<div class="beij_center">
    <div class="lib_ds">
        <div class="zuob_dh_ds">
            <div class="quanb_flei_d">全部分类</div>
            <div id="firstpane" class="menu_list">
                <h3 class="menu_head current_df">哲学</h3>
                <div style="display:block" class="menu_body">
                    <a href="#">科学技术哲学</a>
                    <a href="#">宗教学</a>
                    <a href="#">美学</a>
                    <a href="#">伦理学</a>
                    <a href="#">逻辑学</a>
                    <a href="#">外国哲学</a>
                    <a href="#">中国哲学</a>
                    <a href="#">马克思主义哲学</a>
                </div>

                <h3 class="menu_head">经济学</h3>
                <div style="display:none" class="menu_body">
                    <a href="#">应用经济学</a>
                    <a href="#">理论经济学</a>
                    <a href="#">国民经济学</a>
                    <a href="#">区域经济学</a>
                    <a href="#">产业经济学</a>
                    <a href="#">国际贸易学</a>
                    <a href="#">劳动经济学</a>
                    <a href="#">政治经济学</a>
                </div>
                <h3 class="menu_head">根深蒂固</h3>
                <div style="display:none" class="menu_body">
                    <a href="#">应用经济学</a>
                    <a href="#">理论经济学</a>
                    <a href="#">国民经济学</a>
                    <a href="#">政治经济学</a>
                </div>
                <h3 class="menu_head">上衣</h3>
                <div style="display:none" class="menu_body">
                    <a href="#">应用经济学</a>
                    <a href="#">劳动经济学</a>
                    <a href="#">政治经济学</a>
                </div>
                <h3 class="menu_head">潮流</h3>
                <div style="display:none" class="menu_body">
                    <a href="#">应用经济学</a>
                    <a href="#">理论经济学</a>
                    <a href="#">国民经济学</a>
                    <a href="#">区域经济学</a>
                    <a href="#">劳动经济学</a>
                    <a href="#">政治经济学</a>
                </div>
            </div>
        </div>
        <div class="sdu_you">
            <div class="xians_fangs">
                <div class="dsfd_d">
                    <span>显示：</span>
                    <span><a href="{{url('Page/pagePrice')}}" class="losd_14 da_15 df_15"></a></span>
                    <span><a href="{{url('Page/pageDetail'}}" class="losd_14 ds_15"></a></span>
                </div>
                <div class="dsfd_d">
                    <span>分类：</span>
                    <span class="dgf_zy"><a href="#" class="lod_ds">价格</a><em class="df"></em></span>
                    <span class="dgf_zy"><a href="#" class="lod_ds">100以下</a><em></em></span>
                    <span class="dgf_zy"><a href="#" class="lod_ds">100~200</a><em></em></span>
                    <span class="dgf_zy"><a href="#" class="lod_ds">200~400</a><em></em></span>
                    <span class="dgf_zy"><a href="#" class="lod_ds">500以上</a><em></em></span>
                </div>
                <div class="dp_lirb_fany">
                    <span>1/2</span>
                    <a href="">上一页</a>
                    <a href="#">下一页</a>
                </div>
            </div>
            <div class="dp_lieb_kuan">
                <div class="shnagp_list_v1">
                    <ul class="sdgvv_d">
                        @forelse($goods_list as $v)
                            <li>

                                <div class="lieb_neir_kuang">
                                    <div class="lieb_img">
                                        <a href="{{url('Page/goodsDetail',[$v->id])}}"><img src='{{asset("/upload/$v->goods_pic")}}'  style="width: 200px; height:200px"></a>
                                        <div class="p_focus"><a class="J_focus" href="#"><i></i>关注</a></div>
                                    </div>
                                    <div class="lieb_text">
                                        <div class="p_price">
                                            <strong class="J_price"><em>¥</em><i>{{$v->goods_price}}</i><em class="shangp_yuanj zuo_ji">¥</em><i class="shangp_yuanj">{{$v->goods_price}}</i></strong>
                                        </div>
                                    </div>
                                    <div class="shangp_biaot_"><a href="{{url('Page/goodsDetail',[$v->id])}}">{{$v->goods_name}}</a></div>
                                    <div class="lieb_dianp_mingc">
                                        <div class="zuo_mingc">

                                            <div class="p_icons">
                                                <i class="icon_grou_1" data-tips="本地商品"><img src="{{asset('images/bend.png')}}"></i>
                                                <i class="icon_grou_2" data-tips="商品特价出售">特价</i>
                                            </div>
                                        </div>
                                        <div class="you_pingj">
                                            <p>已有访问 </p>
                                            <span><a href="#"><em>{{$v->hit}}</em></a> 人</span>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        @empty
                            没有数据
                        @endforelse
                    </ul>
                </div>
                <div class="pagin">
                    <div class="message">共<i class="blue">{{$goods_list->total()}}</i>条记录，当前显示第&nbsp;<i class="blue">{{$goods_list->currentPage()}}
                            &nbsp;</i>页</div>
                    {{$goods_list->links()}}

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#firstpane .menu_body:eq(0)").show();
            $("#firstpane h3.menu_head").click(function(){
                $(this).addClass("current_df").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                $(this).siblings().removeClass("current_df");
            });

            $("#secondpane .menu_body:eq(0)").show();
            $("#secondpane h3.menu_head").mouseover(function(){
                $(this).addClass("current_df").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
                $(this).siblings().removeClass("current_df");
            });

        });
    </script>

    <!--底部-->
    <div class="dib_beij">
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

