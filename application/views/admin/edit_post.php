<?php
   
?>

    <div class="container ">
        <div class="row add_post">
            
            <h3>Update Post</h3>
            <form class="col-md-8 col-sm-12 form" method="post" action="<?php echo BASEURL;?>admin/update" enctype= multipart/form-data>
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>    
            <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Enter name" value="<?php echo $data->name;?>" required>
                    <input type="hidden" value="<?php echo $data->id;?>" name="id">
                </div>
   
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                <div class="form-group">
                <img src="<?php echo BASEURL;?>assets/images/<?php echo $data->image;?>" style="width:200px; height:100px;">
                </div>
                <div class="form-group">
                    <button type="submit" name="edit_post" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>