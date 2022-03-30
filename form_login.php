<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Form Login</title>
    <style>
      body {
        background-color: skyblue;
      }
      .box {
      width: 300px;
      background: white;
      margin: 100px auto;
      padding: 20px;
      border-radius: 10px;
      }
      thead{
          background-color: #45a049;
          color: white;
      }
      input[type=text],[type=password]{
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      input[type=submit]{
          width: 30%;
          background-color: #4CAF50;
          color: white;
          padding: 5px 5px;
          margin: 5px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }
      input[type=submit],[type=reset]:hover {
          background-color: #45a049;
      }
    </style>
  </head>
  <body>
  <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    function cekLogin($username, $password) {
      if ($username == 'admin' && $password == 'mimin') {
        header('Location: home.php');
        exit;
      }
      else{
        echo "<script>
          alert('username atau password salah!');
          history.go(-1);
        </script>";
      }
    }
    if(isset($_POST['login'])) cekLogin($_POST['username'],$_POST['password']);
    ?>
  <form action="#" method="POST">
            <div class="box">
            <table align="center" cellpadding="10"  cellspacing="0">
                <thead><tr><th colspan="2">Sign in</th></tr></thead>
                <tbody>
                    <tr>
                        <td width="30%">Username</td>
                        <td><input type="text" name="username" id="username" placeholder="Masukkan Username" required/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password" placeholder="Masukkan Password" required /></td>
                    </tr>
                </tbody>
                <tfoot><tr><th colspan="2" >
                    <input type="submit" name="login" value="Submit" >
                </th></tr></tfoot>
            </table>
            </div>
        </form>
  </body>
</html>




