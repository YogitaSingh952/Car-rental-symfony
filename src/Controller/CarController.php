<?php
namespace App\Controller;

use App\Entity\Car;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    /**
     * @Route("/cars", name="car_index", methods={"GET"})
     */
    public function index(CarRepository $carRepository): Response
    {
        $cars = $carRepository->findBy(['available' => true]);
        return $this->render('car/index.html.twig', [
            'cars' => $cars,
        ]);
    }
}
