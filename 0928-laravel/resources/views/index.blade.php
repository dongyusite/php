<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WangID通城</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<script src="{{asset('js/jquery-1.11.3.min.js')}}" ></script>
	<script src="{{asset('js/index.js')}}" ></script>
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
	<div class="logo"><a href=""><img src="{{asset('images/logo.png')}}"></a></div>
	<div class="search">
		<form action="{{url('Page/pageSearch')}}" method="post">
			{{csrf_field()}}
		<input type="text" name="keyword" value="" class="text" id="textt">
			<input type="submit" class="scbtn" value="搜索" style="width: 40px;height: 40px">
		</form>
	</div>
	<div class="right">
		<i class="gw-left"></i>
		<i class="gw-right"></i>
		<div class="sc">
			<i class="gw-count">{{$cartCount}}</i>
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
<div id="navv">
	<div class="focus">
		<div class="focus-a">
			<div class="fouc-font"><a href="">全部商品分类</a> </div>
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
		<div class="dd-inner">
			@foreach($rows as $v)
			<div class="font-item">
				<div class="item fore1">
					<h3>
						<a class="da_zhu" href="{{url('Page/pageDetail',[$v->id])}}">{{$v->name}}</a>
						<p>
							@foreach($v->son as $v1)
							<a href="{{url('Page/pageDetail',[$v1->id])}}">{{$v1->name}}</a>
							@endforeach
						</p>
					</h3>
					<i>></i>
				</div>
				<div class="font-item1">
					<div class="font-lefty">
						@foreach($v->son as $v1)
						<dl class="fore1">
							<dt><a href="{{url('Page/pageDetail',[$v1->id])}}">{{$v1->name}}<i>></i></a></dt>
							<dd>
								@if(isset($v1->son))
								@foreach($v1->son as $v2)
								<a href="{{url('Page/pageDetail',[$v2->id])}}">{{$v2->name}}</a></a>

								@endforeach
									@endif
							</dd>
						</dl>
						@endforeach
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
			@endforeach
			<!---->
		</div>
	</div>
</div>

<!--轮播图-->
<div id="lunbo">
	<ul id="one">
		<li><a href=""><img src="{{asset('images/banner.jpg')}}"></a></li>
		<li><a href=""><img src="{{asset('images/banner1.jpg')}}"></a></li>
		<li><a href=""><img src="{{asset('images/banner.jpg')}}"></a></li>
		<li><a href=""><img src="{{asset('images/banner1.jpg')}}"></a></li>
	</ul>
	<ul id="two">
		<li class="on">1</li>
		<li>2</li>
		<li>3</li>
		<li>4</li>
	</ul>
	<!--轮播图左右箭头-->
	<div class="slider-page">
		<a href="javascript:void(0)" id="left"><</a>
		<a href="javascript:void(0)" id="right">></a>
	</div>
</div>

<!--内容一开始了-->
<div class="bend_beij">
	<!--本地生活-->
	<div class="bend_dhengh">
		<div class="neir_biaot">
			<p>本地生活</p>
			<p class="yingw">Local life</p>
		</div>
		<div class="jiank_meis">
			<div class="kuang_1">
				<a href="#">
					<img src="{{asset('images/jiank_meis.jpg')}}">
					<div class="jiank_meis_wenz">
						<p>健康美食</p>
						<span>让生活&nbsp;&nbsp;更健康&nbsp;&nbsp;更美味&nbsp;&nbsp;更舒心</span>
					</div>
				</a>
			</div>
			<div class="dianq_qvy">
				<div class="shiq">
					<h2>全部区域</h2>
					<ul>
						<li><a href="#">云岩区</a></li>
						<li><a href="#">南明区</a></li>
						<li><a href="#">白云区</a></li>
						<li><a href="#">乌当区</a></li>
						<li><a href="#">花溪区</a></li>
						<li><a href="#">清镇市</a></li>
						<li><a href="#">开阳县</a></li>
						<li><a href="#" class="hide">开阳县</a></li>
						<li><a href="#" class="hide">开阳县</a></li>
						<li id="show">更多 </li>
					</ul>
				</div>
				<div class="ktv_jiub">
					<ul>
						<li><a href="#">KTV/酒吧</a></li>
						<li><a href="#">周边游</a></li>
						<li><a href="#">生活服务</a></li>
						<li><a href="#">真人CS</a></li>
						<li><a href="#">中医养生</a></li>
						<li><a href="#">体检/齿科</a></li>
						<li><a href="#">棋牌室</a></li>
						<li><a href="#">洗浴/汗蒸</a></li>
					</ul>
				</div>
			</div>
			<div class="lunb_t">
				<div class="picScroll_left_1">
					<div class="bd">
						<ul class="picList">
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/lengy.jpg')}}" /></a></div>
								<div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span><p>￥6.00</p></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/lengy.jpg')}}" /></a></div>
								<div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span><p>￥6.00</p></div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/lengy.jpg')}}" /></a></div>
								<div class="title"><a href="#" target="_blank">卡通美食冷饮</a><span>卡通美食冷饮全家福三人分</span><p>￥6.00</p></div>
							</li>
						</ul>
					</div>
					<div class="hd">
						<ul></ul>
					</div>
				</div>
				<script type="text/javascript">
					jQuery(".picScroll_left_1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
				</script>

			</div>
		</div>
		<div class="toum_">
			<ul>
				<li><a href="#"><img src="{{asset('images/jiudi_kez.jpg')}}">
						<div class="jiank_meis_wenz_1">
							<p>健康美食</p>
						</div>
					</a>
				</li>
				<li class="sdfs"><a href="#"><img src="{{asset('images/xiux_yvl.jpg')}}">
						<div class="jiank_meis_wenz_1">
							<p>休闲娱乐</p>
						</div>
					</a>
				</li>
				<li><a href="#"><img src="{{asset('images/liren.jpg')}}">
						<div class="jiank_meis_wenz_1">
							<p>丽人</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--周边-->
	<div class="zhoub">
		<div class="neir_biaot">
			<p>周边</p>
			<p class="yingw">periphery</p>
		</div>
		<div class="zhoub_neir">
			<ul>
				<li><a href="#"><img src="{{asset('images/zoub.jpg')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/zoub2.jpg')}}"></a></li>
				<li><a href="#"><img src="{{asset('images/zoub3.jpg')}}"></a></li>
			</ul>
		</div>
	</div>

</div>

<!--快速通道栏-->
<div class="kuanjlan">
	<ul class="clearfix">
		<li>
			<div class="list-li-box">
				<a class="list-img" href="#" data-code="index01004-1" target="_blank">
					<img src="{{asset('images/meinv_1.jpg')}}">
					<span class="list-bg"></span>
					<div class="list-cont">
						<p class="cont-item"><span>羽饰</span></p>
						<p class="cont-tile">秋季来点羽毛元素</p>
						<p class="cont-info">让你更加美丽迷人</p>
					</div>
				</a>
			</div>

		</li>
		<li>
			<div class="list-li-box">
				<a class="list-img" href="#" data-code="index01004-2" target="_blank">
					<img src="{{asset('images/meinv_2.jpg')}}">
					<span class="list-bg"></span>
					<div class="list-cont">
						<p class="cont-item"><span>原宿风</span></p>
						<p class="cont-tile">个性夸张美衣</p>
						<p class="cont-info">潮流原宿风</p>
					</div>
				</a>
			</div>

		</li>
		<li>
			<div class="list-li-box">
				<a class="list-img" href="#" data-code="index01004-3" target="_blank">
					<img src="{{asset('images/meinv_3.jpg')}}">
					<span class="list-bg"></span>
					<div class="list-cont">
						<p class="cont-item"><span>皮裤</span></p>
						<p class="cont-tile">高腰修身皮裤</p>
						<p class="cont-info">轻松享受女神感觉</p>
					</div>
				</a>
			</div>

		</li>
		<li>
			<div class="list-li-box">
				<a class="list-img" href="#" data-code="index01004-4" target="_blank">
					<img src="{{asset('images/meinv_4.jpg')}}">
					<span class="list-bg"></span>
					<div class="list-cont">
						<p class="cont-item"><span>服装</span></p>
						<p class="cont-tile">变身女神范儿</p>
						<p class="cont-info">几种搭配轻松打造</p>
					</div>
				</a>
			</div>
		</li>
	</ul>
</div>


<!--层次-->
<div class="chengc_jvz">
	<div class="slideTxtBox">
		<div class="hd">
			<h1>
				<p>办公家具</p>
				<p class="yingw_">Office furniture</p>
			</h1>
			<ul><li>精品热卖</li><li>卧室家具</li><li>灯饰照明</li><li>五金工具</li><li>厨房卫浴</li><li>办公文教</li></ul>
		</div>
		<div class="bd">
			<ul>
				<div class="louc_tup_qieh">
					<div class="js-silder ws-slider">
						<div class="silder-scroll">
							<div class="silder-main">
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/liuceng_1.jpg')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/2.png')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/3.png')}}" alt=""></a>
								</div>
							</div>
						</div>
						<div class="js-silder-ctrl">
							<span class="silder-ctrl-prev"></span>
							<span class="silder-ctrl-next"></span>
						</div>
					</div>
					<div class="kuas_daoh">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</div>

<div class="chengc_jvz">
	<div class="slideTxtBox2">
		<div class="hd">
			<h1>
				<p>手机数码</p>
				<p class="yingw_">Mobile phone digital</p>
			</h1>
			<ul><li>电脑整机</li><li>热门手机</li><li>智能数码</li><li>游戏组装</li><li>硬件存储</li><li>摄影产品</li></ul>
		</div>
		<div class="bd">
			<ul>
				<div class="louc_tup_qieh">
					<div class="js-silder ws-slider">
						<div class="silder-scroll">
							<div class="silder-main">
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/liuceng_1.jpg')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/2.png')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/3.png')}}" alt=""></a>
								</div>
							</div>
						</div>
						<div class="js-silder-ctrl">
							<span class="silder-ctrl-prev"></span>
							<span class="silder-ctrl-next"></span>
						</div>
					</div>
					<div class="kuas_daoh kuas_daoh_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_2">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_2">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</div>

<div class="chengc_jvz">
	<div class="slideTxtBox3">
		<div class="hd">
			<h1>
				<p>服饰鞋帽</p>
				<p class="yingw_">Shoes and hats</p>
			</h1>
			<ul><li>精品热卖</li><li>精品热卖 </li><li>女装</li><li>男装</li><li>内衣</li><li>时尚套装</li></ul>
		</div>
		<div class="bd">
			<ul>
				<div class="louc_tup_qieh">
					<div class="js-silder ws-slider">
						<div class="silder-scroll">

							<div class="silder-main">
								@foreach($hot as $v)
								<div class="silder-main-img">
									<a href="{{url('Page/goodsDetail',[$v->id])}}"><img src='{{asset("/upload/$v->goods_pic")}}' alt=""></a>
								</div>
								@endforeach
							</div>

						</div>
						<div class="js-silder-ctrl">
							<span class="silder-ctrl-prev"></span>
							<span class="silder-ctrl-next"></span>
						</div>
					</div>

				</div>
				<div class="you_lirb you_lirb_3">
					<div class="shang_buf">
						@foreach($hot as $v)
						<div class="you_shangp_lieb ">
							<a href="{{url('Page/goodsDetail',[$v->id])}}"><img  class="you_tup_k" src='{{asset("/upload/$v->goods_pic")}}'></a>
							<a href="{{url('Page/goodsDetail',[$v->id])}}" class="_you_neir_biaot">{{$v->goods_name}}</a>
							<span>¥ {{$v->goods_price}}</span>
						</div>
						@endforeach

					</div>
				</div>
			</ul>
			<ul>

				<div class="pangb_daoh">

					<h1><a href="{{url('Page/pageDetail',[$id='3'])}}"><img src="{{asset('images/php.jpg')}}"  style="width: 250px; height:250px"></a></h1>


					<div class="kuas_daoh_houm kuas_daoh_houm_3">


						<a href="{{url('Page/pageDetail',[$id='43'])}}">裙子</a>
						<a href="{{url('Page/pageDetail',[$id='44'])}}">女卫衣</a>
						<a href="{{url('Page/pageDetail',[$id='45'])}}">女羽绒服</a>
						<a href="{{url('Page/pageDetail',[$id='46'])}}">女运动服</a>
						<a href="{{url('Page/pageDetail',[$id='47'])}}">女上衣</a>
						<a href="{{url('Page/pageDetail',[$id='48'])}}">男毛衣</a>
						<a href="{{url('Page/pageDetail',[$id='49'])}}">男上衣</a>
						<a href="{{url('Page/pageDetail',[$id='50'])}}">男卫衣</a>
						<a href="{{url('Page/pageDetail',[$id='51'])}}">男西装</a>

					</div>

				</div>

				<div class="you_lirb you_lirb_hou you_lirb_3">
					<div class="shang_buf">

                      @foreach($hots as $v)
						<div class="you_shangp_lieb cnm">
							<a href="{{url('Page/goodsDetail',[$v->id])}}"><img  class="you_tup_k" src='{{asset("/upload/$v->goods_pic")}}'></a>
							<a href="{{url('Page/goodsDetail',[$v->id])}}" class="_you_neir_biaot">{{$v->goods_name}}</a>
							<span>¥{{$v->goods_price}}</span>
						</div>
						@endforeach
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/3.jpg')}}"  style="width: 300px; height:300px"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_3">
						<a href="{{url('Page/pageDetail',[$id='43'])}}">裙子</a>
						<a href="{{url('Page/pageDetail',[$id='44'])}}">女卫衣</a>
						<a href="{{url('Page/pageDetail',[$id='45'])}}">女羽绒服</a>
						<a href="{{url('Page/pageDetail',[$id='46'])}}">女运动服</a>
						<a href="{{url('Page/pageDetail',[$id='47'])}}">女上衣</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_3">
					<div class="shang_buf">

						@foreach($women as $v)
							<div class="you_shangp_lieb cnm">
								<a href="{{url('Page/goodsDetail',[$v->id])}}"><img  class="you_tup_k" src='{{asset("/upload/$v->goods_pic")}}'></a>
								<a href="{{url('Page/goodsDetail',[$v->id])}}" class="_you_neir_biaot">{{$v->goods_name}}</a>
								<span>¥{{$v->goods_price}}</span>
							</div>
						@endforeach


					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/m.png')}}"  style="width: 300px; height:300px"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_3">
						<a href="{{url('Page/pageDetail',[$id='48'])}}">男毛衣</a>
						<a href="{{url('Page/pageDetail',[$id='49'])}}">男上衣</a>
						<a href="{{url('Page/pageDetail',[$id='50'])}}">男卫衣</a>
						<a href="{{url('Page/pageDetail',[$id='51'])}}">男西装</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_3">
					<div class="shang_buf">

						@foreach($man as $v)
							<div class="you_shangp_lieb cnm">
								<a href="{{url('Page/goodsDetail',[$v->id])}}"><img  class="you_tup_k" src='{{asset("/upload/$v->goods_pic")}}'></a>
								<a href="{{url('Page/goodsDetail',[$v->id])}}" class="_you_neir_biaot">{{$v->goods_name}}</a>
								<span>¥{{$v->goods_price}}</span>
							</div>
						@endforeach

					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_3">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_3">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_3">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_3">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</div>


<div class="chengc_jvz">
	<div class="slideTxtBox4">
		<div class="hd">
			<h1>
				<p>汽车用品</p>
				<p class="yingw_">Automobile</p>
			</h1>
			<ul><li>精品热卖</li><li>汽车品牌</li><li>维修保养</li><li>汽车装饰</li><li>车载电器</li><li>汽车服务</li></ul>
		</div>
		<div class="bd">
			<ul>
				<div class="louc_tup_qieh">
					<div class="js-silder ws-slider">
						<div class="silder-scroll">
							<div class="silder-main">
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/qiche_tu.jpg')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/mm_yif.jpg')}}" alt=""></a>
								</div>
								<div class="silder-main-img">
									<a href="#"><img src="{{asset('images/3.png')}}" alt=""></a>
								</div>
							</div>
						</div>
						<div class="js-silder-ctrl">
							<span class="silder-ctrl-prev"></span>
							<span class="silder-ctrl-next"></span>
						</div>
					</div>
					<div class="kuas_daoh kuas_daoh_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
			<ul>
				<div class="pangb_daoh">
					<h1><a href="#"><img src="{{asset('images/de111.jpg')}}"></a></h1>
					<div class="kuas_daoh_houm kuas_daoh_houm_4">
						<a href="#">客厅餐厅</a>
						<a href="#">床衣柜</a>
						<a href="#">书房儿童</a>
						<a href="#">五金工具</a>
						<a href="#">沙发实木</a>
						<a href="#">床垫</a>
						<a href="#">电脑桌</a>
						<a href="#">接线板</a>
						<a href="#">餐桌餐椅</a>
						<a href="#">简易衣柜</a>
						<a href="#">书桌</a>
						<a href="#">开关插座</a>
						<a href="#">酒柜餐边</a>
						<a href="#">乳胶床垫</a>
						<a href="#">办公桌</a>
						<a href="#">USB插座</a>
					</div>
				</div>
				<div class="you_lirb you_lirb_hou you_lirb_4">
					<div class="shang_buf">
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_002.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb ">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_001.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
					<div class="xia_buf">
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_003.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_004.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
						<div class="you_shangp_lieb cnm">
							<a href="#"><img  class="you_tup_k" src="{{asset('images/yic_005.jpg')}}"></a>
							<a href="#" class="_you_neir_biaot">林氏木业简约现代真皮转角客厅头层牛皮沙发家具2036</a>
							<span>¥ 2599 .00</span>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox2").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox3").slide();</script>
<script type="text/javascript">jQuery(".slideTxtBox4").slide();</script>



<!--广告图-->
<div class="guangg_tu">
	<a href="#"><img src="{{asset('images/guang_tu.jpg')}}"></a>
</div>


<!--特色商品/ 热门商品-->

<div class="tes_shnagp_beij">
	<div class="tes_shangp">
		<div class="neir_biaot">
			<p>特色商品</p>
			<p class="yingw">featured</p>
			<a href="#">MORE+</a>
		</div>
		<div class="tes_shangp_neir_k">
			<div class="tes_dat">
				<a href="#">
					<h1><img class="tes_dat_dongh" src="{{asset('images/te_se_shangp_da.jpg')}}"></h1>
					<h2>苹果手机iPhone6(32G)全网</h2>
					<span>¥ 4999 .00</span>
				</a>
			</div>
			<div class="tes_xiaot_beij">
				<div class="tes_xiaot_shang">
					<div class="tes_xiaot_neir">
						<a href="#">
							<h1><img class="tes_xiaot_dongh" src="{{asset('images/tes_shangp_xiao.jpg')}}"></h1>
							<h2>海尔(Haier) BCD452WDPF 452</h2>
							<span>¥ 506 .00</span>
						</a>
					</div>
					<div class="tes_xiaot_neir tes_xiaot_wubian_kuang">
						<a href="#">
							<h1><img class="tes_xiaot_dongh" src="{{asset('images/tes_shangp_xiao2.jpg')}}"></h1>
							<h2>海尔(Haier) BCD452WDPF 452</h2>
							<span>¥ 506 .00</span>
						</a>
					</div>
				</div>
				<div class="tes_xiaot_shang tes_xiaot_xia">
					<div class="tes_xiaot_neir">
						<a href="#">
							<h1><img class="tes_xiaot_dongh" src="{{asset('images/tes_shangp_xiao3.jpg')}}"></h1>
							<h2>海尔(Haier) BCD452WDPF 452</h2>
							<span>¥ 506 .00</span>
						</a>
					</div>
					<div class="tes_xiaot_neir tes_xiaot_wubian_kuang">
						<a href="#">
							<h1><img class="tes_xiaot_dongh" src="{{asset('images/tes_shangp_xiao4.jpg')}}"></h1>
							<h2>海尔(Haier) BCD452WDPF 452</h2>
							<span>¥ 506 .00</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="rem_shangp">
		<div class="neir_biaot">
			<p>热门商品</p>
			<p class="yingw">Hot commodity</p>
			<a href="#">MORE+</a>
		</div>
		<div class="rem_shangp_beij_k">
			<!---->
			<div class="picScroll_left">
				<div class="hd">
					<ul></ul>
				</div>
				<div class="bd">
					<ul class="picList">
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span></div>
						</li>
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp1.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span></div>
						</li>
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span></div>
						</li>
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp1.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span></div>
						</li>
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp1.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 506 .00</span></div>
						</li>
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/rem_shangp1.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">佳能(Canon)EOS80D单反套机</a><span>¥ 7940 .00</span></div>
						</li>
					</ul>
				</div>
			</div>
			<!---->
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(".picScroll_left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:2 ,trigger:"click"});
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