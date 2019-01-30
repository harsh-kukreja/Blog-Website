<?php
ob_start();
$page_title = "Comments";
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
          include_once ("../includes/connection.php");
            switch ($source){

                case "approved":
                    if(isset($_GET['comment_id'])){

                        $comment_id = $_GET['comment_id'];
                        $sql = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $comment_id";
                        mysqli_query($connection, $sql);
                    }
                    include_once ("pages/comments/view-all-comments.php");
                    break;
                case "unapproved":
                    if(isset($_GET['comment_id'])){
                        $comment_id = $_GET['comment_id'];
                        $sql = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $comment_id";
                        mysqli_query($connection, $sql);
                    }
                    include_once ("pages/comments/view-all-comments.php");
                    break;
                case "delete_post":
                    include_once ("pages/posts/delete-post.php");
                    break;
                default:
                    include_once ("pages/comments/view-all-comments.php");
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
