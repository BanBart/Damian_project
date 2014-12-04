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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c4d3ac_0") : $this->env->getExtension('assets')->getAssetUrl("images/3c4d3ac_logotest_1.png");
            // line 5
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "3c4d3ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c4d3ac") : $this->env->getExtension('assets')->getAssetUrl("images/3c4d3ac.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78d8a2e_0") : $this->env->getExtension('assets')->getAssetUrl("images/78d8a2e_topimg2_1.jpg");
            // line 49
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "78d8a2e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78d8a2e") : $this->env->getExtension('assets')->getAssetUrl("images/78d8a2e.jpg");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        // line 165
        echo "\t\t</div>
\t</div>
    
";
    }

    // line 58
    public function block_article($context, array $blocks = array())
    {
        // line 59
        echo "\t\t\t<article class = \"damianPost\">
\t\t\t\t<header>
\t\t\t\t\t<h2><a href=\"#\">Nowa recenzja!</a></h2>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> 16.10.2014</p>
\t\t\t\t</footer>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\tDziś w <i>Gaming Corner</i> pojawia się, a jakże nowa recenzja!
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\tTym razem Konrad zaserwował Nam materiał z ciekawej, niedawno wydanej w Polsce turówki Space Hulk
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\tSerdecznie zapraszam do działu recenzje oraz życzę miłej lektury!
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h2 class = \"scrn2\">
\t\t\t\t\t\t<a href=\"reviews.html\">
\t\t\t\t\t\t<img src=\"scrn/sh/logo.jpg\" alt=\"Tu powinien byc obraz przepraszamy\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> Pozdr. Damian</p>
\t\t\t\t</footer>
\t\t\t\t\t
\t\t\t\t
\t\t\t</article >\t
\t\t\t
\t\t\t<article class = \"konradPost\">
\t\t\t\t<header>
\t\t\t\t\t<h2><a href=\"#\">Pierwsze wrażenia z The Evil Within :</a></h2>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> 15.10.2014</p>
\t\t\t\t</footer>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<b>Na plus :</b>
\t\t\t\t\t<p>- świetny klimat i fabuła, coś bardzo oryginalnego, i takiego innego niż kolejne RE</p>
\t\t\t\t\t<p>- wreszcie prawdziwy SURVIVAL HORROR, gra jest straszna, a każda kulka i apteczka na wagę złota, z elementami skradania zgrywa się to znakomicie. Gra ma o wiele więcej wspólnego z prawdziwym horror experience nawet niż pierwszy dead space, a to już świetnie</p>
\t\t\t\t\t<p>- elementy skradania, które, wbrew pozorom, pasują do gry</p>
\t\t\t\t\t<p>- bardzo ładna i \"brudna\" grafika, designerska uczta dla oczu</p>
\t\t\t\t\t<p>- bardzo wyśrubowany poziom trudności</p>
\t\t\t\t\t<p>- zaskakująco dobry pomysł z stałym 30 fps - ja tego nie czuję, a to z pewnością działa na płynność gry, dzięki czemu obraz nigdy nie spowalnia</p>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t<b>Minusy :</b>

\t\t\t\t\t<p>- WINIETA ! Po prostu w głowie mi się nie mieści, jak w 2014 roku, gra \"wielkiego\" Shinji Mikamiego, ojca serii Resident Evil, może być tak leniwym portem na PC, żeby gra miała PASY na górze i dole ekranu, których nie da się wyłączyć inaczej niż z konsoli developerskiej - żałosne, zastanawiam się, czy uciąć za to grze punkt, czy dwa, bo to naprawdę przeszkadza w grze, przynajmniej mi\t</p>
\t\t\t\t\t<p>- przekłamane wymagania sprzętowe, na ultra i włączonych bajerach cały czas gra chodziła idealnie płynnie, jedyne co wyłączyłem to odbicia, bo modele wyglądają wtedy jak polane olejkiem do ciała ;p\t</p>
\t\t\t\t\t<p>- standard w każdym Survivalu, czyli raczej ślamazarny system celowania i strzelania... ale do tego to już chyba tylko zostaje się przyzwyczaić, jedynie Dead Space 3 się wybijał pod tym kątem ;p\t</p>
\t\t\t\t\t<p>- miejscami gra jest dezorientująca i nie wiadomo, co zrobić - trzeba albo się domyślić, albo zdać na zdrowy rozsądek, albo wręcz \"wpaść\" na skrypt z rozwiązaniem problemu ;P\t</p>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\tRecenzja The Evil Within pojawi się już niedługo!
\t\t\t\t\t</p>
\t\t\t\t\t

\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> Konrad</p>
\t\t\t\t</footer>
\t\t\t\t\t
\t\t\t\t
\t\t\t</article >\t
\t\t\t
\t\t\t
\t\t\t<article class = \"damianPost\">
\t\t\t\t<header>
\t\t\t\t\t<h2><a href=\"#\">Witam!</a></h2>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> \"Nie czekaj. Pora nigdy nie będzie idealna.\" Napoleon Hill</p>
\t\t\t\t</footer>
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> 11.10.2014</p>
\t\t\t\t</footer>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\tDziś startuje portal <i>Gaming Corner</i> poświęcony grom, sprzętowi do gier, oraz wszystkim graczom!
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\tJest to strona, którą przygotowuje na moje zajęcia projektowe z przedmiotu Inżynieria internetu. Strona nie jest jeszcze ukończona, można nawet rzec, że jest w powijakach. Dochodzę jednak do wniosku, że czas ją opublikować w czeluściach internetu!
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\tZ góry proszę o wyrozumiałość i raczej nie spodziewajcie się cudów! Mam nadziejęz że z czasem wszystkie strony poboczne zostaną rozwinięte w zadowalający stopniu.
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p class = \"postInfo\"> Pozdr. Damian</p>
\t\t\t\t</footer>
\t\t\t\t\t
\t\t\t\t
\t\t\t</article>
                        ";
    }

    // line 171
    public function block_aside($context, array $blocks = array())
    {
        // line 172
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
        return array (  259 => 172,  256 => 171,  147 => 59,  144 => 58,  137 => 165,  135 => 58,  130 => 55,  127 => 54,  122 => 51,  108 => 49,  104 => 48,  64 => 11,  59 => 9,  55 => 7,  41 => 5,  37 => 4,  34 => 3,  31 => 2,);
    }
}
