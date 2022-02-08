<?php


namespace App\classes;


class Pattern
{
    protected $p_lenght;
    protected $i;
    protected $j;
    protected $result;
    public function __construct($post=null)
    {
        $this->p_lenght=$post['input_length'];
//        echo $this->p_lenght;
    }
    public function index()
    {
        for($this->i=1;$this->i<=$this->p_lenght; $this->i++)
        {
            for($this->j=1;$this->j<=(2*$this->p_lenght)-1; $this->j++)
            {
                if(($this->j >= $this->p_lenght-($this->i-1)) && ($this->j <= $this->p_lenght +($this->i-1)))
                 {
                     $this->result .= '*';
                 }
                else
                {
                    $this->result .='&nbsp;&nbsp;';
                }
            }
            $this->result .= '<br/>';
        }
        for($this->i=$this->p_lenght -1;$this->i>=1; $this->i--)
        {
            for($this->j=1;$this->j<=(2*$this->p_lenght)-1; $this->j++)
            {
                if(($this->j >= $this->p_lenght-($this->i-1)) && ($this->j <= $this->p_lenght +($this->i-1)))
                {
                    $this->result .='*';
                }
                else
                {
                    $this->result .='&nbsp;&nbsp;';
                }
            }
            $this->result .= '<br/>';
        }
        return $this->result;
    }

}