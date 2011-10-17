<?php
require 'header.php';
?>

<table class="contentbox"><tr>

<td valign="top" style="width:33%">
<table class="contenttable" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#E7CC85" style="padding:4px; color:#6C5415; font-weight:bold;">About</td></tr>
<tr><td style="padding:4px;">Welcome to the HelioHost Dashboard. This website allows you to see all the latest information
at a glance, and access lots of useful areas of HelioHost quickly and efficiently.</td></tr>
</table>
<br>
<table class="contenttable links" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#E7CC85" style="padding:4px; color:#6C5415; font-weight:bold;">Useful Links</td></tr>
<tr><td style="padding:4px;">
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://www.heliohost.org/">HelioHost</a></div>
<div style="height:3px;"></div>
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://www.helionet.org/">HelioNet</a></div>
<div style="height:3px;"></div>
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://wiki.helionet.org/">Wiki</a></div>
<div style="height:3px;"></div>
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://panel.helionet.org/">HelioPanel</a></div>
<div style="height:3px;"></div>
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://stevie.heliohost.org:2082/">cPanel for Stevie</a></div>
<div style="height:3px;"></div>
<div style="background-color:#F9F1DF; color:#6C5415; padding:4px;"><a href="http://johnny.heliohost.org:2082/">cPanel for Johnny</a></div>
</td></tr>
</table>
</td>

<td valign="top" style="width:33%">
<table class="contenttable" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#E7CC85" style="padding:4px; color:#6C5415; font-weight:bold;">Twitter @HelioHost</td></tr>
<tr><td style="padding:4px;">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 400,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('HelioHost').start();
</script>
</td></tr>
</table>
</td>

<td valign="top" style="width:33%">
<table class="contenttable" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#E7CC85" style="padding:4px; color:#6C5415; font-weight:bold;">Latest Posts</td></tr>
<tr><td><IFRAME src="latestposts.php" width="100%" height="400" scrolling="yes" frameborder="0"></IFRAME></td></tr>
</table>
</td>

</tr></table>

<?php 
require 'footer.php';
?>