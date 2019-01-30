<div class="row mt-4">
    <div class="col-md-8 offset-md-2">
        <div class="table-responsive ">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once ("../includes/functions.php");
                $categories = getAllCategories();
                $count = count($categories);
                $i= 0;
                while($i<$count){
                    echo <<<LINK
                                <tr>
                                    <td>{$categories[$i]['cat_id']}</td>
                                    <td>{$categories[$i]['cat_title']}</td>
                                    <td><a href="{$_SERVER['PHP_SELF']}?cat_id={$categories[$i]['cat_id']}">Edit</a></td>
                                    <td><a href="includes/delete_data.php?cat_id={$categories[$i]['cat_id']}">Delete</a></td>
                                    
                                </tr>
LINK;
                    $i++;
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>