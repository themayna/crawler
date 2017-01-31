<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_588bb6a30449c941a41f4127eec6406c6b4be885f777c399c8141edd40999476 extends Twig_Template
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
        $__internal_631946afca831fdd6479a8d9975112e756e2c0c1bd3de06783640deb08ce21fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631946afca831fdd6479a8d9975112e756e2c0c1bd3de06783640deb08ce21fa->enter($__internal_631946afca831fdd6479a8d9975112e756e2c0c1bd3de06783640deb08ce21fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5a5ff0740ae8e251b64c0b5729fc2653c474d4759362ad734f089e9999b31afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5ff0740ae8e251b64c0b5729fc2653c474d4759362ad734f089e9999b31afc->enter($__internal_5a5ff0740ae8e251b64c0b5729fc2653c474d4759362ad734f089e9999b31afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_631946afca831fdd6479a8d9975112e756e2c0c1bd3de06783640deb08ce21fa->leave($__internal_631946afca831fdd6479a8d9975112e756e2c0c1bd3de06783640deb08ce21fa_prof);

        
        $__internal_5a5ff0740ae8e251b64c0b5729fc2653c474d4759362ad734f089e9999b31afc->leave($__internal_5a5ff0740ae8e251b64c0b5729fc2653c474d4759362ad734f089e9999b31afc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
