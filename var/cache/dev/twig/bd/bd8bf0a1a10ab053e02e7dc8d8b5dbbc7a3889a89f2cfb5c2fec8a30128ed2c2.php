<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_4b8cd9de80e5819a1a8af2741c311cee328aad02b5bd64188e8c42bb4dd2433e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8cd9de80e5819a1a8af2741c311cee328aad02b5bd64188e8c42bb4dd2433e->enter($__internal_4b8cd9de80e5819a1a8af2741c311cee328aad02b5bd64188e8c42bb4dd2433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fad0ddfb93607c3a57d223663302abdf7e64cd3c8baf9e99df68251505bccf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad0ddfb93607c3a57d223663302abdf7e64cd3c8baf9e99df68251505bccf06->enter($__internal_fad0ddfb93607c3a57d223663302abdf7e64cd3c8baf9e99df68251505bccf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4b8cd9de80e5819a1a8af2741c311cee328aad02b5bd64188e8c42bb4dd2433e->leave($__internal_4b8cd9de80e5819a1a8af2741c311cee328aad02b5bd64188e8c42bb4dd2433e_prof);

        
        $__internal_fad0ddfb93607c3a57d223663302abdf7e64cd3c8baf9e99df68251505bccf06->leave($__internal_fad0ddfb93607c3a57d223663302abdf7e64cd3c8baf9e99df68251505bccf06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
