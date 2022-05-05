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
1. From the index.html file, move lines 399 to the end to the app/views/inc/footer.php file. 
   - Add `<?php echo URLROOT; ?>/` to each `<script>` tag.
1. In config.php, define 2 global variables CURRENTYEAR and SITENAME. Write code to set CURRENTYEAR to the current year, and set the SITENAME to your name. 
1. In footer.php, write PHP code to replace "20XX" with the CURRENTYEAR variable, and "Your Name" with the SITENAME variable.
   - Add `<?php echo URLROOT; ?>/` to each `<img>` tag.
1. From the index.html file, move lines 41-89 to the app/views/inc/navbar.php file. 
   - Add `<?php echo URLROOT; ?>/` to each `<a>` and `<img>` tag. Modify the link paths to "pages/about" and "pages/products".
1. From the navbar.php file, move the SLIDER content to a new /inc file called slider.php
   - Add `<?php echo URLROOT; ?>/` to the `<img>` tag.
1. From the about.html file, moves lines 67-73 to a new /inc file called subheader.php
1. From the index.html file, move the first 40 lines to the header.php file.
1. In header.php, write PHP code to replace "Your Name" with the SITENAME variable.
   - Add `<?php echo URLROOT; ?>/` to each `<link>` tag.
1. Open the Pages.php controller, create a method for index, about, products, and product. Create a data array key called "title" and set it to either "home", "about", or "products".
1. In the navbar.php file, write some PHP code to determine which menu item has the "current-menu-item" class applied.
1. Also in the navbar.php file, write some PHP code to determine whether to display the slider or subheader.
1. Set up an index.php, about.php, products.php, and product.php file using the /inc files and the remaining content.
   - Add `<?php echo URLROOT; ?>/` to each `<img>` and `<a>` tag.
1. Test your project to verify that http://localhost/food-store correctly displays the home page. Click the links to verify that they correctly navigate and display "/pages/about", "/pages/products", and "/pages/product/0".
1. Push your work to GitHub:
```
git add .
git commit -m "Finished part 1"
git push origin main
```
1. Add `mlhaus` as a collaborator.

## Part 2

Create a new database called "food-store". Create two new tables with the following fields. Populate the employees table with 3 records. Populate the products table with at least 8 records.

| employees |
|-|
| - emp_id (INT, AUTO_INCREMENT, PRIMARY_KEY)<br>- first_name VARCHAR(255)<br>- last_name VARCHAR(255)<br>- job_title VARCHAR(255) |

| products |
|-|
| - prod_id (INT, AUTO_INCREMENT, PRIMARY_KEY)<br>- name VARCHAR(255)<br>- price DECIMAL(10, 2)<br>- category VARCHAR(255)<br>- featured BOOLEAN |

## Part 3

Update the about.php view to include the main content from about.html.

Add the necessary PHP in the model (Employee.php), view (about.php) and controller (Pages.php) to query the database and display the 3 employees.

## Part 4

Update the products.php view to include the main content from products.html.

Add the necessary PHP in the model (Product.php), view (products.php) and controller (Pages.php) to query the database and display the 8+ products (image, name, price, and featured icon). The image can be generated from the product name. For example, "Organic Carrots" will become "organic-carrots.jpg".

## Part 5

Update the product.php view to include the main content from product.html.

Add the necessary PHP in the model (Page.php), view (product.php) and controller (Pages.php) to query the database and display a single product (image, name, price, and category). The image can be generated from the product name. For example, "Organic Carrots" will become "organic-carrots.jpg".

## Part 6

Transfer your files to Siteground. Ask me for a new website when you're ready.

# Extra Credit

- Create a second products method in the Pages.php controller that includes a $category parameter. Query the database for only products that match that category. Add links to those categories on the home page "Food Categories" section.

- Use the category data field to generate the list of related products on the product.php view.

- Use the featured data field to generate the list of featured products on the index.php view.
