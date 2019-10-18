<!-- Write a Program to create following pattern using for loops: -->
<!-- *
**
***
****
*****
******
******* -->
<?php  
for($row=1;$row<=8;$row++)  
{  
   for ($star=1;$star<=$row;$star++)  
    {  
     echo "*";   
     }  
 echo "<br>";  
}  
?>