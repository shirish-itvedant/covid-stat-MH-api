<?php
/*
  https://api.covid19india.org/data.json 
  
  main keys:
  1)cases_time_series
  2)statewise
  3)tested

*/


$j_data=file_get_contents('https://api.covid19india.org/data.json ');

//echo $j_data;

$a=json_decode($j_data,true);
//print_r($a);

$data=$a['statewise'][21];
//print_r($data);
$active=$data['active'];
$confirmed=$data['confirmed'];
$recovered=$data['recovered'];
$death=$data['deaths'];
$last_updated=$data['lastupdatedtime'];

?>


<html>
       <head>
	        <title>Covid-stat|Maharashtra</title>
	   </head>
	   
	   <body>
	           
			   <h1 style="text-align:center;">Covid-19 Statistic Maharashtra</h1>
			   <table border="1" align="center">
			   
			        <tr>
					       <td>Active cases:</td>
						   <td><?php echo $active; ?></td>
					</tr>
					<tr>
					       <td>Confirmed cases:</td>
						   <td><?php echo $confirmed; ?></td>
					</tr>
					<tr>
					       <td>Recovered cases:</td>
						   <td><?php echo $recovered; ?></td>
					</tr>
					<tr>
					       <td>Number of Deaths:</td>
						   <td><?php echo $death; ?></td>
					</tr>
					<tr>
					       <td>Laste Updated On:</td>
						   <td><?php echo $last_updated; ?></td>
					</tr>
			   </table>
			   
			   <h3>Courtesy:api.covid19india.org</h3>
	   </body>

</html>