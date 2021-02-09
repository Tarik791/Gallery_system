<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 
include "includes/comment.php";

//Deleting comments
if(empty($_GET['id'])){

    redirect("comments.php");
}


$comment = Comment::find_by_id($_GET['id']);

if($comment) {
    $comment->delete();
    $session->message("The comment with {$comment->id} has been deleted");
    redirect("comment_photo.php?id={$comment->photo_id}");
}else{
    redirect("comment_photo.php?id={$comment->photo_id}");
}
?>