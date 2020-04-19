
<!-- <html>
<head> -->
<!-- 	<script type="text/javascript">
		function inss(vall) {
			// body...
			document.getElementById('op').innerHTML=vall;
		}
	</script> -->
<!-- </head>
<body>
	<p id='op'>hii</p>
	<button onclick="inss('op')">click</button>
</body>
</html> -->
<?php
// if($track_html_activity_here)
// {
//$pyscript = 'C:\\xampp\\htdocs\\chkk.py';
$pyscript = 'C:\\xampp\\htdocs\\face_similarity.py';
$python = 'C:\\Users\\bala\\AppData\\Local\\Programs\\Python\\Python36\\python.exe';
//echo $pyscript;
$filePath = 'C:\\xampp\\htdocs\\f2.png';
//exec('python C:\xampp\htdocs\chkk.py');
 $cmd = "$python $pyscript";
 //echo $cmd;

 exec("$cmd", $output);// echo "gjghj".sizeof($output);
 for ($i=0; $i <sizeof($output) ; $i++) { 
 	# code...
 	$hh="loll";
 	//echo $output[$i];
 	//echo gettype($output[$i]);
 	//echo $output;
 	if($output[$i]!="No Face Identified"){
 	 $ipaa=explode(",", $output[$i]);

 	//$iparr = split(",", $output[$i]); 
 	//echo $ipaa[0];
 	$sim = explode(":", $ipaa[0]);
 	$simtt = explode(":", $ipaa[1]);
 	$simjj =$simtt[1];
 	//echo "simjj:".$simjj;
 	$sim_value=$sim[1];
 	echo "<script type='text/javascript'>alert('Similarity value: $sim_value');</script>";
 	echo "<script type='text/javascript'>emptyy();</script>";
 	echo "<script type='text/javascript'>inss('$sim_value');</script>";
 	echo "<p>Similarity : ".$sim_value."</p>"; //echo $simjj;
 	//echo "vall:".sizeof($simjj)." ".sizeof("True}");
 	//echo "valooo:". (strcmp($simjj, " True}"));
 	if(!(strcmp($simjj, " True}")))
 	{
 		echo "<script type='text/javascript'>makehide();</script>";
 		echo "<p>Pics Match!</p>";
 	}
 	else
 	{
 		echo "<script type='text/javascript'>makehide();</script>";
 		echo "<p>Pics Dont Match! </p>";
 	}
 }
 else
 {
 	echo "<script type='text/javascript'>makehide();</script>";
 	echo "<p> No Face Identified! </p>";
 }
 }

// $cmmd= `python chkk.py`;
// echo $cmmd;

//}?>

