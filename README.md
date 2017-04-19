# htaccess-test

Present cached static HTML from file system without having to invoke the PHP interpreter, using `.htaccess` rewrite rules

*Note:* It seems that some rewrite rules don't work correctly on [one.com](https://www.one.com/) hosted sites. This example
has been tested to work correctly. See [test page](#test-page) below

## What it does

If request is for a `*.html` page then it prepends `/cache/` directory to see if a cached version of the page already exists
as a static file within that directory. If so, then the cached file is presented; if not then rewrites to `index.php`, eg

* accessing `cached.html` will present content from `cache/article.html`
* accessing `not-cached.html` will present output from `index.php`

In a real working program, when `index.php` ouputs a new HTML page, it would also write a copy to the `cache` directory,
which could then be presented on subsequent requests without having to invoke the PHP interpreter. Obviously, it also
needs some way of clearing the cache when content is changed

## Test page

http://borilla.co.uk/htaccess-test/
