<?php

include "func_table1.php";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>USERS</title>
</head>
<body>
<a href="../table2/main_table2.php" class="btn btn-primary btn-sm">Перейти к таблице работников</a>
<div class="container">
<div class="row">
    <div class="col-12">
        <table class="table table-striped table-hover mt-2">
            <thead class="thead-dark">
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Пароль</th>
             <th>Действия</th>
            </thead>
            <tbody>
            <?php foreach ($resultUsers as $value){ ?>
                <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->last_name ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->password ?></td>


                    <td><a href="?id=<?= $value->id ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id ?>">Редактировать</a>
                        <a href="?id=<?= $value->id ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $value->id ?>">Удалить</a></td>
                </tr>

                <!--Окно на редактирование данных-->
                <div class="modal fade" id="edit<?= $value->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Изменить запись</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="?id=<?= $value->id ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="<?= $value->name ?>" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" value="<?= $value->last_name ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" value="<?= $value->email ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" value="<?= $value->password ?>" >
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                <button type="submit" name="edit" class="btn btn-primary">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Окно на удаление данных-->
                <div class="modal fade" id="delete<?=$value->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Вы точно хотите удалить запись №<?=$value->id?>  </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <form action="?id=<?= $value->id ?>" method="post">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                    <button type="submit" name="delete" class="btn btn-primary">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </tbody>
        </table>
        <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create">Добавить</button>
    </div>
</div>
</div>
<!-- Окно на добавление данных -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <p>Введите имя</p>
                        <input type="text" class="form-control" name="name" value="" />
                    </div>
                    <div class="form-group">
                        <p>Введите фамилию</p>
                        <input type="text" class="form-control" name="last_name" value=""/>
                    </div>
                    <div class="form-group">
                        <p>Введите Email</p>
                        <input type="text" class="form-control" name="email" value=""/>
                    </div>
                    <div class="form-group">
                        <p>Введите пароль</p>
                        <input type="text" class="form-control" name="password" value=""/>
                    </div>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
