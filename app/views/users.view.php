
<?php require 'partials/head.php'; ?>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>

    </ul>

    <h1>Submit your Name</h1>

    <form method="POST" action="/users">
        <label for="name"></label>
        <input name="name" required/>

        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>
