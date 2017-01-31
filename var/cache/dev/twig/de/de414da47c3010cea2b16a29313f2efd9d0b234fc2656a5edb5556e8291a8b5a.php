<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_af88081709bfa54b0500ffe331754384c48c493e619ca3f4e5f96200a864331a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af88081709bfa54b0500ffe331754384c48c493e619ca3f4e5f96200a864331a->enter($__internal_af88081709bfa54b0500ffe331754384c48c493e619ca3f4e5f96200a864331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_02950986ad144e9fff2c493ea3b0063d591a17aa4925886ba181ad4249b51117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02950986ad144e9fff2c493ea3b0063d591a17aa4925886ba181ad4249b51117->enter($__internal_02950986ad144e9fff2c493ea3b0063d591a17aa4925886ba181ad4249b51117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_af88081709bfa54b0500ffe331754384c48c493e619ca3f4e5f96200a864331a->leave($__internal_af88081709bfa54b0500ffe331754384c48c493e619ca3f4e5f96200a864331a_prof);

        
        $__internal_02950986ad144e9fff2c493ea3b0063d591a17aa4925886ba181ad4249b51117->leave($__internal_02950986ad144e9fff2c493ea3b0063d591a17aa4925886ba181ad4249b51117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
