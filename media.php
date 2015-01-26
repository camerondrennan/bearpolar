<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 22/01/15
 * Time: 00:16
 */

include('includes/header.html');

echo "
<div id=\"content\">

    <h1>INSTAGRAM</h1>
    <div id=\"instagram\">
        <script type=\"text/javascript\">
            var userFeed = new Instafeed({
                get: 'user',
                userId: 1660191409,
                accessToken: '1660191409.467ede5.b2b29da9b26f4527aa4872d3f339d2f5',
                resolution: 'standard_resolution',
                template: '<a href=\"{{image}}\" data-lightbox=\"instagram\"><img src=\"{{image}}\" style=\"width: 24%; margin: 0.5%;\" /></a>'


            });
            userFeed.run();
        </script>
        <div id=\"instafeed\"></div>
    </div>

    <h1>FACEBOOK</h1>
    <div id=\"facebook\">
        <iframe src=\"http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F668906883228350&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435\" scrolling=\"yes\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:100%; height:500px; background: white; float:left; \" allowtransparency=\"true\"></iframe>
    </div>

    <h1>TWITTER</h1>
    <div id=\"twitter\">
        <a class=\"twitter-timeline\" href=\"https://twitter.com/camerondrennan\" data-widget-id=\"557684337374953473\">Tweets by @camerondrennan</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
    </div>

</div>
";

include('includes/footer.html');
?>