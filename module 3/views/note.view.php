<?php require 'partials/head.php' ?>
<?php require "partials/nav.php" ?>

<?php require 'partials/banner.php' ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a class="text-blue-600 hover:underline" href="/notes">Go to Notes</a>
    <p>
      <?= $note['body'] ?>
    </p>
  </div>
</main>

<?php require 'partials/footer.php' ?>