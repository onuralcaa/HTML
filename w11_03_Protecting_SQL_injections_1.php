Hackleme girişimlerinden korunma - SQL injection saldırıları

• $user = $_POST['user'];
• $pass = $_POST['pass'];
• $query = "SELECT * FROM users WHERE user='$user'
AND pass='$pass'";

• fredsmith ve mypass
• SELECT * FROM users WHERE user='fredsmith' AND
pass='mypass'

• admin' # //escape string komutu ile kullanıcı adındaki tehlikeli tag ların kullanımı engellenebilir.


-->Burda kullanıcı adından sonra gelen # işareti kendinden sonraki ifadeleri yorum satırına alacaktır. Buda güvenlik açıklarına sebebiyet verir.


• SELECT * FROM users WHERE user='admin' #' AND
pass=''