<?php
class S23Q1
{
    protected $vars;
    protected $vars1;
    
    function __construct($vars1 = 19) 
    {
        $this->vars = array();
        $this->vars1  = $vars1;
    }
    
    function push($eg1) 
    {
        if(count($this->vars) < $this->vars1) 
        {
            array_unshift($this->vars, $eg1);
        } 
    }

    function pop() 
    {
        if (empty($this->vars)) 
        {
            throw new RuntimeException("Please try user again");
        } 
        else 
        {
            return array_shift($this->vars);
        }
    }
    
    function top() 
    {
        return current($this->vars);
    }
    
    function isEmpty() 
    {
        return empty($this->vars);
        echo $vars;
    }
}

$vars = new S23Q1();
$vars->push(1);
$vars->push(11);
$vars->push(111);
echo $vars->pop();
echo"<br>";
$vars->push(72);
$vars->push(92);
$vars->push(83);
echo"<br>";
echo $vars->pop();
echo"<br>";
echo $vars->pop();

?>