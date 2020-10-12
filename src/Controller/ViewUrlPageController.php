<?php

namespace App\Controller;

use App\Model\Url;
use App\Persistent\ControllerInterface;
use Illuminate\Database\Connection;
use PHPUnit\Util\Exception;

/**
 * Class ViewUrlPageController
 * @package App\Controller
 */
class ViewUrlPageController implements ControllerInterface
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
     * ViewUrlPageController constructor.
     * @param \Twig\Environment $twig
     */
    public function __construct(
        \Twig\Environment $template,
        Connection $db
    )
    {
        $this->template = $template;
        $this->db = $db;
    }

    /**
     * @return mixed|void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function load()
    {
        echo $this->template->render('index.twig', []);
    }
}