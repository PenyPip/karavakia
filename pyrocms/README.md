# Specifications

This project has the following specifications:

PHP Version: 8.0.20
Composer Version: 2.3.7

## Database

`sudo apt update`

`sudo apt upgrade`

`sudo apt install mysql-server`

`mysql --version`

`sudo service mysql stop`

`sudo mysqld_safe --skip-grant-tables`

`sudo service mysql start`

`sudo mysql -u root`

``

``

``


Before creating your database, you need to ensure that the MySQL service is installed and running.
To check whether that is the case, you may run the following command:

`sudo service mysql status`

If you find that the service is already installed, you may skip to the "Creating a database for the project" section.

## Installing the MySQL service

If mysql is not recognized as a service, you will have to proceed to installing the MySQL service. You may do so by running the following commands:

`sudo apt update`
`sudo apt install mysql-server`
`sudo mysql_secure_installation`

Follow the steps of the installation wizard shown in the terminal.

## Creating new MySQL user

Once the mysql_secure_installation is complete, you will have to login to MySQL as root by running:

`sudo mysql -u root`

You will have to provide the password you initialized during the installation process.
Once you are connected to your root user, you may run the following command, replacing username and password with those of your choosing, to create your user. 

`CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';`

It is also important to give your newly created user the necessary privileges. In order to do so you may run the following command:

`GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' WITH GRANT OPTION;`

If the above command fails, try running the same command but without the `WITH GRANT OPTION` parameter.

Once you've successfully ran this command, you'll have to refresh the privileges, by running:

`FLUSH PRIVILEGES;`

You may now log out of MySQL by running `exit;`

You may use any DB Client to test the MySQL connection, using your newly created user's credentials.

## Creating a database for the project

As a first step to the installation of the project, a local database needs to be created.

Note: After creating the database, it is advised not to use root as the username. Instead, use a username and password of your own choosing to access it.

You may use any DB Client to test the connection to your database. Such clients are HeidiSQL, DBeaver etc.

### Installation

Once you clone your project, be sure to open your terminal within the project folder (pyrocms). You can change folders by using the cd command. 

As your first step, you should use these commands to initiate the installation process:

`composer install`

In case composer installation fails, make sure the versions of your PHP and Composer meet the specifications, as defined under the Specifications section of this README.

`php artisan install`

During this stage, you will be asked to set up a database. Use the one you've already created before the installation. Ensure that your database is set up and that your credentials are valid.

Once the installation is complete, you may now use the following comamnds:

`php artisan key:generate`

`php artisan serve`

You may now launch and preview your project.
