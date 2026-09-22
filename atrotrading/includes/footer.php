</main>

<footer class="site-footer">
	<div class="wrap footer__grid">

		<div class="footer__col footer__col--brand">
			<img src="assets/img/atro-trading-logo.png" alt="Atro Trading" class="footer__logo">
			<p><?= htmlspecialchars($site['tagline']) ?>. RDW-erkend, bezichtiging op afspraak.</p>
		</div>

		<div class="footer__col">
			<h3>Sitemap</h3>
			<ul>
				<?php foreach ($nav as $href => $label): ?>
					<li><a href="<?= $href ?>"><?= $label ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer__col">
			<h3>Contact</h3>
			<ul>
				<li><a href="tel:<?= htmlspecialchars($site['phone_raw']) ?>"><?= htmlspecialchars($site['phone']) ?></a></li>
				<li><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></li>
				<li><?= htmlspecialchars($site['address']) ?></li>
			</ul>
		</div>

		<div class="footer__col">
			<h3>Bedrijfsgegevens</h3>
			<ul class="footer__legal">
				<li>K.v.K. Groningen: <?= htmlspecialchars($site['kvk']) ?></li>
				<li>Bankrekening: <?= htmlspecialchars($site['iban']) ?></li>
				<li>Btw-nr. <?= htmlspecialchars($site['btw']) ?></li>
			</ul>
		</div>

	</div>

	<div class="wrap footer__bottom">
		<span><?= htmlspecialchars($site['year']) ?> © <?= htmlspecialchars($site['name']) ?>. Alle rechten voorbehouden.</span>
	</div>
</footer>

</body>
</html>
