<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<?php include 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">go back ...</a>
            </p>
            <p><?php echo $note['body']; ?></p>
    </div>
        <!-- /End replace -->
            
    </div>
</main>

<?php include 'views/partials/footer.php'; ?>
