<?php
/*
*
* Enable debug mode. Set to false for production
*
*/
$config['enable_debug_mode'] = false;

/*
*
* Choose whether to use http or https protocol
* True results in redirects to https
*
*/
$config['enable_https'] = true;

/*
*
* Set the $root variables, with http/https, depending on whether https or not is enabled & available on the server..
* The $root variable is used in the base of global url variables
*
*/
$root = ($config['enable_https'] && isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];

/*
*
* Global url variables; urls that are useful throughout the app
*
*/
$config['base_url'] = $root;
$config['current_url'] = $root.$_SERVER['REQUEST_URI'];
$config['current_url_clean'] = strtok($root.$_SERVER['REQUEST_URI'], "?");
$config['url_params'] = $_GET;

/*
*
* Global path variables; paths that are useful throughout the app
*
*/
$config['app_path'] = $_SERVER['DOCUMENT_ROOT'];

/*
*
* Language & Charset
*
*/
$config['language'] = 'en-GB';
$config['charset'] = 'UTF-8';

/*
*
* Set these to enable php caching & minification
*
*/
$config['php_cache'] = false;
$config['php_minify'] = false;

/*
*
* Json data Locations
*
*/
$config['json_data'] = '../public/json/data.min.json';
$config['json_secret'] = '../public/json/_secret.json'; // this is blank
// $config['json_secret'] = '../public/json/secret.json'; // this is real but excluded in gitignore

/*
*
* Set the locations that twig will look for templates in
* First set the base location (relative), then set an array with subsequent folders to look in
*
*/
$config['twig_templates_base_location'] = '../public/views/';
$config['twig_templates_locations'] = array(
  'parts',
  
  'type',
  'type/archive',
  
  'type/blog',
  'type/blog/post',
  'type/blog/post/content',
  'type/blog/post/formats',
  'type/blog/post/parts',
  
  'type/events',
  'type/events/event',
  'type/events/event/content',
  // 'type/events/event/parts',
  
  'type/page',
  'type/page/content',
  'type/page/parts',
  
  'type/portfolio',
  'type/portfolio/project',
  'type/portfolio/project/content',
  'type/portfolio/project/formats',
  'type/portfolio/project/parts',
  
  'type/single',
);

/*
*
* Basically, this is the place to 'register' new post types
* These global settings get used in various places throughout the app, particaulary for creating urls for different archives & links etc 
* Non-archived content_type 'page' is built-in & does not need to be added here
* At the moment, all archived content_types need to be registered here
* Also I could try to allow for new, non-archived content_types to also be registered here also, instead of just having pages built-in
* Likewise, I could try to allow for things like non-public content types, non-archived & non-singular types together etc, which would never need to be even routed
*
*/
$config['types'] = array();

/*
*
* Blog registration
*
*/

$config['types']['blog'] = array(
  'key'  => 'blog', // used as main key/main archive url
  'items' => 'posts', // used as post items key/in singular urls
  'single' => 'post', // used as singular key such as in queries
  'visibility' => 'public',
  'per_page' => 2,
  'meta' => array(
    'title'  => 'My Blog', // MainIndexArchive title
    'description' => 'Something more descriptive goes here...', // MainIndexArchive description
    'meta_title' => '',
    'meta_description' => '',
  ),
);

/*
*
* Blog taxonomies registration (categories, tags)
*
*/

$config['types']['blog']['taxes_in_meta'] = array('categories', 'tags');
$config['types']['blog']['taxonomies'] = array();
$config['types']['blog']['taxonomies']['categories'] = array(
  'key'  => 'categories', // used as main key/archive url
  'single'  => 'category', // used as singular key such as in queries
  'meta' => array(
    'title'  => 'Categories', // CollectionArchive title
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype', // CollectionArchive description
    'meta_title' => '',
    'meta_description' => '',
  ),
);
$config['types']['blog']['taxonomies']['tags'] = array(
  'key'  => 'tags',
  'single'  => 'tag',
  'meta' => array(
    'title'  => 'Tags',
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype',
    'meta_title' => '',
    'meta_description' => '',
  ),
);

/*
*
* Portfolio registration
*
*/

$config['types']['portfolio'] = array(
  'key'  => 'portfolio',
  'items' => 'projects',
  'single' => 'project',
  'visibility' => 'public',
  // 'per_page' => 6,
  'meta' => array(
    'title'  => 'Portfolio',
    'description' => 'Check out my latest web software development portfolio projects.',
    'meta_title' => '',
    'meta_description' => '',
  ),
);

/*
*
* Portfolio taxonomies registration (technologies)
*
*/

$config['types']['portfolio']['taxes_in_meta'] = array('technologies', 'categories');
$config['types']['portfolio']['taxonomies'] = array();
$config['types']['portfolio']['taxonomies']['technologies'] = array(
  'key'  => 'technologies',
  'single'  => 'technology',
  'meta' => array(
    'title'  => 'Technologies',
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype',
    'meta_title' => '',
    'meta_description' => '',
  ),
);
$config['types']['portfolio']['taxonomies']['categories'] = array(
  'key'  => 'categories',
  'single'  => 'category',
  'meta' => array(
    'title'  => 'Categories',
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype',
    'meta_title' => '',
    'meta_description' => '',
  ),
);

/*
*
* Events registration
*
*/

$config['types']['events'] = array(
  'key'  => 'events',
  'items' => 'events',
  'single' => 'event',
  'visibility' => 'public',
  'per_page' => 3,
  'meta' => array(
    'title'  => 'Our Events',
    'description' => 'Check out our latest & upcoming Events.',
    'meta_title' => '',
    'meta_description' => '',
  ),
);

/*
*
* Events taxonomies registration (locations)
*
*/

$config['types']['events']['taxes_in_meta'] = array('locations', 'categories');
$config['types']['events']['taxonomies'] = array();
$config['types']['events']['taxonomies']['locations'] = array(
  'key'  => 'locations',
  'single'  => 'location',
  'meta' => array(
    'title'  => 'Locations',
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype',
    'meta_title' => '',
    'meta_description' => '',
  ),
);
$config['types']['events']['taxonomies']['categories'] = array(
  'key'  => 'categories',
  'single'  => 'category',
  'meta' => array(
    'title'  => 'Categories',
    'description' => 'Handshake release assets validation metrics first mover advantage ownership prototype',
    'meta_title' => '',
    'meta_description' => '',
  ),
);

return $config;