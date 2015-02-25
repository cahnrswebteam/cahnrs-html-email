<?php
$videos = array(
	"Getting Started" => "3IRDMDV3P8c",
	"Adding a Header and Footer" => "TToc6mytNL8",
	"Adding a Banner Image" => "h14cxGVIasA",
	"Adding Content" => "HgQwoCwGUac",
	"Inserting Code into MailChimp" => "YGSuCjykT4I",
);
?>
<div id="email-help">
	<ul>
		<?php
		$i = 0;
		foreach ( $videos as $title => $id ) :
			echo '<li><a class="help-item" href="#" data-baseid="help-content-' . $i . '">' . $title . '</a></li>';
			$i++;
		endforeach;
		?>
	</ul>
	<?php
	$i = 0;
	foreach ( $videos as $title => $id ) :
	?>
	<div class="help-content help-content-<?php echo $i; ?>">
  	<div class="wrapper">
      <a class="close-help" href="#"><span class="screen-reader-text">Close help window</span></a>
      <h3><?php echo $title; ?></h3>
      <div class="inside">
        <iframe id="help-video-<?php echo $i; ?>" src="//www.youtube.com/embed/<?php echo $id; ?>?enablejsapi=1&origin=<?php echo strstr( home_url(), '.edu', true ) . '.edu'; ?>&rel=0" width="640" height="360" allowfullscreen></iframe>
      </div>
    </div>
    <div class="half"><a class="previous" href="#"><span class="screen-reader-text">&laquo; Previous</span></a></div>
    <div class="half"><a class="next" href="#"><span class="screen-reader-text">Next &raquo;</span></a></div>
	</div>
	<?php
		$i++;
	endforeach;
	?>
</div>
<script>
var players = new Array();

function onYouTubeIframeAPIReady() {
	<?php
		$i = 0;
		foreach ( $videos as $video ) :
			echo 'players[' . $i . '] = new YT.Player("help-video-' . $i . '")'."\r\n";
			$i++;
		endforeach;
	?>
}
</script>