<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b6d0cd2008afda9e72bf292b09ff9aba9e089f53a8620393b4e731ac68514ee8 extends Twig_Template
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
        $__internal_9d692da712aad5b336def8193b55639fd64ad0a468a640195d9753f88234a2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d692da712aad5b336def8193b55639fd64ad0a468a640195d9753f88234a2e2->enter($__internal_9d692da712aad5b336def8193b55639fd64ad0a468a640195d9753f88234a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b7d73c006323dae60d9edba1ade79e585b4c8dbabb47936f3025c5e5f0c37da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d73c006323dae60d9edba1ade79e585b4c8dbabb47936f3025c5e5f0c37da7->enter($__internal_b7d73c006323dae60d9edba1ade79e585b4c8dbabb47936f3025c5e5f0c37da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9d692da712aad5b336def8193b55639fd64ad0a468a640195d9753f88234a2e2->leave($__internal_9d692da712aad5b336def8193b55639fd64ad0a468a640195d9753f88234a2e2_prof);

        
        $__internal_b7d73c006323dae60d9edba1ade79e585b4c8dbabb47936f3025c5e5f0c37da7->leave($__internal_b7d73c006323dae60d9edba1ade79e585b4c8dbabb47936f3025c5e5f0c37da7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
