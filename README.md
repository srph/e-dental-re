# e-dental-yolo
E-Dental written in its own \`framework\`

## Installation

**Requirements**:

- PHP `>=v5.4`
- MySQL `>=v5.x`

**(1)** Clone the repository

```bash
$ git clone https://github.com/srph/e-dental-yolo
```

**(2)** Setup the database.

```bash
$ cd e-dental-yolo # go to the clone directory
$ mysql -u <user> <pass> # access to mysql 
$ create database dental; # create the database
$ mysql -u <user> <pass> < db.sql # dump/import the sql query
```

**(3)** Okay!

If you have no installed web-server in your machine, you can use **PHP**'s built-in web-server, [`SAPI`](http://php.net/manual/en/features.commandline.webserver.php).

```
$ php -S localhost:8000
```

Otherwise, just setup your web-server, and then you're good to go!

## Acknowledgement

**e-dental-yolo** © 2015+, Kier Borromeo ([srph](https://github.com/srph)) and Jealian Menor ([lianjea](https://github.com/lianjea)). **e-dental-yolo** is released under the [MIT](mit-license.org) license.
