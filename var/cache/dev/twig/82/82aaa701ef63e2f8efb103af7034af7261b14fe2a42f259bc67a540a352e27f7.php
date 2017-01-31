<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_ec73d680512158bdf13785a4795c82b1c23b3dbdcb1204fe3107424c4af3e14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec73d680512158bdf13785a4795c82b1c23b3dbdcb1204fe3107424c4af3e14d->enter($__internal_ec73d680512158bdf13785a4795c82b1c23b3dbdcb1204fe3107424c4af3e14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8e5fdf8224b5a84b24cb617a7979014c8c5a4b6f97d6278deb163314e5c60017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5fdf8224b5a84b24cb617a7979014c8c5a4b6f97d6278deb163314e5c60017->enter($__internal_8e5fdf8224b5a84b24cb617a7979014c8c5a4b6f97d6278deb163314e5c60017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ec73d680512158bdf13785a4795c82b1c23b3dbdcb1204fe3107424c4af3e14d->leave($__internal_ec73d680512158bdf13785a4795c82b1c23b3dbdcb1204fe3107424c4af3e14d_prof);

        
        $__internal_8e5fdf8224b5a84b24cb617a7979014c8c5a4b6f97d6278deb163314e5c60017->leave($__internal_8e5fdf8224b5a84b24cb617a7979014c8c5a4b6f97d6278deb163314e5c60017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
