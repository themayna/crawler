<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cceb737a2ae9450e18628b7f29eebd0fa36ff449f807176e49cfde2bb18c301a extends Twig_Template
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
        $__internal_72c54e7ebc01733a6caad0a0b0469f0dd0c48930244e4699ce0bf916423e896d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c54e7ebc01733a6caad0a0b0469f0dd0c48930244e4699ce0bf916423e896d->enter($__internal_72c54e7ebc01733a6caad0a0b0469f0dd0c48930244e4699ce0bf916423e896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8187950cfdccf7995bdbf0b82b1346c7637d1c115f46711e8293a5ad003e04a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8187950cfdccf7995bdbf0b82b1346c7637d1c115f46711e8293a5ad003e04a1->enter($__internal_8187950cfdccf7995bdbf0b82b1346c7637d1c115f46711e8293a5ad003e04a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_72c54e7ebc01733a6caad0a0b0469f0dd0c48930244e4699ce0bf916423e896d->leave($__internal_72c54e7ebc01733a6caad0a0b0469f0dd0c48930244e4699ce0bf916423e896d_prof);

        
        $__internal_8187950cfdccf7995bdbf0b82b1346c7637d1c115f46711e8293a5ad003e04a1->leave($__internal_8187950cfdccf7995bdbf0b82b1346c7637d1c115f46711e8293a5ad003e04a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
