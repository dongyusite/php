<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<title>WangID通城——商品详情页</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/ziy.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('houl/jquery.fancybox-1.3.4.css')}}  ">
<link rel="stylesheet" type="text/css" href="{{asset('houl/style.css')}} ">
<script src="{{asset(' js/jquery-1.11.3.min.js')}} " ></script>
<!--  <script src="js/index.js" ></script>  -->
<!-- <script type="text/javascript" src="js/jquery1.42.min.js"></script> -->

<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}} "></script>
 <script type="text/javascript" src="{{asset('js/jquery.SuperSlide.2.1.1.source.j')}}  s"></script>
<script type="text/javascript" src="{{asset('houl/jquery.fancybox-1.3.4.js')}} "></script>

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
				<i class="tab-ico xx"><span>2</span></i>
				<em class="tab-text">购物车</em>
			</div>
			<div data-type="bar" clstag="h|keycount|cebianlan_h_follow|btn" class="J-trigger jdm-toolbar-tab jdm-tbar-tab-follow" data-name="follow" data-login="true">
				<i class="tab-ico"></i>
				<em class="tab-text">我的关注</em>
			</div>
			<div class="J-trigger jdm-toolbar-tab jdm-tbar-tab-message" data-name="message"><a target="_blank" href="#">
				<i class="tab-ico"></i>
				<em class="tab-text">我的消息
				</em></a>
			</div>
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
		</div>


		<!--左边导航-->
{{--		<div class="dd-inner">--}}
{{--			@foreach($rows as $v)--}}
{{--				<div class="font-item">--}}
{{--					<div class="item fore1">--}}
{{--						<h3>--}}
{{--							<a class="da_zhu" href="{{url('Page/pageDetail',[$v->id])}}">{{$v->name}}</a>--}}
{{--							<p>--}}
{{--								@foreach($v->son as $v1)--}}
{{--									<a href="{{url('Page/pageDetail',[$v1->id])}}">{{$v1->name}}</a>--}}
{{--								@endforeach--}}
{{--							</p>--}}
{{--						</h3>--}}
{{--						<i>></i>--}}
{{--					</div>--}}
{{--					<div class="font-item1">--}}
{{--						<div class="font-lefty">--}}
{{--							@foreach($v->son as $v1)--}}
{{--								<dl class="fore1">--}}
{{--									<dt><a href="{{url('Page/pageDetail',[$v1->id])}}">{{$v1->name}}<i>></i></a></dt>--}}
{{--									<dd>--}}
{{--										@if(isset($v1->son))--}}
{{--											@foreach($v1->son as $v2)--}}
{{--												<a href="{{url('Page/pageDetail',[$v2->id])}}">{{$v2->name}}</a></a>--}}

{{--											@endforeach--}}
{{--										@endif--}}
{{--									</dd>--}}
{{--								</dl>--}}
{{--							@endforeach--}}
{{--						</div>--}}
{{--						<div class="font-right">--}}
{{--							<div>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/562f4971Na5379aba.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9eef9N5bb8d27f.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef02N99d26435.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef10Nd206a236.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef28N00328d44.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef34N7cc61f4c.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef3eN99aef1f0.jpg')}}">--}}
{{--								</a>--}}
{{--								<a href="#">--}}
{{--									<img src="{{asset('images/54d9ef4cN4fe57f9b.jpg')}}">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="font-righty">--}}
{{--							<a href="#">--}}
{{--								<img src="{{asset('images/5673a854N10856704.jpg')}}">--}}
{{--							</a>--}}
{{--							<a href="#">--}}
{{--								<img src="{{asset('images/56a0376aN7de1bdcf.jpg')}}">--}}
{{--							</a>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--		@endforeach--}}
{{--		<!---->--}}
{{--		</div>--}}
{{--	</div>--}}
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
<!--商品详情-->
 <div class="breadcrumbs_container">
 	<div class="left_luj">
	    <ul>
	        <li>
				<a href="#" title="服饰鞋帽">服饰鞋帽</a>
				<i class="icon-crumbs-right"></i>
	        </li>
			<li>
				<a href="#" title="服饰鞋帽">{{$goods->goods_name}}</a>
				<i class="icon-crumbs-right"></i>
	        </li>


	    </ul>
    </div>
    <div class="right_dianp">
        <div class="ly-stores shops-name">
            <a class="btn-collect ">
                <i class="icon-collect"></i>
                <span>收藏店铺</span>
                <i class="icon-arrow"></i>
            </a>
            <a class="btn-service hide customerService_show"<i></i>在线客服</a>
            <span class="services-score"><b class="star-gray"><i class="star-red" style="width:88.9059333333%"></i></b><em class="score">4.4</em>分</span>
            <a class="name" title="Mistletoe女装旗舰店" href="#" target="_blank">{{$goods->shop}}旗舰店</a>

        </div>
	</div>
 </div>
<div class="gome_container">
	<!--左-->
	<div class="prd_firstscreen_left">
		<!---->
		<div id="magnifier">
		    <div class="small-box">
		      	<img src='{{asset("/upload/$goods->goods_pic")}}' style="width: 500px; height:400px" alt="#">
		      	<span class="hover"></span>
		    </div>
		    <div class="thumbnail-box">
		      	<a href="javascript:;" class="btn btn-prev"></a>
		      	<a href="javascript:;" class="btn btn-next"></a>
		      	<div class="list" style="width: 300px; heigt:300px">
		        	<ul class="wrapper">
		          		<li class="item item-cur" data-src="{{asset("/upload/$goods->goods_pic")}}"><img src="{{asset("/upload/$goods->goods_pic")}}" alt="#"  style="margin: 0 auto;"></li>

		        	</ul>
		      	</div>
		    </div>
		    <div class="big-box">
		      	<img src="{{asset('images/big_1.jpg')}}" alt="#">
		    </div>
		</div>
		<!--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
		<script src="js/magnifier.js"></script>
		<script>
		    $(function () {
		      	$('#magnifier').magnifier();
		    });
		</script>
		<!---->
		<div class="preview-info">
            <div class="left-btns">
                <a class="share J-share" href="#">
                    <i class="sprite-share"></i><em>分享</em>
                </a>
				<a class="" href="#">
                    <i class="sprite-compare"></i><em>收藏商品（商品人气1500）</em>
                </a>
            </div>
            <div class="right-btns">
                <a class="report-btn" href="#">举报</a>
            </div>
        </div>
	</div>
	<!--中-->
	<div class="prd_firstscreen_center">
		<div class="hgroup">
        	<h1>{{$goods->goods_name}}</h1>
    	</div>
    	<div class="prd_price_1">
            <div class="unitprice">

                <p>
            		<label class="prd_price_left">促&nbsp;销&nbsp;价</label>
            		<span class="price"><em>¥</em>{{$goods->goods_price}}</span>
            	</p>
            </div>
            <div class="prd_price_flr">
                <div class="prd_price_line">|</div>
                <div class="prd_price_lineright">
                    <p>好评度<em id="haocnt">98%</em></p>
                    <p class="pincnt"><a href="#" class="reduce"><em>{{$goods->hit}}</em>人访问</a></p>
                </div>
            </div>
        </div>
        <!---->
        <div class="prd_properties">
	        <div class="prd_properties_1">
        		<label class="prd_price_left">服&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务</label>
        		<span>由<a href="#">{{$goods->shop}}服装旗舰店</a>发货并负责售后服务。</span>
	        </div>
	        <div class="prd-properties-2">
                <div class="prd_properties_other">
                    <label class="prdLeft">颜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色</label>
                    <div class="prdRight">
                        <div class="prdcol">
                            <a href="#" class="select" title="白色" data-alt="白色">
                                <img src="{{asset("/upload/$goods->goods_pic")}}" gome-src="{{asset("/upload/$goods->goods_pic")}}" alt="白色">
                                <span>白色</span><i></i>
                            </a>
                        </div>
                        <div class="prdcol prd-img-item">
                            <a href="#" title="紫色" data-alt="紫色">
                                <img src="{{asset("/upload/$goods->goods_pic")}}" gome-src="{{asset("/upload/$goods->goods_pic")}}" alt="紫色">
                                <span>白色</span><i></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="prd_properties_other" style="display:block">
                    <label class="prdLeft">尺&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                    <div class="prdRight_1">
                        <div class="prdmod">
                            <a href="#" class="clicks" title="S" data-alt="S">S<i></i></a>
                        </div>
                        <div class="prdmod">
                            <a href="#" class="select" title="M" data-alt="M">M<i></i></a>
                        </div>
                        <div class="prdmod">
                            <a href="#" class="clicks" title="L" data-alt="L">L<i></i></a>
                        </div>
                        <div class="prdmod">
                            <a href="#" class="clicks ss" title="XL" data-alt="XL">XL<i></i></a>
                        </div>
                    </div>
                </div>
	        </div>
	    </div>
	    <div class="prd_properties_1 hou_jia">
    		<label class="prd_price_left">货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;源</label>
    		<span>{{$goods->goods_num}}</span>
        </div>
	    <style type="text/css">
	    	.hou_jia{
	    		padding:0 10px;
	    	}
	    	.kuc_jian{
	    		width: 100%;
	    		line-height: 25px;
	    	}
	    </style>
	    <!---->
	    <div class="prd_buttons">
		    <div class="count-wrapper" id="btnCount">
		        <input type="text" id="order_num" class="quantity" value="1">
		        <a href="javascript:void(0)" id="plus j-gACbtnA" onclick="add()" >+</a>
		        <a href="javascript:void(0)" id="minus j-gACbtn disab" onclick="mul()" >-</a>
		    </div>
		    <a href="#" class="btn-product btn-addcart">立即购买</a>
		    <a href="javascript:void(0)" class="btn-product"  onclick="addCart({{$goods->id}})">加入购物车</a>

	    </div>
        <!---->
        <div class="prd-tips wenxintishi_wrap clearfix">
	        <p>温馨提示</p>
	        <ol class="wenxinti">
	            <li>
	                正品保障；
	                支持7天无理由退货
	            </li>
	        </ol>
	    </div>
        <!---->
	</div>
	<!--右-->
	<div class="prd_firstscreen_right">
		<h2>看了又看</h2>
		<!---->
		<div class="multipleColumn" style="margin:0 auto">
			<div class="bd">
				<div class="ulWrap">
					<ul><!-- 把每次滚动的n个li放到1个ul里面 -->
						<li>
							<div class="pic"><a href="#" target="_blank"><img src="{{asset('images/xiangqtu_1.jpg')}}" /></a></div>
							<div class="title"><a href="#" target="_blank">￥68.00</a></div>
						</li>

					</ul>
				</div><!-- ulWrap End -->
			</div><!-- bd End -->
			<div class="hd">
				<ul></ul>
			</div>
		</div><!-- multipleColumn End -->
		<script>
			// 加
			function add(){
				// 改变值
				$('#order_num').val( parseInt($('#order_num').val())+1);
			}

			// 减
			function mul(){
				var num =parseInt($('#order_num').val());
				if( num >1){
					num--;
				}
				// 改变值
				$('#order_num').val(num );
			}
			function addCart(id){

				var num = parseInt($('#order_num').val());
				$.post("{{url('Page/addCart')}}",{id:id,num:num},function(data){
					if(data.status === 0){
						alert('添加购物车成功');
						location.href = "{{url('Page/cartDetail')}}"
					}else if(data.status ===1){
						alert('商品添加失败')
					}else{
						alert('请登录!');
						location.href="{{url('Page/login')}}?returnUrl={{$current_url}}"
					}
				},'json')
			}
		</script>

		<script type="text/javascript">
			jQuery(".multipleColumn").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
		</script>
		<!---->
	</div>
</div>

<!--商品信息结束-->
<!--详情-->
<div class="shangp_xiangq_neir_beij">
<!--left-->
	<div class="shangp_xiangq_left">
		<!---->
		<div class="shangp_xiangq_left_biank">
			<div class="stores-infos">
		        <div class="ly-stores">
		            <h2 class="fix-storesname shops-name" id="store_live800_wrap">
		                <a class="name" title="茂烨旗舰店" href="#" target="_blank">{{$goods->shop}}服装旗舰店</a>
		            </h2>
		            <div class="services-wrapper">
		                <div class="services-stars">
		                    服务评分：
		                    <span class="star"><i style="width:81.2819333333%">星星</i></span>
		                    <span class="score">4.0</span>分
		                </div>
		                <div class="services-score-detail">
		                    <p><span class="detail">评分明细</span><span class="contrast">与行业对比</span></p>
		                    <div class="describe ">
		                        <p>商品描述：<span>4.15</span><small title="计算规则：（商家得分-同行业平均分）" class="diyu_text">9.93%</small><i class="diyu">箭头</i></p>
		                    </div>
		                    <div class="logistics">
		                        <p>发货速度：<span>3.96</span><small title="计算规则：（商家得分-同行业平均分" class="diyu_text">15.34%</small><i class="diyu">箭头</i></p>
		                    </div>
		                    <div class="services">
		                        <p>服务质量：<span>4.08</span><small title="计算规则：（商家得分-同行业平均分））" class="diyu_text">13.08%</small><i class="diyu">箭头</i></p>
		                    </div>
		                </div>
		            </div>
		            <div class="btn-group">
		                <a href="#" class="btn-product btn-enter" target="_blank"><i></i>进入店铺</a>
		                <a href="#" class="btn-collect"><i class="sprite-enter"></i>收藏店铺</a>
		            </div>
		        </div>
		    </div>
		    <!---->
		    <div class="dianp_xiao_jiej">
		    	<div class="shangj_diz">
		    		<p>地址：<span>贵州省贵阳市云岩区大亨大厦16层</span></p>
		    		<p>联系人：<span>潘中全</span></p>
		    		<p>电话：<span>0852-8667011</span></p>
		    		<p>营业时间：<span>09:00至18:00</span></p>
		    	</div>
		    	<div class="_xq_gogns_jianj">
			    	<p>公司简介：</p>
			    	<p class="_xq_gogns_jianj_neir">魅CO视觉，主张时尚个性的摄影理念，以独特和新锐的时尚触觉为客户提供性化的摄影服务。追逐时尚，同时更注重情感表达。用最丰<a href="#">[查看更多]</a></p>
		    	</div>
		    </div>
	    </div>
		<!---->
		<div class="shangp_xiangq_left_biank">
			<div class="stores-infos">
		        <div class="ly-stores">
		            <h2 class="fix-storesname shops-name" id="store_live800_wrap">
		                <a class="name" title="本店商品" href="#" target="_blank">本店商品</a>
		            </h2>
		            <ul class="bend_shangp_lieb">


          @foreach($shops as $v)
		            	<li>
		            		<a href="{{url('Page/goodsDetail',[$v->id])}}">
		            			<img src="{{asset("/upload/$v->goods_pic")}}">
		            			<h3>{{$v->goods_price}}</h3>
		            			<p>{{$v->goods_name}}</p>
		            		</a>
		            	</li>
                  @endforeach
		            </ul>
		        </div>
		    </div>
	    </div>
	    <!---->
	    <div class="shangp_xiangq_left_biank">
			<div class="stores-infos">
		        <div class="ly-stores">
		            <h2 class="fix-storesname shops-name" id="store_live800_wrap">
		                <a class="name" title="热门商品" href="#" target="_blank">热门商品</a>
		            </h2>
		            <ul class="bend_shangp_lieb">

		                @foreach($hots as $v)
		            	<li>
		            		<a href="{{url('Page/goodsDetail',[$v->id])}}">
								<a href="{{url('Page/goodsDetail',[$v->id])}}"><img src="{{asset("/upload/$v->goods_pic")}}"></a>
		            			<h3>￥{{$v->goods_price}}</h3>
		            			<p>{{$v->goods_name}}</p>
		            		</a>
		            	</li>
                      @endforeach
		            </ul>
		        </div>
		    </div>
	    </div>
		<!---->
	</div>
<!--right-->
	<div class="shangp_xiangq_right">
		<!---->
		<div class="slideTxtBox_1">
			<div class="hd">
				<ul><li>商品介绍</li><li>售后保障</li><li>商品评价(500+)</li></ul>
				<div class="extra_jiar_gouw_c">
					<a href="#">加入购物车</a>
				</div>
			</div>
			<div class="bd">
				<ul>
					<div class="p_parameter">
						<ol class="p_parameter_list">
							<li title="卿城">品牌： <a href="#" target="_blank">{{$goods->shop}}</a> </li>
						</ol>
						<ol class="parameter2 p_parameter_list">
							<li title="卿城睡衣女五角星情侣款秋季棉质长袖家居服套装 五角星情侣款 165/88A(女L)">名称:{{$goods->goods_name}}</li>
    						<li title="11971841918">商品编号：{{$goods->goods_num}}</li>
                      		<li title="依晴服饰内衣专营店">店铺： <a href="{{url('Page/shopDetail',[$goods->id])}}" target="_blank">{{$goods->shop}}服饰专营店</a></li>
                     		<li title="500.00g">商品毛重：500.00g</li>
				            <li title="中国大陆">商品产地：中国大陆</li>
				            <li title="F1751">货号：F1751</li>
							<li title="套头">款型：套头</li>
							<li title="卡通">风格：卡通</li>
							<li title="中厚">厚度：中厚</li>
							<li title="圆领">领型：圆领</li>
							<li title="多色">颜色：多色</li>
							<li title="棉质">材质：棉质</li>
							<li title="卡通">图案：卡通</li>
							<li title="情侣">人群：情侣</li>
							<li title="秋季">季节：秋季</li>
							<li title="长袖">袖长：长袖</li>
							<li title="套头">衣门襟：套头</li>
							<li title="长裤">裤长：长裤</li>
							<li title="M，L，XL，XXL">尺码：M，L，XL，XXL</li>
							<li title="其它">裙长：其它</li>
							<li title="可外穿">是否可外穿：可外穿</li>
							<li title="套装">款式：套装</li>
							<li title="衣裤两件套">组合形式：衣裤两件套</li>
						</ol>
					</div>
					<div class="detail_content_wrap">
						<img src="{{asset('images/tu_001.jpg')}}">
						<img src="{{asset('images/tu_002.jpg')}}">
						<img src="{{asset('images/tu_003.jpg')}}">
						<img src="{{asset('images/tu_004.jpg')}}">
					</div>
					<div class="shouh_baoz">
						<div class="mt">
	                       <h3>售后保障</h3>
	                    </div>
	                    <!---->
	                    <div class="mc">
		                    <div class="item-detail item-detail-copyright">
								<div class="serve-agree-bd">
		    						<dl>
										<dt>
								            <i class="goods"></i>
								            <strong>卖家服务</strong>
								        </dt>
									    <dd>
										</dd>
										<dt>
								            <i class="goods"></i>
								            <strong>正品行货</strong>
								        </dt>
								        <dd>
											wangid平台卖家销售并发货的商品，由卖家提供发票和相应的售后服务。请您放心购买！<br>
											注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
								        </dd>

							        </dl>
								</div>
								<div id="state">
		                            <strong>权利声明：</strong><br>wangid通城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东重要的经营资源，未经许可，禁止非法转载使用。
		                            <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
								</div>
		                    </div>
		                </div>
	                    <!---->
					</div>
					<!---->
					<div class="shouh_baoz_2">
						<div class="mt"><h3>商品评价</h3></div>
						<div class="mc">
							<div class="comment-info J-comment-info">
								<div class="comment-percent">
									<strong class="percent-tit">好评度</strong>
									<div class="percent-con">99<span>%</span></div>
								</div>
							</div>
							<!---->
							<div class="ETab">
								<div class="tab-main small">
									<ol class="filter-list">
										<li class="current_xq" data-num="4900"><a href="#">全部评价<em>(4900+)</em></a></li>
										<li ><a href="#">晒图<em>(60)</em></a></li>
										<li class="J-addComment"><a href="#">追评<em>(8)</em></a></li>
										<li><a href="#">好评<em>(4900+)</em></a></li><li>
										<a href="#">中评<em>(40+)</em></a></li>
										<li><a href="#">差评<em>(20+)</em></a></li>
										<li class="comm-curr-sku"><span><input type="checkbox"></span><label>只看当前商品评价</label></li>
									</ol>
									<div class="_extra_a">
										<div class="sort-select">
											<div class="current_tc"><span class="J-current-sortType">推荐排序</span><i></i></div>
											<div class="others">
												<div class="curr"><span class="J-current-sortType">推荐排序</span><i></i></div>
												<ol>
													<li class="J-sortType-item">推荐排序</li>
													<li class="J-sortType-item">时间排序</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="tab_con">
							<ol class="replyListWrap">
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:100%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
										<div id="content">
	<p>
		<a rel="example_group" href="{{asset('images/example/9_b.jpg')}}" title="Lorem ipsum dolor sit amet"><img alt="" src="{{asset('images/example/9_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/10_b.jpg')}}" title=""><img alt="" src="{{asset('images/example/10_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/11_b.jpg')}}" title=""><img alt="" src="{{asset('images/example/11_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/12_b.jpg')}}" title=""><img class="last" alt="" src="{{asset('images/example/12_s.jpg')}}" /></a>
	</p>

</div>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:20%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
										<div id="content">
	<p>
		<a rel="example_group" href="{{asset('images/example/9_b.jpg')}}" title="Lorem ipsum dolor sit amet"><img alt="" src="{{asset('images/example/9_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/10_b.jpg')}}" title=""><img alt="" src="{{asset('images/example/10_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/11_b.jpg')}}" title=""><img alt="" src="{{asset('images/example/11_s.jpg')}}" /></a>
		<a rel="example_group" href="{{asset('images/example/12_b.jpg')}}" title=""><img class="last" alt="" src="{{asset('images/example/12_s.jpg')}}" /></a>
	</p>

</div>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>

								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:80%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
							</ol>
							<div class="com-table-footer">
								<div class="ui-page-wrap">
									<div class="ui-page">
										<a rel="1" class="ui-page-curr" href="#">1</a>
										<a rel="2" href="#">2</a>
										<a rel="3" href="#">3</a>
										<a rel="4" href="#">4</a>
										<a rel="5" href="#">5</a>
										<a rel="6" href="#">6</a>
										<span>...</span>
										<a rel="2" class="ui-pager-next" href="#">下一页</a>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="jkdhfld">
							<div class="mt"><h3>商品评价</h3></div>
							<div class="consult-rt">
				                <table class="consult-form" >
				                    <caption>我要发表咨询</caption>
				                    <tbody><tr id="tr-zxlx">
				                        <th>咨询类型:&nbsp;</th>
				                        <td>
				                            <label class="cst-type" ><input type="radio" value="1" >购买咨询</label>
				                            <label class="cst-type" ><input type="radio" value="2" >促销优惠</label>
				                            <label class="cst-type" ><input type="radio" value="3" >支付问题</label>
				                            <label class="cst-type" ><input type="radio" value="4" >售后咨询</label>
				                        </td>
				                    </tr>
				                        <tr class="consul_type_wrap">
				                            <th>回复方式:&nbsp;</th>
				                            <td>
				                                <div>
				                                    <label class="cst-type" for="consul_site">
				                                        <input type="radio" value="consul_site" name="hffs-type" id="consul_site" checked="checked">网站
				                                    </label>
				                                    <label class="cst-type" for="consul_mail">
				                                        <input type="radio" value="consul_mail" name="hffs-type" id="consul_mail">邮箱
				                                    </label>
				                                    <label class="cst-type" for="consul_weixin">
				                                        <input type="radio" value="consul_weixin" name="hffs-type" id="consul_weixin">微信
				                                    </label>
				                                </div>
				                                <div class="weixin-sm" style="display: none;">
				                                    <div class="img-w">
				                                        <img gome-src="//js.gomein.net.cn/f2eimage/ui/customer_service_weixin.jpg')}}" alt="手机下单更优惠" title="手机下单更优惠">
				                                    </div>
				                                    <div class="text">
				                                        <p>扫描二维码，关注客服中心公众号，我们将为您提供更加快速便捷的咨询服务</p>
				                                    </div>
				                                </div>
				                            </td>
				                        </tr>
				                        <tr class="consul_type_wrap" id="email-address" style="display: none;">
				                            <th>邮箱地址:&nbsp;</th>
				                            <td>
				                                <input type="text" value="请填写您的邮箱，以便客服回复！" maxlength="50" id="consul_type_text" name="consul_type_text">
				                                <span class="email-error"></span>
				                            </td>
				                        </tr>
				                    <tr id="gm-zxnr">
				                        <th>咨询内容:&nbsp;</th>
				                        <td>
				                            <div class="txt-area-wrap">
				                                <textarea name="" id="quesTxt" class="txt-area"></textarea>
				                            </div>
				                        </td>
				                    </tr>
				                    <tr id="gm-submit">
				                        <th></th>
				                        <td><a class="consult-smt-btn redlink">提交</a><span class="tips">0/200</span></td>
				                    </tr>
								</tbody></table>
								<div class="consult-lt">
									<dl class="consult-question clearfix">
										<dt>常见问题</dt>
										<dd>•<a href="#" target="_blank" title="忘记密码如何操作？">忘记密码如何操作？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何增强账户安全系数？">如何增强账户安全系数？</a></dd>
										<dd>•<a href="#" target="_blank" title="怎么操作商品签收？">怎么操作商品签收？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何电话订购？">如何电话订购？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何查询商品参数及包装清单？">如何查询商品参数及包装清单？</a></dd>
										<dd>•<a href="#" target="_blank" title="商品无货怎么办？">商品无货怎么办？</a></dd>
									</dl>
								</div>
							</div>
						</div>
						<!---->
					</div>
					<!---->
				</ul>
				<!--售后保障-->
				<ul>
					<div class="shouh_baoz">
						<div class="mt">
	                       <h3>售后保障</h3>
	                    </div>
	                    <!---->
	                    <div class="mc">
		                    <div class="item-detail item-detail-copyright">
								<div class="serve-agree-bd">
		    						<dl>
										<dt>
								            <i class="goods"></i>
								            <strong>卖家服务</strong>
								        </dt>
									    <dd>
										</dd>
										<dt>
								            <i class="goods"></i>
								            <strong>正品行货</strong>
								        </dt>
								        <dd>
											wangid平台卖家销售并发货的商品，由卖家提供发票和相应的售后服务。请您放心购买！<br>
											注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
								        </dd>

							        </dl>
								</div>
								<div id="state">
		                            <strong>权利声明：</strong><br>wangid通城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东重要的经营资源，未经许可，禁止非法转载使用。
		                            <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
								</div>
		                    </div>
		                </div>
	                    <!---->
					</div>
					<div class="shouh_baoz_2">
						<div class="mt"><h3>商品评价</h3></div>
						<div class="mc">
							<div class="comment-info J-comment-info">
								<div class="comment-percent">
									<strong class="percent-tit">好评度</strong>
									<div class="percent-con">99<span>%</span></div>
								</div>
							</div>
							<!---->
							<div class="ETab">
								<div class="tab-main small">
									<ol class="filter-list">
										<li class="current_xq" data-num="4900"><a href="#">全部评价<em>(4900+)</em></a></li>
										<li><a href="#">晒图<em>(60)</em></a></li>
										<li class="J-addComment"><a href="#">追评<em>(8)</em></a></li>
										<li><a href="#">好评<em>(4900+)</em></a></li><li>
										<a href="#">中评<em>(40+)</em></a></li>
										<li><a href="#">差评<em>(20+)</em></a></li>
										<li class="comm-curr-sku"><span><input type="checkbox"></span><label>只看当前商品评价</label></li>
									</ol>
									<div class="_extra_a">
										<div class="sort-select">
											<div class="current_tc"><span class="J-current-sortType">推荐排序</span><i></i></div>
											<div class="others">
												<div class="curr"><span class="J-current-sortType">推荐排序</span><i></i></div>
												<ol>
													<li class="J-sortType-item">推荐排序</li>
													<li class="J-sortType-item">时间排序</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="tab_con">
							<ol class="replyListWrap">
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:100%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:20%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:80%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
							</ol>
							<div class="com-table-footer">
								<div class="ui-page-wrap">
									<div class="ui-page">
										<a rel="1" class="ui-page-curr" href="#">1</a>
										<a rel="2" href="#">2</a>
										<a rel="3" href="#">3</a>
										<a rel="4" href="#">4</a>
										<a rel="5" href="#">5</a>
										<a rel="6" href="#">6</a>
										<span>...</span>
										<a rel="2" class="ui-pager-next" href="#">下一页</a>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="jkdhfld">
							<div class="mt"><h3>商品评价</h3></div>
							<div class="consult-rt">
				                <table class="consult-form">
				                    <caption>我要发表咨询</caption>
				                    <tbody><tr id="tr-zxlx">
				                        <th>咨询类型:&nbsp;</th>
				                        <td>
				                            <label class="cst-type"><input type="radio" value="1">购买咨询</label>
				                            <label class="cst-type"><input type="radio" value="2">促销优惠</label>
				                            <label class="cst-type"><input type="radio" value="3">支付问题</label>
				                            <label class="cst-type"><input type="radio" value="4">售后咨询</label>
				                        </td>
				                    </tr>
				                        <tr class="consul_type_wrap">
				                            <th>回复方式:&nbsp;</th>
				                            <td>
				                                <div>
				                                    <label class="cst-type" for="consul_site">
				                                        <input type="radio" value="consul_site" name="hffs-type" id="consul_site" checked="checked">网站
				                                    </label>
				                                    <label class="cst-type" for="consul_mail">
				                                        <input type="radio" value="consul_mail" name="hffs-type" id="consul_mail">邮箱
				                                    </label>
				                                    <label class="cst-type" for="consul_weixin">
				                                        <input type="radio" value="consul_weixin" name="hffs-type" id="consul_weixin">微信
				                                    </label>
				                                </div>
				                                <div class="weixin-sm" style="display: none;">
				                                    <div class="img-w">
				                                        <img gome-src="//js.gomein.net.cn/f2eimage/ui/customer_service_weixin.jpg')}}" alt="手机下单更优惠" title="手机下单更优惠">
				                                    </div>
				                                    <div class="text">
				                                        <p>扫描二维码，关注客服中心公众号，我们将为您提供更加快速便捷的咨询服务</p>
				                                    </div>
				                                </div>
				                            </td>
				                        </tr>
				                        <tr class="consul_type_wrap" id="email-address" style="display: none;">
				                            <th>邮箱地址:&nbsp;</th>
				                            <td>
				                                <input type="text" value="请填写您的邮箱，以便客服回复！" maxlength="50" id="consul_type_text" name="consul_type_text">
				                                <span class="email-error"></span>
				                            </td>
				                        </tr>
				                    <tr id="gm-zxnr">
				                        <th>咨询内容:&nbsp;</th>
				                        <td>
				                            <div class="txt-area-wrap">
				                                <textarea name="" id="quesTxt" class="txt-area"></textarea>
				                            </div>
				                        </td>
				                    </tr>
				                    <tr id="gm-submit">
				                        <th></th>
				                        <td><a class="consult-smt-btn redlink">提交</a><span class="tips">0/200</span></td>
				                    </tr>
								</tbody></table>
								<div class="consult-lt">
									<dl class="consult-question clearfix">
										<dt>常见问题</dt>
										<dd>•<a href="#" target="_blank" title="忘记密码如何操作？">忘记密码如何操作？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何增强账户安全系数？">如何增强账户安全系数？</a></dd>
										<dd>•<a href="#" target="_blank" title="怎么操作商品签收？">怎么操作商品签收？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何电话订购？">如何电话订购？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何查询商品参数及包装清单？">如何查询商品参数及包装清单？</a></dd>
										<dd>•<a href="#" target="_blank" title="商品无货怎么办？">商品无货怎么办？</a></dd>
									</dl>
								</div>
							</div>
						</div>
						<!---->
					</div>
				</ul>
				<!--商品评价-->
				<ul>
					<div class="shouh_baoz_2">
						<div class="mt"><h3>商品评价</h3></div>
						<div class="mc">
							<div class="comment-info J-comment-info">
								<div class="comment-percent">
									<strong class="percent-tit">好评度</strong>
									<div class="percent-con">99<span>%</span></div>
								</div>
							</div>
							<!---->
							<div class="ETab">
								<div class="tab-main small">
									<ol class="filter-list">
										<li class="current_xq" data-num="4900"><a href="#">全部评价<em>(4900+)</em></a></li>
										<li><a href="#">晒图<em>(60)</em></a></li>
										<li class="J-addComment"><a href="#">追评<em>(8)</em></a></li>
										<li><a href="#">好评<em>(4900+)</em></a></li><li>
										<a href="#">中评<em>(40+)</em></a></li>
										<li><a href="#">差评<em>(20+)</em></a></li>
										<li class="comm-curr-sku"><span><input type="checkbox"></span><label>只看当前商品评价</label></li>
									</ol>
									<div class="_extra_a">
										<div class="sort-select">
											<div class="current_tc"><span class="J-current-sortType">推荐排序</span><i></i></div>
											<div class="others">
												<div class="curr"><span class="J-current-sortType">推荐排序</span><i></i></div>
												<ol>
													<li class="J-sortType-item">推荐排序</li>
													<li class="J-sortType-item">时间排序</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="tab_con">
							<ol class="replyListWrap">
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:100%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:20%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>


									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
								<li class="oh_de">
									<div class="reply-left">
										<span class="detail-star bgiprd">
											<b style="width:80%" class="bgiprd"></b>
										</span>
										<p>收货后1天评论</p>
										<p><a target="_blank" href="//review.gome.com.cn/P136937461.html">2017-09-22 12:44</a></p>
										<p><span>白色 M码</span></p>
									</div>
									<div class="reply-center">
										<p>正品行货，很棒</p>
									</div>
									<div class="reply-right">
										<div class="reply_avatar">
										<img src="{{asset('images/7_170312181624_2.jpg')}}">
										<span class="reply_avatar_userName">祢夏了夏天</span>
										</div>
										<p class="profileGrade"><span class="viplevel">V2会员</span><span class="area">石家庄市</span></p>
									</div>
								</li>
							</ol>
							<div class="com-table-footer">
								<div class="ui-page-wrap">
									<div class="ui-page">
										<a rel="1" class="ui-page-curr" href="#">1</a>
										<a rel="2" href="#">2</a>
										<a rel="3" href="#">3</a>
										<a rel="4" href="#">4</a>
										<a rel="5" href="#">5</a>
										<a rel="6" href="#">6</a>
										<span>...</span>
										<a rel="2" class="ui-pager-next" href="#">下一页</a>
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="jkdhfld">
							<div class="mt"><h3>商品评价</h3></div>
							<div class="consult-rt">
				                <table class="consult-form">
				                    <caption>我要发表咨询</caption>
				                    <tbody><tr id="tr-zxlx">
				                        <th>咨询类型:&nbsp;</th>
				                        <td>
				                            <label class="cst-type"><input type="radio" value="1">购买咨询</label>
				                            <label class="cst-type"><input type="radio" value="2">促销优惠</label>
				                            <label class="cst-type"><input type="radio" value="3">支付问题</label>
				                            <label class="cst-type"><input type="radio" value="4">售后咨询</label>
				                        </td>
				                    </tr>
				                        <tr class="consul_type_wrap">
				                            <th>回复方式:&nbsp;</th>
				                            <td>
				                                <div>
				                                    <label class="cst-type" for="consul_site">
				                                        <input type="radio" value="consul_site" name="hffs-type" id="consul_site" checked="checked">网站
				                                    </label>
				                                    <label class="cst-type" for="consul_mail">
				                                        <input type="radio" value="consul_mail" name="hffs-type" id="consul_mail">邮箱
				                                    </label>
				                                    <label class="cst-type" for="consul_weixin">
				                                        <input type="radio" value="consul_weixin" name="hffs-type" id="consul_weixin">微信
				                                    </label>
				                                </div>
				                                <div class="weixin-sm" style="display: none;">
				                                    <div class="img-w">
				                                        <img gome-src="//js.gomein.net.cn/f2eimage/ui/customer_service_weixin.jpg')}}" alt="手机下单更优惠" title="手机下单更优惠">
				                                    </div>
				                                    <div class="text">
				                                        <p>扫描二维码，关注客服中心公众号，我们将为您提供更加快速便捷的咨询服务</p>
				                                    </div>
				                                </div>
				                            </td>
				                        </tr>
				                        <tr class="consul_type_wrap" id="email-address" style="display: none;">
				                            <th>邮箱地址:&nbsp;</th>
				                            <td>
				                                <input type="text" value="请填写您的邮箱，以便客服回复！" maxlength="50" id="consul_type_text" name="consul_type_text">
				                                <span class="email-error"></span>
				                            </td>
				                        </tr>
				                    <tr id="gm-zxnr">
				                        <th>咨询内容:&nbsp;</th>
				                        <td>
				                            <div class="txt-area-wrap">
				                                <textarea name="" id="quesTxt" class="txt-area"></textarea>
				                            </div>
				                        </td>
				                    </tr>
				                    <tr id="gm-submit">
				                        <th></th>
				                        <td><a class="consult-smt-btn redlink">提交</a><span class="tips">0/200</span></td>
				                    </tr>
								</tbody></table>
								<div class="consult-lt">
									<dl class="consult-question clearfix">
										<dt>常见问题</dt>
										<dd>•<a href="#" target="_blank" title="忘记密码如何操作？">忘记密码如何操作？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何增强账户安全系数？">如何增强账户安全系数？</a></dd>
										<dd>•<a href="#" target="_blank" title="怎么操作商品签收？">怎么操作商品签收？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何电话订购？">如何电话订购？</a></dd>
										<dd>•<a href="#" target="_blank" title="如何查询商品参数及包装清单？">如何查询商品参数及包装清单？</a></dd>
										<dd>•<a href="#" target="_blank" title="商品无货怎么办？">商品无货怎么办？</a></dd>
									</dl>
								</div>
							</div>
						</div>
						<!---->
					</div>
				</ul>
			</div>
		</div>
		<script type="text/javascript">jQuery(".slideTxtBox_1").slide({trigger:"click"});</script>
		<!---->
	</div>
</div>




<!--商品详情结束-->
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


<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - 'images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>