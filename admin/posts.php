<?php
ob_start();
$page_title = "Posts";
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ("includes/header.php");
?>

  <body id="page-top" class="sidebar-toggled">

    <?php
        include_once ("includes/navigation.php");
    ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php
        include_once ("includes/sidebar.php")
      ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $page_title;?></li>
          </ol>

          <!-- Icon Cards-->
          <?php
            if(isset($_GET['source'])){
                $source = $_GET['source'];

            }else{
                $source ="";
            }
            switch ($source){
                case "add_post":
                    include_once ("pages/posts/add-post.php");
                    break;
                case "edit_post":
                    include_once ("pages/posts/edit-post.php");
                    break;
                case "delete_post":
                    include_once ("pages/posts/delete-post.php");
                    break;
                default:
                    include_once ("pages/posts/view-all-posts.php");
            }
          ?>





        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php
            include_once ("includes/footer.php");
        ?>
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
    include_once ("includes/scripts_btn_to_top.php");
?>



  </body>

</html>
