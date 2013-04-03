<?php

/* dsjEstoqueBundle:Default:index.html.twig */
class __TwigTemplate_0947c8e8d7886eaa7619b99279a60601 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "dsjEstoqueBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
