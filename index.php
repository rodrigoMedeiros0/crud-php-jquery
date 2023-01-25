<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Crud</title>

    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--cdn datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <!-- bootstrap icons cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- folha de estilo css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- notify alert -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

</head>

<body>

    <body>

        <!-- Add Student  Modal-->
        <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Estudante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="saveStudent">
                        <div class="modal-body">

                            <div id="errorMessage" class="alert alert-warning d-none"></div>

                            <div class="mb-3">
                                <label for="">Nome</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Telefone</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Curso</label>
                                <input type="text" name="course" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Student Modal  -->
        <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Cadastro do Estudante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="updateStudent">
                        <div class="modal-body">

                            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                            <input type="hidden" name="student_id" id="student_id">

                            <div class="mb-3">
                                <label for="">Nome</label>
                                <input type="text" name="name" id="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Telefone</label>
                                <input type="text" name="phone" id="phone" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Curso</label>
                                <input type="text" name="course" id="course" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- View Student Modal -->
        <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Visualizar Estudante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="">Nome</label>
                            <p id="view_name" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <p id="view_email" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Telefone</label>
                            <p id="view_phone" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Curso</label>
                            <p id="view_course" class="form-control"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container background">
            <h1 class="text-center">Sistema - Cadastro de Estudantes</h1>

            <h2 class="text-center">Crud com PHP, jQuery e Bootstrap</h2>

            <div class="row">
                <div class="col-2 offset-10">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#studentAddModal" id="buttonCreate">
                            <i class="bi bi-plus-circle-fill"></i> Novo Estudante
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive bg-light mt-5">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Curso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'dbConnection.php';

                        $query = "SELECT * FROM students";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $student) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $student['id'] ?>
                                    </td>
                                    <td>
                                        <?= $student['name'] ?>
                                    </td>
                                    <td>
                                        <?= $student['email'] ?>
                                    </td>
                                    <td>
                                        <?= $student['phone'] ?>
                                    </td>
                                    <td>
                                        <?= $student['course'] ?>
                                    </td>
                                    <td>
                                        <button type="button" value="<?= $student['id']; ?>"
                                            class="viewStudentBtn btn btn-info btn-sm">Visualizar</button>
                                        <button type="button" value="<?= $student['id']; ?>"
                                            class="editStudentBtn btn btn-success btn-sm">Editar</button>
                                        <button type="button" value="<?= $student['id']; ?>"
                                            class="deleteStudentBtn btn btn-danger btn-sm">Exluir</button>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <!--jquery cdn-->
            <script src="https://code.jquery.com/jquery-3.6.3.js"
                integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
            <!--bootstrap cdn-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
            </script>
            <!-- alertify cdn -->
            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            <!-- INDEX JS -->
            <script src="index.js"></script>

    </body>

</html>