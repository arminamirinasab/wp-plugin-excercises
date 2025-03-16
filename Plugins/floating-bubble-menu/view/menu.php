<?php
$bubbleOptions = get_option("bubble-datas");
?>

<ul id="floating-button-menu">
  <li style="background-color: <?= $bubbleOptions['bubble-menu-color1'] ?>" class="floating-button-menu-item">
    <a rel="nofollow" target="<?= $bubbleOptions['bubble-menu-url1'] ? "_target" : "_self" ?>" href="<?= $bubbleOptions['bubble-menu-url1'] ? $bubbleOptions['bubble-menu-url1'] : "#" ?>">
      <?= $bubbleOptions['bubble-menu-item1'] ?>
    </a>
  </li>
  <li style="background-color: <?= $bubbleOptions['bubble-menu-color2'] ?>" class="floating-button-menu-item">
    <a rel="nofollow" target="<?= $bubbleOptions['bubble-menu-url2'] ? "_target" : "_self" ?>" href="<?= $bubbleOptions['bubble-menu-url2'] ? $bubbleOptions['bubble-menu-url2'] : "#" ?>">
      <?= $bubbleOptions['bubble-menu-item2'] ?>
    </a>
  </li>
  <li style="background-color: <?= $bubbleOptions['bubble-menu-color3'] ?>" class="floating-button-menu-item">
    <a rel="nofollow" target="<?= $bubbleOptions['bubble-menu-url3'] ? "_target" : "_self" ?>" href="<?= $bubbleOptions['bubble-menu-url3'] ? $bubbleOptions['bubble-menu-url3'] : "#" ?>">
      <?= $bubbleOptions['bubble-menu-item3'] ?>
    </a>
  </li>
  <li style="background-color: <?= $bubbleOptions['bubble-menu-color4'] ?>" class="floating-button-menu-item">
    <a rel="nofollow" target="<?= $bubbleOptions['bubble-menu-url4'] ? "_target" : "_self" ?>" href="<?= $bubbleOptions['bubble-menu-url4'] ? $bubbleOptions['bubble-menu-url4'] : "#" ?>">
      <?= $bubbleOptions['bubble-menu-item4'] ?>
    </a>
  </li>
</ul>