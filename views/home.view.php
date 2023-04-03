<?php
require('partials/head.php');
?>

<main>
    <section class="container" style="padding: 20px;">
    <p>Tired of looking through binders and boxes to find the card you're looking for?</p>
    <p>Getting overwhelmed by your ever-growing spreadsheets?</p>
    <p>Welcome to <b>TCG OCD</b>, the <i>intuitive</i> way of maintaining your collection.</p>
    </section>

    <section class="container">
        <div class="row">
            <div class="card col text-bg-dark" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Add Cards</h5>
                    <p class="card-text">First, add your cards to the Cards page which will list every individual card you own.</p>
                    <a href="/TCGOCD/collections" class="btn" style="background-color: #FCA311;">Cards</a>
                </div>
            </div>
            <div class="card col text-bg-dark" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sort Collection</h5>
                    <p class="card-text">Next, drag-and-drop to sort your cards into different collections like decks, binders, and boxes!</p>
                    <a href="/TCGOCD/collections" class="btn" style="background-color: #FCA311;">Collections</a>
                </div>
            </div>
            <div class="card col text-bg-dark" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Save and Export</h5>
                    <p class="card-text">Save your list! Export your decks to other websites! Never lose your cards again!</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require('partials/footer.php') ?>