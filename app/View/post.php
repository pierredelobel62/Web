<?php if ($params['post']) { ?>
<h1>Votre post : <?php echo $params['post']->getId() ?></h1>
<a href="http://l3.local/posts">Voir la liste des posts</a>

<ul>
    <li>
        Contenu : <?php echo $params['post']->getContent() ?>
    </li>
    <li>
        Nom : <?php echo $params['post']->getName() ?>
    </li>
</ul>  
<?php } ?>


