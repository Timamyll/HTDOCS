<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP WebSite</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	</head>
	<body>
    <?php  require "blocks/header.php" ?>
	<div class="container mt-5">
			<h3 class="mb-5">Наши статьи</h3>
			<div class="d-flex flex-wrap">
					<?php
					for($i = 0; $i<5; $i++):
					?>
					<div class="col-md-12">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<strong class="d-inline-block mb-2 text-success">Дизайн</strong>
							<h3 class="mb-0">Заголовок сообщения</h3>
							<div class="mb-1 text-muted">11 ноября</div>
							<p class="mb-auto">Это более широкая карточка с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
							<a href="#" class="stretched-link">Продолжить чтение</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img src="./images/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="">
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
	<?php  require "blocks/footer.php" ?>
	<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</body>
</html>
