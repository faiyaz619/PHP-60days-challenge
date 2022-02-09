<?php


namespace App\classes;


class NumberChecker
{
    protected $i;
    protected $givenNumber;
    protected $result;
    protected $check;


    public function __construct()
    {
        $this->givenNumber=$_POST['given_number'];
        $this->check='Prime';
    }
    public function primeNumberChecker()
    {
        if ($this->givenNumber==1||$this->givenNumber==2)
        {
            $this->result="The Number $this->givenNumber is a Prime Number";
            return $this->result;
        }
        else
            {
                for ($this->i=2;$this->i<$this->givenNumber;$this->i++)
                {
                    if($this->givenNumber%2 ==0)
                    {
                        $this->result="The Number $this->givenNumber is a not Prime Number";
                        return $this->result;
                    }
                }
            }
        $this->result="The Number $this->givenNumber is a Prime Number";
        return $this->result;
    }
}