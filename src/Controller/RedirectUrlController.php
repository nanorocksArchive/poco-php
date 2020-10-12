<?php

namespace App\Controller;

use App\Model\Url;
use Illuminate\Database\Connection;

class RedirectUrlController
{
    /**
     * @var \Twig\Environment
     */
    private $template;

    /**
     * @var Connection
     */
    private $db;

    /**
     * @var string
     */
    private $hash;

    /**
     * RedirectUrlController constructor.
     * @param Connection $db
     */
    public function __construct(
        Connection $db,
        string $hash,
        \Twig\Environment $template
    )
    {
        $this->db = $db;
        $this->hash = $hash;
        $this->template = $template;
    }

    /**
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function load()
    {
        $url = Url::where('path', '=', $this->hash)->first();
        if(empty($url))
        {
            echo $this->template->render('error/404.twig', []);
            return;
        }

        echo "<script>window.location.href='" . $url->link . "';</script>";
        exit;
    }
}