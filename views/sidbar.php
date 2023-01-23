<?php 


// echo "<pre>" ;
//     var_dump($_SESSION['user']) ;
// echo "<pre>" ;
// die() ;
if( isset($_GET['action']) AND $_GET['action'] == 'logOut'){
    unset($_SESSION['user']);
    header('location:views/signIn.php');
}

?>

<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <button onclick="bntHome()" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </button>
            </li>
            <li>
                <button onclick="bntDashboard()" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </button>
            </li>
            <li>
                <button onclick="bntEdit()" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="bi bi-pencil-square"></i> <span class="ms-1 d-none d-sm-inline">Settings</span></button>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user']['name'];?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <!-- <form methode="post">
                    <li><input class="dropdown-item" type="submit" name="btnlogOut" value="logOut"/></li>
                </form> -->
                <li><a class="dropdown-item" href="<?= $_SERVER['PHP_SELF']?>?action=logOut">Log Out</a></li>

                    <li><a class="dropdown-item" href="index.php">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
        </div>
    </div>
</div>
       
    