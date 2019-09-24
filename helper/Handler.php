<?php


namespace Helper;


trait Handler
{

    public function setAmount($number = 0)
    {

        $this->parsed_number = $number . '';
        return $this;
    }

    private function split_parsed_number_to_two_number_depend_on_comma()
    {
        $arr = explode('.',$this->parsed_number);
        $this->parsed_number_array = $arr;
        $this->all_numbers_len = count($this->parsed_number_array);
        return $this;

    }


    private function split_numbers_before_comma_to_array()
    {
        $this->before_comma_array = str_split($this->parsed_number_array[0]);
        $this->before_comma_len = count($this->before_comma_array);
        return $this;
    }

    private function split_numbers_after_comma_to_array()
    {
        if($this->all_numbers_len>=2)
        {
            $this->after_comma_array = str_split($this->parsed_number_array[1]);
            $this->after_comma_len = count($this->after_comma_array);
            return $this;
        }


        $this->after_comma_array = [];
        $this->after_comma_len = 0;

        return $this;
    }



}