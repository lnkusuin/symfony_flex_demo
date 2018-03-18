<?php namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EchoController
 * @package App\Controller
 */
class EchoController extends Controller
{
    /**
     *
     * @Route("/echo", name="echo")
     */
    public function index()
    {
        return $this->json(['message' => 'echo!']);
    }
}