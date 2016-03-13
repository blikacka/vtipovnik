<?php


namespace App\Forms;

use Nette\Object;


/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 */
class IconsHelper extends Object {
	public $icons = array('angellist', 'area-chart', 'at', 'bell-slash', 'bell-slash-o', 'bicycle', 'binoculars', 'birthday-cake', 'bus', 'calculator', 'cc', 'cc-amex', 'cc-discover', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'copyright', 'eyedropper', 'futbol-o', 'google-wallet', 'ils', 'ioxhost', 'lastfm', 'lastfm-square', 'line-chart', 'meanpath', 'newspaper-o', 'paint-brush', 'paypal', 'pie-chart', 'plug', 'slideshare', 'toggle-off', 'toggle-on', 'trash', 'tty', 'twitch', 'wifi', 'yelp',

		'adjust', 'anchor', 'archive', 'area-chart', 'arrows', 'arrows-h', 'arrows-v', 'asterisk', 'at', 'car', 'ban', 'university', 'bar-chart', 'barcode', 'bars', 'beer', 'bell', 'bell-o', 'bell-slash', 'bell-slash-o', 'bicycle', 'binoculars', 'birthday-cake', 'bolt', 'bomb', 'book', 'bookmark', 'bookmark-o', 'briefcase', 'bug', 'building', 'building-o', 'bullhorn', 'bullseye', 'bus', 'taxi', 'calculator', 'calendar', 'calendar-o', 'camera', 'camera-retro', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'cc', 'certificate', 'check', 'check-circle', 'check-circle-o', 'check-square', 'check-square-o', 'child', 'circle', 'circle-o', 'circle-o-notch', 'circle-thin', 'clock-o', 'times', 'cloud', 'cloud-download', 'cloud-upload', 'code', 'code-fork', 'coffee', 'cog', 'cogs', 'comment', 'comment-o', 'comments', 'comments-o', 'compass', 'copyright', 'credit-card', 'crop', 'crosshairs', 'cube', 'cubes', 'cutlery', 'tachometer', 'database', 'desktop', 'dot-circle-o', 'download', 'pencil-square-o', 'ellipsis-h', 'ellipsis-v', 'envelope', 'envelope-o', 'envelope-square', 'eraser', 'exchange', 'exclamation', 'exclamation-circle', 'exclamation-triangle', 'external-link', 'external-link-square', 'eye', 'eye-slash', 'eyedropper', 'fax', 'female', 'fighter-jet', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-video-o', 'file-pdf-o', 'file-powerpoint-o', 'file-word-o', 'film', 'filter', 'fire', 'fire-extinguisher', 'flag', 'flag-checkered', 'flag-o', 'flask', 'folder', 'folder-o', 'folder-open', 'folder-open-o', 'frown-o', 'futbol-o', 'gamepad', 'gavel', 'gift', 'glass', 'globe', 'graduation-cap', 'users', 'hdd-o', 'headphones', 'heart', 'heart-o', 'history', 'home', 'picture-o', 'inbox', 'info', 'info-circle', 'key', 'keyboard-o', 'language', 'laptop', 'leaf', 'lemon-o', 'level-down', 'level-up', 'life-ring', 'lightbulb-o', 'line-chart', 'location-arrow', 'lock', 'magic', 'magnet', 'share', 'reply', 'reply-all', 'male', 'map-marker', 'meh-o', 'microphone', 'microphone-slash', 'minus', 'minus-circle', 'minus-square', 'minus-square-o', 'mobile', 'money', 'moon-o', 'music', 'newspaper-o', 'paint-brush', 'paper-plane', 'paper-plane-o', 'paw', 'pencil', 'pencil-square', 'phone', 'phone-square', 'pie-chart', 'plane', 'plug', 'plus', 'plus-circle', 'plus-square', 'plus-square-o', 'power-off', 'print', 'puzzle-piece', 'qrcode', 'question', 'question-circle', 'quote-left', 'quote-right', 'random', 'recycle', 'refresh', 'retweet', 'road', 'rocket', 'rss', 'rss-square', 'search', 'search-minus', 'search-plus', 'share-alt', 'share-alt-square', 'share-square', 'share-square-o', 'shield', 'shopping-cart', 'sign-in', 'sign-out', 'signal', 'sitemap', 'sliders', 'smile-o', 'sort', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-asc', 'sort-desc', 'sort-numeric-asc', 'sort-numeric-desc', 'space-shuttle', 'spinner', 'spoon', 'square', 'square-o', 'star', 'star-half', 'star-half-o', 'star-o', 'suitcase', 'sun-o', 'tablet', 'tag', 'tags', 'tasks', 'terminal', 'thumb-tack', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up', 'ticket', 'times-circle', 'times-circle-o', 'tint', 'toggle-off', 'toggle-on', 'trash', 'trash-o', 'tree', 'trophy', 'truck', 'tty', 'umbrella', 'unlock', 'unlock-alt', 'upload', 'user', 'video-camera', 'volume-down', 'volume-off', 'volume-up', 'wheelchair', 'wifi', 'wrench',

		'file', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-video-o', 'file-o', 'file-pdf-o', 'file-powerpoint-o', 'file-text', 'file-text-o', 'file-word-o',

		'circle-o-notch', 'cog', 'refresh', 'spinner',

		'check-square', 'check-square-o', 'circle', 'circle-o', 'dot-circle-o', 'minus-square', 'minus-square-o', 'plus-square', 'plus-square-o', 'square', 'square-o',

		'cc-amex', 'cc-discover', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'credit-card', 'google-wallet', 'paypal',

		'area-chart', 'bar-chart', 'line-chart', 'pie-chart',

		'btc', 'jpy', 'usd', 'eur', 'gbp', 'ils', 'inr', 'krw', 'money', 'rub', 'try',

		'align-center', 'align-justify', 'align-left', 'align-right', 'bold', 'link', 'chain-broken', 'clipboard', 'columns', 'files-o', 'scissors', 'outdent', 'eraser', 'file', 'file-o', 'file-text', 'file-text-o', 'floppy-o', 'font', 'header', 'indent', 'italic', 'list', 'list-alt', 'list-ol', 'list-ul', 'paperclip', 'paragraph', 'repeat', 'undo', 'strikethrough', 'subscript', 'superscript', 'table', 'text-height', 'text-width', 'th', 'th-large', 'th-list', 'underline', 'angle-double-down', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-down', 'angle-left', 'angle-right', 'angle-up', 'arrow-circle-down', 'arrow-circle-left', 'arrow-circle-o-down', 'arrow-circle-o-left', 'arrow-circle-o-right', 'arrow-circle-o-up', 'arrow-circle-right', 'arrow-circle-up', 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'arrows', 'arrows-alt', 'arrows-h', 'arrows-v', 'caret-down', 'caret-left', 'caret-right', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'caret-up', 'chevron-circle-down', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'long-arrow-down', 'long-arrow-left', 'long-arrow-right', 'long-arrow-up', 'arrows-alt', 'backward', 'compress', 'eject', 'expand', 'fast-backward', 'fast-forward', 'forward', 'pause', 'play', 'play-circle', 'play-circle-o', 'step-backward', 'step-forward', 'stop', 'youtube-play', 'adn', 'android', 'angellist', 'apple', 'behance', 'behance-square', 'bitbucket', 'bitbucket-square', 'btc', 'cc-amex', 'cc-discover', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'codepen', 'css3', 'delicious', 'deviantart', 'digg', 'dribbble', 'dropbox', 'drupal', 'empire', 'facebook', 'facebook-square', 'flickr', 'foursquare', 'git', 'git-square', 'github', 'github-alt', 'github-square', 'gittip', 'google', 'google-plus', 'google-plus-square', 'google-wallet', 'hacker-news', 'html5', 'instagram', 'ioxhost', 'joomla', 'jsfiddle', 'lastfm', 'lastfm-square', 'linkedin', 'linkedin-square', 'linux', 'maxcdn', 'meanpath', 'openid', 'pagelines', 'paypal', 'pied-piper', 'pied-piper-alt', 'pinterest', 'pinterest-square', 'qq', 'rebel', 'reddit', 'reddit-square', 'renren', 'share-alt', 'share-alt-square', 'skype', 'slack', 'slideshare', 'soundcloud', 'spotify', 'stack-exchange', 'stack-overflow', 'steam', 'steam-square', 'stumbleupon', 'stumbleupon-circle', 'tencent-weibo', 'trello', 'tumblr', 'tumblr-square', 'twitch', 'twitter', 'twitter-square', 'vimeo-square', 'vine', 'vk', 'weixin', 'weibo', 'windows', 'wordpress', 'xing', 'xing-square', 'yahoo', 'yelp', 'youtube', 'youtube-play', 'youtube-square', 'ambulance', 'h-square', 'hospital-o', 'medkit', 'plus-square', 'stethoscope', 'user-md', 'wheelchair',);

	/**
	 * @return array
	 */
	public function getIcons() {
		return $this->icons;
	}

	/**
	 * @param array $icons
	 */
	public function setIcons($icons) {
		$this->icons = $icons;
	}


}
