<?php

namespace App\Libraries;

use App\Models\PlatformModel;
use Psr\Log\LoggerInterface;
use CodeIgniter\Config\Services;
use Exception;

class EmailsLibraries
{
    protected $envio;
    protected $remetente;
    protected $nomeRemetente;
    protected $modelConfig;
    protected $email;
    protected $config;
    protected $logger;

    public function __construct()
    {
        $this->email  = Services::email();
        $this->logger = Services::logger(); // Inicializa o logger diretamente

        $data = $this->data();

        if ($data['ativar_smtp']) {
            $this->initializeSMTP($data);
        }

        $this->remetente     = $data['e-remetente'];
        $this->nomeRemetente = $data['n-remetente'];
    }

    protected function data(): array
    {
        $modelAdmin = new PlatformModel();
        $data = $modelAdmin->find(1);

        return [
            'SMTPHost'    => $data['smtpHost'],
            'SMTPUser'    => $data['smtpUser'],
            'SMTPPass'    => $data['smtpPass'],
            'SMTPPort'    => intval($data['smtpPort']),
            'SMTPCrypto'  => $data['smtpCrypto'], // Adicionado o campo SMTPCrypto
            'e-remetente' => $data['senderEmail'],
            'n-remetente' => $data['senderName'],
            'ativar_smtp' => $data['activeSmtp']
        ];
    }

    protected function initializeSMTP(array $data)
    {
        $config['protocol']   = 'smtp';
        $config['SMTPHost']   = $data['SMTPHost'];
        $config['SMTPUser']   = $data['SMTPUser'];
        $config['SMTPPass']   = $data['SMTPPass'];
        $config['SMTPPort']   = $data['SMTPPort'];
        $config['SMTPCrypto'] = $data['SMTPCrypto']; // Configura a criptografia SMTP
        $config['mailType']   = 'html';
        $this->email->initialize($config);
    }

    public function send(string $email, string $assunto, string $message)
    {
        try {
            $this->email->setFrom($this->remetente, $this->nomeRemetente);
            $this->email->setTo($email);
            $this->email->setSubject($assunto);
            $this->email->setMessage($message);
            $this->email->send();
        } catch (Exception $e) {
            $error = $this->email->printDebugger(['headers']);
            $this->logger->error('Email sending failed: ' . $error);
            throw new Exception('Falha ao enviar o email. Detalhes: ' . $error);
        }
    }

    public function testarEnvioEmail(string $email, string $assunto, string $message): bool
    {
        try {
            $this->email->setFrom($this->remetente, $this->nomeRemetente);
            $this->email->setTo($email);
            $this->email->setSubject($assunto);
            $this->email->setMessage($message);

            if (!$this->email->send()) {
                $error = $this->email->printDebugger(['headers']);
                $this->logger->error('Test email sending failed: ' . $error);
                throw new Exception('Falha ao enviar o email de teste. Detalhes: ' . $error);
            }

            return true;
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            return false;
        }
    }
}
