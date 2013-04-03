<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d64cb91e73cd1f16f45c5a28e341ebca extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, 'exception'), "toarray", array(), "any", false));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
