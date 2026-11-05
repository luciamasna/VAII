<?php
?>

<main class="page_main">
    <div class="announcements_main">
        <div class="announcements_header">
            <h1>Oznamy</h1>
            <a href="<?= $link->url('announcement.manage') ?>" class="manage_button">
                Spravovať oznamy
            </a>
        </div>
<!-- ak este niesu oznamy tak nemam co vypisat-->
        <?php if (empty($announcements)): ?>
            <p>Momentálne nie sú zverejnené žiadne oznamy.</p>
        <?php else: ?>
            <?php foreach ($announcements as $announcement): ?>
                <article class="announcement">
                    <h2>
                        <?= e($announcement->getTitle()) ?>
                    </h2>
                    <p>
                        <?= nl2br(e($announcement->getText())) ?>
                    </p>
                    <p class="announcement_date">
                        Dátum zverejnenia:
                        <?= e($announcement->getDate()) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!--Bocny panel stranky-->
    <aside>
        <!-- Ordinačné hodiny -->
        <div class = " sidebar_card sidebar_card_first">
            <h2>Ordinačné hodiny</h2>
            <dl>
                <dt>Pondelok:</dt><dd>7:00 - 15:00</dd>
                <dt>Utorok:</dt><dd>7:00 - 15:00</dd>
                <dt>Streda:</dt><dd>7:00 - 15:00</dd>
                <dt>Štvrtok:</dt><dd>7:00 - 15:00</dd>
                <dt>Piatok:</dt><dd>7:00 - 14:00</dd>
                <dt>Sobota - Nedeľa:</dt><dd>Zatvorené</dd>
            </dl>
        </div>
        <!-- Oznamy -->
        <div class = "sidebar_card">
            <a href="<?= $link->url('announcement.index') ?>"><h2>Oznamy</h2></a>

            <?php if (empty($latestAnnouncements)): ?>
                <p>Momentálne nie sú žiadne oznamy.</p>
            <?php else: ?>
                <?php foreach ($latestAnnouncements as $announcement): ?>
                    <div class="sidebar_announcement">
                        <h3><?= e($announcement->getTitle()) ?></h3>
                        <p><?= e($announcement->getText()) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- Často kladené otázky -->
        <div class = "sidebar_card">
            <h2>Často kladené otázky</h2>
            <div class = "question">
                <h3>Otázka 1</h3>
            </div>
            <div class = "question">
                <h3>Otázka 2</h3>
            </div>
            <div class = "question">
                <h3>Otázka 3</h3>
            </div>
        </div>
    </aside>
</main>