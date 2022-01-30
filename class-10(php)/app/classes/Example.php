<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $date=[];


    public function index()
    {
        $this->firstName ='Rohim';
        $this->lastName ='khan';
        echo "Full name is ".$this->firstName." ".$this->lastName;



        $this->x=10;
        $this->y=20;

        echo'<br/>';
        echo $this->x++;
        echo'<br/>';
        echo $this->x;

        echo '<br/>';
        echo $this->x + $this->y;
        echo '<br/>';
        echo $this->x - $this->y;
        echo '<br/>';
        echo $this->x * $this->y;
        echo '<br/>';
        echo $this->x / $this->y;
        echo '<br/>';
        echo $this->x % $this->y;
// Assignmnet operator?//
        echo '<br/>';
        echo $this->x += $this->y;
        echo '<br/>';
        echo $this->x -= $this->y;
        echo '<br/>';
        echo $this->x *= $this->y;
        echo '<br/>';
        echo $this->x /= $this->y;
        echo '<br/>';
        echo $this->x %= $this->y;
        echo '<br/>';
        echo $this->x .= $this->y;


//        IF statement
        echo '<br/>'."//This is IF statement//".'<br/>';
        $this->x=10;
        if($this->x <20){
            echo '<br/>';
            echo $this->x;
        }
//        IF ELSE statement
        echo '<br/>'."//This is IF ELSE statement//".'<br/>';
        $this->x=10;
        if($this->x >20){
            echo '<br/>';
            echo $this->x;
        }
        else{
            echo '<br/>';
            echo $this->x."is not greater";
        }

        $this->date=[10,20,30,'bitm',100.200,true];
//        echo $this->date[4];
        foreach ($this->data as $item)


    }
}