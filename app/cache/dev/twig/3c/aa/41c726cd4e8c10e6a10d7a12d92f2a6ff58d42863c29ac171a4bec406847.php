<?php

/* ProjectGamingCornerBundle:Page:index.html.twig */
class __TwigTemplate_3caa41c726cd4e8c10e6a10d7a12d92f2a6ff58d42863c29ac171a4bec406847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectGamingCornerBundle::layout.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectGamingCornerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "ProjectGamingCornerBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
