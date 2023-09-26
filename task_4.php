<?php 
/**
 * Task 4: Multidimensional Array
 * Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
 */
$studentGrades = [
    'student_1' => [
        'Math' => 70,
        'English' => 90,
        'Science' => 80
    ],
    'student_2' => [
        'Math' => 90,
        'English' => 65,
        'Science' => 70,
    ],
    'student_3' => [
        'Math' => 85,
        'English' => 90,
        'Science' => 87
    ]
];

/**
 * Calculates and prints Average grade of given students.
 */
function averageGrade(array $studentGrades): void {
    foreach($studentGrades as $key => $grades) {
        $grade = 'F';
        $total_subject = count($grades);
        $average = array_sum($grades) / $total_subject;
        $print_format = "The average grade of %s is: %s \n";
        if(min($grades) < 33 || $average < 33) {
            printf($print_format, $key, $grade);
            continue;
        }
        if($average >= 80) {
            $grade = 'A+';
        } else if($average >= 70) {
            $grade = 'A';
        } else if($average >= 60) {
            $grade = 'A-';
        } else if($average >= 50) {
            $grade = 'B';
        } else if($average >= 40) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }
        printf($print_format, $key, $grade);
    }
}
averageGrade($studentGrades);