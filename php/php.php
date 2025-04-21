<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // valida o e-mail
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Endereço de e-mail inválido.");
    }

    $assunto   = htmlspecialchars(trim($_POST["assunto"]));
    $nome      = htmlspecialchars(trim($_POST["nome"]));
    $sobrenome = htmlspecialchars(trim($_POST["sobrenome"]));
    $message   = htmlspecialchars(trim($_POST["message"]));

    // Valida se os campos obrigatórios estão preenchidos
    if (empty($assunto) || empty($nome) || empty($sobrenome) || empty($message)) {
        die("Por favor, preencha todos os campos obrigatórios.");
    }

    // corpo do email
    $to = "w.calisto@yahoo.com.br";
    $subject = "Contato - Formulário Cliente Runna";

    $body = "Assunto: $assunto\r\n";
    $body .= "Nome: $nome $sobrenome\r\n";
    $body .= "Email: $email\r\n";
    $body .= "Mensagem:\r\n$message\r\n";

    $email = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);

    // Cabeçalhos do e-mail
    $headers = "From: runna@yahoo.com.br\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Redireciona para página de sucesso
        header("Location: obrigado.html");
        exit;
    } else {
        die("Erro ao enviar o e-mail. Tente novamente mais tarde.");
    }

} else {
    // Acesso direto sem formulário
    die("Acesso inválido.");
}
?>
