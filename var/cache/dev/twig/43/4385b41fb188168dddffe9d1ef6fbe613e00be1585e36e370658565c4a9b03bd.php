<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_831a1a7ccc34a1a50f9b343527e96e19553e4e5137f6ee78e1e68ff6ccb4f200 extends Twig_Template
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
        $__internal_999c4cc81ec3f9a3fa45c0a3da41b1693060402b01b4fa31f68abf1e771b54f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999c4cc81ec3f9a3fa45c0a3da41b1693060402b01b4fa31f68abf1e771b54f5->enter($__internal_999c4cc81ec3f9a3fa45c0a3da41b1693060402b01b4fa31f68abf1e771b54f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        $__internal_8f86def7e4a8cdc70004b80c1792f538bd14d87e1285e1cd0bfd00ff2686754f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f86def7e4a8cdc70004b80c1792f538bd14d87e1285e1cd0bfd00ff2686754f->enter($__internal_8f86def7e4a8cdc70004b80c1792f538bd14d87e1285e1cd0bfd00ff2686754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessages($context["type"], (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\CoreBundle\Twig\Extension\StatusExtension')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_999c4cc81ec3f9a3fa45c0a3da41b1693060402b01b4fa31f68abf1e771b54f5->leave($__internal_999c4cc81ec3f9a3fa45c0a3da41b1693060402b01b4fa31f68abf1e771b54f5_prof);

        
        $__internal_8f86def7e4a8cdc70004b80c1792f538bd14d87e1285e1cd0bfd00ff2686754f->leave($__internal_8f86def7e4a8cdc70004b80c1792f538bd14d87e1285e1cd0bfd00ff2686754f_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  32 => 13,  29 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% for message in sonata_flashmessages_get(type, domain) %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|raw }}
        </div>
    {% endfor %}
{% endfor %}
", "SonataCoreBundle:FlashMessage:render.html.twig", "/home/pi/www/vendor/sonata-project/core-bundle/Resources/views/FlashMessage/render.html.twig");
    }
}
