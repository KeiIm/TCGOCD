<nav aria-label="Table Navigation" data-bs-theme="dark">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Previous</a></li>

        <?php for ($i=0; $i*10 < count($rows); $i++): ?>
            <li class="page-item"><a class="page-link" href="#" style="color:#e5e5e5;"><?=$i+1?></a></li>
        <?php endfor ?>

        <li class="page-item"><a class="page-link disabled" href="#" style="color:#e5e5e5;">Next</a></li>
    </ul>
</nav>