---
class:
folder:
shuffle:
limit:
layout:
columns:
---
<? if(isset($class)): ?>
  <? $class = 'lazyload gallery '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'lazyload gallery block object-cover object-center w-full h-full rounded-lg  tns-lazy' ?>
<? endif ?>
<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  $folder = str_replace('images://', PAGES_SITE_ROOT.'/images/', $folder);

  if(is_dir($folder)):
    $images = glob($folder.'/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);
    array_walk($images, function(&$value, $key) {
      $value = str_replace(PAGES_SITE_ROOT.'/images/', 'images://', $value);
  		//var_dump($value);exit;
    });

  endif;

endif ?>

<? /* Shuffle the images */ ?>
<? if(isset($shuffle) && $shuffle):
  shuffle($images);
endif ?>

<? $images = ($limit) ? array_slice((array)$images, 0, $limit) : (array)$images ; ?>

<? foreach($images as $i => $image): ?>

  <?  
  $svg = array('svg');
  $ext = pathinfo($image, PATHINFO_EXTENSION);
      if (in_array($ext, $svg)) :?>
    <?= $image; ?>
  <? else:  ?>
    <img class="<?= $class ?>" src="/<?= $image ?>" data-lazyload="progressive,inline" alt="Randomly generated image showing completed Well Foundation project">
  <? endif; ?>

<? endforeach; ?>