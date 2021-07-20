
## Instructions on how to set up the project

->Save the project folder in xampp/htdocs

->Import the database(mysqldatabase/agletmovies) to myphpadmin or [run migration]

->Go to xampp/apache/conf/extra open the httpd-vhosts.conf file add this config at the bottom then save

##Virtualhost for agletmovies.build
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/agletmovies/public"
    ServerName agletmovies.build
</VirtualHost>

->Go to c:windows/system32/drivers/etc and open hosts file with notepade as administrator add this config at the bottom the save

127.0.0.1 localhost
127.0.0.1 agletmovies.build

**Now you can run the project by-> agletmovies.build in the browser ***

##Project Approach

-> home, favourite, contact views extends from layouts.app which routes from web.php landingcontroller get movies from api direct to home.blade which loops the json(results) using foreach statement. favourite movies views is assigned to if your a @guest you will not be able to access or add favourite movies else register or login

##Languages used
--> PHP/LARAVEL
--> SASS/CSS
--> BOOTSTRAP /VUE(LOGIN) 
--> HTML

--> Laravel makes authentication implementation very straightforward. Nearly everything is configured out-of-the-box. The framework also provides a simple way of organizing authorization logic as well as control resources access. Integration with tools to make faster web apps. handles many things such as routing, templating HTML, and authentication. and its seo friendly.


1. Speed
2. Security
3. Error/Exception Handling
4. Automation testing
5. URL Routing Configuration
6. MVC framework
