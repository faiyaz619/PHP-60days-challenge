<?php

namespace app\classes;

class Range
{
    public $min;
    public $max;
    public $result='';

    public function __construct($data){

        if($data['first_number']!='' && $data['second_number']!='')
        {
            $this->min = $data['first_number'];
            $this->max = $data['second_number'];

            if($this->min<$this->max)
            {
                for($i= $this->min; $i<= $this->max; $i++){
                    $this->result.=(string)$i.' ';
                }
            }
            else
            {
                $this->result='Range First value can not be greater than second value';
            }
        }
        else
        {
            $this->result='';
        }

    }

    public function index(){
        return $this->result;
    }

}