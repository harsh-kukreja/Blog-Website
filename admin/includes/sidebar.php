<ul class="sidebar navbar-nav toggled">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="posts.php" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Posts</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

            <a class="dropdown-item" href="posts.php">View All Posts</a>
            <a class="dropdown-item" href="posts.php?source=add_post">Add Post</a>

        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="categories.php">
            <i class="fas fa-table fa-fw"></i>
            <span>Categories</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="comments.php">
            <i class="fas fa-comments fa-fw"></i>
            <span>Comments</span></a>
    </li>

    <?php

    if(isset($_SESSION['user_id'])){

        if($_SESSION['role'] == "super_admin"){


    ?>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
        </a>


        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

            <a class="dropdown-item" href="users.php">View All Users</a>
            <a class="dropdown-item" href="users.php?source=add_user">Add Users</a>

        </div>
    </li>

    <?php
        }
    }
    ?>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Profile</span></a>
    </li>
</ul>