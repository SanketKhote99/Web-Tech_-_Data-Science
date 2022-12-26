<?php
	$cnm=$_POST['cnm'];
	
	error_reporting(E_ALL);
    ini_set('display_errors', 1);
	
	$con=pg_connect("host=localhost port=5432 dbname=bcs user=tybcs password=msgcs") or die ("Could not connect to server\n");
	
	$q="SELECT student.sid,snm,cls
		FROM student,comp,stud_comp 
		WHERE student.sid=stud_comp.sid and comp.cid=stud_comp.cid  
		and rank=1 and cnm='.$cnm.'";
	
	$rs=pg_query($con,$q);          
        
        if($rs)
        {
        	while($rw=pg_fetch_row($rs))
		{  
			echo"Student ID	: ".$rw[0]."<br>";
			echo"Student Name	: ".$rw[1]."<br>";
                       echo"Class 		: ".$rw[2]."<br>";                       
                       echo"Competition ID	: ".$rw[3]."<br>";
			echo"Competition Name	: ".$rw[4]."<br>";
			echo"Competition Type	: ".$rw[5]."<br>";
			echo"Rank		: ".$rw[6]."<br>";
			echo"Competition Year	: ".$rw[7]."<br>";
				
                       echo"--------------------------"."<br>";
		}
	}
	else
	{
		echo"error";
	}
        
        pg_close($con);
?>