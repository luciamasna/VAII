<?php
?>

<main class="page_main">
    <div class="announcements_main">
        <div class="announcements_header">
            <h1>Oznamy</h1>
            <a href="<?= $link->url('announcement.add') ?>" class="manage_button">
                Pridať oznam
            </a>
        </div>
        <!-- ak este niesu oznamy tak nemam co vypisat-->
        <?php if (empty($announcements)): ?>
            <p>Momentálne nie sú zverejnené žiadne oznamy.</p>
        <?php else: ?>
            <?php foreach ($announcements as $announcement): ?>
                <article class="announcement">
                    <div class = "announcement_header">
                        <h2>
                            <?= e($announcement->getTitle()) ?>
                        </h2>
                        <div class="announcement_actions">
                            <a href="<?= $link->url('announcement.edit', ['id' => $announcement->getId()]) ?>"
                               class="manage_button">
                                Upraviť
                            </a>

                            <button type="button" class="delete_button">
                                Vymazať
                            </button>
                        </div>
                    </div>
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
</main>