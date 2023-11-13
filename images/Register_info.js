// الاسم  الكنية  اسم الأب  اسم الأم
function f_name1(){
document.form1.f_name.focus();
document.form1.f_name.select();
}

function l_name1(){
document.form1.l_name.focus();
document.form1.l_name.select();
}

function father_name1(){
document.form1.father_name.focus();
document.form1.father_name.select();
}

function mother_name1(){
document.form1.mother_name.focus();
document.form1.mother_name.select();
}
// مكان الولادة
function birth_place1(){
document.form1.birth_place.focus();
document.form1.birth_place.select();
}

//المدينة

function city1(){
document.form1.city.focus();
document.form1.city.select();
}
// العنوان
function address1(){
document.form1.address.focus();
document.form1.address.select();
}
// الاختصاص
function specialization1(){
document.form1.specialization.focus();
document.form1.specialization.select();
}
// الايميل
function Highlight(){
document.form1.mail.focus();
document.form1.mail.select();
}
function check(){
var f_name=document.form1.f_name.value; 
var l_name=document.form1.l_name.value; 
var father_name=document.form1.father_name.value; 
var mother_name=document.form1.mother_name.value; 
var birth_place=document.form1.birth_place.value; 
var country=document.form1.country.value; 
var city=document.form1.city.value; 
var address=document.form1.address.value; 
var specialization=document.form1.specialization.value; 

var mailbox = document.form1.mail;
var mail = document.form1.mail.value;
var blanks = ''*100;
var naughty = new Array("arse","bastard","cunt","fuck","shit","wanker","piss","twat");
var sneaky = mail.toLowerCase();
var illegal = "ادخلت الرموز الخطأ .\n الرموز المسموح هي التالية وبس.\n\n الأحرف الأنكليزية الصغيرة أو الكبيرة\n الأرقام\n رمز واحد من( @ )\n الخط السفلي( _ )\nالخط القصير( - )\n  الإيميل مابدو فراغ\n ولا بدو الأحرف العربية \n \n";


// الاسم  الكنية  اسم الأب  اسم الأم
if(f_name =="")
	{
	alert("ادخل الاسم عمو");
	f_name1(); return false;}
else if(f_name.length < 2)
	{alert("شو اسمك اصغر من حرفين اش هالحكي");
	f_name1();return false;}
	

if(l_name =="")
	{
	alert("ادخل كنيتك");
	l_name1(); return false;}
else if(l_name.length < 2)
	{alert("شو كنيتك اصغر من حرفين اش هالحكي");
	l_name1();return false;}
	
if(father_name =="")
	{
	alert("ادخل اسم الحجي");
	father_name1(); return false;}
else if(father_name.length < 2)
	{alert("شو اسم الحجي اصغر من حرفين اش هالحكي");
	father_name1();return false;}

	
if(mother_name =="")
	{
	alert("ادخل اسم الحجة");
	mother_name1(); return false;}
else if(mother_name.length < 2)
	{alert("شو اسم الحجة اصغر من حرفين اش هالحكي");
	mother_name1();return false;}
	
//مكان الولادة
if(birth_place =="")
	{
	alert("وين ولدان ");
	birth_place1(); return false;}
else if(birth_place.length < 2)
	{alert("ماعرفتا");
	birth_place1();return false;}
	
// المدينة

if(city =="")
	{
	alert(" إينا مدينة");
	city1(); return false;}
else if(city.length < 2)
	{alert("ماعرفتا");
	city1();return false;}
	
// العنون
if(address =="")
	{
	alert("وين ساكن (ة) بالتفصيل ");
	address1(); return false;}
else if(address .length < 2)
	{alert("ماعرفتا");
	address1();return false;}


// الايميل
if (mail <= blanks){
  alert("شو نسيت تكتب الإيميل ");
  Highlight();return false;
  }
else if (mail.length > 62){
   alert('إيميلك طويل كتير شو هادا اكبر من 63 حرف');
   Highlight();return false;
   }
else if (mail.charAt(0) == " "){
   alert('مابيبدأ الإيميل بفراغ ');
   Highlight();return false;
   }
else if (mail.charAt(mail.length-1) == " "){
   alert('مابينتهي الإيميل فراغ');
   Highlight();return false;
   }
else if (mail.indexOf(" ") !=-1){
   alert('مالازم يكون في فراغ');
   Highlight();return false;
   }

//CHECK FOR ILLEGAL CHARACTERS 1
for (i=0; i < mail.length; i++){
var caps = "a".toUpperCase();
var E = mail.substring(i, i + 1);
if ((E < "0" || "9" < E ) && E != "@"  && E !="." && E !="-"  && E !="_"  &&  E < caps || "z" < E){
 alert(illegal);
 Highlight();return false;
 }
}
//CHECK FOR ILLEGAL CHARACTERS 2
if ((mail.indexOf('`',0) != -1) || (mail.indexOf(String.fromCharCode(94)) != -1) || (mail.indexOf(String.fromCharCode(92)) != -1) || (mail.indexOf('[',0) != -1) || (mail.indexOf(']',0) != -1)){
 alert(illegal);
 Highlight();return false;
}
//CHECK FOR SWEARING
for (i=0; i < mail.length; i){  
 if (sneaky.indexOf(naughty[i]) != -1){
 alert('Please remove the swear word - '+naughty[i].toUpperCase());
 Highlight();return false;
 }
i++;
}
//GENERAL FORMATING
if (mail.charAt(0) =="."){
 alert('ما يبدأ الإيميل بنقطة');
 Highlight();return false;
}
else if (mail.split('@').length > 2){
 alert('لإيميل بدو رمز @ ');
 Highlight();return false;
}
else if (mail.indexOf ('@',0) == -1){
 alert("ما حطيط @");
 Highlight();return false;
}
else if (mail.indexOf("@") < 2){
 alert("قبل رمز @ بدك تكتوب اقل شي حرفين");
 Highlight();return false;
}
else if (mail.charAt(mail.length-1) == "@"){
 alert(' ما بينتهي الإيميل برمز @');
 Highlight();return false;
}
else if (mail.indexOf ('.') == -1){
 alert("الإيميل اقل شي بدو نقطة واحدة");
 Highlight();return false;
}
else if (mail.indexOf('.',mail.indexOf('@')) == -1){
 alert('بعد رمز @ اقل شي بدك تحط نقطة واحدة');
 Highlight();return false;
}
else if (mail.substring(mail.indexOf('@'),mail.length).indexOf(".") < 4){
 alert('بعد رمز @ اقل شي بدك تحط 3 حروف');  
 Highlight();return false;
}
else if (mail.lastIndexOf(".")+2 == mail.length){
 alert('بعد النقطة اقل شي بدك تحط تحط 3 حروف ');
 Highlight();return false;
}
else if (mail.substring(mail.lastIndexOf("."),mail.length).length > 4){
 alert('بينتهي الإيميل اكتر شي ب 3 حروف');
 Highlight();return false;
}
else if (mail.charAt(mail.length-1) =="."){
 alert('الإيميل مابينتهي بنقطة');
 Highlight();return false;
}
// الاختصاص	
if(specialization=="")
	{
	alert("اش اختصاص شهادتك بالتفصيل! ");
	specialization1(); return false;}
else if(specialization.length < 2)
	{alert("بس هيك ");
	specialization1();return false;}

window.location="Register_info_complete.php";

}

