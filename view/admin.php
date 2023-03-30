<?php
require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../style/admin.css">
  <link rel="icon" href="../assets/Joan (1).ico">
  <link rel="preload" as="image" href="../assets/logo-rumahweb.svg">
</head>

<body>
  <section class="splash container-fluid justify-content-center align-items-center">
    <img src="../assets/logo-rumahweb.svg" alt="">
  </section>
  <section class="wrapper">
    <main class="container-fluid d-flex justify-content-center align-items-center">
      <section class="rounded-3 p-5">
        <table class="table table-dark table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Comment</th>
              <th scope="col">Time</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $num = 1; ?>
            <?php while ($data = mysqli_fetch_assoc($selectResult)) : ?>
              <tr>
                <th scope="row"><?= $num++; ?></th>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["comment"]; ?></td>
                <td><?= $data["time"]; ?></td>
                <td>
                  <a class="text-danger" href="delete.php?id=<?= $data["id"]; ?>">
                    <i class="bi bi-trash-fill fs-3"></i>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </section>
    </main>
  </section>
  <script src="../js/splash.js"></script>
</body>

</html>