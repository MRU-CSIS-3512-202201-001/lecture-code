<div class="cheese-header">
            <span class="cheese-name"><?= $cheese->name() ?></span>
            <span class="cheese-pic"><img src="<?= $cheese->cloudinaryUrl(70) ?>">
        </div>
        <div class="cheese-description"><?= $cheese->description ?></div>
</div>