

<h1>Liste des posts</h1>
<?php if (count($params['post']) > 0) { ?>
<p>Vos post : </p><br>

    <?php foreach ($params['post'] as $post) { ?>
<ul>
    <li>
        Post numéro : <a href='http://l3.local/post?id=<?php echo $post->getId() ?> ' . ><?php echo $post->getId() ?></a>
    </li>

</ul>  
<?php }
} ?>

