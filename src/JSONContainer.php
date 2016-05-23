<?php
namespace itsoneiota\orderservice;

/**
 * A container for JSON serializable data.
 */
class JSONContainer implements \JsonSerializable {

	protected $properties = [];

	public function __set($k, $v){

		if ($k != "additionalProperties" && array_key_exists($k, $this->properties)){
			$this->properties[$k] = $v;
			return;
		}

		$this->properties['additionalProperties'][$k] = $v;
	}

	public function __get($k){
		return array_key_exists($k, $this->properties) ? $this->properties[$k] : NULL;
	}

	public function jsonSerialize(){
		return $this->properties;
	}
}
