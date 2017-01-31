<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f3da7dc8f31e7134c01d04e252b7d370300504996e8dffbc2d9adb9d762ec391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6444a2bbf3a7ab5dad16c8b817b3b2d5c85b761e0bdd82befbf1bb911d295bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6444a2bbf3a7ab5dad16c8b817b3b2d5c85b761e0bdd82befbf1bb911d295bf->enter($__internal_c6444a2bbf3a7ab5dad16c8b817b3b2d5c85b761e0bdd82befbf1bb911d295bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0d07f368e898971d9dac14c314e79a47ec2131c33773f7278eeb62819b892bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07f368e898971d9dac14c314e79a47ec2131c33773f7278eeb62819b892bac->enter($__internal_0d07f368e898971d9dac14c314e79a47ec2131c33773f7278eeb62819b892bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6444a2bbf3a7ab5dad16c8b817b3b2d5c85b761e0bdd82befbf1bb911d295bf->leave($__internal_c6444a2bbf3a7ab5dad16c8b817b3b2d5c85b761e0bdd82befbf1bb911d295bf_prof);

        
        $__internal_0d07f368e898971d9dac14c314e79a47ec2131c33773f7278eeb62819b892bac->leave($__internal_0d07f368e898971d9dac14c314e79a47ec2131c33773f7278eeb62819b892bac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4f0dcb437af866ef2fb83fcf93eec71e96606f8bd1fe42a142e54a9d8b1ab5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f0dcb437af866ef2fb83fcf93eec71e96606f8bd1fe42a142e54a9d8b1ab5a->enter($__internal_f4f0dcb437af866ef2fb83fcf93eec71e96606f8bd1fe42a142e54a9d8b1ab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a0ad57b68cb79179523e5f8d35febe6f46d137f0f293c1241cf5713f6063284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ad57b68cb79179523e5f8d35febe6f46d137f0f293c1241cf5713f6063284->enter($__internal_4a0ad57b68cb79179523e5f8d35febe6f46d137f0f293c1241cf5713f6063284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4a0ad57b68cb79179523e5f8d35febe6f46d137f0f293c1241cf5713f6063284->leave($__internal_4a0ad57b68cb79179523e5f8d35febe6f46d137f0f293c1241cf5713f6063284_prof);

        
        $__internal_f4f0dcb437af866ef2fb83fcf93eec71e96606f8bd1fe42a142e54a9d8b1ab5a->leave($__internal_f4f0dcb437af866ef2fb83fcf93eec71e96606f8bd1fe42a142e54a9d8b1ab5a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
