<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8a33f8f647c8cdf7d8d757c18b5ca06db587ee49b8e44288c872530fa87d1ed9 extends Twig_Template
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
        $__internal_1f143aefa20442f8b72be4bf00545bd8bf095c362bdfda2f6580a92ac0f50ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f143aefa20442f8b72be4bf00545bd8bf095c362bdfda2f6580a92ac0f50ce4->enter($__internal_1f143aefa20442f8b72be4bf00545bd8bf095c362bdfda2f6580a92ac0f50ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d59c2e5edee11946e1850a12a40eb7c3f67a2c0f27f3a4cec5b07f2f5d39ea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59c2e5edee11946e1850a12a40eb7c3f67a2c0f27f3a4cec5b07f2f5d39ea7b->enter($__internal_d59c2e5edee11946e1850a12a40eb7c3f67a2c0f27f3a4cec5b07f2f5d39ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f143aefa20442f8b72be4bf00545bd8bf095c362bdfda2f6580a92ac0f50ce4->leave($__internal_1f143aefa20442f8b72be4bf00545bd8bf095c362bdfda2f6580a92ac0f50ce4_prof);

        
        $__internal_d59c2e5edee11946e1850a12a40eb7c3f67a2c0f27f3a4cec5b07f2f5d39ea7b->leave($__internal_d59c2e5edee11946e1850a12a40eb7c3f67a2c0f27f3a4cec5b07f2f5d39ea7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
