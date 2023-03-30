<?php
date_default_timezone_set("Asia/Jakarta");

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "rumahWeb");

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

function location($file){
  echo "
    <script>
      document.location.href = '$file'
    </script>
  ";
}

if(mysqli_connect_error()){
  echo mysqli_connect_error();
} else {
  function insertComment(){
    global $conn, $username, $comment;

    $time = date("l, d/n/Y, H:i a", strtotime("now"))." WIB";

    $query = "INSERT INTO comment(username, comment, time) VALUE(?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $query)){
      echo mysqli_stmt_error($stmt);
    } else {
      mysqli_stmt_bind_param($stmt, "sss", $username, $comment, $time);
      mysqli_stmt_execute($stmt);

      return mysqli_affected_rows($conn);
    }

  }

  function showComments(){
    global $conn;

    $query = "SELECT * FROM comment";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){
      echo mysqli_stmt_error($stmt);
    } else {
      mysqli_stmt_execute($stmt);
      $selectResult = mysqli_stmt_get_result($stmt);

      return $selectResult;
    }
  }

  function deleteComment(){
    global $conn, $id;

    $query = "DELETE FROM comment WHERE id = ?";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $query)){
      echo mysqli_stmt_error($stmt);
    } else {
      mysqli_stmt_bind_param($stmt, "i", $id);
      mysqli_stmt_execute($stmt);
    }

    return mysqli_affected_rows($conn);
  }

  if(isset($_POST["kirim"])){
    $username = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["username"]));
    $comment = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["comment"]));

    if(!empty($username) && !empty($comment)){
      if(insertComment() > 0){
        location("rumahWeb.php");
      } else {
        echo "
          <script>
            alert('komentar gagal dikirim')
          </script>
        ";
      }
    } else {
      echo "
          <script>
            alert('isi field terlebih dahulu')
          </script>
        ";
    }
  }

  $selectResult = showComments();
}
