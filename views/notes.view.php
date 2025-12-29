<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<?php include 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <p>Welcome to the Notes page!</p>
    </div>
        <!-- /End replace -->
         <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?php echo $note['id']; ?>" class="text-blue-500 hover:underline">
                        <?php echo $note['body']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php include 'views/partials/footer.php'; ?>
