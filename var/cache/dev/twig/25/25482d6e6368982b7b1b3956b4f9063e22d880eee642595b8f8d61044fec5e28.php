<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_853970894709f4efb6a2dccdc14ee7b6c2ac01b45ae1cd916547413d4fecd609 extends Twig_Template
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
        $__internal_5cec7ca0fb5983e117fe5c6a8de664da450b5e68ea7af0d787f8cac07636c1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cec7ca0fb5983e117fe5c6a8de664da450b5e68ea7af0d787f8cac07636c1e0->enter($__internal_5cec7ca0fb5983e117fe5c6a8de664da450b5e68ea7af0d787f8cac07636c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_25078cecddcf3e2479860f7acc4f1c5b429f343e042c0a8d945184dfcd8ee6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25078cecddcf3e2479860f7acc4f1c5b429f343e042c0a8d945184dfcd8ee6d1->enter($__internal_25078cecddcf3e2479860f7acc4f1c5b429f343e042c0a8d945184dfcd8ee6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5cec7ca0fb5983e117fe5c6a8de664da450b5e68ea7af0d787f8cac07636c1e0->leave($__internal_5cec7ca0fb5983e117fe5c6a8de664da450b5e68ea7af0d787f8cac07636c1e0_prof);

        
        $__internal_25078cecddcf3e2479860f7acc4f1c5b429f343e042c0a8d945184dfcd8ee6d1->leave($__internal_25078cecddcf3e2479860f7acc4f1c5b429f343e042c0a8d945184dfcd8ee6d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
