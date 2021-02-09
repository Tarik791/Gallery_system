<?php include("includes/header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>
<?php 
if(!$session->is_signed_in()) {redirect("login.php");}

?>
<?php 

//php code for edit user

if(empty($_GET['id'])){

    redirect("users.php");
}

$user = User::find_by_id($_GET['id']);

    if(isset($_POST['update'])){


        if($user) {
            
            
            $user->username = htmlspecialchars($_POST['username']);
           $user->first_name = htmlspecialchars($_POST['first_name']);
           $user->last_name = htmlspecialchars($_POST['last_name']);
           $user->password = htmlspecialchars($_POST['password']);
            
           if(empty($_FILES['user_image'])){

            $user->save();
            redirect("users.php");
            $session->message("There user has been update");
         

           }else{

            $user->set_file($_FILES['user_image']);
            $user->upload_photo();
            $user->save();
            $session->message("There user has been update");


            //redirect("edit_user.php?id={$user->id}");

                        redirect("users.php");

           }
    
    
        }
    }


//user class and object



?>



        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           <?php include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
         
        <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">

                <div class="col-lg-12">
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                <h1 class="page-header">
                        users
                        <small>Subheading</small>
                    </h1>

                    <div class="col-md-6">

                    <a href="#" data-toggle="modal" data-target="#photo-library"><img style="width:500px;" class="img-responsive" src="<?php echo $user->image_path_and_placeholder(); ?>" alt=""></a>
                    
                    </div>

                    <form action="" method="post"enctype="multipart/form-data">



                    <div class="col-md-6">

                    <div class="form-group">
                            
                            <input type="file" name="user_image" >

                    </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">

                        </div>


                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name Text</label>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>">
                        </div>
                        <div class="form-group">

                            <a id="user-id" class="btn btn-danger" href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>    
                        
                            <input class="btn btn-primary pull-right" type="submit" name="update" value="Update">
                        </div>
                  

                    </div>


                    
                    </form>
                </div>
            </div>
            <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>