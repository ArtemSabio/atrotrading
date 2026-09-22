<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= isset($page_title) ? htmlspecialchars($page_title) . ' — ' . $site['name'] : $site['name'] . ' — ' . $site['tagline'] ?></title>
<meta name="description" content="<?= isset($page_description) ? htmlspecialchars($page_description) : htmlspecialchars($site['tagline'] . '. RDW-erkend, gevestigd in Groningen.') ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="topbar">
	<div class="wrap topbar__inner">
		<a class="topbar__link" href="tel:<?= htmlspecialchars($site['phone_raw']) ?>"><?= htmlspecialchars($site['phone']) ?></a>
		<a class="topbar__link" href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a>
		<span class="topbar__link topbar__link--muted"><?= htmlspecialchars($site['address']) ?></span>
	</div>
</div>

<header class="site-header">
	<div class="wrap site-header__inner">
		<a href="index.php" class="brand">
			<img src="assets/img/atro-trading-logo.png" alt="Atro Trading" class="brand__logo">
		</a>

		<input type="checkbox" id="nav-toggle" class="nav-toggle">
		<label for="nav-toggle" class="nav-burger" aria-label="Menu openen">
			<span></span><span></span><span></span>
		</label>

		<nav class="nav">
			<?php foreach ($nav as $href => $label): ?>
				<a href="<?= $href ?>" class="nav__link<?= $current === $href ? ' is-active' : '' ?>"><?= $label ?></a>
			<?php endforeach; ?>
			<a href="contact.php" class="nav__cta">Neem contact op</a>
		</nav>
	</div>
</header>

<main>
