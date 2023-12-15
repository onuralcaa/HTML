Hackleme girişimlerinden korunma - SQL injection saldırıları

• $user = $_POST['user'];
• $pass = $_POST['pass'];

• $query = "DELETE FROM users WHERE user='$user'
AND pass='$pass'";

• anything' OR 1=1 #
• DELETE FROM users WHERE user='anything' OR 1=1
#' AND pass=''

Bir başka güvenlik açık örneği...






