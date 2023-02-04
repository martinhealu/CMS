<?php
global $post;
$children = get_pages([
    "child=of" =>$post->ID
])

?>
<ul class="sidemenu">


    <?php 
        $postID;

        if($post->post_parent){
            $ancestors= get_post_ancestors($post->ID);
            $root= count($ancestors)-1;
            $postID = $ancestors[$root];
            
        }else{
            $postID = $post->ID;
        }

    wp_list_pages([
        "child_of" => $postID,
        "title_li" => ""
    ])
    ?>
</ul>      