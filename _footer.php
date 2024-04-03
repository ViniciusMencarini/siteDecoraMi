<?php // ################# Main content Above ################# 
?>

<?php // Footer for Index page
?>

</main>

<div class="container">
    <footer class="py-3 my-4 border-top">
        <ul class="nav justify-content-center pb-3 mb-3 custom-hover">
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-white">INÍCIO</a></li>
            <li class="nav-item"><a href="./pages/contact.php" class="nav-link px-2 text-white">CONTATO</a></li>
            <li class="nav-item"><a href="./pages/legal.php" class="nav-link px-2 text-white">USO E
                    PRIVACIDADE</a>
            </li>
            <?php //Button trigger modal ?>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#whereToFindModal">
                ONDE ACHAR
            </button>

            <?php //Modal ?>
            <div class="modal fade" id="whereToFindModal" tabindex="-1" aria-labelledby="whereToFindLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="whereToFindLabel">Onde nos achar:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="https://www.instagram.com/zaabcoletivo/">@zaabcoletivo</a> Zaab Coletivo - Ipanema -RJ <br>
                            <a href="https://www.instagram.com/coletivo_fertil/">@coletivo_fertil</a> Coletivo Fertil
                        </div>
                    </div>
                </div>
            </div>
        </ul>

        <div class="d-flex justify-content-between py-2 my-2 text-white">
            <p>&copy; 2021 Decora Mi</p>

            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-light" href="https://www.instagram.com/decorami_atelier/"><svg class="bi" width="24" height="24" fill='#fff'>
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="https://www.facebook.com/decoramiatelier/"><svg class="bi" width="24" height="24" fill='#fff'>
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </div>
    </footer>
</div>
</div>
</div>
</div>
</body>

</html>