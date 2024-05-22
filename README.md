# LAMP Stack Web Server Setup

This project guides you through setting up a web server using the LAMP stack (Linux, Apache, MySQL, and PHP). Additionally, it includes steps to create a GitHub repository with the source code for the website.
fgdfkjl;drklhdrkilh

## Sub-task #1: Linux Server Simulation

### 1. Install Apache, MySQL, and PHP:

```bash
sudo apt-get update
sudo apt-get install apache2 mysql-server php libapache2-mod-php php-mysql
```
### 2. Configure Apache:

```bash
sudo nano /etc/apache2/sites-available/000-default.conf
```
Update DocumentRoot to /var/www/html/

```bash
DocumentRoot /var/www/html/
```

### 3. Restart Apache

```bash
sudo systemctl restart apache2
```
### 3. Create a Simple Website:

```bash
sudo nano /var/www/html/index.php
```

```bash
<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
</head>
<body>
    <h1>Hello World!</h1>
</body>
</html>
```
### 4. Configure MySQL:

```bash
sudo mysql
```
Inside MySQL:

```bash
CREATE DATABASE Name_of_database;
CREATE USER 'user_name'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON mydatabase.* TO 'myuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```
### 5. Modify the Website:

```bash
sudo nano /var/www/html/index.php
```

```bash
<?php
$mysqli = new mysqli("localhost", "myuser", "mypassword", "mydatabase");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");

$query = "INSERT INTO visitor_log (ip_address, visit_time) VALUES ('$ip', '$time')";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>Your IP address: <?php echo $ip; ?></p>
    <p>Current time: <?php echo $time; ?></p>
</body>
</html>

```
### 6. Test the Website:
Open a web browser and navigate to your server's IP address or domain. The website should display the "Hello World!" message along with the visitor's IP address and the current time.

## Sub-task #2: Git & GitHub

### 1. Initialize a New Git Repository:

```bash
git init
```
### 2. Create a .gitignore File:
Create .gitignore and add sensitive files/directories

```bash
# .gitignore
config_file_for_example
```
### 3. Commit Markdown Documentation:

```bash
# .gitignore
config_file_for_example
```

### 4. Create a New Repository on GitHub:
Create a new repository on GitHub without initializing with a README.
Copy the repository URL.

### 5. Push to GitHub:

```bash
git remote add origin <repository_url>
git push -u origin master
```
