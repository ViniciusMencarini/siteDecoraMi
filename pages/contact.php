<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_headerPage.php";

$name = $email = $subject = $message = $feedback = '';

// Show/Hide form
$show_form = true;

if (isset($_POST['send'])) :

    //Sanitize input from _config
    $name = sanitize('name', 'string');
    $email = sanitize('email', 'email');
    $subject = sanitize('subject', 'string');
    $message = sanitize('message', 'string');

    // Every fild was filled?
    if ($name === '' or $email === '' or $subject === '' or $message === '') :
        $feedback = '<h3 style="color:red">Erro: por favor, preencha todos os campos!</h3>';
    else :

        $sql = <<<SQL

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('{$name}','{$email}','{$subject}','{$message}');

SQL;

        $conn->query($sql);

        // The form was sent message
        $feedback = <<<OUT
        
<p>Seu contato foi enviado com sucesso.</p>
<p><em>Obrigado...</em></p>

OUT;

        $show_form = false;

        $now = date('d/m/Y \à\s H:i');

    endif;
endif;

?>

<?php //Section: Contact v.2 ?>
<section class="mb-4 container text-white">

    <?php //Section heading ?>
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contato</h2>
    <?php //Section description ?>
    <p class="text-center w-responsive mx-auto mb-5">Estamos aqui para lhe ajudar. Fale conosco e nossos Client Advisors terão o prazer em lhe responder</p>

    <div class="row">

        <div class="container text-light text-center">
            <?php echo $feedback; ?>
        </div>

        <?php //Grid column ?>
        <div class="col-md-9 mb-md-0 mb-5">

            <?php if ($show_form) : ?>
                <form id="contact-form" name="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <input type="hidden" name="send" value="true">

                    <?php //Grid row ?>
                    <div class="row">

                        <div class="col-md-1">
                        </div>

                        <?php //Grid column ?>
                        <div class="col-md-5">
                            <div class="md-form mb-0">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome.">
                                <label for="name" class="">Nome</label>
                            </div>
                        </div>
                        <?php //Grid column ?>

                        <?php //Grid column ?>
                        <div class="col-md-5">
                            <div class="md-form mb-0">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Seu e-mail.">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                        <?php //Grid column ?>

                        <div class="col-md-1">
                        </div>

                    </div>
                    <?php //Grid row ?>

                    <?php //Grid row ?>
                    <div class="row">
                        <div class="col-md-1">
                        </div>

                        <div class="col-md-10">
                            <div class="md-form mb-0">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Um resumo do seu contato.">
                                <label for="subject" class="">Assunto</label>
                            </div>
                        </div>

                        <div class="col-md-1">
                        </div>
                    </div>
                    <?php //Grid row ?>

                    <?php //Grid row ?>
                    <div class="row">

                        <div class="col-md-1">
                        </div>

                        <?php //Grid column ?>
                        <div class="col-md-10">

                            <div class="md-form">
                                <textarea name="message" id="message" class="form-control" placeholder="Escreva o quanto precisar."></textarea>
                                <label for="message">Sua mensagem</label>
                            </div>

                        </div>

                        <div class="col-md-1">
                        </div>
                    </div>
                    <?php //Grid row ?>

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary btn-custom" onclick="document.getElementById('contact-form').submit();">Envie</a>
                </div>
                <div class="status"></div>

        </div>
        <?php //Grid column ?>

        <?php //Grid column ?>
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+55 (21) XXXX-XXXX</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>decorami@decorami.com</p>
                </li>
            </ul>
        </div>
        <?php //Grid column ?>

        <?php endif; ?>

    </div>

</section>
<?php //Section: Contact v.2 ?>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_footerPage.php";

?>