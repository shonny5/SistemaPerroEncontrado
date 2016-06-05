<?php

namespace Sistema\PerroEncontradoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\PerroEncontradoBundle\Entity\Perro;
use Sistema\PerroEncontradoBundle\Form\PerroType;
use Sistema\PerroEncontradoBundle\Form\PerroFilterType;

/**
 * Perro controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/perro")
 */
class PerroController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/PerroEncontradoBundle/Resources/config/Perro.yml',
    );

    /**
     * Lists all Perro entities.
     *
     * @Route("/", name="admin_perro")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new PerroFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Perro entity.
     *
     * @Route("/", name="admin_perro_create")
     * @Method("POST")
     * @Template("SistemaPerroEncontradoBundle:Perro:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new PerroType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Perro entity.
     *
     * @Route("/new", name="admin_perro_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new PerroType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Perro entity.
     *
     * @Route("/{id}", name="admin_perro_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Perro entity.
     *
     * @Route("/{id}/edit", name="admin_perro_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new PerroType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Perro entity.
     *
     * @Route("/{id}", name="admin_perro_update")
     * @Method("PUT")
     * @Template("SistemaPerroEncontradoBundle:Perro:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new PerroType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Perro entity.
     *
     * @Route("/{id}", name="admin_perro_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Exporter Perro.
     *
     * @Route("/exporter/{format}", name="admin_perro_export")
     */
    public function getExporter($format)
    {
        $response = parent::exportCsvAction($format);

        return $response;
    }

    /**
     * Autocomplete a Perro entity.
     *
     * @Route("/autocomplete-forms/get-usuario_de_rescate", name="Perro_autocomplete_usuario_de_rescate")
     */
    public function getAutocompleteUser()
    {
        $options = array(
            'repository' => "SistemaPerroUserBundle:User",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Perro entity.
     *
     * @Route("/autocomplete-forms/get-propietario", name="Perro_autocomplete_propietario")
     */
    public function getAutocompletePropietario()
    {
        $options = array(
            'repository' => "SistemaPerroEncontradoBundle:Propietario",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Perro entity.
     *
     * @Route("/autocomplete-forms/get-razas", name="Perro_autocomplete_razas")
     */
    public function getAutocompleteRaza()
    {
        $options = array(
            'repository' => "SistemaPerroEncontradoBundle:Raza",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}