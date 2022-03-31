<?php
  

?>

    <div class="container ">
        <div class="row add_post">
            
            <h3>Add Post</h3>
            <form class="col-md-8 col-sm-12 form" method="post" action="<?php echo BASEURL;?>admin/insert" enctype= multipart/form-data>
            <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>    
            <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Enter name" value="<?php if(isset($data['set_input']['name']) && $data['set_input']['name'] != "" ) { echo $data['set_input']['name']; }?>" required>
                    <?php if(isset($data['error_msg']['name']) && $data['error_msg']['name'] != "" ) { echo $data['error_msg']['name']; }?>
                </div>
            
               
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" required>
                </div>
                <?php if(isset($data['error_msg']['image']) && $data['error_msg']['image'] != "" ) { echo $data['error_msg']['image']; }?>
                <div class="form-group">
                    <button type="submit" name="add_post" class="form_btn btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    

    
<?php component('footer'); ?>