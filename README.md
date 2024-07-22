### Multi Auth Project
It is a just basic multi authentic project for beginners in core php.

#### Installation
```bash
git clone https://github.com/CodeWithSushil/Multi-Auth-Project.git
```
```bash
cd Multi-Auth-Project
```
#### App Running
```bash
php -S localhost:8080
```
### Configuration
1. rename .env.example to .env
2. edit .env file
3. config Database or app name
```env
//App config
appName="Multi Auth"
baseURL="http://localhost:8080/"
server="localhost"
port=8080

//sqlite3
// mysqlite="/app/database/database.sqlite3"

// Database config
servername="localhost"
username="root"
password=""
dbname="multiauth"
port=3306
driver="mysql"
```
