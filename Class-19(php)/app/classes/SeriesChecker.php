<?php


namespace App\classes;


class SeriesChecker
{
    protected $i;
    protected $sum;
    protected $result;
    protected $startingNumber;
    protected $endingNumber;

    public function __construct($post=null)
    {
        $this->startingNumber=$post['starting_number'];
        $this->endingNumber=$post['ending_number'];

    }

    public function seriesNumberChecker()
    {
        for($this->i=$this->startingNumber;$this->i<=$this->endingNumber;$this->i++)
        {
            $this->result.=$this->i.'+';
            $this->sum+=$this->i;
        }
        return rtrim($this->result,'+').'='.$this->sum;

    }


}