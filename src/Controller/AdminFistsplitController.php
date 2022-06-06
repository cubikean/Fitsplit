<?php

namespace App\Controller;

use App\Entity\Fitsplit;
use App\Form\FitsplitType;
use App\Repository\FitsplitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/fistsplit")
 */
class AdminFistsplitController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_fistsplit_index", methods={"GET"})
     */
    public function index(FitsplitRepository $fitsplitRepository): Response
    {
        return $this->render('admin_fistsplit/index.html.twig', [
            'fitsplits' => $fitsplitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_fistsplit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FitsplitRepository $fitsplitRepository): Response
    {
        $fitsplit = new Fitsplit();
        $form = $this->createForm(FitsplitType::class, $fitsplit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fitsplitRepository->add($fitsplit, true);

            return $this->redirectToRoute('app_admin_fistsplit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_fistsplit/new.html.twig', [
            'fitsplit' => $fitsplit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_fistsplit_show", methods={"GET"})
     */
    public function show(Fitsplit $fitsplit): Response
    {
        return $this->render('admin_fistsplit/show.html.twig', [
            'fitsplit' => $fitsplit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_fistsplit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Fitsplit $fitsplit, FitsplitRepository $fitsplitRepository): Response
    {
        $form = $this->createForm(FitsplitType::class, $fitsplit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fitsplitRepository->add($fitsplit, true);

            return $this->redirectToRoute('app_admin_fistsplit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_fistsplit/edit.html.twig', [
            'fitsplit' => $fitsplit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_fistsplit_delete", methods={"POST"})
     */
    public function delete(Request $request, Fitsplit $fitsplit, FitsplitRepository $fitsplitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fitsplit->getId(), $request->request->get('_token'))) {
            $fitsplitRepository->remove($fitsplit, true);
        }

        return $this->redirectToRoute('app_admin_fistsplit_index', [], Response::HTTP_SEE_OTHER);
    }
}
