<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8c647dc3fe76bc6399839bfa0f6da327a8ed977d04d3757ac7ca5a7a6ae90a51 extends Twig_Template
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
        $__internal_a3daccdc9f3d1f4cce09a819eccff5922f6c904da82cb88666728773418232be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3daccdc9f3d1f4cce09a819eccff5922f6c904da82cb88666728773418232be->enter($__internal_a3daccdc9f3d1f4cce09a819eccff5922f6c904da82cb88666728773418232be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b0e797be0f620d06d1aee6f91d3b31d96bbcf475af68e0858b0e41d061655334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e797be0f620d06d1aee6f91d3b31d96bbcf475af68e0858b0e41d061655334->enter($__internal_b0e797be0f620d06d1aee6f91d3b31d96bbcf475af68e0858b0e41d061655334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a3daccdc9f3d1f4cce09a819eccff5922f6c904da82cb88666728773418232be->leave($__internal_a3daccdc9f3d1f4cce09a819eccff5922f6c904da82cb88666728773418232be_prof);

        
        $__internal_b0e797be0f620d06d1aee6f91d3b31d96bbcf475af68e0858b0e41d061655334->leave($__internal_b0e797be0f620d06d1aee6f91d3b31d96bbcf475af68e0858b0e41d061655334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
