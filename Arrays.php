 <html>
 <head>
 <title>
 </title>
 </head>
 <body>
 </php 
 #make the moths arrays
 $months = array (1=> 'January', 'February' , 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
 //make the days and yrs arrays
 $days = range(1,31);
 $years = range(2000, 2021);
 //make the months pull-down
 echo '<select name = "months">';
 foreach($months as $key => $value){
     echo "<option value = \"$key\">
     $value</option>\n";
 }
 echo '</select>';
 //make the days pull down menu 
 foreach ($days as $value){
     echo "<option value = "\$value\">
     $value</option>\n";
 }
 echo '</select>'
 //Make the yrs pull down 
 foreach ($years as value){
     echo "<option value = "\$value\">
     $value</option>
 }
 <echo '</select>'
 ?>
 </body>
 </html>