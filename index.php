<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>htaccess test</title>
<meta name="description" content="Testing html caching using .htaccess rewrites - compatible with one.com hosting">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { font-family: sans-serif; }
</style>
</head>
<body>
<h1>index.php</h1>
<p>
Path: <strong><?php echo parse_url($_SERVER['REQUEST_URI'])['path'] ?></strong>
</p>
<p>
Testing html caching using .htaccess rewrites - compatible with
<a href="https://www.one.com/">one.com</a> hosting
</p>
<p>
Test links:
<ul>
<li><a href="cached.html">cached.html</a> (will be rewritten to cache/cached.html)</li>
<li><a href="not-cached.html">not-cached.html</a> (will rewrite to index.php)</li>
<li><a href="subdir/another.html">subdir/another.html</a> (will be rewritten to cache/subdir/another.html)</li>
<li><a href="subdir/not-cached.html">subdir/not-cached.html</a> (will rewrite to index.php)</li>
<li><a href="index.php">index.php</a> (access to .php files not allowed)</li>
<li><a href="image.jpg">image.jpg</a> (is allowed)</li>
</ul>
Links with querystrings (won't use cached version):
<ul>
<li><a href="cached.html?q=1">cached.html?q=1</a> (will rewrite to index.php)</li>
<li><a href="not-cached.html?q=1">not-cached.html?q=1</a> (will rewrite to index.php)</li>
<li><a href="subdir/another.html?q=1">subdir/another.html?q=1</a> (will rewrite to index.php)</li>
<li><a href="subdir/not-cached.html?q=1">subdir/not-cached.html?q=1</a> (will rewrite to index.php)</li>
</ul>
</p>
</body>
</html>
