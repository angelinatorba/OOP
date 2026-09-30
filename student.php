<?php

class Student {
    public $name;
    public $grades = []; 

    public function __construct($name) {
        $this->name = $name;
    }

    public function addGrade($grade) {
        $this->grades[] = $grade;
        return $this; 
    }

    public function getAverage() {
        if (count($this->grades) == 0) {
            return 0;
        }
        
        $sum = array_sum($this->grades); 
        $count = count($this->grades);
        return round($sum / $count, 2);
    }

    public function getInfo() {
        return "Студент: " . $this->name . ", Средний балл: " . $this->getAverage();
    }
}

$student = new Student("Мария");
$student->addGrade(5);
$student->addGrade(4);
$student->addGrade(5);

echo $student->getAverage(); // 4.67
?>