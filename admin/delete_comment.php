<?php include("includes/init.php");
include "includes/comment.php";?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

//Deleting comments
if(empty($_GET['id'])){

    redirect("comments.php");
}


$comment = Comment::find_by_id($_GET['id']);

if($comment) {
    $comment->delete();
    $session->message("The {$comment->id} has been deleted");
    redirect("comments.php");
}else{
    redirect("comments.php");
}
?>