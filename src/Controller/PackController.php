<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 18:28
 */

namespace App\Controller;


use App\Entity\Pack;
use App\Entity\Employee;
use App\Form\PackType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PackController extends AbstractController
{
    /**
     * @Route("/post/emp", name="app_employee)
     */
    public function myEmployee(){

        $pack=$this->getId();
        $employee=$pack->getId();
        $employee = $this->getDoctrine()->getRepository(Employee::class)->findBy(array('employee' => $this->getEmployeeId()), array('id' => 'DESC'));
        return $this->render('employee/index.html.twig', [
            'pack' => $pack,
            'employee' => $employee
        ]);
    }
}