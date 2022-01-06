<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Danh sach giang vien</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-primary" href="http://localhost/CSE485_K61_KTGK_1951060964/src/index.php?container=user&acction=add" role="button">Them GV</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">MaGB</th>
                    <th scope="col">Ten GV</th>
                    <th scope="col">ngay sinh</th>
                    <th scope="col">gioi tinh</th>
                    <th scope="col">trinh do</th>
                    <th scope="col">chuyen mon</th>
                    <th scope="col">hoc ham</th>
                    <th scope="col">don vi</th>
                    <th scope="col">co quan</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>

            </thead>
            <tbody>

                <?php

                foreach ($arr_user as $user)
                {
                ?>
                <tr>
                    <th scope="row"><?php echo $user['magv'] ?></th>
                    <td><?php echo $user['hovaten'] ?></td>
                    <td><?php echo $user['ngaysinh'] ?></td>
                    <td><?php echo $user['gioitinh'] ?></td>
                    <td><?php echo $user['trinhdo'] ?></td>
                    <td><?php echo $user['chuyenmon'] ?></td>
                    <td><?php echo $user['hocham'] ?></td>
                    <td><?php echo $user['hocvi'] ?></td>
                    <td><?php echo $user['coquan'] ?></td>
                    <td><a href="http://localhost/CSE485_K61_KTGK_1951060964/src/index.php?controller=user&acction=edit&edit=<?php echo $user['magv']  ?>">edit</a></td>
                    <td><a href="http://localhost/CSE485_K61_KTGK_1951060964/src/index.php?controller=user&acction=delete&delete=<?php echo $user['magv']  ?>">delete</a></td>
                </tr>


                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <?php
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>