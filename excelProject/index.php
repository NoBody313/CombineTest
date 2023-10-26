<?php 
$pageTitle = "Login Page";
echo '<title>' . $pageTitle . '</title>';
?>

<?php include('views/layout/header/unloggedHeader.php'); ?>

<div class="container mx-auto my-auto w-full h-screen flex flex-col items-center justify-center">
    <h1 class="welcomeText w-auto h-auto text-center font-bold text-xl">Welcome to our Excel App</h1>
    <h2 class="mt-1">Please log in before continue</h2>
    <?php if (!isset($_SESSION['user'])) { ?>
    <br />

    <a href='<?php echo $provider->getAuthorizationUrl(); ?>'
        class="loginBtn w-auto h-auto py-4 px-8 bg-sky-200 rounded-md font-medium">Login</a>
    <?php } ?>
</div>

</body>

</html>