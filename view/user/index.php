<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users from Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container text-center my-4">
    <h4 class="text-primary">Quản lý thư viện</h4>
</div>

<a class="btn btn-primary" href="view/user/add.php">Thêm</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã độc giả</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Năm sinh</th>
      <th scope="col">Nghề nghiệp</th>
      <th scope="col">Ngày cấp thẻ</th>
      <th scope="col">Ngày hết hạn</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
            foreach($users as $user){
    ?>
                <tr>
                    <th scope="row"><?php echo $user['madg']; ?></th>
                    <td><?php echo $user['hovaten']; ?></td>
                    <td><?php echo $user['gioitinh']; ?></td>
                    <td><?php echo $user['namsinh']; ?></td>
                    <td><?php echo $user['nghenghiep']; ?></td>
                    <td><?php echo $user['ngaycapthe']; ?></td>
                    <td><?php echo $user['ngayhethan']; ?></td>
                    <td><?php echo $user['diachi']; ?></td>
                    <td><a href="view/user/update.php?id=<?php echo $user['madg']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="view/user/delete.php?id=<?php echo $user['madg']; ?>"><i class="bi bi-trash"></i></a></td>
                </tr>
    <?php
            }
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>