<?php

namespace dsj\ContatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use dsj\ContatoBundle\Entity\Contact;
use dsj\ContatoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Contact controller.
 *
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * Lists all Contact entities.
     *
     * @Route("/", name="contact")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('dsjContatoBundle:Contact')->findAll();

        array('entities' => $entities);

        // $contato= array("id" => 1,
                         // "email" => "dsj@gmail.com",
                         // "name" => "deusdede",
                         // "phone" => "6284119900");
		$contatos=$this->converterEntidadeParaArray($entities);				 
        $total="1";
		$res=json_encode(array(
			"success" => mysql_errno() == 0,
			"total" => $total,
			"contatos" => $contatos
		));		
        // array_push($contatos,$contato);
        // $total="1";
        // $res=json_encode(array(
            // "success" => mysql_errno() == 0,
            // "total" => $total,
            // "contatos" => $contatos
        // ));

		// echo "<pre>";
		// echo print_r($contatos);
		// echo "</pre>";
		
        //echo "<pre>";
        //echo print_r($contatos);
        //echo "</pre>";
        //echo json_encode(array(
		//"success" => true,
		//"total" => 1,
		//"contatos" => $contatos
	    //));		
		return new Response($res);
    }

	public function converterEntidadeParaArray($e)
	{
        $contatos = array();
		foreach ($e as $um) {
            $contato= array("id" => $um->getId(),
                            "email" => $um->getEmail(),
                            "name" => $um->getName(),
                            "phone" => $um->getPhone());			
            array_push($contatos,$contato);
		}	
        //echo "<pre>";
		//echo print_r($contatos);
        //echo "</pre>";
		return $contatos;
	}
	
    /**
     * Finds and displays a Contact entity.
     *
     * @Route("/{id}/show", name="contact_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('dsjContatoBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Contact entity.
     *
     * @Route("/new", name="contact_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Contact();
        $form   = $this->createForm(new ContactType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Contact entity.
     *
     * @Route("/create", name="contact_create")
     * @Method("post")
     * @Template("dsjContatoBundle:Contact:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Contact();
        $request = $this->getRequest();
        $form    = $this->createForm(new ContactType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contact_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Contact entity.
     *
     * @Route("/{id}/edit", name="contact_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('dsjContatoBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        $editForm = $this->createForm(new ContactType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Contact entity.
     *
     * @Route("/{id}/update", name="contact_update")
     * @Method("post")
     * @Template("dsjContatoBundle:Contact:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('dsjContatoBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        $editForm   = $this->createForm(new ContactType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contact_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Contact entity.
     *
     * @Route("/{id}/delete", name="contact_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('dsjContatoBundle:Contact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contact entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contact'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
