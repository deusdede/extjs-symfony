<?php

namespace dsj\EstoqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dsj\EstoqueBundle\Entity\Produto
 *
 * @ORM\Table(name="produto")
 * @ORM\Entity
 */
class Produto
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=30, nullable=false)
     */
    private $nome;

    /**
     * @var float $preco
     *
     * @ORM\Column(name="preco", type="float", nullable=false)
     */
    private $preco;

    /**
     * @var string $descricao
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

    /**
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;



    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set preco
     *
     * @param float $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * Get preco
     *
     * @return float 
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set categoria
     *
     * @param dsj\EstoqueBundle\Entity\Categoria $categoria
     */
    public function setCategoria(\dsj\EstoqueBundle\Entity\Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get categoria
     *
     * @return dsj\EstoqueBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}