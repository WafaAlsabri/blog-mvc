<?php
  
?>

    <div class="container ">
        <div class="row add_post">
        <?php
                if(isset($_SESSION['flash'])):
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                endif;
            ?>
            <h3>All categories</h3>
            <table class="table table-responsiv" >
                <thead >
                    <tr>
                        <th scope="col" style="width:10%">#</th>
                        <th scope="col" style="width:10%">Image</th>
                        <th scope="col" style="width:20%">Name</th>
                        <th scope="col" style="width:40%">status</th>
                        <th scope="col" style="width:20%">created_at</th>
                        <th scope="col" style="width:20%">updated_at</th>
                        <th scope="col" style="width:20%"><h5 style="color: red;
    top: 1em;
    position: relative;
    right: -3em;
    }">Operation</h5></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if(!empty($data)):
                        foreach($data as $row):
                ?>
                        <tr>
                            <th scope="row"><?php echo $row->id;?></th>
                            <td>
                            <img src="<?php echo BASEURL;?>assets/images/<?php echo $row->image;?>" style="width:100px; height:100px;"></td>
                            <td><?php echo $row->name;?></td>
                           
                           <td><?php if($row->is_active==1){echo 'active';}
                            else{echo 'disable';}?></td>
                             <td><?php echo $row->created_at;?></td>
                             <td><?php echo $row->upated_at;?></td>
                           
                            <td style="display:flex;flex-direction:row;margin:1em;">
                            <a style="margin:1em;" target="blank" href="<?php echo BASEURL;?>blog/post/<?php echo $row->id;?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                <a style="margin:1em;" href="<?php echo BASEURL;?>admin/edit/<?php echo $row->id;?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a style="margin:1em;"  href="<?php echo BASEURL;?>admin/delete/<?php echo $row->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php 
                        endforeach;

                        else:
                    ?>
                    <tr>
                        <td colspan="5" style="text-align:center;"><h3>
                        No Record Avaiable
                        </h3></td>
                    </tr>
                    <?php        
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    

    
<?php component('footer'); ?>