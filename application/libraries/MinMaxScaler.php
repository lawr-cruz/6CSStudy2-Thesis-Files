<?php
class MinMaxScaler {
	private $min;
	private $max;

	public function fit_transform($data) {
		$this->min = min($data);
		$this->max = max($data);
		return array_map(function($value) {
			return ($value - $this->min) / ($this->max - $this->min);
		}, $data);
	}

	public function inverse_transform($data) {
		return array_map(function($value) {
			return $value * ($this->max - $this->min) + $this->min;
		}, $data);
	}
}
