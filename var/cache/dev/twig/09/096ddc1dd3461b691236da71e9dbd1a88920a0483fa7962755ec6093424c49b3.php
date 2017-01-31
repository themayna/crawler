<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_35559e23a2a8137c2affca3a547cf70ac2fae06a66e9b4a770cf9caeeebaa7d9 extends Twig_Template
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
        $__internal_76c33719d3c5d5978ada20eaad46cbd1a3b8bdc70281f6b993397759d9ce9821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c33719d3c5d5978ada20eaad46cbd1a3b8bdc70281f6b993397759d9ce9821->enter($__internal_76c33719d3c5d5978ada20eaad46cbd1a3b8bdc70281f6b993397759d9ce9821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_930be7728c8e35d9b2f6e46d1a208d59d1003e01f82a772cbf0dcb73942a397b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930be7728c8e35d9b2f6e46d1a208d59d1003e01f82a772cbf0dcb73942a397b->enter($__internal_930be7728c8e35d9b2f6e46d1a208d59d1003e01f82a772cbf0dcb73942a397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_76c33719d3c5d5978ada20eaad46cbd1a3b8bdc70281f6b993397759d9ce9821->leave($__internal_76c33719d3c5d5978ada20eaad46cbd1a3b8bdc70281f6b993397759d9ce9821_prof);

        
        $__internal_930be7728c8e35d9b2f6e46d1a208d59d1003e01f82a772cbf0dcb73942a397b->leave($__internal_930be7728c8e35d9b2f6e46d1a208d59d1003e01f82a772cbf0dcb73942a397b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
