<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b37901052a51eebf86b6073601e0f05b0ba965f0f494cce4b6813f29b630c489 extends Twig_Template
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
        $__internal_c3be72ab44f5c7c2af46e1dd910cf26c2f7e0709569ebd11e77380ad1f896483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3be72ab44f5c7c2af46e1dd910cf26c2f7e0709569ebd11e77380ad1f896483->enter($__internal_c3be72ab44f5c7c2af46e1dd910cf26c2f7e0709569ebd11e77380ad1f896483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f3ad4e3793e91afb95b3ff7f4a5221292f9404142c08af8b843f6dd135204c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ad4e3793e91afb95b3ff7f4a5221292f9404142c08af8b843f6dd135204c16->enter($__internal_f3ad4e3793e91afb95b3ff7f4a5221292f9404142c08af8b843f6dd135204c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3be72ab44f5c7c2af46e1dd910cf26c2f7e0709569ebd11e77380ad1f896483->leave($__internal_c3be72ab44f5c7c2af46e1dd910cf26c2f7e0709569ebd11e77380ad1f896483_prof);

        
        $__internal_f3ad4e3793e91afb95b3ff7f4a5221292f9404142c08af8b843f6dd135204c16->leave($__internal_f3ad4e3793e91afb95b3ff7f4a5221292f9404142c08af8b843f6dd135204c16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
