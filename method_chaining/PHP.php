<?php 
 class PHP{
 	public $a=0;
 	public $b=0;
 	public $result;
 	public function getvalue($x,$y){
 		$this->a=$x;
 		$this->b=$y;
 		return $this;
 	}
 	public function result(){
 		$this->result=$this->a*$this->b;
 		return $this->result;
 	}
 }
?>