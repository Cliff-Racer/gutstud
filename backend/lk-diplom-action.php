<?php
session_start();
include "../construct/dbOpen.php";

$row = mysqli_fetch_assoc($_SESSION["student_result"]);
$surname = $row["surname"];
$name = $row["name"];
$patronymic = $row["patronymic"];

$id_group_name = $row["id_group_name"];
$groupnamequery = mysqli_query($connection, "SELECT * FROM group WHERE id_group = '{$id_group_name}'");
$groupnameresult = mysqli_fetch_assoc($groupnamequery);
$groupname = $groupnameresult["group_name"];

$course = $row["course"];

$id_faculty = $row["id_faculty"];
$facultynamequery = mysqli_query($connection, "SELECT * FROM faculty WHERE id_faculty = '{$id_faculty}'");
$facultynameresult = mysqli_fetch_assoc($facultynamequery);
$facultyname = $facultynameresult["faculty_name"];

//декан 


$topic_name = $row["topic_name"];

$id_professor = $row["id_professor"];
$professornamequery = mysqli_query($connection, "SELECT * FROM professor WHERE id_professor = '{$id_professor}");
$professornameresult = mysqli_fetch_assoc($professornamequery);
$professorname = $professornameresult["surname " . "name " . "patronymic " . "position" . "academic_title"];

//  $cathedra

//зав кафедры
if (isset($_POST["submitDiplom"])) {
    
} else {
    header('Location: ../lk-stud-diplom?support_msg=Ошибка отправки формы.');
}
?>