<?php require(PAGES.'common/header.php');?>
<?php require(PAGES.'common/nav.php');?>

<section class="container-fluid p-0">
    <?php require(PAGES.$currentPage.'.php');?>
</section>

<?php require(PAGES.'common/footerContent.php');?>
<?php require(PAGES.'common/footer.php');?>