<?php 
require('partials/head.php');
require('partials/banner.php');

$rows = $db->query("SELECT * FROM `cards`;");

if(array_key_exists('submit-card', $_POST)) {
    // dd($_POST);
    $db->addCard();
    header("Refresh:0;");
}
?>

<main>
    <?php require('partials/tableNav.php'); ?>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Card</th>
                <th scope="col" class="text-center">Quantity</th>
                <th scope="col" class="text-center">Unique</th>
                <th scope="col" class="text-center">Collections</th>
            </tr>
        </thead>
        <tbody>

            <?php if (count($rows) === 0): ?>
                <td scope="col">Placeholder</th>
                <td scope="col" class="text-center">-</th>
                <td scope="col" class="text-center">-</th>
                <td scope="col" class="text-center">-</th>
            <?php endif ?>

            <?php foreach($rows as $row): ?>
                <tr>
                    <th scope="row"><?= $row['name'] ?></td>
                    <td class="text-center">
                        <?php if ($row['unique'] == 1 && $row['qty'] >= 1 || $row['qty'] >= 3): ?>
                            <span style="color: green;"><?= $row['qty'] ?></span>
                        <?php elseif ($row['qty'] >= 1): ?>
                            <span style="color: yellow;"><?= $row['qty'] ?></span>
                        <?php else: ?>
                            <span style="color: red;"><?= $row['qty'] ?></span>
                        <?php endif ?>
                        <?php $row['unique'] == 1 ? print('<span style="color:darkgrey">  /1</span>') : print('<span style="color:darkgrey">  /3</span>') ?>
                    </td>
                    <td class="text-center">
                        <?php $row['unique'] == 1 ? print('Yes') : print('-') ?>
                    </td>
                    <td class="text-center"><?= $row['collection'] ?></td>
                </tr>
            <?php endforeach ?>

        </tbody>  
    </table>

    <?php require('partials/tableNav.php'); ?>

    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required> <br><br>

        <label for="qty">Quantity:</label>
        <input type="number" name="qty" id="qty" required> <br><br>

        <label for="unique">Unique:</label>
        <input type="checkbox" name="unique" id="unique"> <br><br>

        <label for="collection">Collection</label>
        <input type="text" name="collection" id="collection" required>

        <input type="submit" name="submit-card" value="Add Card"/>
    </form>
</main>

<?php require('partials/footer.php') ?>