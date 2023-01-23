
<?php

if(isset($_POST['bntSignIn'])){
    $email = $_POST['txtEmail'];
    $pwd = $_POST['txtPassword'];
    User::signIn($email,$pwd);
    
}
?>
<div class="text-center mt-5">
    <form class="form-signin" method="post"> 
        <img class="mb-4" src="./assets/images/key.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="txtEmail" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="txtPassword" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bntSignIn">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2023-2024</p>
    </form>
</div>

