<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
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
        $__internal_982e88558e5fc92ddfb08e369d1cd0814c1c126f3b74272b87bd2dd498efd7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982e88558e5fc92ddfb08e369d1cd0814c1c126f3b74272b87bd2dd498efd7fe->enter($__internal_982e88558e5fc92ddfb08e369d1cd0814c1c126f3b74272b87bd2dd498efd7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b36214b7f34ae7332c7be4b80564f09cc5e044fa6f2585b7568a297da6da9e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36214b7f34ae7332c7be4b80564f09cc5e044fa6f2585b7568a297da6da9e74->enter($__internal_b36214b7f34ae7332c7be4b80564f09cc5e044fa6f2585b7568a297da6da9e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_982e88558e5fc92ddfb08e369d1cd0814c1c126f3b74272b87bd2dd498efd7fe->leave($__internal_982e88558e5fc92ddfb08e369d1cd0814c1c126f3b74272b87bd2dd498efd7fe_prof);

        
        $__internal_b36214b7f34ae7332c7be4b80564f09cc5e044fa6f2585b7568a297da6da9e74->leave($__internal_b36214b7f34ae7332c7be4b80564f09cc5e044fa6f2585b7568a297da6da9e74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
