<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_dd7f323482847dda0266ac88ded8cbdd035a99506ba130c842d86f59721f2f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7f323482847dda0266ac88ded8cbdd035a99506ba130c842d86f59721f2f05->enter($__internal_dd7f323482847dda0266ac88ded8cbdd035a99506ba130c842d86f59721f2f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_884d5894a32ebd96a0e121a1791f2f6e577803879507b43216cf49be443c74cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884d5894a32ebd96a0e121a1791f2f6e577803879507b43216cf49be443c74cf->enter($__internal_884d5894a32ebd96a0e121a1791f2f6e577803879507b43216cf49be443c74cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dd7f323482847dda0266ac88ded8cbdd035a99506ba130c842d86f59721f2f05->leave($__internal_dd7f323482847dda0266ac88ded8cbdd035a99506ba130c842d86f59721f2f05_prof);

        
        $__internal_884d5894a32ebd96a0e121a1791f2f6e577803879507b43216cf49be443c74cf->leave($__internal_884d5894a32ebd96a0e121a1791f2f6e577803879507b43216cf49be443c74cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
