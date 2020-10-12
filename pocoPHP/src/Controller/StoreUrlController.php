<?php

namespace App\Controller;

use App\Model\Url;
use App\Persistent\ControllerInterface;
use App\Validator\UrlValidation;
use Illuminate\Database\Connection;

/**
 * Class StoreUrlController
 * @package App\Controller
 */
class StoreUrlController implements ControllerInterface
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
     * @var UrlValidation
     */
    private $validator;

    /**
     * StoreUrlController constructor.
     * @param \Twig\Environment $twig
     */
    public function __construct(
        \Twig\Environment $template,
        Connection $db,
        UrlValidation $validator
    )
    {
        $this->template = $template;
        $this->db = $db;
        $this->validator = $validator;
    }

    /**
     * @return mixed|void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function load()
    {
        $url = $_POST['url'];
        $err = $this->validator->check($url);

        // Check valid url
        if (!$err['valid']) {
            echo $this->template->render('index.twig', [
                'err' => $err
            ]);
            return;
        }

        // Store and map url
        $newUrl = new Url();
        $newUrl->link = $url;
        $newUrl->path = uniqid();
        $newUrl->save();

        echo $this->template->render('index.twig', [
            'url' => $_SERVER['HTTP_HOST'] . '/u/' . $newUrl->path
        ]);

        return;
    }
}