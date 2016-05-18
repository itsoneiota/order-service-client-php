<?php
namespace itsoneiota\orderservice;

/**
 * A container for JSON serializable data.
 */
class JSONContainer implements \JsonSerializable {

	protected $properties = [];

	public function __set($k, $v){
		$this->properties[$k] = $v;
	}

	public function __get($k){
		return array_key_exists($k, $this->properties) ? $this->properties[$k] : NULL;
	}

	public function jsonSerialize(){
		return $this->properties;
	}
}
