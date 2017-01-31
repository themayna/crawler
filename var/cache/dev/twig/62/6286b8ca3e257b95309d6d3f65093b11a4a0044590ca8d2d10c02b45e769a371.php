<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_8ff41c4f0923a08e48facd1b093ddc4bc335f10bcfc9237cd7b75a5abd86e55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff41c4f0923a08e48facd1b093ddc4bc335f10bcfc9237cd7b75a5abd86e55e->enter($__internal_8ff41c4f0923a08e48facd1b093ddc4bc335f10bcfc9237cd7b75a5abd86e55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9b5bb28143ec17b5e261c4e02c7f2bc801e4e4905d6ae8ce0a80e0e9152d5f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5bb28143ec17b5e261c4e02c7f2bc801e4e4905d6ae8ce0a80e0e9152d5f28->enter($__internal_9b5bb28143ec17b5e261c4e02c7f2bc801e4e4905d6ae8ce0a80e0e9152d5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8ff41c4f0923a08e48facd1b093ddc4bc335f10bcfc9237cd7b75a5abd86e55e->leave($__internal_8ff41c4f0923a08e48facd1b093ddc4bc335f10bcfc9237cd7b75a5abd86e55e_prof);

        
        $__internal_9b5bb28143ec17b5e261c4e02c7f2bc801e4e4905d6ae8ce0a80e0e9152d5f28->leave($__internal_9b5bb28143ec17b5e261c4e02c7f2bc801e4e4905d6ae8ce0a80e0e9152d5f28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
