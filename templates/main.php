<?php 
\OCP\Util::addScript('readlater', 'script');  
\OCP\Util::addScript('readlater', 'bootstrap');  
\OCP\Util::addScript('readlater', 'bootstrap.min'); 

\OCP\Util::addStyle('readlater', 'style'); 
\OCP\Util::addStyle('readlater', 'bootstrap');  

?>

<div id="app">
	<div id="app-navigation">
		<ul class="with-icon">
		<?php print_unescaped($this->inc('part.add')) ?>
<?php print_unescaped($this->inc('part.feed.unread')) ?>	
			<?php print_unescaped($this->inc('part.search')) ?>
		<?php print_unescaped($this->inc('part.allitems')) ?>
		<?php print_unescaped($this->inc('part.videos')) ?>
		<?php print_unescaped($this->inc('part.images')) ?>
		<?php print_unescaped($this->inc('part.articles')) ?>
		<?php print_unescaped($this->inc('part.liked')) ?>
		</ul>
	</div>
	<div id="app-content">Your content</div>

	
	

</div>
