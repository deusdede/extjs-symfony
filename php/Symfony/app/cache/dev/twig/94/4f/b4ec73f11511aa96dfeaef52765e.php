<?php

/* dsjEstoqueBundle:Produto:show.html.twig */
class __TwigTemplate_944fb4ec73f11511aa96dfeaef52765e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Produto</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nome", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Preco</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "preco", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Descricao</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "descricao", array(), "any", false), "html");
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produto"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produto_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produto_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "dsjEstoqueBundle:Produto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
