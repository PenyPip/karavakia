# Specifications

This project has the following specifications:

PHP Version: 8
Composer Version: ^2

## Database

As a first step to the installation, a local database needs to be created. This can either be a MySQL or MariaDB database. While creating the database, it is advised not to use root as the username. Instead, use a username and password of your own choosing.

### Installation

Once you clone your project, be sure to open your terminal within the project folder (pyrocms). You can change folders by using the cd command. 

As your first step, you should use these commands to initiate the installation process:

-> composer install

-> php artisan install

During this stage, you will be asked to set up a database. Use the one you've already created before the installation.

Once the installation is complete, you may now use the following comamnds:

-> php artisan key:generate

-> php artisan serve

You may now launch and preview your project.