<?php

namespace App\UseCases;

class MailService
{
    private string $host;
    private string $user;
    private string $password;
    public function __construct(string $host, string $user, string $password)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }
    public function sendMail(string $to, string $subject, string $content): bool
    {
        $curl = curl_init($this->host);
        $params = array(
            "subject" => $subject,
            "content" => $content
        );
        $json = json_encode($params);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Host: $this->host",
            "Authorization: Basic " . base64_encode("$this->user:$this->password")
        ));
        curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            echo "Error al realizar la petición: $error_msg";
        }
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return $httpCode === 200;
    }

    public function sendMailWithCco()
    {
    }
    public function sendMailWithBcc()
    {
    }
}

// ejemplo de llamado (esto puede vivir en un comando)
$mailService = new MailService('mail.google.com', 'kennitromero@gmail.com', 'contraseña');
$mailService->sendMail(
    'andrewjruss07@gmail.com',
    'Hola hermano',
    '¿Qué tal va el curso de QA? todo bien, cuando preguntas si hay preguntas hay preguntas?'
);
