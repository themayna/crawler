<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_5affaec088cf6981627068fbf9646545287e69aa46687f7c66fcc3eee925dfae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5affaec088cf6981627068fbf9646545287e69aa46687f7c66fcc3eee925dfae->enter($__internal_5affaec088cf6981627068fbf9646545287e69aa46687f7c66fcc3eee925dfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_330104d038cd698dc5f4d09ee07a9a5462e01d15ba845d3c00cf96a1a059c36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330104d038cd698dc5f4d09ee07a9a5462e01d15ba845d3c00cf96a1a059c36b->enter($__internal_330104d038cd698dc5f4d09ee07a9a5462e01d15ba845d3c00cf96a1a059c36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5affaec088cf6981627068fbf9646545287e69aa46687f7c66fcc3eee925dfae->leave($__internal_5affaec088cf6981627068fbf9646545287e69aa46687f7c66fcc3eee925dfae_prof);

        
        $__internal_330104d038cd698dc5f4d09ee07a9a5462e01d15ba845d3c00cf96a1a059c36b->leave($__internal_330104d038cd698dc5f4d09ee07a9a5462e01d15ba845d3c00cf96a1a059c36b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
