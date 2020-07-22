<?php
if(isset($_POST["submit"])) {
    $title = $_POST["title"];
    $postBody = $_POST["postBody"];

    $arg = array(
        "post_title" => $title,
        "post_content" => $postBody,
        "post_type" => "post",
        "post_status" => "publish"
    );

    wp_insert_post($arg);
}
?>

<form action="" method="post" class="form">
    <h2>Plaats een blog bericht</h2>
    <label class="label">Berichtnaam</label>
    <input type="text" name="title" class="input mb-4" placeholder="Geen titel">

    <label class="label">Bericht</label>
    <textarea name="postBody" cols="30" rows="10" class="input mb-4"></textarea>

    <div class="text-center mb-4">
        <input type="submit" name="submit" class="btn btn--primary">
    </div>
    
</form>