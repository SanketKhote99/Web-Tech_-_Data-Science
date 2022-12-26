<?php

$newqueue = new SplQueue();

$newqueue->enqueue('Welcome');
$newqueue->enqueue('to');
$newqueue->enqueue('PHP');

$newqueue->rewind();

while($newqueue->valid())
{
echo "<br>".$newqueue->current(),"\n";
$newqueue->next();
}

//printing the contents of the queue in a human readable format by using print_r function
echo"<br>";
print_r ($newqueue);
//Removing the first two items from the head of the queue using dequeue() function and then displaying the contents of the queue in human readable form using print_r function
$newqueue->dequeue();
$newqueue->dequeue();
echo "<br>";
print_r ($newqueue);
?>