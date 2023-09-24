READ ME:
1. For this to work youre going to have to install XAMPP and turn on the Apache and MYSQL.
2. Next youre going to want to import the "EMRfrontend.sql" database to localhost/phpmyadmin in the browser.
3. Once you have your database imported onto the local host and you have the apache and MySQL turned on within XAMPP, go to your XAMPP folder
    on your system and insert the "EMR_Project" folder that you downloaded into the "htdocs" folder within XAMPP. eg: C:\xampp\htdocs (mine looks like this). If you do not insert the EMR_Project folder into this "htdocs" folder within XAMPP the localhost website wont work.
4. Once you have all of these done make your way to http://localhost/EMR_project/EMR_frontend.php in your browser.
5. Here you should be able to see the website and be able to create new data for prescriptions and appointments. Deleting data can be done at http://localhost/phpmyadmin
    deleting data within the website is a still a work in progress. 