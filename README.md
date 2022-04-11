# Food Store Assignment

## Setup Instructions

1. Fork this repository.
1. Windows users, open Git Bash and run these commands to navigate to your XAMPP htdocs folder:
```
cd C:
cd xampp/
cd htdocs/
```
1. Clone your repository by running this command:
```
git clone https://github.com/your-username/food-store.git
```
1. Open the folder in VS Code:
```
cd food-store
code .
```

## Part 1

1. Set this project up using the MVC template files.
   - Do not copy the .git folder if you have one.
   - Modify the RewriteBase in the public/.htaccess file.
   - Modify the URLROOT variable in the app/config/config.php file.
1. Move the /css, /images, /js, and /plugins folders inside the /public folder.
1. Move the about.html, index.html, product.html, and products.html files inside the /app/views/pages folder.
1. From the index.html file, move lines 411 to the end to the app/views/inc/footer.php file. 
   - Add `<?php echo URLROOT; ?>/` to each `<script>` tag.
1. In config.php, define 5 global variables CURRENTYEAR, SITENAME, FACEBOOK_URL, TWITTER_URL, and INSTAGRAM_URL. Write code to set CURRENTYEAR to the current year, set the SITENAME to your name, and set the other 3 variables to fictious social media URLs. 
1. In footer.php, write PHP code to replace "20XX" with the CURRENTYEAR variable, "Your Name" with the SITENAME variable, and the three "#" symbols with the FACEBOOK_URL, TWITTER_URL, and INSTAGRAM_URL variables.
   - Add `<?php echo URLROOT; ?>/` to each `<img>` tag.
1. From the index.html file, move lines 43-89 to the app/views/inc/navbar.php file. 
   - Add `<?php echo URLROOT; ?>/` to each `<a>` and `<img>` tag. Modify the link paths to "pages/about" and "pages/products".
1. From the navbar.php file, move the SLIDER content to a new /inc file called slider.php
   - Add `<?php echo URLROOT; ?>/` to the `<img>` tag.
1. From the about.html file, moves lines 67-73 to a new /inc file called subheader.php
1. From the index.html file, move the first 42 lines to the header.php file.
1. In header.php, write PHP code to replace "Your Name" with the SITENAME variable.
   - Add `<?php echo URLROOT; ?>/` to each `<link>` tag.
1. Open the Pages.php controller, create a method for index, about, products, and product. Create a data array key called "title" and set it to either "home", "about", or "products".
1. In the navbar.php file, write some PHP code to determine which menu item has the "current-menu-item" class applied.
1. Also in the navbar.php file, write some PHP code to determine whether to display the slider or subheader.
1. Set up an index.php, about.php, products.php, and product.php file using the /inc files and the remaining content.
   - Add `<?php echo URLROOT; ?>/` to each `<img>` and `<a>` tag.
1. Test your project to verify that http://localhost/food-store correctly displays the home page. Click the links to verify that they correctly navigate and display /pages/about, /pages/products, /pages/product, and /pages/missing.

## Part 2