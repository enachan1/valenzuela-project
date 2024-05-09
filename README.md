
# Sangguniang Panglungsod Project

A website dedicated for managing files and documents in council secretariat of Vice Mayors office in Valenzuela City.

## Setting up XAMPP

1.) Download the latest version of [XAMPP](https://www.apachefriends.org/download.html)

2.) After installing, open XAMPP, start Apache and MySQL module, and make sure to check their service.
## Setting up Project

This may vary different to some IDE's. We will use Visual Studio Code as a main example for this.
    
1.) Open [Visual Studio Code](https://code.visualstudio.com/download).

2.) Click **File** and **Open Folder**.

3.) Navigate to your XAMPP directory (default directory C:/xampp) and select **htdocs** folder.

4.) Open **Terminal** on your visual studio code by pressing <kbd>ctrl</kbd> + <kbd>`</kbd> and type:
```
git clone https://github.com/enachan1/valenzuela-project.git
```
6.) Once the cloning is done, open your **Browser** and type **localhost/valenzuela-project**

7.) And its done.

## Setting up Database

#### Make sure that the auth type of phpmyadmin is in cookie mode. To set that up:

1.) Go to:
```
C:\xampp\phpMyAdmin
```
2.) Open config.inc in a text editor

3.) Press <kbd>Ctrl</kbd> + <kbd>f</kbd> and type **auth_type**

4.) The default is config, change it to cookie.
![auth_type](https://i.ibb.co/KctnckR/Screenshot-2024-05-10-005140.png)

#### Importing the database in phpMyAdmin.
    
1.) Open [phpMyAdmin](http://localhost/phpmyadmin) you expect it to show a log in form.

2.) Type **root** on username and leave the password blank
![log in](https://i.ibb.co/LZc1NFf/Screenshot-2024-05-10-005944.png)

3.) On the left side, click new
![left](https://i.ibb.co/r6S8y7V/Screenshot-2024-05-10-010330.png)

4.) Fill up the database name called **valenzuela-test** then click create.
![create database](https://i.ibb.co/5Lxx44Z/Screenshot-2024-05-10-010707.png)

5.) Once created, click **import** which you can find it at the top.

6.) Browse the **valenzuela-test.sql** file (which you can find it in the project folder) then click **import** at the bottom.
![browse](https://i.ibb.co/qMNCPv4/Screenshot-2024-05-10-011008.png)
![file](https://i.ibb.co/QCYHRjK/Screenshot-2024-05-10-011320.png)

7.) And it is ready to use.


## Setting up php.ini config (for larger file uploading)

1.) Open **XAMPP Control Panel**

2.) In the **Apache** module, Select **config** in the action and click **PHP (php.ini)**

3.) Set the following:

**NOTE**: You can find it quickly by pressing <kbd>ctrl</kbd> + <kbd>F</kbd> and paste the following.
```
memory_limit=512M
max_execution_time=86400
max_input_time=-1
upload_max_filesize=400M
post_max_size=0M
output_buffering=0
max_input_vars = 10000
```
