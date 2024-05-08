
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
