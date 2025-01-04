# kanbilim.com

## Clone Project
```bash
mkdir kanbilim
git clone https://github.com/ogu83/kanbilim.git
```

## Install Docker
```bash
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh
```

## Install kanbilim.com Docker Container with MySQL 
```bash
docker-compose build
docker-compose up -d
```

## File Structure
Ensure the structure looks like this:
```scss
project/
├── db/
│   └── kanbilimcom.sql
├── site/ (contains your WordPress site files)
├── Dockerfile
└── docker-compose.yml
```

## Steps to Build and Run
1. Prepare Database File: Place your kanbilimcom.sql in the db folder. This will be automatically loaded into the MySQL container during initialization.

2. Build and Start Containers: Run the following commands in the project directory:

```bash
docker-compose build
docker-compose up -d
```
3. Access Services:

WordPress: Open http://localhost:8080 in your browser.
phpMyAdmin: Open http://localhost:8081 in your browser.

4. Verify Database:

Log in to phpMyAdmin with:
- Username: *root*
- Password: *rootpassword*

Check that the *kanbilimdb* database is populated.
Update WordPress Configuration: Ensure the *site/wp-config.php* file has the following database configuration:

```php
define('DB_NAME', 'kanbilimdb');
define('DB_USER', 'kanbilimuser');
define('DB_PASSWORD', 'kanbilimpassword');
define('DB_HOST', 'db:3306');
```

## Set hosts file to handle kanbilim.com domain

### For Windows:
In Windows, the hosts file is located at C:\Windows\System32\drivers\etc\hosts. You need administrative privileges to modify it. Here's a PowerShell command embedded in a Bash script:

```bash
echo '127.0.0.1 kanbilim.com' | powershell -Command "Start-Process notepad -ArgumentList 'C:\\Windows\\System32\\drivers\\etc\\hosts' -Verb RunAs"
```

Since this script launches Notepad with administrative privileges, you'll need to manually paste the line into the hosts file. Automating it fully requires custom scripts or tools like sed in a Unix-like environment running on Windows.

### For macOS:
In macOS, the hosts file is located at /etc/hosts. The following command appends the line directly and requires administrative privileges:

```bash
sudo sh -c 'echo "127.0.0.1 kanbilim.com" >> /etc/hosts'
```
Notes:
Avoid Duplicates: If the line might already exist, add a check before appending to prevent duplicates:

```bash
# macOS (Prevent duplicates)
sudo sh -c 'grep -qxF "127.0.0.1 kanbilim.com" /etc/hosts || echo "127.0.0.1 kanbilim.com" >> /etc/hosts'
```
Windows Automation: Fully automating changes to the Windows hosts file requires elevated permissions, often involving PowerShell scripts or manual intervention.

### Testing Changes: 

After modifying the hosts file, flush the DNS cache to apply changes:

#### Windows: 
```bash
ipconfig /flushdns
```

#### MacOS: 
```bash
sudo dscacheutil -flushcache; 
sudo killall -HUP mDNSResponder
```
