<?php

namespace Sistema\PerroEncontradoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\PerroEncontradoBundle\Entity\Raza;
use Sistema\PerroEncontradoBundle\Form\RazaType;
use Sistema\PerroEncontradoBundle\Form\RazaFilterType;

/**
 * Raza controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/raza")
 */
class RazaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/PerroEncontradoBundle/Resources/config/Raza.yml',
    );

    /**
     * Lists all Raza entities.
     *
     * @Route("/", name="admin_raza")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new RazaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Raza entity.
     *
     * @Route("/", name="admin_raza_create")
     * @Method("POST")
     * @Template("SistemaPerroEncontradoBundle:Raza:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new RazaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Raza entity.
     *
     * @Route("/new", name="admin_raza_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new RazaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Raza entity.
     *
     * @Route("/{id}", name="admin_raza_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Raza entity.
     *
     * @Route("/{id}/edit", name="admin_raza_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new RazaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Raza entity.
     *
     * @Route("/{id}", name="admin_raza_update")
     * @Method("PUT")
     * @Template("SistemaPerroEncontradoBundle:Raza:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new RazaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Raza entity.
     *
     * @Route("/{id}", name="admin_raza_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Exporter Raza.
     *
     * @Route("/exporter/{format}", name="admin_raza_export")
     */
    public function getExporter($format)
    {
        $response = parent::exportCsvAction($format);

        return $response;
    }

    /**
     * Autocomplete a Raza entity.
     *
     * @Route("/autocomplete-forms/get-perros", name="Raza_autocomplete_perros")
     */
    public function getAutocompletePerro()
    {
        $options = array(
            'repository' => "SistemaPerroEncontradoBundle:Perro",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}