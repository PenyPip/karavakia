# Project Requirements

This project has to at least meet the following requirements:

`PHP Version: 8.0.20` 

- can be tested by running `php -v`

`Composer Version: 2.3.7` 

- can be tested by running `composer -v`

`MySQL 8.0.29-0ubuntu0.20.04.3 for Linux on x86_64` 

- Can be tested by running `mysql --version`

# Project Local Installation

- The first step is to clone the project from the <a href="https://github.com/PenyPip/karavakia">repository</a> into a project folder 
  - This process can be done automatically when running:
  
    `git clone https://github.com/PenyPip/karavakia` 


- Once the cloning process is done, you'll have to navigate to the newly created project folder on your terminal and run `composer install`.
This command tracks the composer.json file, namely which dependencies are listed and installs them locally.
This is a necessary first step, since these same dependencies are by default listed in the `.gitignore` file which means that they are exluded from the repo.


- Upon completion of the aforementioned process, a `.env` file needs to be created, which will include the following 
content replacing the `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` fields 
with the database host, name, username and password respectively. It is heavily advised 
not to use special characters (namely #) in the `DB_PASSWORD` field, since the 
`.env` file may read them in an unintended way (for example, # is registered as a comment).

    ```
    APP_ENV=local
    INSTALLED="false"
    APP_DEBUG=true
    DEBUG_BAR=false
  
    DB_CONNECTION=mysql
    DB_HOST=<host>
    DB_DATABASE=<database_name>
    DB_USERNAME=<database_username>
    DB_PASSWORD=<database_password>
    ```

    Having configured this `.env` file make sure that it is saved in the root directory of your project folder.


- Run `php artisan install` and follow the installation wizard. If the wizard fails due 
to a SQL connection error, check the `.env` file (since it may have received modifications) 
and repeat the installation process.


- Generate a project key by running `php artisan key:generate`
- Test the project's functionality by running `php artisan serve

# Interacting with the Database

In order to utilize and populate the database of your project, there are 3 requirements:

- A **model** (a class-oriented approach of a table of our database.)
- A **migration** (a class that defines the information that the database needs to know upon creation of a table.)
- A **seeder** (a way of seeding the database with predefined data.)

## Updating the local database to reflect project updates

Once we have updated our project files with the files fetched from github, we have received the migrations, the models and seeders that are necessary to update our local database. To update our local database, the following command needs to be executred:
`php artisan db:seed`

In case the above fails, you need to run `composer dump-autoload` to rebuild the automatically generated composer files. Once that is done you may run `php artisan db:seed` again.

# Troubleshooting: Potentially missing requirements

## PHP Installation

- Make sure your system is updated `sudo apt update`
- Add the PHP repository `sudo add-apt-repository ppa:ondrej/php`
- Update again `sudo apt update`
- Install PHP `sudo apt install php8.0`
- Install the necessary PHP extensions: `sudo apt install php8.0-xml php8.0-mbstring`

## Composer Installation

As a first step, you need to check if the php required extensions are installed: `composer check-platform-reqs`

`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`

`php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`

`php composer-setup.php`

`php -r "unlink('composer-setup.php');"`

`sudo mv composer.phar /usr/local/bin/composer`

`source ~/.bascrc`

## MySQL Installation

Before creating your database, you need to ensure that the MySQL service is installed and running.
To check whether that is the case, you may run the following command:

`sudo service mysql status`

If you find that the service is already installed, you may skip to the "Creating a database for the project" section.

### Installing the MySQL service

If mysql is not recognized as a service, you will have to proceed to installing the MySQL service. You may do so by running the following commands:

`sudo apt update`

`sudo apt install mysql-server`

`sudo mysql_secure_installation`

Follow the steps of the installation wizard shown in the terminal.

### Creating new MySQL user

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
