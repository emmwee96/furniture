<div class="row category_container">
<?php foreach($products as $row){ ?>
    <a href="<?= site_url('Main/product/'.$row['name']); ?>">
    <div class="col-4 col-md-4 category_wrapper">
        <img src='<?= site_url().$row['banner']; ?>'>
        <div class="overlay">
            <h3><?= $row['name']; ?></h3>
        </div>
    </div>
</a>
<?php } ?>
</div>