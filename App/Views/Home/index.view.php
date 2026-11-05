<?php

/** @var \Framework\Support\LinkGenerator $link */
?>



    <!-----------Hlavna cast stranky---------->
<main class = "page_main">
    <div class = "home_main">
        <h1>Hlavná časť</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra eros nunc, in pharetra nisi efficitur vel. Morbi a arcu lacus. Sed posuere felis non velit semper vestibulum quis id nunc. Pellentesque imperdiet justo non varius tristique. Morbi at condimentum massa, ac tempus nisl. Sed commodo dui et nulla molestie malesuada. Curabitur turpis velit, tristique nec facilisis eu, rutrum et neque. Nullam nec lorem magna. Nulla eu sem sed mauris viverra congue sit amet id neque. Vestibulum aliquam ante vitae ullamcorper semper. Vivamus quam risus, cursus nec felis vel, bibendum pellentesque nunc.

            Etiam ac neque eget lacus congue vulputate. Fusce tempus neque diam, ac ultrices turpis fermentum quis. Morbi maximus imperdiet condimentum. Sed aliquam at lectus blandit molestie. Integer mattis faucibus sapien ac pharetra. Etiam feugiat condimentum lacus eget posuere. Praesent ornare augue vitae molestie interdum. Vestibulum vitae justo nunc. Proin est odio, egestas nec varius vel, mollis accumsan dui.

            Aliquam fringilla ipsum vitae ligula vulputate fermentum. Pellentesque vitae placerat elit. Phasellus et pellentesque mauris. Aenean lobortis nisi ligula, hendrerit facilisis risus lacinia eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Vivamus ex dui, iaculis at enim ut, aliquet iaculis velit. Curabitur sollicitudin purus ac nisi interdum, et varius ex scelerisque. Praesent bibendum a velit nec pulvinar. Praesent facilisis eros sed sollicitudin pharetra. Praesent odio ipsum, mattis mattis dui a, imperdiet scelerisque arcu.</p>
        <!--Tu chce mat velky slogan a potom nejaky obkec a tlacidlo objednaj sa-->
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

