<?php
/**
 * Title: Error View
 * Purpose: To provide a page for displaying an error title and body
 */
?>

<?php include('Views/_partials/header.php'); ?>



      <section class="flex w-full justify-center h-[45rem] items-center p-16">
        <div class="container flex flex-col items-center">
            <div class="flex flex-col gap-6 max-w-md text-center">
                <h2 class="font-extrabold text-9xl text-gray-600">
                  <?php echo $title; ?>
                </h2>
                <p class="text-2xl md:text-3xl">
                    <?php echo $body; ?>
                </p>
                <a href="." class="px-8 py-4 text-xl font-semibold rounded bg-yellow-600 text-gray-50 hover:text-gray-200">
                    Back to home
                </a>
            </div>
        </div>
    </section>
<?php include('Views/_partials/footer.php'); ?>