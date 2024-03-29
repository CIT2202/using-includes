# PHP Includes

PHP provides a number of statements that allow us to insert other files in our PHP pages. This provides a simple way to remove duplicate code in our applications. 

Download this repository.

* Open *includes-demo.php* in a browser.
* Look at the source code for both *includes-demo.php* and *message.html*.
* Note how *includes-demo.php* displays content from *message.html* using the line:

```php
include "message.html";
```

Here are a couple of things about including files:
* We can include *html* and *php* files.
* There are several different statements that can be used to include content from different files:
  * *include*
  * *include_once*
  * *require*
  * *require_once*
  * At the moment it doesn't really matter which one we use. See the following link for a discussion of the differences https://stackoverflow.com/questions/2418473/difference-between-require-include-and-require-once

## Using Includes
* In a browser open the 'All About Huddersfield' website. It is a very simple PHP website.
* Re-structure the website to use PHP includes.
   * Start with the *index.php* page.
   * Think which parts of the HTML are duplicated in different pages.
   * Create separate include files e.g. header.php, footer.php.
   * Use these included files in index.php e.g.
     ```php
        include "header.php";
     ```
    * Test this works
* Modify the other pages in the site to also use includes.
* Add another page to the site e.g. a page about the University.
  - Make sure you build this page by using includes
* Modify the navigation bar so that it also features a link to the University page you have just created. You should find that changing one file updates the entire site.
* One problem with the above is that every single page has the same page title. How can you modify your site so that each page has a unique title while still using an included header.

