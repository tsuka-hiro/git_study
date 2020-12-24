<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>work</title>
</head>
<body>
<main>
<header>
<h1 class="work">work</h1>
</header>
<pre>
<?php
for ($i = 1; $i <= 50; $i++) {
	echo "\n" . $i;
	if ($i % 3 == 0 ) {
		echo "work";
	}
}
?>
</pre>
</main>
</body>
</html>
