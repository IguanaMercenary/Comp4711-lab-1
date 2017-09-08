<?php

/**
 * Student class with basic functions for creating a student.
 *
 * @author Michael
 * @version 2017-09-08
 */
class Student {

    //Purpose: Constructor of the Student class. Creates a student object with a surname,
    //first name, email(s) and the student's grade(s).
    //Input params: Does not take any inputs.
    //Output: A new student object.
    //Author: Michael O'Connell
    //Date: 2017-09-08
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //Purpose: A mutator that adds an email to the emails array.
    //Input params: $which   - A string for the index and type of email, e.g. work, home, etc...
    //              $address - A string for the email's address.
    //Output: No output. 
    //Author: Michael O'Connell
    //Date: 2017-09-08
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //Purpose: A mutator to set a student's grade.
    //Input params: $grade - The students grade represented as a number.
    //Output: No output.
    //Author: Michael O'Connell
    //Date: 2017-09-08
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //Purpose: Calculates a students average grade.
    //Input params: No inputs.
    //Output: Returns the average grade as an double.
    //Author: Michael O'Connell
    //Date: 2017-09-08
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    //Purpose: Format a student object's information to a string.
    //Input params: None.
    //Output: Returns a string that has been formatted to print the information in an orderly display.
    //Author: Michael O'Connell
    //Date: 2017-09-08
    function toString() {
        $result = $this->first_name . ' ' . $this->surname . ":\n\n";
        $result .= 'Average grade: ' . $this->average() . "%\n\n" . 'Email(s):' . "\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n" . "------------------\n";
        return '<pre>' . $result . '</pre>';
    }
}
