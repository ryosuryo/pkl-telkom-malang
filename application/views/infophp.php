<?php
echo password_hash("fani", PASSWORD_DEFAULT);
echo "<br>";
$hash = password_hash("fani", PASSWORD_DEFAULT);

if (password_verify("fani", $hash)) {
	echo "--->ok";
}
else
{
	echo "no";
}
?>