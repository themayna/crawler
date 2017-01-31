<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_e8917dc451e364bdeada9c84f8b851853aebe9d77ca4144943b3756621b9bd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8917dc451e364bdeada9c84f8b851853aebe9d77ca4144943b3756621b9bd45->enter($__internal_e8917dc451e364bdeada9c84f8b851853aebe9d77ca4144943b3756621b9bd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_37bcea96a2afa76ed261f3817c1798f0ad328fa33190d0fe526b74f5a89b423b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bcea96a2afa76ed261f3817c1798f0ad328fa33190d0fe526b74f5a89b423b->enter($__internal_37bcea96a2afa76ed261f3817c1798f0ad328fa33190d0fe526b74f5a89b423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e8917dc451e364bdeada9c84f8b851853aebe9d77ca4144943b3756621b9bd45->leave($__internal_e8917dc451e364bdeada9c84f8b851853aebe9d77ca4144943b3756621b9bd45_prof);

        
        $__internal_37bcea96a2afa76ed261f3817c1798f0ad328fa33190d0fe526b74f5a89b423b->leave($__internal_37bcea96a2afa76ed261f3817c1798f0ad328fa33190d0fe526b74f5a89b423b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
