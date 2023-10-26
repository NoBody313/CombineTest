<?php 
$pageTitle = "Dashboard Page";
echo '<title>' . $pageTitle . '</title>';
?>

<?php include('/CombineTest/excelProject/views/layout/header/loggedHeader.php'); ?>

<div class="flex">
    <?php include('/excelProject/views/layout/sidebar.php'); ?>
    <section class="content">
        <h1>Hello</h1>
    </section>
</div>

<?php include('/excelProject/views/layout/footer.php'); ?>