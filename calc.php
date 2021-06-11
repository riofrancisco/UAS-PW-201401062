<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
 <link rel="stylesheet" href="calc.css">
</head>
 
<body background="bg.jpg">
 <script>
 function num(result){
 form.hasil.value=form.hasil.value+result;
 
 }
 </script>
 <div class="container">
 <form name="form">
 <div class="display">
 <input type="text" placeholder="0" name="hasil" />
 </div>
 <div class="buttons">
   <div class="row">
 <input type="button" name="b7" value="7" onClick="num(b7.value)">
   <input type="button" name="b8" value="8" onClick="num(b8.value)">
   <input type="button" name="b9" value="9" onClick="num(b9.value)">
   <input type="button" name="addb" value="+" onClick="num(addb.value)">
 </div>
 
 <div class="row">
 <input type="button" name="b4" value="4" onClick="num(b4.value)">
   <input type="button" name="b5" value="5" onClick="num(b5.value)">
   <input type="button" name="b6" value="6" onClick="num(b6.value)">
   <input type="button" name="subb" value="-" onClick="num(subb.value)">
 </div>
 
 <div class="row">
 <input type="button" name="b1" value="1" onClick="num(b1.value)">
   <input type="button" name="b2" value="2" onClick="num(b2.value)">
   <input type="button" name="b3" value="3" onClick="num(b3.value)">
   <input type="button" name="mulb" value="*" onClick="num(mulb.value)">
 </div>
 
 <div class="row">
 <input type="button" name="b0" value="0" onClick="num(b0.value)">
   <input type="button" name="potb" value="." onClick="num(potb.value)">
   <input type="button" name="divb" value="/" onClick="num(divb.value)">
   <input type="button" class="red" value="=" onClick="hasil.value=eval(hasil.value)">
 </div>
 </div>
 
 </form>
 </div>
</body>
 
</html>