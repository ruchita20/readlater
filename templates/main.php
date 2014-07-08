<?php
\OCP\Util::addScript('news', 'vendor/angular/angular');
\OCP\Util::addScript('news', 'vendor/angular-ui/build/angular-ui');
\OCP\Util::addScript('news', 'vendor/momentjs/moment');
\OCP\Util::addScript('news', 'vendor/momentjs/min/langs');
\OCP\Util::addScript('news', 'vendor/bootstrap/tooltip');
\OCP\Util::addScript('news', 'public/app');

\OCP\Util::addStyle('news', 'bootstrap/tooltip');
\OCP\Util::addStyle('readlater', 'addnew');
\OCP\Util::addStyle('readlater', 'feeds');
\OCP\Util::addStyle('readlater', 'items');
\OCP\Util::addStyle('readlater', 'settings');
\OCP\Util::addStyle('readlater', 'showall');
\OCP\Util::addStyle('readlater', 'firstrun');

?>

<div id="app" ng-app="News" ng-cloak ng-controller="AppController">
	<div id="undo-container">
		<div undo-notification id="undo">
			<a href="#"><?php p($l->t('Undo deletion of %s', '{{ getCaption() }}')); ?></a>
		</div>
	</div>
	<div id="app-navigation" ng-controller="FeedController">
	

		<ul class="with-icon" data-id="0" droppable>
			<?php print_unescaped($this->inc('part.addnew')) ?>
		<?php print_unescaped($this->inc('part.feed.unread')) ?>	
			<?php print_unescaped($this->inc('part.search')) ?>
		<?php print_unescaped($this->inc('part.allitems')) ?>
		<?php print_unescaped($this->inc('part.videos')) ?>
		<?php print_unescaped($this->inc('part.images')) ?>
		<?php print_unescaped($this->inc('part.articles')) ?>
		<?php print_unescaped($this->inc('part.liked')) ?>
			
			
		</ul>

		<div id="app-settings" ng-controller="SettingsController">
			<?php print_unescaped($this->inc('part.settings')) ?>
		</div>

	</div>

	<div id="app-content" ng-class="{
			loading: isLoading(),
			autopaging: isAutoPaging()
		}"
		ng-controller="ItemController"
		ng-show="initialized && !feedBusinessLayer.noFeeds()"
		news-item-scroll="true"
		item-shortcuts
		news-pull-to-refresh="loadNew()"
		tabindex="-1"
		news-auto-focus>
		<?php print_unescaped($this->inc("part.items")); ?>
	</div>
	<div id="firstrun" ng-show="initialized && feedBusinessLayer.noFeeds()">
		<?php print_unescaped($this->inc("part.firstrun")); ?>
	</div>

</div>
