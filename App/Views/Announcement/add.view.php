
<main class="page_main">
    <div class="announcements_main">
        <h1>Pridať oznam</h1>
<!--pomocou metody post sa odoslu udaje tam kam urcije action -->
        <form method="post" action="<?= $link->url('announcement.save') ?>">

            <div class="form_group">
                <label for="title">Názov oznamu</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form_group">
                <label for="text">Text oznamu</label>
                <textarea id="text" name="text" rows="6" required></textarea>
            </div>

            <div class="form_actions">
                <button type="submit" class="manage_button">
                    Uložiť oznam
                </button>

                <a href="<?= $link->url('announcement.manage') ?>" class="manage_button">
                        Zrušiť
                </a>
            </div>
        </form>
    </div>
</main>