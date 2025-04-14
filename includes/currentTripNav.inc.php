
<div class="position-absolute top-0 start-50 translate-middle mt-5">
    <a class="text-decoration-none" href="../tripPage.php">
        <?php 
                if (isset($_SESSION["tripArray"])) {
                    echo '
                        <h2 class="text-maincolor text-center fw-bold border border-2 border-maincolor rounded py-1 px-2">
                            ' . $_SESSION["tripArray"]["name"] . '
                        </h2>
                        ';
                }
        ?>
        
    </a>
</div>

