<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_80ba0cc99e021386b90b6cb987aaf7ef7010f17998edc5002097b60ce2c2b9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ba0cc99e021386b90b6cb987aaf7ef7010f17998edc5002097b60ce2c2b9b9->enter($__internal_80ba0cc99e021386b90b6cb987aaf7ef7010f17998edc5002097b60ce2c2b9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_19b35ebca77a2af1b7c11f2848d12c0a2d7efce85d18389719a7deaec3046945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b35ebca77a2af1b7c11f2848d12c0a2d7efce85d18389719a7deaec3046945->enter($__internal_19b35ebca77a2af1b7c11f2848d12c0a2d7efce85d18389719a7deaec3046945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80ba0cc99e021386b90b6cb987aaf7ef7010f17998edc5002097b60ce2c2b9b9->leave($__internal_80ba0cc99e021386b90b6cb987aaf7ef7010f17998edc5002097b60ce2c2b9b9_prof);

        
        $__internal_19b35ebca77a2af1b7c11f2848d12c0a2d7efce85d18389719a7deaec3046945->leave($__internal_19b35ebca77a2af1b7c11f2848d12c0a2d7efce85d18389719a7deaec3046945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
