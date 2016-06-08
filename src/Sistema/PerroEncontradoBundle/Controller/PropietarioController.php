<?php

namespace Sistema\PerroEncontradoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\PerroEncontradoBundle\Entity\Propietario;
use Sistema\PerroEncontradoBundle\Form\PropietarioType;
use Sistema\PerroEncontradoBundle\Form\PropietarioFilterType;

/**
 * Propietario controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/propietario")
 */
class PropietarioController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/PerroEncontradoBundle/Resources/config/Propietario.yml',
    );

    /**
     * Lists all Propietario entities.
     *
     * @Route("/", name="admin_propietario")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new PropietarioFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Propietario entity.
     *
     * @Route("/", name="admin_propietario_create")
     * @Method("POST")
     * @Template("SistemaPerroEncontradoBundle:Propietario:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new PropietarioType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Propietario entity.
     *
     * @Route("/new", name="admin_propietario_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new PropietarioType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Propietario entity.
     *
     * @Route("/{id}", name="admin_propietario_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Propietario entity.
     *
     * @Route("/{id}/edit", name="admin_propietario_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new PropietarioType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Propietario entity.
     *
     * @Route("/{id}", name="admin_propietario_update")
     * @Method("PUT")
     * @Template("SistemaPerroEncontradoBundle:Propietario:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new PropietarioType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Propietario entity.
     *
     * @Route("/{id}", name="admin_propietario_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Exporter Propietario.
     *
     * @Route("/exporter/{format}", name="admin_propietario_export")
     */
    public function getExporter($format)
    {
        $response = parent::exportCsvAction($format);

        return $response;
    }

    /**
     * Autocomplete a Propietario entity.
     *
     * @Route("/autocomplete-forms/get-perros_propios", name="Propietario_autocomplete_perros_propios")
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