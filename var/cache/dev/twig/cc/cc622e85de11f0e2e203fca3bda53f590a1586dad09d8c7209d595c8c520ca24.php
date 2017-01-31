<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_9d8bdc50085ee899f3144f8685a9a36b538cd33abf82a97cb144a0ac76554d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8bdc50085ee899f3144f8685a9a36b538cd33abf82a97cb144a0ac76554d80->enter($__internal_9d8bdc50085ee899f3144f8685a9a36b538cd33abf82a97cb144a0ac76554d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f5945fcadc4587a86e43ff1ccba511082f260134e9d5ec02e97ef90601a81ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5945fcadc4587a86e43ff1ccba511082f260134e9d5ec02e97ef90601a81ed5->enter($__internal_f5945fcadc4587a86e43ff1ccba511082f260134e9d5ec02e97ef90601a81ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9d8bdc50085ee899f3144f8685a9a36b538cd33abf82a97cb144a0ac76554d80->leave($__internal_9d8bdc50085ee899f3144f8685a9a36b538cd33abf82a97cb144a0ac76554d80_prof);

        
        $__internal_f5945fcadc4587a86e43ff1ccba511082f260134e9d5ec02e97ef90601a81ed5->leave($__internal_f5945fcadc4587a86e43ff1ccba511082f260134e9d5ec02e97ef90601a81ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
