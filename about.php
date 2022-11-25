<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Контактная Форма</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	</head>
	<body>
    <?php  require "blocks/header.php" ?>
    <div class="container mt-5">
      <h3>Контактная форма</h3>
      <form class="" action="./blocks/check.php" method="post">
        <input type="email" name="email" value="" placeholder="Email ..." class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Message" rows="8" cols="80"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
      </form>
    </div>

    <?php  require "blocks/footer.php" ?>

	</body>
</html>
