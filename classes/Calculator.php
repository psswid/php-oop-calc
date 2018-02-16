<?php


class Calculator
{

    protected $result;

    protected $operation;

    /**
     * @param mixed $operation
     */
    public function setOperation(OperatorInterface $operation)
    {
        $this->operation = $operation;
    }

    public function calculate(){

        foreach (func_get_args() as $number){
            $this->result = $this->operation->run($number, $this->result);
        }
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

}
