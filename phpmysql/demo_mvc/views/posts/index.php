<?php
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>
    <a href="index.php?controller=posts&action=showPost&id=' . $post->id . '">' . $post->title . '</a>
  </li>';
}
echo '</ul>';
?>