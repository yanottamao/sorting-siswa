<?php include 'inc/header.php'; ?>
<?php session_start();
// echo $_SESSION['userID'];
?>

<?php
// if (isset($_POST['submit'])) {
//     echo $_POST['username'];
//     echo $_POST['password'];
//     echo $_SESSION['userID'];
// }
?>

<?php
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user_table WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // $_SESSION['userID'] = $data['userID'];
    // $_SESSION['username'] = $data['username'];
    // $_SESSION['password'] = $data['password'];

    // var_dump($data);
    // echo $data['userID'];
    foreach ($data as $key) {
        // foreach ($key as $value) {
        //     $value
        // }
        $_SESSION['userID'] = $key['userID'];
        $_SESSION['username'] = $key['username'];
        $_SESSION['password'] = $key['password'];
    }
}
if (isset($_SESSION['userID'])) {
    header('Location: home.php');
}
?>
<script>
    alert('Welcome <?php echo $_SESSION['username'] ?>');
</script>
<script>
    // window.location = 'home.php';
</script>


<div class="form-signin w-50 text-center mx-auto">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <h1 class="h3 mb-3 fw-normal">Silakan Login</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Ingat saya
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
</div>


<?php include 'inc/footer.php'; ?>