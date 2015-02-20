# PHPRoutingSystem
Simple php routing system that manage all the pages as controllers. Be aware this is a simplified version of what realy is a powefull routing system.

##How to use
- Download the `Route.php` and `.htaccess` files and place them in your website root folder.
- Create some classes to function as controllers

Exemple:
index.php
```php
<?php 
class IndexController { // url.com/
	function IndexAction() {
		echo '<h2>Test Home Page</h2>';
	}
}

class blogController { // url.com/blog
	function IndexAction() {
		echo '<h1>Show me your posts! NOW!</h1>';
	}

	function post() {
		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis dignissim lorem ut condimentum.</p>';
	}
}

require_once 'route.php';
```
This exemple allow you to view 3 diferent pages:
- The root one: IndexController -> IndexAction URL:: page.com/
- The blog: blogController -> IndexAction URL:: page.com/blog
- The blog posts: blogController -> post URL:: page.com/blog/post
