<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_0317b194a050b440276a10b5f75bc3d2afa80ca4662bfdcdbaf7dba64867de47 extends Twig_Template
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
        $__internal_e70a82432d41718b4009731c135eb8f8c235631375fef1962b8bae58e19f7b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70a82432d41718b4009731c135eb8f8c235631375fef1962b8bae58e19f7b03->enter($__internal_e70a82432d41718b4009731c135eb8f8c235631375fef1962b8bae58e19f7b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_836094e88d7cfba4a8f81830e1376bb573877294421e13062a5d2d8be5ca3bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836094e88d7cfba4a8f81830e1376bb573877294421e13062a5d2d8be5ca3bd7->enter($__internal_836094e88d7cfba4a8f81830e1376bb573877294421e13062a5d2d8be5ca3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e70a82432d41718b4009731c135eb8f8c235631375fef1962b8bae58e19f7b03->leave($__internal_e70a82432d41718b4009731c135eb8f8c235631375fef1962b8bae58e19f7b03_prof);

        
        $__internal_836094e88d7cfba4a8f81830e1376bb573877294421e13062a5d2d8be5ca3bd7->leave($__internal_836094e88d7cfba4a8f81830e1376bb573877294421e13062a5d2d8be5ca3bd7_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/pi/www/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
