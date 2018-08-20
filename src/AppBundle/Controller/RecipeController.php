<?php
/**
 * Created by PhpStorm.
 * User: darighteous1
 * Date: 19.8.2018 г.
 * Time: 20:14
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class RecipeController extends Controller
{
    /**
     * @Route("/recipe/{recipeName}")
     */
    public function showAction($recipeName)
    {

        return $this->render('recipe/show.html.twig', [
            'name' => $recipeName
        ]);
    }

    /**
     * @Route("/recipe/{recipeName}/comments", name="recipe_show_comments")
     * @Method("GET")
     */
    public function getCommentsAction()
    {
        $comments = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'comment' => 'This is delicious!', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'comment' => 'Love it!', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'comment' => 'One of my favorites', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'comments' => $comments
        ];

        return new JsonResponse($data);
    }
}
