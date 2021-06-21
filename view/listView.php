<!DOCTYPE html>
<html>
<head>
    <title>List of Posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <ul>
       <?php foreach($posts as $post) { ?>
            <li>
                <a href="/index.php/show?id=<?=$post['id']?>">
                    <?=$post['title']?>
                </a>
            </li>
        <?php  } ?>
    </ul>
</body>
</html>