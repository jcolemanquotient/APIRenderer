<?php
/**
 * @file
 * Theme implementation for the Twitter feed.
 *
 * Available variables:
 * - $message: the error message.
 *
 */
?>
<div class="">
  <div class="twitter-title">
    <h1 class="twitter-title-1">Tweets</h1><span class="twitter-title-2">  by @<?php print $screen_name ?></span>
  </div>
  <div class="twitter-content">
    <?php print $content ?>
  </div>
  <a href="https://twitter.com/<?php print $screen_name ?>" class="twitter-follow btn btn-default">Follow me on twitter </a>
</div>
