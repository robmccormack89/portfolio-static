<?php
// redirect to https if site protocol is set to https
if ($configs['site_protocol'] == "https") {
  if ($_SERVER['HTTPS'] != 'on') {
    $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('Location: ' . $url, true, 301);
    exit();
  }
}
// include the router class. see https://phprouter.com/ for further route setups & information
require_once('router.php');
// homepage route
$router->get('/', function(){
  $homepage = new Home_controller;
  $homepage->index();
});
$router->get($GLOBALS['configs']['blog_url'], function(){
  $blog = new Archive_controller;
  $blog->archive();
});
// dynamic posts route
$router->get($GLOBALS['configs']['blog_url'].'/:slug', function($slug){
  $post = new Single_controller;
  $post->single($slug, '');
});
// portfolio
$router->get($GLOBALS['configs']['portfolio_url'], function(){
  $portfolio = new Archive_controller;
  $portfolio->archive();
});
// projects
$router->get($GLOBALS['configs']['portfolio_url'].'/:slug', function($slug){
  $project = new Single_controller;
  $project->single($slug, '');
});
// dynamic pages route
$router->get('/:parent_slug', function($parent_slug){
  $page = new Single_controller;
  $page->single($parent_slug, '');
});
// dynamic pages route (with sub pages)
$router->get('/:parent_slug/:child_slug', function($parent_slug, $child_slug){
  $page = new Single_controller;
  $page->single($parent_slug, $child_slug);
});
// error page route (goes last)
$router->any('/404', function(){
  $core = new Core_controller;
  $core->error();
});