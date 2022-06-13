# ระบบทวิภาคี

## ความต้องการของเซิร์ฟเวอร์
* PHP version 5.6/7.2,**"intl"** and **"mbstring"** extension installed.
* MySQL (5.1+) via the mysql (deprecated), mysqli and pdo drivers
## เริ่มต้น

### ฐานข้อมูล
* import ฐานข้อมูลโดยใช้ไฟล์  ``` database/database.sql ```


### ดาวน์โหลด
```bash
 git clonehttps://github.com/Pantakit-Joseph/kecdemo.git
```
### ตั้งค่า
1.  ตั้งค่า url ของเว็บไซต์ที่ไฟล์ ``` application/config/config.php ```
```PHP
// ตั้งค่า url ของเว็บไซต์
$config['base_url'] = (isset($_SERVER['HTTPS']) ? "https://" : "http://")
						. 'dev.kecdemo.itchaiyaphum.com/';
```

2.  ตั้งค่าการเชื่อมต่อฐานข้อมูลที่ไฟล์ ``` application/config/database.php ```
```PHP
// เชื่อมต่อฐานข้อมูล
// ตั้งค่า database, username, password 
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'itc_kecdemo',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
