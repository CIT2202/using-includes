#PHP Includes

1. Re-structure the 'Huddersfield Guide' website to use PHP includes.
   * Start with the index.php page. 
   * Think which parts of the HTML are duplicated in different pages.
   * Create separate include files e.g. header.inc.php
   * Use these included files in index.php e.g.
     ```php
        include("header.inc.php");
     ```

    * Test this works
    * Modify the other pages in the site to also use the includes
   

2. One problem with the above is that every single page has the same page title. How can you modify your site so that each page has a unique title while still using an included header.

3. Have a go at separating logic from presentation in one of your PHP examples that uses a database e.g. your Assignment 1 piece. Look on the lecture slides for a simple example. It does taking some thinking about. Here are some basic guidelines:
     * Don't use any *echo* statements in your logic code. Instead assign values to variables and arrays. 
     * Include a 'view' file that will output data for you e.g. a list of search results. The view should simple output values of variables (no database related code). You may need a loop if working with arrays or if statements to check if a value has been set. 

