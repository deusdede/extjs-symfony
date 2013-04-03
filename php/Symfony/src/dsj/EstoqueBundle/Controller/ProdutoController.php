<?php

namespace dsj\EstoqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dsj\EstoqueBundle\Entity\Produto;
use dsj\EstoqueBundle\Form\ProdutoType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Produto controller.
 *
 * @Route("/produto")
 */
class ProdutoController extends Controller
{
    /**
     * Lists all Produto entities.
     *
     * @Route("/", name="produto")
     * @Method({"GET"})	 
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('dsjEstoqueBundle:Produto')->findAll();

        array('entities' => $entities);

		$produtos=$this->converterEntidadeParaArray($entities);				 
        $total="1";
		$res=json_encode(array(
			"success" => mysql_errno() == 0,
			"total" => $total,
			"produtos" => $produtos
		));		
		return new Response($res);
    }

    /**
     * Creates a new Produto entity.
     *
     * @Route("/", name="produto_create")
     * @Method("POST")
     */
    public function createAction()
    {
        $entity  = new Produto();
        $request = $this->getRequest();
        $form    = $this->createForm(new ProdutoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produto_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Edits an existing Produto entity.
     *
     * @Route("/{id}", name="produto_update")
     * @Method("PUT")
     */
    public function updateAction($id)
    {

		parse_str(file_get_contents("php://input"),$post_vars);
		$produtoLido=json_decode($post_vars['produtos']);

        $em = $this->getDoctrine()->getEntityManager();

		$entidade=$this->carregaProduto($produtoLido);
		
        $em->merge($entidade);
        $em->flush();
		
        array('entidade' => $entidade);

		$produtos=$this->converterUmaEntidade($entidade);				 
        $total="1";
		$res=json_encode(array(
			"success" => mysql_errno() == 0,
			"total" => $total,
			"produtos" => $produtos
		));		
		return new Response($res);
    }

    /**
     * Deletes a Produto entity.
     *
     * @Route("/", name="produto_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('dsjEstoqueBundle:Produto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produto'));
    }

	public function carregaProduto($um)
	{
		//ler categoria do produto
        $em = $this->getDoctrine()->getEntityManager();
		$id = $um->categoria_id;
        $categoria = $em->getRepository('dsjEstoqueBundle:Categoria')->find($id);

		// echo "<pre>";
		// print_r($um);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($categoria);
		// echo "</pre>";
		 
		$lido=new Produto();
		$lido->setId($um->id);
		$lido->setNome($um->nome);
		$lido->setPreco($um->preco);
		$lido->setDescricao($um->descricao);
		$lido->setCategoria($categoria);
		// echo "<pre>";
		// print_r($lido);
		// echo "</pre>";
		return $lido;
	}

	public function converterUmaEntidade($um)
	{
		$categoria=array("id" => $um->getCategoria()->getId(),
						 "nome" => $um->getCategoria()->getNome());
		$produto= array("id" => $um->getId(),
						"nome" => $um->getNome(),
						"preco" => $um->getPreco(),
						"descricao" => $um->getDescricao(),
						"categoria" => $categoria);			
		return $produto;
	}

	public function converterEntidadeParaArray($e)
	{
        $produtos = array();
		foreach ($e as $um) {
		    $produto=$this->converterUmaEntidade($um);
            array_push($produtos,$produto);
		}	
		return $produtos;
	}

}
