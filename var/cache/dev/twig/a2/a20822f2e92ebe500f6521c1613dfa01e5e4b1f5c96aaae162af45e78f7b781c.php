<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_a02f556bfe7f0f4a282f71bbada6b79a854790b73c75027cbe38b8c352e6bf40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02f556bfe7f0f4a282f71bbada6b79a854790b73c75027cbe38b8c352e6bf40->enter($__internal_a02f556bfe7f0f4a282f71bbada6b79a854790b73c75027cbe38b8c352e6bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5cf77766d19b0564179461184a86a7805ea62cfdbb589621081c015c2ff95547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf77766d19b0564179461184a86a7805ea62cfdbb589621081c015c2ff95547->enter($__internal_5cf77766d19b0564179461184a86a7805ea62cfdbb589621081c015c2ff95547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a02f556bfe7f0f4a282f71bbada6b79a854790b73c75027cbe38b8c352e6bf40->leave($__internal_a02f556bfe7f0f4a282f71bbada6b79a854790b73c75027cbe38b8c352e6bf40_prof);

        
        $__internal_5cf77766d19b0564179461184a86a7805ea62cfdbb589621081c015c2ff95547->leave($__internal_5cf77766d19b0564179461184a86a7805ea62cfdbb589621081c015c2ff95547_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
