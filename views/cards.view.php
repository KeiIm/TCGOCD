<?php 
require('partials/head.php');
require('partials/banner.php');

if(array_key_exists('submit-card', $_POST)) {
    addCard();
    header("Refresh:0;");
}
?>

<main>
    <nav aria-label="Table Navigation" data-bs-theme="dark">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Previous</a></li>
            <?php for ($i=1, $pages=count($rows)/5; $i <= $pages; $i++): ?>
                <li class="page-item"><a class="page-link" href="#" style="color:#e5e5e5;"><?=$i?></a></li>
            <?php endfor ?>
            <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Next</a></li>
        </ul>
    </nav>

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

    <nav aria-label="Table Navigation" data-bs-theme="dark">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Previous</a></li>
            <?php for ($i=1, $pages=count($rows)/5; $i <= $pages; $i++): ?>
                <li class="page-item"><a class="page-link" href="#" style="color:#e5e5e5;"><?=$i?></a></li>
            <?php endfor ?>
            <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Next</a></li>
        </ul>
    </nav>

    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required> <br><br>

        <label for="qty">Quantity:</label>
        <input type="number" name="qty" id="qty" required> <br><br>

        <span>Unique?  </span>
        <label for="yes">Yes</label>
        <input type="radio" name="unique" id="yes" value="on">
        <label for="unique">No</label>
        <input type="radio" name="unique" id="no" value="" checked="checked"> <br><br>

        <label for="collection">Collection</label>
        <input type="text" name="collection" id="collection" required>

        <input type="submit" name="submit-card" value="Add Card"/>
    </form>
</main>

<?php require('partials/footer.php') ?>