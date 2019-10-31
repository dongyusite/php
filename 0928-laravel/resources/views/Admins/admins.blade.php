<html>

<!--<frameset cols="25%,50%,25%">-->
    <!--<frame src="http://www.qq.com" />-->
    <!--<frame src="http://www.163.com" />-->
    <!--<frame src="http://www.baidu.com" />-->
<!--</frameset>-->


<!--<frameset rows="25%,50%,25%">-->
    <!--<frame src="http://www.qq.com" />-->
    <!--<frame src="http://www.163.com" />-->
    <!--<frame src="http://www.baidu.com" />-->
<!--</frameset>-->

<!--<frameset cols="20%,*">-->
    <!--<frame src="left.html">-->

    <!--<frameset rows="20%,*">-->
        <!--<frame src="top.html">-->
       <!--<frameset cols="20%,*">-->
           <!--<frame src="bottom-left.html">-->
           <!--<frame src="bottom-right.html">-->
       <!--</frameset>-->
    <!--</frameset>-->

</frameset>


<iframe src="{{url('Admins/top')}}" name="top" frameborder="0" width="100%" height="88" scrolling="no"></iframe>
<div id="mid">
    <iframe src="{{url('Admins/left')}}" name="left" frameborder="0" width="12%" height="100%" scrolling="no"></iframe>
    <iframe  id="main" src="{{url('Admins/main')}}" name="main" frameborder="0" width="80%" height="100%" scrolling="scroll"></iframe>
</div>
<iframe id="bottom" src="{{url('Admins/footer')}}" name="footer" frameborder="0" width="100%" height="31" scrolling="no"></iframe>

</html>