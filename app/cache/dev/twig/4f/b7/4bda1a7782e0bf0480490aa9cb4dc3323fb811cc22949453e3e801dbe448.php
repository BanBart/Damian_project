<?php

/* ProjectGamingCornerBundle::layout.html.twig */
class __TwigTemplate_4fb74bda1a7782e0bf0480490aa9cb4dc3323fb811cc22949453e3e801dbe448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'mainHeader' => array($this, 'block_mainHeader'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 3
        echo "<header class = \"mainHeader\">
                ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3c4d3ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c4d3ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/3c4d3ac_logotest_1.png");
            // line 5
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "3c4d3ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c4d3ac") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/3c4d3ac.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "\t\t
\t\t<nav><ul>
\t\t\t<li class= \"active\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("project_gaming_corner_homepage");
        echo "\">Nowości</a></li>
\t\t\t
\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("project_gaming_corner_reviews");
        echo "\">Recenzje</a>
\t\t\t\t<ul class = \"subMenu\">
\t\t\t\t\t<li class= \"new\"><a href=\"reviews.html\">Najnowsze</a></li>
\t\t\t\t\t<li class= \"arch\"><a href=\"#\">Archiwum</a></li>
\t\t\t\t\t<li class= \"writers\"><a href=\"#\">Recenzenci</a></li>\t
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t
\t\t\t<li><a href=\"#\">Premiery</a>
\t\t\t<ul class = \"subMenu\">
\t\t\t\t\t<li class= \"pc\"><a href=\"#\">PC</a></li>
\t\t\t\t\t<li class= \"ps1\"><a href=\"#\">Książki</a></li>\t\t\t
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t
\t\t\t<li><a href=\"#\">Sprzęt</a>
\t\t\t\t<ul class = \"subMenu\">
\t\t\t\t\t<li class= \"akc\"><a href=\"#\">Akcesoria</a></li>
\t\t\t\t\t<li class= \"ins\"><a href=\"#\">Podzespoły</a></li>
\t\t\t\t\t<li class= \"ps2\"><a href=\"#\">Konsole</a></li>
\t\t\t\t\t<li class= \"mobile\"><a href=\"#\">Przenośne</a></li>\t\t\t\t
\t\t\t\t</ul>
\t\t\t</li>\t
\t\t\t
\t\t\t<li><a href=\"#\">Filmy</a>
\t\t\t\t<ul class = \"subMenu\">
\t\t\t\t\t<li class= \"al\"><a href=\"#\">Wszystkie</a></li>\t
\t\t\t\t\t<li class= \"gp\"><a href=\"#\">Gameplay</a></li>\t
\t\t\t\t\t<li class= \"rv\"><a href=\"#\">Recenzja Video</a></li>\t\t\t\t
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t
\t\t\t<li><a href=\"#\">Galeria</a></li>
\t\t</ul></nav>
    </header>
    \t<div class = \"imgHeader\">
\t\t
                ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78d8a2e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78d8a2e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/78d8a2e_topimg2_1.jpg");
            // line 49
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "78d8a2e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78d8a2e") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/78d8a2e.jpg");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "\t</div>
";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    
    <div class = \"mainContent\">
\t\t<div class = \"content\">
\t\t";
        // line 58
        $this->displayBlock('article', $context, $blocks);
        // line 166
        echo "\t\t</div>
\t</div>
    
";
    }

    // line 58
    public function block_article($context, array $blocks = array())
    {
        // line 59
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ProjectGamingCornerBundle:Article:index"));
        echo "
\t\t\t";
        // line 165
        echo "                        ";
    }

    // line 172
    public function block_aside($context, array $blocks = array())
    {
        // line 173
        echo "<aside class= \"topSideBar\">
\t\t<article>
\t\t\t<h2>Witam w Gaming Corner!</h2>
\t\t\t<p>Jest to strona, którą tworze specjalnie na potrzeby przedmiotu Inżyniera Internetu. Mam nadzieję, że pomimo, iż to tylko projekt, każdy znajdzie na niej coś ciekawego dla siebie.   </p>
\t\t</article>
\t</aside>
\t
\t<aside class= \"middleSideBar\">
\t\t<article>
\t\t\t<h2>Recenzent Konrad Ochniowski!</h2>
\t\t\t<p>Teksty recenzji dla Gaming Corner zgodził się pisać mój dobry kolega student UJ Konrad! mam nadzieję, że umilą wasz dzień przy okazji dostarczając rzetelnie zebranych informacji</p>
\t\t\t<p class = \"postInfo\">Witamy na pokładzie!</p>
\t\t</article>
\t</aside>
\t
\t<aside class= \"bottomSideBar\">
\t\t<article>
\t\t\t<h2>Plan rozwoju!</h2>
\t\t\t<p>Następnym punktem rozwoju Gameing Corner będzie:</p>
\t\t\t<p>Zapełnienie stron pobocznych oraz stworzenie galerii</p>
\t\t\t<p class = \"postInfo\">W kolejnych tygodniach wprowadzenie rejestracji użytkowników!</p>
\t\t\t
\t\t</article>
\t</aside>            
";
    }

    public function getTemplateName()
    {
        return "ProjectGamingCornerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 173,  156 => 172,  152 => 165,  147 => 59,  144 => 58,  137 => 166,  135 => 58,  130 => 55,  127 => 54,  122 => 51,  108 => 49,  104 => 48,  64 => 11,  59 => 9,  55 => 7,  41 => 5,  37 => 4,  34 => 3,  31 => 2,);
    }
}
