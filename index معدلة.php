<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>المحاكمة القانونية عبر الانترنت</title>

<style type="text/css">
<!--
body,td,th {
	font-size: 16px;
	color: #000099;
	font-weight: bold;
}
.spanstyle {
	COLOR: black ; FONT-FAMILY: Verdana; POSITION: absolute; TOP: -50px; VISIBILITY: visible
}
.style7 {color: #660033}
.style8 {color: #660033; font-size: 18px; }
-->

</style>

<SCRIPT LANGUAGE="JavaScript">

var x, y;
var step = 10;
var flag = 0;

var message = " w elcom e in our website ";
message = message.split("");
var xpos = new Array();
for (i = 0; i <= message.length - 1; i++) {
xpos[i] = -50;
}
var ypos = new Array();
for (i = 0; i <= message.length - 1; i++) {
ypos[i]= -50;
}
function handlerMM(e) {
x = (document.layers) ? e.pageX : document.body.scrollLeft + event.clientX;
y = (document.layers) ? e.pageY : document.body.scrollTop + event.clientY;
flag = 1;
}
function makesnake() {
if (flag == 1 && document.all) {
for (i = message.length - 1; i >= 1; i--) {
xpos[i] = xpos[i - 1] + step;
ypos[i] = ypos[i - 1];
}
xpos[0] = x + step;
ypos[0] = y;
for (i = 0; i < message.length - 1; i++) {
var thisspan = eval("span" + (i) + ".style");
thisspan.posLeft = xpos[i];
thisspan.posTop = ypos[i];
   }
}
else if (flag==1 && document.layers) {
for (i = message.length - 1; i >= 1; i--) {
xpos[i] = xpos[i - 1] + step;
ypos[i] = ypos[i - 1];
}
xpos[0] = x + step;
ypos[0] = y;
for (i = 0; i < message.length - 1; i++) {
var thisspan = eval("document.span" + i);
thisspan.left = xpos[i];
thisspan.top = ypos[i];
   }
}
var timer = setTimeout("makesnake()", 10);
}
// End -->
</script>

</head>

<body background="images/indexp.jpg"  onload="makesnake()">

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
for (i = 0; i <= message.length-1; i++) {
document.write("<span id='span"+i+"' class='spanstyle'>");
document.write(message[i]);
document.write("</span>");
}
if (document.layers) {
document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;
// End -->
</script>

<//--><//"--><!-- VC layer -->
<SCRIPT LANGUAGE="JavaScript">
<!--
document.write('<LAYER SRC="' + ValueBanner + '&t=html" WIDTH="' + IWidth
+ '" ');
document.write('HEIGHT="' + IHeight + '" VISIBILITY="hide" onLoad=');
document.write('"moveToAbsolute(VC.pageX,VC.pageY); clip.width=' + IWidth
+ '; ');
document.write('clip.height=' + IHeight +
'; visibility=\'show\'"></LAYER>');
// -->
</SCRIPT>

<style type="text/css">

#topbar{
position:absolute;
border: 1px solid black;
padding: 2px;
background-image:url(images/f1.gif);
width: 370px;
visibility: hidden;
z-index: 0;
}

</style>

<script type="text/javascript">
var persistclose=0 //set to 0 or 1. 1 means once the bar is manually closed, it will remain closed for browser session
var startX = 30 //set x offset of bar in pixels
var startY = 4 //set y offset of bar in pixels
var verticalpos="fromtop" //enter "fromtop" or "frombottom"

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function get_cookie(Name) {
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) {
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function closebar(){
if (persistclose)
document.cookie="remainclosed=1"
document.getElementById("topbar").style.visibility="hidden"
}

function staticbar(){
barheight=document.getElementById("topbar").offsetHeight
var ns = (navigator.appName.indexOf("Netscape") != -1) || window.opera;
var d = document;
function ml(id){
var el=d.getElementById(id);
if (!persistclose || persistclose && get_cookie("remainclosed")=="")
el.style.visibility="visible"
if(d.layers)el.style=el;
el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
el.x = startX;
if (verticalpos=="fromtop")
el.y = startY;
else{
el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
el.y -= startY;
}
return el;
}
window.stayTopLeft=function(){
if (verticalpos=="fromtop"){
var pY = ns ? pageYOffset : iecompattest().scrollTop;
ftlObj.y += (pY + startY - ftlObj.y)/8;
}
else{
var pY = ns ? pageYOffset + innerHeight - barheight: iecompattest().scrollTop + iecompattest().clientHeight - barheight;
ftlObj.y += (pY - startY - ftlObj.y)/8;
}
ftlObj.sP(ftlObj.x, ftlObj.y);
setTimeout("stayTopLeft()", 10);
}
ftlObj = ml("topbar");
stayTopLeft();
}

if (window.addEventListener)
window.addEventListener("load", staticbar, false)
else if (window.attachEvent)
window.attachEvent("onload", staticbar)
else if (document.getElementById)
window.onload=staticbar
</script>

<div style="visibility: visible; left: 30px; top: 2303px;" id="topbar"><p align="center" >
<a href="" onclick="closebar(); return false">
</a>
    أهلا وسهلا بك زائرنا الكريم يأسفنا أنك غير مشترك في موقعنا <br>
<a href="register_client_form.htm"><font color="#FF0000">(للتسجيل كمستخدم الرجاء اضغط هنـا) </font></a>
<br>
<a href="register_lawer_form.htm"><font color="#FF0000">للتسجيل كمحامي الرجاء اضغط هنـا   </font></a>
</p></div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8526332-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8526332-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<table width="95%" height="369"   >
  <tr align="right" >
    <td colspan="5"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="729" height="94">
      <param name="movie" value="images/flash1.swf">
      <param name="quality" value="high">
      <embed src="images/flash1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="729" height="94"></embed>
    </object></td>
  </tr>
  <tr>
    <td width="139" height="30" align="right" class="style8">
<a href="information.htm" title="معلومات حول الموقع"><span class="style7">معلومات حول الموقع</span></a> </td>
    <td width="222" align="right" class="style8"><a href="graphic.htm" title="صور عن بعض المحاكم العالمية"><span class="style7">صور عن بعض المحاكم العالمية</span></a></td>
    <td width="92" align="right"  class="style7"><a href="history.htm" title="لمحة عن تاريخ القضاء في العالم منذ القديم وحتى الآن"><span class="style7">تاريخ القضاء</span></a></td>
    <td width="109" align="right" valign="top" ><a href="register_lawer_form.htm"><span class="style7">تسجيل محامي جديد</span></a></td>
    <td width="159" align="right" ><a href="register_client_form.htm" ><span class="style7">تسجيل مستخدم جديد </span></a></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="2" align="center">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="452" height="171">
      <param name="movie" value="images/flash3.swf">
      <param name="quality" value="high">
      <embed src="images/flash3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="452" height="171"></embed>
    </object>

</td>
    <td height="143" align="right" valign="top">
	
	</td>
    
   <form name="mainpage" method="post" onSubmit="mk()">
    <td align="right" valign="top"><table width="100%" align="right"  >
      <tr align="right">
        <td width="62%"><div align="right">
            <input name="username" type="text" id="username" size="10" maxlength="50">
        </div></td>
        <td width="60%"><div align="center" class="style33">اسم المستخدم </div></td>
      </tr>
      <tr align="right">
        <td><div align="right">
            <input name="password" type="password" id="password" size="10" maxlength="25">
        </div></td>
        <td width="60%"><div align="center" class="style33">كلمة السر</div></td>
      </tr>
      <tr align="right">
        <td><div align="right">
            <select name="adjective" id="adjective">
              <option value="client">مستخدم</option>
              <option value="lawer">محامي</option>
            </select>
        </div></td>
        <td width="40%"><div align="centert" class="style38"><span class="style33">الصفة</span></div></td>
      </tr>
      <tr align="center">
        <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="إرسال" title="ادخل اسم العضو وكلمة المرور الخاصة بك في الحقول المجاورة لتسجيل الدخول, أو اضغط على رابط 'التسجيل' لإنشاء حساب خاص بك." accesskey="s">
        </div></td>
       
      </tr>
    </table>

</td></form>
  </tr>
  <tr>
    <td height="77" colspan="2" align="center" valign="top">

    <marquee  dir="rtl" direction="left" scrollamount="10"  height="65" width="250">
    <font size="+4" color="#330066" face="Times New Roman, Times, serif"><font color="#FF0000"><b>S</b></font>uperVised By: Mrs.Rahaf Al-Refaie</font></marquee>
    </td>
  </tr>
  <tr>
  <td colspan="3" align="center">
  <img src="images/maker.jpg" height="100" width="461">
  </td> <td height="143" align="right" valign="top">
	</td></tr>
</table>
<script type="text/javascript">
function mk()
{var location=document.mainpage.adjective.value;
if(location=="client")
{
	document.mainpage.action="index_client.php";
	}
else if(location=="lawer")
	{
		document.mainpage.action="index_lawer.php";
		}
}
</script>

</body>
</html>
