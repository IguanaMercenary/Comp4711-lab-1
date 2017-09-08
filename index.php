<!DOCTYPE html>
<!--
Index page of lab1 project. Displays the information of students. 
Three students are created here with varying amounts of information about their 
person. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Includes the Student class.
        include('Student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $third = new Student();
        $third->surname = "O'Connell";
        $third->first_name = "Michael";
        $third->add_email('home', 'moconnell@home.ca');
        $third->add_email('work1', 'm_oconnell@work.ca');
        $third->add_email('work2', 'micheocon@altwork.ca');
        $third->add_grade(90);
        $third->add_grade(74);
        $third->add_grade(81);
        $students['m767'] = $third;
        
        //Foreach loop to print out all the students in the students array.
        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
