<?php

use App\Users;

if (!isset($_GET['mode'])) {
    header("Location: /");
    exit;
}

if ($_GET['mode'] === 'logout') {
    session_destroy();
    header("Location: /");
}

if ($_GET['mode'] === 'manage_blog') {

    if (!empty($_POST)) {

    }
}
?>
<div class="container-profile">
<form>
    <div class="form-group">
        <label for="blog_title">Blog's title</label>
        <input type="text" class="form-control" id="blog_title" placeholder="Put title in">
    </div>
    <div class="form-group">
        <label for="blog_content">Content</label>
        <textarea class="form-control" id="blog_content" rows="15"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>