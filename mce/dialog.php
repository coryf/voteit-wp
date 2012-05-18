<?php
  $f = explode('wp-content', __FILE__);
  require_once($f[0]."/wp-load.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>VoteIt. Decisions made easy.</title>
  <style>
    body { text-align: center; }
    #url { width: 200px; }
    #error { display: none; background-color: #fdd; }
  </style>
  <script type="text/javascript" src="<?php echo includes_url(); ?>/js/tinymce/tiny_mce_popup.js"></script>
  <script type="text/javascript" src="js/dialog.js"></script>
</head>
<body>

<form onsubmit="VoteItDialog.insert();return false;" action="#">
  <p>Embed a VoteIt widget.</p>
  <p>Vote URL: <input id="url" name="url" type="text" class="text" /></p>
  <p id="error">This is not a valid VoteIt URL.</p>

  <div class="mceActionPanel">
    <input type="button" id="insert" name="insert" value="{#insert}" onclick="VoteItDialog.insert();" />
    <input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
  </div>

  <p><a href="https://www.voteit.com/decisions/new" target="_blank">Click here</a> to create a new vote.</p>
</form>

</body>
</html>
