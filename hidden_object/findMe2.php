<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-16">
  <title>hidden guest </title>
  
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  <style>
  
  #panel{
  position:absolute;
  width:700px;
  height:130px;
  z-index:60;
	background-color:navy;
	color:#FFFFFF;
	padding:50px;
	left:100px;
	display:none;
}
  
  
  

 table
{
position:absolute;
left:100px;
top:100px;
height:500px;
width:800px;
border: 4px solid black;
text-align:center;
overflow:scroll;
background-color:#FFCC00;

opacity:0.8;
}


  
  td:hover{
  
  background-color:navy;
  
  
  
  }
  
   body{
  
  
  background-image:url('img/avrudu.jpg');
  
	background-color:#cccccc;
  
  }
  
  
  
  </style>
  
  <script>
  
  
  //random number generation;
  x=Math.floor((Math.random()*10)+1);
  y=Math.floor((Math.random()*10)+1);
  
  //str is the position of the hidden object;
  str=x+"&"+y;
  
  //click count
  clicks=1;
	
	$(document).ready(function(){
	
	
	 $("td").click(function(){
	
		clicks++;
		
		g=$(this).attr("id");
		
		alert("jon"+g+" random "+str);
		
		if(str==g){ //..
		
			if(clicks>3){
			
				alert("no more attempts ");
			
			}else{
		
		$(this).css("background-color","red");
		$("#panel").slideDown(1200).html("<h2> සුබ පැතුම් ! .. ඔබ ජයග්‍රණය කළා  </h2>");
		}
		
		
		}else{ //...
		
			if(clicks>4){
			
				alert("no more attempts ");
			
			}else{
			
		$(this).css( "background-image","url('img/sad_1.png')" );
		
		
		}//....
		
		}
	 
		
		
	 
	 
	 
	 });
	
	
	
	
	
	});
	
  
  
  </script>
  

  
</head>
<body>


<div id="table"  >

<table border="1"   >

<?php


$y=1;

while($y<=10){
	
echo "<tr>


	
 <td id='1&".$y."'> &nbsp; </td>
 <td id='2&".$y."'> &nbsp;</td>
 <td id='3&".$y."'> &nbsp;</td>
 <td id='4&".$y."'> &nbsp;</td>
 <td id='5&".$y."'> &nbsp;</td>
 <td id='6&".$y."'> &nbsp;</td>
 <td id='7&".$y."'> &nbsp;</td>
 <td id='8&".$y."'> &nbsp;</td>
 <td id='9&".$y."'> &nbsp;</td>
 <td id='10&".$y."'> &nbsp;</td>
 
 

 
 </tr>";	
	
	
 $y++;   } 
 
 
 ?>


</table> 

  </div>
  
  
  <div id="panel"></div>
  
</body>
</html>