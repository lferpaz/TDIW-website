# Padel Mania
Online padel store where you can buy products, don't worry, it's only for education, it's not a real store, you won't be charged.

## Features
On this website you can do the following actions.
- Sign up
- Log in
- Search for a product
- Filter products
- Add a product to the cart
- Edit your profile
- View your shopping cart
- Remove a product from the shopping cart
- Edit a shopping cart product
- Place your order
- View your purchase history

## Requisites
- Have [xampp](https://www.apachefriends.org/es/index.html) installed.
- In your xampp htdocs folder run the following commands:

    ```
    $ git clone https://github.com/lferpaz/TDIW-website.git
    ```
    ```
    $ cd TDIW-website
    ```
    ```
    $ mv * ../
    ```
    ```
    $ rm -r TDIW-website
    ```
## Guide
1. In the control panel of xampp we will execute the services of apache and MySQL.
2. When both services are running, we will click on the button "Admin" from the service MySQL. 
3. You should see how in your default browser you access the url http://localhost/phpmyadmin/
4. In the left menu you will see the databases, if this is the first time you do it you will have to create the database, in case you reated the database you can go to the step 9.
5. Click on the first option in which it says "new", after having clicked on input name you will put the following name "padelstore" and click on create.
6. You will see how in the menu on the left you will see said database created previously. 
7. You will see how in the menu on the left you will see said database created previously, you will click on it and in the menus above you will click on import.
8. You will have to click on choose file and select the file that is in the db folder.
9. In your browser type the following url: http://localhost/index.php   

## Built with
- [vs-code](https://code.visualstudio.com/) - The editor used.
- [Xampp](https://www.apachefriends.org/es/index.html) - Database management system.
- [MySQL](https://www.mysql.com/) - Database.
- [jQuery](https://jquery.com/) - Javascript library.

## Authors
- **Miguel del Arco** - Developer - [migueldemollet](https://github.com/migueldemollet)
- **Luis Fernando** - Developer - [lferpaz](https://github.com/lferpaz)

## License
This project is under the MIT License - see the [LICENSE.md](LICENSE.md) file for details