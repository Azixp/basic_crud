<?php require "header.html.php";?>
<form action="" method="post">
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Title</label>
        <input type="text" class="form-control" placeholder="Put your new title here..." id="inputDefault" name="title">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Image link</label>
        <input type="text" class="form-control" placeholder="Put your lorem picsum url here..." id="inputDefault" name="imageLink">
    </div>
    <div class="form-group">
        <label for="textArea">Description</label>
        <textarea class="form-control" id="textArea" rows="3" placeholder="Put your new description here..." name="description"></textarea>
    </div>
  <input type="submit" class="btn btn-primary" value="Add product" name="confirmation">
</form>
<?php
if(isset($message)){
    echo '<div class="alert alert-success mt-2" role="alert">' . $message . '</div>';
} else if(isset($errorMessage)){
    echo '<div class="alert alert-danger mt-2" role="alert">' . $errorMessage . '</div>';
}
?>
<?php require "footer.html.php";?>