
<div class="row">
    <div class="col-md-12 offset-0">
        <div class="table-responsive">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Comment</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Post Title</th>
                    <th>Date</th>
                    <th>approve</th>
                    <th>unapprove</th>
                    <th>Edit</th>

                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultSet = getAllComments();
                while($row = mysqli_fetch_assoc($resultSet)){
                    $comment_id = $row['comment_id'];
                    $comment_post_id = $row['comment_post_id'];
                    $comment_author = $row['comment_author'];
                    $comment_email = $row['comment_email'];
                    $comment_content = $row['comment_content'];
                    $comment_status = $row['comment_status'];
                    $comment_date = $row['comment_date'];



                    //FETCH POSTS FROM comment_post_id
                    $post_result_set = getAllPosts("post_id = $comment_post_id");
                    if($post = mysqli_fetch_assoc($post_result_set)){
                        $post_title = $post['post_title'];
                        $post_id = $post['post_id'];
                    }else{
                        $post_title = "";
                        $post_id = 0;
                    }
                    echo <<<POST
<tr>                                        
<td>$comment_id</td>
<td>$comment_author</td>
<td>$comment_content</td>
<td>$comment_email</td>
<td>$comment_status</td>
<td><a href="http://localhost/harsh-php/cms/post.php?post_id= $post_id">$post_title</a></td>
<td>$comment_date</td>


<td><a href="comments.php?source=approved&comment_id=$comment_id" class="btn btn-info"><span class="fa fa-thumbs-up"></span></a></td>

<td><a href="comments.php?source=unapproved&comment_id=$comment_id" class="btn btn-dark"><span class="fa fa-thumbs-down"></span></a></td>
<td><a href="#" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
</tr>        
POST;


                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>