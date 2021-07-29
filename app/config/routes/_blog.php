<?php
namespace Rmcc;

/*
*
* Main Index Archive
*
*/
$router->get('/blog/', function() {
  $params = parse_url($_SERVER['REQUEST_URI']);
  if (isset($params['query']) && queryParamsExists($params['query'])) {
    parse_str($params['query'], $params_array);
    if($_SERVER['REQUEST_URI'] === '/blog?p=1'){
      header('Location: /blog', true, 301);
      exit();
    }
    (new ArchiveController('blog'))->queryMainIndexArchive($params['query']);
  } else {
    Cache::cacheServe(function(){ 
      (new ArchiveController('blog'))->getMainIndexArchive();
    });
  }
});

/*
*
* Singles
*
*/
$router->get('/blog/posts/{slug}', function($slug) {
  Cache::cacheServe(function() use ($slug) { 
    global $query_type;
    $query_type = 'blog';
    global $query_context;
    $query_context = 'Single';
    (new SingleController('blog', $slug))->getSingle();
  });
});

/*
*
* Term Archives
*
*/
$router->get('/blog/categories/{term}/', function($term){
   $params = parse_url($_SERVER['REQUEST_URI']);
   if (isset($params['query']) && queryParamsExists($params['query'])) {
     parse_str($params['query'], $params_array);
     if($_SERVER['REQUEST_URI'] === '/blog/categories/'.$term.'?p=1'){
       header('Location: /blog/categories/'.$term, true, 301); // redirect requests for page one of paged archive to main archive
       exit();
     }
     (new ArchiveController('blog'))->queryTaxTermArchive($params['query'], 'categories', $term);
   } else {
     Cache::cacheServe(function() use ($term) { 
       (new ArchiveController('blog'))->getTaxTermArchive('categories', $term);
     });
   } 
});

/*
*
* Term Archives
*
*/
$router->get('/blog/tags/{term}/', function($term){
   $params = parse_url($_SERVER['REQUEST_URI']);
   if (isset($params['query']) && queryParamsExists($params['query'])) {
     parse_str($params['query'], $params_array);
     if($_SERVER['REQUEST_URI'] === '/blog/tags/'.$term.'?p=1'){
       header('Location: /blog/tags/'.$term, true, 301); // redirect requests for page one of paged archive to main archive
       exit();
     }
     (new ArchiveController('blog'))->queryTaxTermArchive($params['query'], 'tags', $term);
   } else {
     Cache::cacheServe(function() use ($term) { 
       // print_r('hey');
       (new ArchiveController('blog'))->getTaxTermArchive('tags', $term);
     });
   } 
});

// collection indexs
// $router->get('/blog/categories/', function() {
//   Cache::cacheServe(function() { 
//     (new ArchiveController())->getTaxCollectionArchive('blog', 'categories', true);
//   });
// });
// collection index - paged
// $router->get('/blog/categories/page/{page}', function($page){
//   if ($page == 1) {
//     header('Location: /blog/categories', true, 301);
//     exit();
//   }
//   Cache::cacheServe(function() use ($page) { 
//     (new ArchiveController())->getTaxCollectionArchive('blog', 'categories', true, $page);
//   });
// });
// collection index
// $router->get('/blog/tags/', function() {
//   Cache::cacheServe(function() { 
//     (new ArchiveController())->getTaxCollectionArchive('blog', 'tags', true);
//   });
// });
// collection index - paged
// $router->get('/blog/tags/page/{page}', function($page){
//   if ($page == 1) {
//     header('Location: /blog/tags', true, 301);
//     exit();
//   }
//   Cache::cacheServe(function() use ($page) { 
//     (new ArchiveController())->getTaxCollectionArchive('blog', 'tags', true, $page);
//   });
// });