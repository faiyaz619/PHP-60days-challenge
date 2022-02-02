<?php


namespace app\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;


    public function __construct($data)
    {
        $this->startingNumber=$data['starting_number'];
        $this->endingNumber=$data['ending_number'];
        if(isset($data['odd_even']))
        {
            $this->oddEven =$data['odd_even'];
        }
    }


    public function index()
        {
            header('location:pages/index.php');
        }
    public function makeSeries()
    {
        if ($this->oddEven == "odd")
        {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                if ($this->i % 2 == 1)
                {
                    $this->result .= $this->i.(' ');
                }
                else;
            }
        } else if($this->oddEven == "even")
            {
                for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
                {
                    if ($this->i % 2 == 0)
                    {
                        $this->result .= $this->i.(' ');
                    }
                    else;
                }
            }
            else
                {
                    for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
                    {
                        $this->result .= $this->i.(' ');

                    }
                }
   return $this->result;
    }
}