<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail = 'ryukusune@gmail.com';
    public $fromName = 'Your Website Name';
    public $recipients;

    // Email sending settings
    public $userAgent = 'CodeIgniter';
    public $protocol = 'smtp';  // Change to SMTP
    public $mailPath = '/usr/sbin/sendmail';

    // SMTP Settings
    public $SMTPHost = 'smtp.gmail.com';
    public $SMTPUser = 'KurumiDaFox@gmail.com';
    public $SMTPPass = '2VE5ND39';  // Use Gmail App Password if 2FA is enabled
    public $SMTPPort = 587;  // Use 465 for SSL
    public $SMTPTimeout = 7;
    public $SMTPKeepAlive = false;
    public $SMTPCrypto = 'tls';  // Use 'ssl' if using port 465

    // Email content settings
    public $wordWrap = true;
    public $wrapChars = 76;
    public $mailType = 'html';  // Use 'html' for sending HTML emails
    public $charset = 'UTF-8';
    public $validate = true;
    public $priority = 3;

    // Email newline settings
    public $CRLF = "\r\n";
    public $newline = "\r\n";

    // BCC settings (optional)
    public $BCCBatchMode = false;
    public $BCCBatchSize = 200;
    public $DSN = false;
}
