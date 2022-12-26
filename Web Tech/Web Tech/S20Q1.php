<?php
                                                                                                                          
$ch=$_POST['ch'];

        $a=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
        
        function even($var)
        {	
            if($var%2==0)
                  return $var;
        }
        
        switch($ch)
        {
        	case 0: print_r($a);
        		echo "<br>";		print_r($b);
			
        	break;
        	
          	case 1:
          		print_r(array_chunk($a, 2));
          		echo "<br>";
          		
		break;
		
		case 2:
                        asort($a);
                        echo "Array in ascending order:<br>";
                        print_r($a);
                        
		break;
		
		case 3:
                    echo"<br>";
                        print_r(array_filter($a,'odd'));
                        
                        
              break;
        }
        ?>