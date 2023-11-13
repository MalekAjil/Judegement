//اسم المستخدم
function username1(){
document.form1.username.focus();
document.form1.username.select();
}

//كلمة السر
function password1(){
document.form1.password.focus();
document.form1.password.select();
}

// الاسم و الكنية  
function client_name1(){
document.form1.client_name.focus();
document.form1.client_name.select();
}

//اسم الاب
function father_client1(){
document.form1.father_client.focus();
document.form1.father_client.select();
}

//اسم الأم
function mother_client1(){
document.form1.mother_client.focus();
document.form1.mother_client.select();
}

//الجنسية
function citizen1(){
document.form1.citizen.focus();
document.form1.citizen.select();
}

//سنة الميلاد
 function year_birth1(){
document.form1.year_birth.focus();
document.form1.year_birth.select();
} 

// الايميل
function Highlight(){
document.form1.email.focus();
document.form1.email.select();
}

// العنوان
function address2(){
document.form1.home_address.focus();
document.form1.home_address.select();
}
function address4(){
document.form1.work_address.focus();
document.form1.work_address.select();
}

//رقم الهوية

function personal_num1(){
document.form1.personal_num.focus();
document.form1.personal_num.select();}

//جهة صدور الهوية

function place_out1(){
document.form1.place_out.focus();
document.form1.place_out.select();
}
//رقم الخانة
function digit_num1(){
document.form1.digit_num.focus();
document.form1.digit_num.select();
}

//سنة صدور الهوية
/* function year1(){
document.form1.year.focus();
document.form1.year.select();
} */

// العمل
function job1(){
document.form1.job.focus();
document.form1.job.select();
}

//هاتف العمل
function work_phone1(){
document.form1.work_phone.focus();
document.form1.work_phone.select();}

//هاتف المنزل
function home_phone1(){
document.form1.home_phone.focus();
document.form1.home_phone.select();}

function check(){ 
var username=document.form1.username.value; 
var password=document.form1.password.value;
var client_name=document.form1.client_name.value;
var father_client=document.form1.father_client.value; 
var mother_client=document.form1.mother_client.value; 
var citizen=document.form1.citizen.value; 
var year_birth=document.form1.year_birth.value;
var email=document.form1.email.value;
var address1=document.form1.home_address.value; 
var address3=document.form1.work_address.value; 
var personal_num=document.form1.personal_num.value;
var place_out=document.form1.place_out.value;
var year=document.form1.year.value;
var digit_num=document.form1.digit_num.value;
var job=document.form1.job.value; 
var work_phone=document.form1.work_phone.value; 
var home_phone=document.form1.home_phone.value;
var blanks = ''*100;
var naughty = new Array

("arse","bastard","cunt","fuck","shit","wanker","piss","twat");
var sneaky = email.toLowerCase();
var illegal = "ادخلت الرموز الخطأ .\n الرموز المسموح هي التالية وبس.\n\n الأحرف الأنكليزية الصغيرة أو الكبيرة\n الأرقام\n رمز واحد من( @ )\n الخط السفلي( _ )\nالخط القصير( - )\n  الإيميل مابدو فراغ\n ولا بدو الأحرف العربية \n \n";


//اسم المستخدم  كلمة السر  الاسم   اسم الأب  اسم الأم

if(username =="")
	{
	alert("ادخل اسم المستخدم خيّو");
	username1(); return false;}
else if(username.length < 2)
	{alert("اش هالاسم للمستخدم أصغر من حرفين هدا شي ما بيصير");
	username1();return false;}
	
if(password =="")
	{
	alert("ادخل كلمة السر خيو");
	password1(); return false;}
else if(password.length < 4)
	{alert("اش هالكلمة أصغر من 4 رموز مابيصير هالحكي");
	password1();return false;}
	
if(client_name =="")
	{
	alert("وين اسمك خيّو");
	client_name1(); return false;}
else if(client_name.length < 2)
	{alert("شو اسمك اصغر من حرفين اش هالحكي");
	client_name1();return false;}
	

if(father_client =="")
	{
	alert("ادخل اسم الحجي");
	father_client1(); return false;}
else if(father_client.length < 2)
	{alert("شو اسم الحجي اصغر من حرفين اش هالحكي");
	father_client1();return false;}

	
if(mother_client =="")
	{
	alert("ادخل اسم الحجة");
	mother_client1(); return false;}
else if(mother_client.length < 2)
	{alert("شو اسم الحجة اصغر من حرفين اش هالحكي");
	mother_client1();return false;}
	
if(citizen =="")
	{
	alert("اش ما عندك جنسية (نكرة)");
	citizen1(); return false;}
else if(citizen.length < 2)
	{alert("شو هالجنسية اصغر من حرفين اش هالحكي");
	citizen1();return false;}

if(year_birth =="")
	{
	alert("ادخل سنة ميلادك");
	 return false;
}
else if(year_birth.length < 4)
	{alert("سنة أصغر من أربع حروف ما بيصير");
	return false;
}

// الايميل
if (email <= blanks){
  alert("شو نسيت تكتب الإيميل ");
  Highlight();return false;
  }
else if (email.length > 63){
   alert('إيميلك طويل كتير شو هادا اكبر من 63 حرف');
   Highlight();return false;
   }
else if (email.charAt(0) == " "){
   alert('مابيبدأ الإيميل بفراغ ');
   Highlight();return false;
   }
else if (email.charAt(email.length-1) == " "){
   alert('مابينتهي الإيميل فراغ');
   Highlight();return false;
   }
else if (email.indexOf(" ") !=-1){
   alert('مالازم يكون في فراغ');
   Highlight();return false;
   }

//CHECK FOR ILLEGAL CHARACTERS 1
for (i=0; i < email.length; i++){
var caps = "a".toUpperCase();
var E = email.substring(i, i + 1);
if ((E < "0" || "9" < E ) && E != "@"  && E !="." && E !="-"  && E !="_"  &&  E < caps || "z" < E)
{
 alert(illegal);
 Highlight();return false;
 }
}
//CHECK FOR ILLEGAL CHARACTERS 2
if ((email.indexOf('`',0) != -1) || (email.indexOf(String.fromCharCode(94)) != -1) || (email.indexOf(String.fromCharCode(92)) != -1) || (email.indexOf('[',0) != -1) || (email.indexOf(']',0) != -1))
{
 alert(illegal);
 Highlight();return false;
}
//CHECK FOR SWEARING
for (i=0; i < email.length; i)
{  
 if (sneaky.indexOf(naughty[i]) != -1){
 alert('Please remove the swear word - '+naughty[i].toUpperCase());
 Highlight();return false;
 }
i++;
}
//GENERAL FORMATING
if (email.charAt(0) =="."){
 alert('ما يبدأ الإيميل بنقطة');
 Highlight();return false;
}
else if (email.split('@').length > 2){
 alert('لإيميل بدو رمز @ ');
 Highlight();return false;
}
else if (email.indexOf ('@',0) == -1){
 alert("ما حطيط @");
 Highlight();return false;
}
else if (email.indexOf("@") < 2){
 alert("قبل رمز @ بدك تكتب اقل شي حرفين");
 Highlight();return false;
}
else if (email.charAt(email.length-1) == "@"){
 alert(' ما بينتهي الإيميل برمز @');
 Highlight();return false;
}
else if (email.indexOf ('.') == -1){
 alert("الإيميل اقل شي بدو نقطة واحدة");
 Highlight();return false;
}
else if (email.indexOf('.',email.indexOf('@')) == -1){
 alert('بعد رمز @ اقل شي بدك تحط نقطة واحدة');
 Highlight();return false;
}
else if (email.substring(email.indexOf('@'),email.length).indexOf(".") < 4){
 alert('بعد رمز @ اقل شي بدك تحط 3 حروف');  
 Highlight();return false;
}
else if (email.lastIndexOf(".")+2 == email.length){
 alert('بعد النقطة اقل شي بدك تحط تحط 3 حروف ');
 Highlight();return false;
}
else if (email.substring(email.lastIndexOf("."),email.length).length > 4){
 alert('بينتهي الإيميل اكتر شي ب 3 حروف');
 Highlight();return false;
}
else if (email.charAt(email.length-1) =="."){
 alert('الإيميل مابينتهي بنقطة');
 Highlight();return false;
}

// العنون
if(address1 =="")
	{
	alert("وين ساكن (ة) بالتفصيل ");
	address2(); return false;}
else if(address1 .length < 2)
	{alert("ماعرفتا");
	address2();return false;}

if(address3 =="")
	{
	alert("وين عم بتشتغل(ي) بالتفصيل ");
	address4(); return false;}
else if(address3 .length < 2)
	{alert("ماعرفتا");
	address4();return false;}

// رقم الهوية

if(personal_num =="")
	{
	alert(" شقد رقم الهوية");
	personal_num1(); return false;}
else if(personal_num.length < 12)
	{alert("أقل من 12 ما بيصير");
	personal_num1();return false;}

// جهة صدور الهوية

if(place_out =="")
	{
	alert(" من وين طالعت(ي) الهوية");
	place_out1(); return false;}
else if(place_out.length < 2)
	{alert("ماعرفتا");
	place_out1();return false;}

//سنة صدور الهوية
/* if(year == "")
	{
	alert(" أيمت طالعت(ي) الهوية");
	 return false;}
else if(year.length < 4)
	{alert(" هدا حكي غير منطقي السنة أرع حروف أقل شي");
	return false;} */

//رقم الخانة
if(digit_num =="")
	{
	alert(" شقد رقم خانتك");
	digit_num1(); return false;}
else if(digit_num.length < 1)
	{alert("ما بيصير هالحكي");
	digit_num1();return false;}
//العمل  	
if(job=="")
	{
	alert("شو ما بتشتغل(ي) شي كنك ");
	job1(); return false;}
else if(job.length < 2)
	{alert(" شو شغيل بس هيك ");
	job1();return false;}

//هاتف العمل	
if(work_phone =="")
	{
	alert(" شقد رقم تلفون شغلك");
	work_phone1(); return false;}
else if(work_phone.length < 6)
	{alert("ما عندنا مثل هيك رقم");
	work_phone1();return false;}

//هاتف المنزل
if(home_phone =="")
	{
	alert(" شقد رقم تلفون بيتك");
	home_phone1(); return false;}
else if(home_phone.length < 6)
	{alert("ما عندنا مثل هيك رقم");
	home_phone1();return false;}
return true;
//window.location="register_client_code.php";
}