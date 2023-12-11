<?php
class Student {
    public $Name;
    public $RollNo;
    public $Branch;
    public $Year;

    public function setDetails($name,$rollNo,  $branch, $year) {
        $this->Name = $name;
        $this->RollNo = $rollNo;
        $this->Branch = $branch;
        $this->Year = $year;
    }

    public function getDetails() {
        return "Name: $this->Name, Roll No: $this->RollNo, Branch: $this->Branch, Year: $this->Year";
    }
}

// Creating instances of the Student class
$student1 = new Student();
$student1->setDetails( "Ayaan",29, "Computer Science", 2023);

$student2 = new Student();
$student2->setDetails( "Amaan",39, "Electrical Engineering", 2023);

$student3 = new Student();
$student3->setDetails("Peter",87, "Mechanical Engineering", 2023);

// Printing details of all instances
echo "Details of Student 1: " . $student1->getDetails() . "<br/>";
echo "Details of Student 2: " . $student2->getDetails() . "<br/>";
echo "Details of Student 3: " . $student3->getDetails() . "<br/>";
?>