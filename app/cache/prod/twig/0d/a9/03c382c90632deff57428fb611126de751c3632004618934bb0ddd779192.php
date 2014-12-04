<?php

/* ::base.html.twig */
class __TwigTemplate_0da903c382c90632deff57428fb611126de751c3632004618934bb0ddd779192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
  <head>
               <meta charset=\"UTF-8\" />
               <title>GamesCorner</title>
               <meta name=\"keywords\" content=\"AGH, Damian, Basta, Inżynieria internetu\"  />
               <meta name=\"description\" content=\"Damian Basta - Strona informacyjna. 
               Znajdziesz tutaj proramy, recenzje i artykuły mojego autorstwa.\"   />
               <meta name=\"author\" content=\"Damian Basta\" />
               <meta name=\"copyright\" content=\"Damian Basta\" />
               <meta name=\"generator\" content=\"PSPad / Notepad++\" />
        <!--   <meta http-equiv=\"refresh\" content=\"1; url=http://demotywatory.pl\" />     -->
               <meta name=\"robots\" csontent=\"index, follow\" />
               <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
  </head>
  
  <body class= \"body\">
\t
            ";
        // line 25
        $this->displayBlock('mainHeader', $context, $blocks);
        // line 27
        echo "\t\t\t
\t
\t

\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "\t
\t";
        // line 35
        $this->displayBlock('aside', $context, $blocks);
        // line 38
        echo "\t
\t
\t<footer class = \"mainFooter\">
\t<p> Copyright &copy; <a href=\"#\" title= \"dbasta 2014\"> http://www.metal.agh.edu.pl/~dbasta/ </a> </p>
\t</footer>
</body>

 
  </html>";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "          
            ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "096cd76_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_096cd76_0") : $this->env->getExtension('assets')->getAssetUrl("css/096cd76_style_1.css");
            // line 17
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "096cd76"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_096cd76") : $this->env->getExtension('assets')->getAssetUrl("css/096cd76.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
    }

    // line 25
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 26
        echo "                
            ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "            
        ";
    }

    // line 35
    public function block_aside($context, array $blocks = array())
    {
        // line 36
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  118 => 35,  113 => 32,  110 => 31,  105 => 26,  102 => 25,  98 => 19,  84 => 17,  80 => 16,  75 => 15,  63 => 38,  61 => 35,  58 => 34,  56 => 31,  50 => 27,  48 => 25,  41 => 20,  39 => 15,  23 => 1,);
    }
}
