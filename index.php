<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 19/01/15
 * Time: 23:06
 */

$youtube = "ttdYdk-sZ5k";

include('includes/header.html');

echo "
<div id=\"content\">
    <div id=\"index\">
        <iframe src=\"http://www.youtube.com/embed/{$youtube}\" scrolling=\"yes\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
        <iframe src=\"http://www.youtube.com/embed/{$youtube}\" scrolling=\"yes\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
    </div>
    <div id=\"index\">
        <iframe src=\"http://www.youtube.com/embed/{$youtube}\" scrolling=\"yes\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
        <iframe src=\"http://www.youtube.com/embed/{$youtube}\" scrolling=\"yes\" frameborder=\"0\" allowtransparency=\"true\"></iframe>
    </div>
</div>
";

include('includes/footer.html');
?>

