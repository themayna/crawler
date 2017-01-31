<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_e86609230da9f9a1b4a937bcd128b96ebdb5680e92b7c58fbe12c1fbde578f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86609230da9f9a1b4a937bcd128b96ebdb5680e92b7c58fbe12c1fbde578f11->enter($__internal_e86609230da9f9a1b4a937bcd128b96ebdb5680e92b7c58fbe12c1fbde578f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_82721ba756c9f695a9b609f8dcd367d080c630cb6c6d3cac72ce95c84eacdbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82721ba756c9f695a9b609f8dcd367d080c630cb6c6d3cac72ce95c84eacdbee->enter($__internal_82721ba756c9f695a9b609f8dcd367d080c630cb6c6d3cac72ce95c84eacdbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e86609230da9f9a1b4a937bcd128b96ebdb5680e92b7c58fbe12c1fbde578f11->leave($__internal_e86609230da9f9a1b4a937bcd128b96ebdb5680e92b7c58fbe12c1fbde578f11_prof);

        
        $__internal_82721ba756c9f695a9b609f8dcd367d080c630cb6c6d3cac72ce95c84eacdbee->leave($__internal_82721ba756c9f695a9b609f8dcd367d080c630cb6c6d3cac72ce95c84eacdbee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
