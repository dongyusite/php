<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="utf-8">
    <title>WangID通城——商品列表-详情</title>
    <link href="{{asset('Admin/css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ziy.css')}}">
    <!--  <script src="js/jquery-1.11.3.min.js" ></script>
    <script src="js/index.js" ></script>  -->
    <!-- <script type="text/javascript" src="js/jquery1.42.min.js"></script> -->

    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script> -->
    <script type="text/javascript" src="{{asset('js/chengs/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chengs/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chengs/city-picker.data.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chengs/city-picker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chengs/main.js')}}"></script>
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
    <div class="logo"><a href=""><img src="{{asset('images/logo.png')}}"></a></div>
    <div class="search">
        <form action="{{url('Page/pageSearch')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="keyword" value="" class="text" id="textt">
            <input type="submit" class="scbtn" value="搜索" style="width: 40px;height: 40px">
    </div>
    <div class="right">
        <i class="gw-left"></i>
        <i class="gw-right"></i>
        <div class="sc">
            <i class="gw-count">0</i>
            <i class="sd"></i>
        </div>
        <a href="{{url('Page/cartDetail')}}">我的购物车</a>
        <div class="dorpdown-layer">
            <ul>
                <li class="meiyou">
                    <img src="{{asset('images/settleup-nogoods.png')}}">
                    @if($cartCount > 0)
                        <span>欢迎来到购物车！</span>
                    @else
                        <span>您的购物车空空如也.快去选购吧！</span>
                    @endif
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


<!--轮播图上方导航栏  一栏-->
<div id="navv" class="navv_ziy">
    <div class="focus">
        <div class="focus-a">
            <div class="fouc-font fouc_font_ziy">
                <a href="#">全部商品分类</a>
            </div>
        </div>
        <div class="focus-b">
            <ul>
                <li><a href="#">商城首页</a></li>
                <li><a href="#">本地生活</a></li>
                <li><a href="#">团购专区</a></li>
                <li><a href="#">积分商城 </a></li>
                <li><a href="#">分销系统</a></li>
                <li><a href="#">办公耗材</a></li>
                <li><a href="#">饰品礼品</a></li>
                <li><a href="#">休闲娱乐</a></li>
            </ul>
        </div>

        <!--左边导航-->

        <div class="subpage">
            <h2></h2>
            <div class="prosul dd-inner dd_inner_ziy" id="proinfo">
                <div class="font-item">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">办公家具</a>
                            <p>
                                <a href="#">五金</a>
                                <a href="#">家具</a>
                                <a href="#">家装</a>
                                <a href="#">厨具</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="#">大家电<i>></i></a></dt>
                                <dd>
                                    <a href="#">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="#">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                            <dl class="fore1">
                                <dt><a href="#">生活电器<i>></i></a></dt>
                                <dd>
                                    <a href="#">取暖电器</a><a href="">净化器</a><a href="">扫地机器人</a><a href="">吸尘器</a><a href="">加湿器</a><a href="">挂烫机/熨斗</a><a href="">电风扇</a>
                                    <a href="#">冷风扇</a><a href="">插座</a><a href="">电话机</a><a href="">净水器</a><a href="">饮水机</a>
                                    <a href="#">除湿机</a><a href="">干衣机清洁机</a><a href="">收录/音机</a><a href="">生活电器配件</a><a href="">其它生活电器</a>
                                </dd>
                            </dl>
                            <dl class="fore1">
                                <dt><a href="#">厨房电器<i>></i></a></dt>
                                <dd>
                                    <a href="#">电压力锅</a><a href="">豆浆机</a><a href="">面包机</a><a href="">咖啡机</a><a href="">微波炉料理/榨汁机</a><a href="">电烤箱</a><a href="">电磁炉</a>
                                    <a href="#">电饼铛/烧烤盘</a><a href="">煮蛋器酸奶机</a><a href="">电水壶/热水瓶</a><a href="">电炖锅</a><a href="">多用途锅</a><a href="">果蔬解毒机</a><a href="#">养生壶/煎药壶</a><a href="">其它厨房电器</a>
                                </dd>
                            </dl>
                            <dl class="fore1">
                                <dt><a href="#">个护健康<i>></i></a></dt>
                                <dd>
                                    <a href="#">剃须刀剃/脱毛器</a><a href="">口腔护理</a><a href="">电吹风</a><a href="">美容器</a><a href="">理发器卷/直发器</a><a href="">按摩椅</a><a href="">按摩器</a>
                                    <a href="#">足浴盆</a><a href="">血压计</a><a href="">健康秤/厨房秤</a><a href="">血糖仪</a><a href="">体温计</a><a href="">计步器/脂肪检测仪</a><a href="">脂肪检测仪其它健康电器</a>
                                </dd>
                            </dl>
                            <dl class="fore1">
                                <dt><a href="">五金家装<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a><a href="">烟机/灶具</a>
                                    <a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                        <div class="font-righty">
                            <a href="#">
                                <img src="{{asset('images/5673a854N10856704.jpg')}}">
                            </a>
                            <a href="#">
                                <img src="{{asset('images/56a0376aN7de1bdcf.jpg')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fore-2">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">电脑数码</a>
                            <p>
                                <a href="#">手机</a>
                                <a href="#">电脑</a>
                                <a href="#">办公</a>
                                <a href="#">钟表</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">电脑数码<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fore-3">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">服饰鞋帽</a>
                            <p>
                                <a href="#">男装</a>
                                <a href="#">女装</a>
                                <a href="#">童装</a>
                                <a href="#">内衣</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">服饰鞋帽<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fore-4">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">汽车用品</a>
                            <p>
                                <a href="#">汽车配件</a>
                                <a href="#">礼品</a>
                                <a href="#">家政服务</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">汽车用品<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fore-5">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">食品保健</a>
                            <p>
                                <a href="#">美食</a>
                                <a href="#">酒类</a>
                                <a href="#">生鲜</a>
                                <a href="#">特产</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">食品保健<i>></i></a></dt>
                                <dd>
                                    <a href="">食品保健</a><a href="">食品保健</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/食品保健</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fore-6">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">美酒鲜花</a>
                            <p>
                                <a href="#">手机</a>
                                <a href="#">电脑</a>
                                <a href="#">办公</a>
                                <a href="#">钟表</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">美酒鲜花<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fore-7">
                    <div class="item fore1">
                        <h3>
                            <a class="da_zhu" href="#">图书</a>
                            <p>
                                <a href="#">图书</a>
                                <a href="#">图书</a>
                                <a href="#">办公</a>
                                <a href="#">电子书</a>
                            </p>
                        </h3>
                        <i>></i>
                    </div>
                    <div class="font-item1">
                        <div class="font-lefty">
                            <dl class="fore1">
                                <dt><a href="">图书<i>></i></a></dt>
                                <dd>
                                    <a href="">平板电视</a><a href="">空调</a><a href="">冰箱</a><a href="">洗衣机</a><a href="">家庭影院</a><a href="">DVD</a><a href="">迷你音响</a>
                                    <a href="">烟机/灶具</a><a href="">热水器</a><a href="">消毒具/洗碗柜</a><a href="">冰柜/冰吧</a><a href="">酒柜</a><a href="">家电配件</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="font-right">
                            <div>
                                <a href="#">
                                    <img src="{{asset('images/562f4971Na5379aba.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef02N99d26435.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef28N00328d44.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!---->
            </div>
        </div>
        <!--左边导航结束-->
    </div>
</div>
<script type="text/javascript">
    (function(){
        var $subblock = $(".subpage"), $head=$subblock.find('h2'), $ul = $("#proinfo"), $lis = $ul.find("li"), inter=false;
        $head.mouseover(function(e){
            e.stopPropagation();
            if(!inter){
                $ul.show();
            }else{
                $ul.hide();
            }
            inter=!inter;
        });

        $ul.mouseover(function(event){
            event.stopPropagation();
        });

        $(document).mouseover(function(){
            $ul.hide();
            inter=!inter;
        });
    })();
</script>
<!--列表一开了-->
<div class="nSearchWarp">
    <div class="hot-tj">
        <span class="icon_tj">热卖<br>推荐</span>
        <ul class="hot-list clearfix">
            @foreach($hot as $v)
            <li class="item asynPriceBox">
                <p class="pic">
                    <a target="_blank" href="{{url('Page/goodsDetail',[$v->id])}}"><img src="{{asset("/upload/$v->goods_pic")}}" alt=""></a>
                </p>
                <p class="name"><a href="{{url('Page/goodsDetail',[$v->id])}}" > {{$v->goods_name}}</a></p>
                <p class="price asynPrice" >¥{{$v->goods_price}}</p>
                <p class="btn"><a class="buy" href="{{url('Page/goodsDetail',[$v->id])}}" >立即抢购</a></p>
            </li>
                @endforeach
        </ul>
    </div>
</div>
<div class="lujing_ziy">
    <a href="#">服饰</a> > <a href="#">女装</a>
</div>
<div class="shangp_lieb_jvz">
    <div class="selector">

        <div class="J_selectorLine s-line J_selectorFold" >
            <div class="sl-wrap multiple_D">


                <div class="sl-ext">
                    <a class="sl-e-more" style="visibility: visible;"> </a>
                    <a class="sl-e-multiple" > 多选<i></i></a>
                </div>
            </div>
            <div class="sl-wrap">
                <div class="sl-key">
                    <span>价格：</span>
                </div>
                <div class="sl-value">
                    <div class="sl-v-list">
                        <ul class="J_valueList">

                        </ul>
                    </div>
                </div>
                <div class="sl-ext">
                    <a class="sl-e-more" style="visibility: visible;">更多<i></i></a>
                    <a class="sl-e-multiple">多选<i></i></a>
                </div>
            </div>
            <div class="sl-wrap">
                <div class="sl-key">
                    <span>品牌：</span>
                </div>
                <div class="sl-value">
                    <div class="sl-v-list">
                        <ul class="J_valueList">

                        </ul>
                    </div>
                </div>
                <div class="sl-ext">
                    <a class="sl-e-more" style="visibility: visible;">更多<i></i></a>
                    <a class="sl-e-multiple">多选<i></i></a>
                </div>
            </div>

            <div  id="yingc">
                <div class="sl-wrap">
                    <div class="sl-key">
                        <span>风格d：</span>
                    </div>
                    <div class="sl-value">
                        <div class="sl-v-list">
                            <ul class="J_valueList">
                                <li>
                                    <a href="#"  rel='nofollow'>简约</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>卡通动漫</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>商务</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>奢华</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>小清新</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>怀旧</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>fgfdgdfg义</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sl-ext">
                        <a class="sl-e-more" style="visibility: visible;">更多<i></i></a>
                        <a class="sl-e-multiple">多选<i></i></a>
                    </div>
                </div>
                <div class="sl-wrap" >
                    <div class="sl-key">
                        <span>风格f：</span>
                    </div>
                    <div class="sl-value">
                        <div class="sl-v-list">
                            <ul class="J_valueList">
                                <li>
                                    <a href="#"  rel='nofollow'>简约</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>卡通动漫</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>商务</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>奢华</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>小清新</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>怀旧</a>
                                </li>
                                <li>
                                    <a href="#"  rel='nofollow'>轻奢主义</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sl-ext">
                        <a class="sl-e-more" style="visibility: visible;">更多<i></i></a>
                        <a class="sl-e-multiple">多选<i></i></a>
                    </div>
                </div>
            </div>
            <div class="s_more">
                <span class="sm-wrap" onclick="xians()" data-more="材质、风格、选购热点 等">更多选项（ 材质、风格、选购热点 等）<i></i></span>
            </div>
        </div>
    </div>

    <!--测试****************************************-->
    <script type="text/javascript">
        function xians()
        {
            var ddd=document.getElementById('yingc');
            if(ddd.style.display=='block')
            {
                ddd.style.display='none';
            }
            else
            {
                ddd.style.display='block';
            }
        }
    </script>
    <!--测试****************************************-->
    <!--列表-->
    <div class="shangp_lieb_yi">
        <div class="filter_yi">
            <div class="f_line">
                <div class="f_sort">
                    <a href="#" class="curr_1">综合排序<i></i></a>
                    <a href="#" class="curr_2">销量<i></i></a>
                    <a href="#" class="curr_2">价格<i></i></a>
                    <a href="#" class="curr_2">评论数<i></i></a>
                    <a href="#" class="curr_2">上架时间<i></i></a>
                </div>
                <div class="f_pager" id="J_topPage">
           			<span class="fp_text">
               			<b>1</b><em>/</em><i>166</i>
          			</span>
                    <a class="fp_prev disabled" href="#"> &lt; </a>
                    <a class="fp_next" href="#"> &gt; </a>
                </div>
                <div class="lieb_anniu_kuang">
                    <a class="lieb_ann lieb_er_abn_2" href="shangp_lieb.html"></a>
                    <a class="lieb_ann lieb_er_abn lieb_er_abn1" href="shangp_lieb_1.html"></a>
                </div>
            </div>
            <div class="f_line_xia">
                <div class="sdgdfg">配&nbsp;送&nbsp;至：</div>
                <div class="docs-methods">
                    <form class="form-inline">
                        <div id="distpicker">
                            <div class="form-group">
                                <div style="position: relative;">
                                    <input id="city-picker3" class="form-control" readonly type="text" value="北京市/北京市/朝阳区" data-toggle="city-picker">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="f_feature">
                    <ul>
                        <li id="delivery"><a class="selected" href="#"><i></i>仅显示有货</a></li>
                        <li id="delivery_211"><a class="" href="#"><i></i>货到付款</a></li>
                        <li id="delivery_daofu"><a class="" href="#"><i></i>真划算</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shnagp_list_v1 shnagp_list_v1_lieb_er">
            @forelse($goods_list as $v)
                <ul>
                    <li>
                        <div class="lieb_neir_kuang lieb_neir_kuang_1">
                            <div class="lieb_img lieb_img_1">
                                <a href="{{url('Page/goodsDetail',[$v->id])}}"><img src='{{asset("/upload/$v->goods_pic")}}'  style="width: 200px; height:200px"></a>
                            </div>
                            <div class="lieb_er_kuang">
                                <div class="shangp_biaot_ shangp_biaot_1">
                                    <a href="{{url('Page/goodsDetail',[$v->id])}}">{{$v->goods_name}}</a>
                                    <p><a class="lianpu_minc" href="{{url('Page/shopDetail',[$v->id])}}">{{$v->shop}}专营店</a><a class="mis" href="#">点我交谈</a></p>
                                </div>
                                <div class="lieb_text lieb_text_1">
                                    <div class="p_price">
                                        <strong class="J_price"><em>¥</em><i>{{$v->goods_price}}</i><p><em class="shangp_yuanj zuo_ji">¥</em><i class="shangp_yuanj">1099.00</i></p></strong>
                                    </div>
                                </div>
                                <div class="you_pingj you_pingj_1">
                                    <p>已有评价和访问</p>
                                    <span><a href="#"><em>{{$v->hit}}+</em></a> 人</span>
                                </div>
                                <div class="lieb_dianp_mingc lieb_dianp_mingc_1">
                                    <div class="zuo_mingc">
                                        <div class="p_icons">
                                            <i class="icon_grou_1" data-tips="本地商品"><img src="{{asset('images/bend.png')}}"></i>
                                            <i class="icon_grou_2" data-tips="商品特价出售">特价</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p_focus p_focus_1"><a class="J_focus" href="#"><i></i>关注</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            @empty
                没有数据
            @endforelse
            <div class="jiaz_zhong"><a href="#">玩命加载中</a></div>
        </div>
        <div class="pagin">
            <div class="message">共<i class="blue">{{$goods_list->total()}}</i>条记录，当前显示第&nbsp;<i class="blue">{{$goods_list->currentPage()}}
                    &nbsp;</i>页</div>
            {{$goods_list->links()}}

        </div>
    </div>
</div>
</div>
<!--列表一结束-->
<!--猜你喜欢-->
<div class="cain_xih">
    <div class="mt">
        <h2 class="title">猜你喜欢</h2>
        <div class="extra">
            <a href="#" class="change"><i class="ico"></i><span class="txt">换一批</span></a>
        </div>
    </div>
    <ul class="cain_xihuan_neir">
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi1.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi2.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi3.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi1.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi3.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
        <li>
            <div class="item_pic"><a href="#"><img src="{{asset('images/lieb_tupi2.jpg')}}"></a></div>
            <div class="cain_xih_biaot"><a href="#">伊秋梦紫 2017夏季新款韩版小清新中长款碎花雪纺连衣裙8819(米白色 XXL棉麻连衣裙，舒适透气，MM</a></div>
            <div class="cain_xih_jiaq"><p>￥560.00</p></div>
        </li>
    </ul>
</div>

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
                    <li><a href="#">账户安全</a></li>
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

