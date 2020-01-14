<?php

class Calc {

	public  $num1;
	public  $operater;
	public  $num2;



	public function __construct(int $one,string $two, int $three){

		$this->num1= $one;
		$this->operater= $two;
		$this->num2= $three;


	}
	public function calculator(){
		switch ($this->operater) {
			case 'add':
				$result = $this->num1 + $this->num2;
				return $result;
				break;
			case 'sub':
					$result = $this->num1 - $this->num2;
					return $result;
					break;
			case 'div':
						$result = $this->num1 / $this->num2;
						return $result;
						break;
			case 'mul':
							$result = $this->num1 * $this->num2;
							return $result;
							break;

			default:
				echo "error";
				break;
		}
	}
}
