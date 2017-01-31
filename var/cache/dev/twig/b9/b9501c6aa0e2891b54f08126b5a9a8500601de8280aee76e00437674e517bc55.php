<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c52b50b7916eb2d6e6527435409844fb45f2e5f63db876607671bacf573010 extends Twig_Template
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
        $__internal_7b5b5c70aacd75a920404f4588f39bab72674c5c49514a1fb692933f7f83ba9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5b5c70aacd75a920404f4588f39bab72674c5c49514a1fb692933f7f83ba9a->enter($__internal_7b5b5c70aacd75a920404f4588f39bab72674c5c49514a1fb692933f7f83ba9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_970d9ec2126ceb5828e9a448b29c072f777059287154e9c0ae7ace56508ab317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970d9ec2126ceb5828e9a448b29c072f777059287154e9c0ae7ace56508ab317->enter($__internal_970d9ec2126ceb5828e9a448b29c072f777059287154e9c0ae7ace56508ab317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7b5b5c70aacd75a920404f4588f39bab72674c5c49514a1fb692933f7f83ba9a->leave($__internal_7b5b5c70aacd75a920404f4588f39bab72674c5c49514a1fb692933f7f83ba9a_prof);

        
        $__internal_970d9ec2126ceb5828e9a448b29c072f777059287154e9c0ae7ace56508ab317->leave($__internal_970d9ec2126ceb5828e9a448b29c072f777059287154e9c0ae7ace56508ab317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
