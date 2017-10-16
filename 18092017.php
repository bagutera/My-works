 <?php

 /*
 $a=(int)"10";
 $b=(float)"15.500";
 echo($a+$b);
 */
 
 /*
 if(isset($_GET['a'])){
	 if(!empty($_GET['a'])){
 $a=$_GET['a'];
 
}else{$a=55;}
 }else{$a=3;}
 
  if(isset($_GET['b']) && !empty($_GET['b'])){
 $b=$_GET['b'];
 }else{$b=1;}
 echo $a/$b
 */
 
 /*
 if(isset($_GET['take'])){
$test=$_GET['take'];
 }else{$test='';}
	 if($test=="orel"){
	echo 'Idem v piceriju';
 }else if($test=='reshka'){ 
	echo 'Zakazivaem pizzu';
 }else if($test== 'rebro'){
	 echo 'Idem k sosedjam';
 }else{
	 echo 'idem na lekciju';
 }
*/


/*
switch($test)
{
	case 'orel':
		echo 'Idem v piceriju';
	break;
	case 'reshka':
		echo 'Zakazivaem pizzu';
	break;
	case 'rebro':
		echo 'Idem k sosedjam';
	break;
	default:
		echo 'Idem na lekciju';
	break;
}
*/

 
 /*
 <script>
 do{
	otvet=prompt("Kupi slonika!");
if (otvet=="Da")
{
	alert("Uraaa");
}
else
{
	alert("Vsje govorjat: " +otvet);
}
  }while(otvet!="Da");
 </script>
 */

 
 
 $massive=array("Odin","Dva","Tri");
 foreach($massive as $key => $value)
 {
	 echo 'zapis N'.$key.' soderzit ' .$value. '<br>';
 }
 
 ?>