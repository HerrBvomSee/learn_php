<section id="shares" class="section has-text-centered">
    <a href="<?php echo ROOT_URL; ?>/shares/add" class="button m-4 is-primary">Eintrag hinzufügen</a>

    <?php
    foreach ($viewmodel as $item) : ?>
        <div class="box">
            <div class="block py-1">
                <h3 class="mb-0 subtitle has-text-white has-background-grey py-2">
                    <?= $item['title']; ?>
                </h3>
                <small class="my-0">
                    <?= $item['create_date']; ?>
                </small>
                <hr />
                <p> <?= $item['body']; ?>
                </p>
                <?php if ($item['link']) { ?>
                    <a href="<?= $item['link']; ?>" target="window" class="button mt-3">
                        Folge dem Link!
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</section>