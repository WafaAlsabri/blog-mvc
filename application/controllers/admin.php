<?php
    class admin extends framework{
        public function login(){
            $username=$this->input('username');
            $password=$this->input('password');
            $password =MD5($password);
            $data=[$username,$password];
            $result = $this->model("adminModel");
            $check = $result->login($data);
            if($check){
                $this->set_session('ADMIN_ID', $check->admin_id);
                $this->flash('success','Login Successfully.');
                $this->redirect('admin/dashboard');
            }
            else{
                $this->flash('warning','Credentials Not Macthed.');
                $this->redirect('admin');
            }
        }

        public function index(){
            $this->view('admin/login');
        }
        
        public function addPost(){
            if($this->middelware('ADMIN_ID')){
                $this->view('admin/addPost');
            }
            else{
                $this->redirect('admin');
            }
            
        }

        public function Dashboard(){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("blogModel");
                $data = $result->fetchBlog();
                if($data){
                    $this->view('admin/dashboard',$data);
                }
                else{
                    $this->view('admin/dashboard',$data =[]);
                }
            }
            else{
                $this->redirect('admin');
            }
        }

        public function delete($id){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("adminModel");
                $data = $result->deleteBlog($id);
                if($id){
                    $this->flash('success','Data Deleted Successfully');
                    $this->redirect('admin/dashboard');
                }
                else{
                    $this->flash('warning','Something went wrong');
                    $this->redirect('admin/dashboard');
                }
            }
            else{
                $this->redirect('admin');
            }
        }

        public function edit($id){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("blogModel");
                $data = $result->fetchPost($id);
                if($data){
                    $this->view('admin/edit_post',$data);
                }
            }
       }
        public function update(){
            if($this->middelware('ADMIN_ID')){
                $name=$this->input('name');
                $blog_id=$this->input('id');
                $upated_at=CURRENT_DATE_TIME;
                $created_at = CURRENT_DATE_TIME;
                $created_by=1;
                $is_active=1;
            
                if($this->hasfile('image')) {
                    $image = $this->hasfile('image');
                    if(!empty($image['name'])){                
                        if($this->extention($image)){
                            $img =$this->extention($image);
                            if($this->uploadfile($image)){
                                $data=[$name,$img,$created_at,$upated_at,$created_by,$is_active, $blog_id];
                                $result = $this->model("adminModel",$data);
                                $chk=$result->updatePost_image($data);
                                
                                $this->flash('success','Data Updated Successfully');
                                $this->redirect('admin/Dashboard');
                            }
                        }
                        else{
                            $this->flash('danger','file must be in valid format');
                            $this->redirect('admin/Dashboard');
                        }
                    }
                    else{
                        $data=[$name,$img,$created_at,$upated_at,$created_by,$is_active, $blog_id];
                        $result = $this->model("adminModel",$data);
                        $chk = $result->updatePost($data);

                        $this->flash('success','Data Updated Successfully');
                        $this->redirect('admin/Dashboard');
                    }                    
                } 
            }
            else{
                $this->redirect('admin');
            }
        }



        public function  insert(){
            if($this->middelware('ADMIN_ID')){
                $name=$this->input('name');
              //  $description=$this->input('description');
              $upated_at=CURRENT_DATE_TIME;
              $created_at = CURRENT_DATE_TIME;
              $created_by=1;
              $is_active=1;

                if(empty($name)){
                    $error['error_msg']['name'] = $this->error('This field  is reuired');
                }
                
              /*  if(empty($description)){
                    $error['error_msg']['description'] = $this->error('This field  is reuired');
                }*/
                if(!empty($name)){
                    $error['set_input']['name'] =  $name;
                }
              /*  if(!empty($description)){
                    $error['set_input']['description'] =  $description;
                }*/

                if(isset($error['error_msg'] ) && $error['error_msg'] !='') {
                    $this->view('admin/addPost',$error);
                }
                else{
                    if($this->hasfile('image')) {
                        $image = $this->hasfile('image');
                        if(!empty($image['name'])){
                            if($this->extention($image)){
                                if($this->uploadfile($image)){
                                    $img =$this->extention($image);
                                    $data=[$name,$img,$created_at,$upated_at,$created_by,$is_active];
                                    $result = $this->model("adminModel",$data);
                                    $result->insertBlog($data);
                                    if($data){
                                        $this->flash('success','Data Inserted Successfully');
                                        $this->redirect('admin/addPost');
                                    }
                                    else{
                                        $this->flash('warning','Something went wrong');
                                        $this->redirect('admin/addPost');
                                    }
                                }
                            }
                            else{
                                $error['error_msg']['image'] = $this->error('file must be in valid format');
                                $this->view('admin/addPost',$error);
                            }
                            
                        }
                    
                    }
                    else{
                        $error['error_msg']['image'] = $this->error('This field  is reuired');
                        $this->view('admin/addPost',$error);
                    }

                    
                }
            }
            else{
                $this->redirect('admin');
            }
        }

        public function logout(){
            $this->redirect('admin');
            session_destroy();
        }
    }
?>