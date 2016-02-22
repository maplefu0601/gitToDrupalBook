<?php
dsm($node, 'mkdocs');
//if not connected to the repo then attempt to do a git pull
//if not found then print usernames for git repository
print 'please give "Raymond_Fu" access to your bitbucket.org project';
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; 
		function createNewMkdocBook($gitRepoUrl) {
			$url = 'http://54.69.251.157:6600/createNewMkdocBook';
			$data = array('gitRepoUrl' => $gitRepoUrl);
			$fieldsData = json_encode($data);
			$header = "Content-type: application/x-www-form-urlencoded\r\n" . "Content-Length: " . strlen($fieldsData) . "\r\n";
			//$response = drupal_http_request($url, $header,'POST', $fieldsData);
			$response = drupal_http_request($url.'?gitRepoUrl='.$gitRepoUrl, $header,'GET');
			dsm($response);

		}
		
		dsm('================creating new book=======');
		//$repo = 'git@bitbucket.org:jyamada/col.git';
		$repo = 'git@bitbucket.org:Raymond_Fu/docFromJson.git';
		dsm($repo);
		createNewMkdocBook($repo);
		dsm('end============new book====='); 
	?></span>

  <?php endif; ?>

  <div class="content clear-block">
    <?php print $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

</div>
