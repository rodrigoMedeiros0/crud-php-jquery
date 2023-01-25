<?php

require 'dbConnection.php';

if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    if ($name == NULL || $email == NULL || $phone == NULL || $course == NULL) {
        $res = [
            'status' => 422,
            'message' => 'Todos os campos são obrigatórios'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Estudante Salvo'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Não foi possível salvar o Estudante'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    if ($name == NULL || $email == NULL || $phone == NULL || $course == NULL) {
        $res = [
            'status' => 422,
            'message' => 'Todos os campos são obrigatórios'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' 
                    WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Cadastro Atualizado'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Estudante não atualizado'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_GET['student_id'])) {
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Estudante encontrado por ID',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 404,
            'message' => 'Estudante não encontrado'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Estudante deletado'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Não foi possivel excluir o estudante'
        ];
        echo json_encode($res);
        return;
    }
}

?>