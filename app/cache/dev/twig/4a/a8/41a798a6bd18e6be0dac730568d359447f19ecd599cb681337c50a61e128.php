<?php

/* ProjectGamingCornerBundle:Article:index.html.twig */
class __TwigTemplate_4aa841a798a6bd18e6be0dac730568d359447f19ecd599cb681337c50a61e128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "    <article class = \"damianPost\">
\t\t\t\t<header>
\t\t\t\t\t<h2><a href=\"#\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> 16.10.2014</p>
\t\t\t\t</footer>
\t\t\t\t
\t\t\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "source", array()), "html", null, true);
            echo "</p>
                                
\t\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> Pozdr. Damian</p>
\t\t\t\t</footer>
\t\t\t\t\t
\t\t\t\t
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ProjectGamingCornerBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  27 => 4,  23 => 2,  19 => 1,);
    }
}
