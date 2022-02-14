<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Mobile Mart</a>
        <ul class="navbar-nav">
            <?php if (isset($_SESSION['id'])) { ?>
                <li><a href="action.php?pages=product" class="nav-link">All products</a></li>
             <li><a href="action.php?pages=all-user" class="nav-link">All user</a></li>
                <li><a href="action.php?pages=upload" class="nav-link">File Upload</a></li>
            <li class="dropdown">
               <a href="action.php?pages=registration" data-toggle="dropdown" class="nav-link dropdown-toggle"><?php echo $_SESSION['name']?></a>
               <ul class="dropdown-menu">
                   <li><a href="action.php?pages=logout" class="dropdown-item">logout</a></li>

              </ul>
           </li>
            <?php } else{?>
            <li><a href="action.php?pages=login" class="nav-link">Login</a></li>
            <?php } ?>
            <form action="action.php" method="POST">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="id" placeholder="Find a Product"/>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-block" name="search_btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </ul>
    </div>
</nav>
