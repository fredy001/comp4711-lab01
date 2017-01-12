<?php
/**
 * Student class
 *
 * @author: Fred Yang
 * @version: 1.0
 */
class Student {
	// construct
	function __construct() {
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}
	
	// mutator method: add_email
	function add_email($which, $address) {
		$this->emails[$which] = $address;
	}
	
	// mutator method: add_grade
	function add_grade($grade) {
		$this->grades[] = $grade;
	}
	
	// calculate the average of grades
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}
	
	// build a fancy text representation for reporting
	function toString() {
		$result = $this->first_name . ' ' . $this->surname;
		$result .= ' ('.$this->average(). ")\n";
		foreach ($this->emails as $which=>$what)
			$result .= $which . ': ' . $what . "\n";
		$result .= "\n";
		return '<pre>' . $result . '</pre>';
	}
 }
?>