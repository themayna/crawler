<?php

/* knp_menu.html.twig */
class __TwigTemplate_2efe7a347ef19a171e6fa32975c6736f966c3e48da57c1c1c874ca1ce9ef89ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ac5c7bb035e3421c9ee865c7ceda9addd3c793c8ee30f4f60d4acd3a21d2a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac5c7bb035e3421c9ee865c7ceda9addd3c793c8ee30f4f60d4acd3a21d2a3c->enter($__internal_0ac5c7bb035e3421c9ee865c7ceda9addd3c793c8ee30f4f60d4acd3a21d2a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_58489c155ef66967b5a3376fdf166bcef6d56deff907a16415b8c1586368f6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58489c155ef66967b5a3376fdf166bcef6d56deff907a16415b8c1586368f6f0->enter($__internal_58489c155ef66967b5a3376fdf166bcef6d56deff907a16415b8c1586368f6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac5c7bb035e3421c9ee865c7ceda9addd3c793c8ee30f4f60d4acd3a21d2a3c->leave($__internal_0ac5c7bb035e3421c9ee865c7ceda9addd3c793c8ee30f4f60d4acd3a21d2a3c_prof);

        
        $__internal_58489c155ef66967b5a3376fdf166bcef6d56deff907a16415b8c1586368f6f0->leave($__internal_58489c155ef66967b5a3376fdf166bcef6d56deff907a16415b8c1586368f6f0_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_67568db90b87445e247a4965ad349ec949f4d81cc800060c453929e7926bf9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67568db90b87445e247a4965ad349ec949f4d81cc800060c453929e7926bf9b5->enter($__internal_67568db90b87445e247a4965ad349ec949f4d81cc800060c453929e7926bf9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_ac75decc70df32e71523c1e171525d3d29c316e2e2b86c0f4dac1f3a63b81dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac75decc70df32e71523c1e171525d3d29c316e2e2b86c0f4dac1f3a63b81dc8->enter($__internal_ac75decc70df32e71523c1e171525d3d29c316e2e2b86c0f4dac1f3a63b81dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac75decc70df32e71523c1e171525d3d29c316e2e2b86c0f4dac1f3a63b81dc8->leave($__internal_ac75decc70df32e71523c1e171525d3d29c316e2e2b86c0f4dac1f3a63b81dc8_prof);

        
        $__internal_67568db90b87445e247a4965ad349ec949f4d81cc800060c453929e7926bf9b5->leave($__internal_67568db90b87445e247a4965ad349ec949f4d81cc800060c453929e7926bf9b5_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_108f1c9581f34340fbf79337f2d5b833055fe1a8ce7f615d8bec60696b0a35cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108f1c9581f34340fbf79337f2d5b833055fe1a8ce7f615d8bec60696b0a35cd->enter($__internal_108f1c9581f34340fbf79337f2d5b833055fe1a8ce7f615d8bec60696b0a35cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_a59bf1110cc8bcc9b262e475eb557581e1a076063a44a9f70a95e9caebe0d017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59bf1110cc8bcc9b262e475eb557581e1a076063a44a9f70a95e9caebe0d017->enter($__internal_a59bf1110cc8bcc9b262e475eb557581e1a076063a44a9f70a95e9caebe0d017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_a59bf1110cc8bcc9b262e475eb557581e1a076063a44a9f70a95e9caebe0d017->leave($__internal_a59bf1110cc8bcc9b262e475eb557581e1a076063a44a9f70a95e9caebe0d017_prof);

        
        $__internal_108f1c9581f34340fbf79337f2d5b833055fe1a8ce7f615d8bec60696b0a35cd->leave($__internal_108f1c9581f34340fbf79337f2d5b833055fe1a8ce7f615d8bec60696b0a35cd_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_549e8f4c200521979438291566b27296033a642f8baa42b4d9406282b46a5596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549e8f4c200521979438291566b27296033a642f8baa42b4d9406282b46a5596->enter($__internal_549e8f4c200521979438291566b27296033a642f8baa42b4d9406282b46a5596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_705f2d72ac5ea1eff6aba275dd4f38047fe5c142870dcf95242f1ef594aa80e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705f2d72ac5ea1eff6aba275dd4f38047fe5c142870dcf95242f1ef594aa80e7->enter($__internal_705f2d72ac5ea1eff6aba275dd4f38047fe5c142870dcf95242f1ef594aa80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_705f2d72ac5ea1eff6aba275dd4f38047fe5c142870dcf95242f1ef594aa80e7->leave($__internal_705f2d72ac5ea1eff6aba275dd4f38047fe5c142870dcf95242f1ef594aa80e7_prof);

        
        $__internal_549e8f4c200521979438291566b27296033a642f8baa42b4d9406282b46a5596->leave($__internal_549e8f4c200521979438291566b27296033a642f8baa42b4d9406282b46a5596_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_9258c4f756ce4dbdca9126b7357940cc75e25e432479605fc72154549938a73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9258c4f756ce4dbdca9126b7357940cc75e25e432479605fc72154549938a73f->enter($__internal_9258c4f756ce4dbdca9126b7357940cc75e25e432479605fc72154549938a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_2dfbafd2bab6d5722f6c5efa210750767bd8028028f9a676eee704a4fbcc64c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfbafd2bab6d5722f6c5efa210750767bd8028028f9a676eee704a4fbcc64c3->enter($__internal_2dfbafd2bab6d5722f6c5efa210750767bd8028028f9a676eee704a4fbcc64c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_2dfbafd2bab6d5722f6c5efa210750767bd8028028f9a676eee704a4fbcc64c3->leave($__internal_2dfbafd2bab6d5722f6c5efa210750767bd8028028f9a676eee704a4fbcc64c3_prof);

        
        $__internal_9258c4f756ce4dbdca9126b7357940cc75e25e432479605fc72154549938a73f->leave($__internal_9258c4f756ce4dbdca9126b7357940cc75e25e432479605fc72154549938a73f_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_67a95ff073f23b60bc40821134a81eb0087afab79b43c2912a933b7467a3d5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a95ff073f23b60bc40821134a81eb0087afab79b43c2912a933b7467a3d5ac->enter($__internal_67a95ff073f23b60bc40821134a81eb0087afab79b43c2912a933b7467a3d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_05fd45b3f4ff19c3940adf4eaa0fbf313eaeda72d927535426581fad97552755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd45b3f4ff19c3940adf4eaa0fbf313eaeda72d927535426581fad97552755->enter($__internal_05fd45b3f4ff19c3940adf4eaa0fbf313eaeda72d927535426581fad97552755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_05fd45b3f4ff19c3940adf4eaa0fbf313eaeda72d927535426581fad97552755->leave($__internal_05fd45b3f4ff19c3940adf4eaa0fbf313eaeda72d927535426581fad97552755_prof);

        
        $__internal_67a95ff073f23b60bc40821134a81eb0087afab79b43c2912a933b7467a3d5ac->leave($__internal_67a95ff073f23b60bc40821134a81eb0087afab79b43c2912a933b7467a3d5ac_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_27e98cfff84590634a540d8092a68b0e26d4b48c8a1fcdb2fc48a42d9375c480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e98cfff84590634a540d8092a68b0e26d4b48c8a1fcdb2fc48a42d9375c480->enter($__internal_27e98cfff84590634a540d8092a68b0e26d4b48c8a1fcdb2fc48a42d9375c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a510ec6217caa3c532bace2091a0315b146e6c2448da7724de310b4d2d9fbec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a510ec6217caa3c532bace2091a0315b146e6c2448da7724de310b4d2d9fbec6->enter($__internal_a510ec6217caa3c532bace2091a0315b146e6c2448da7724de310b4d2d9fbec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a510ec6217caa3c532bace2091a0315b146e6c2448da7724de310b4d2d9fbec6->leave($__internal_a510ec6217caa3c532bace2091a0315b146e6c2448da7724de310b4d2d9fbec6_prof);

        
        $__internal_27e98cfff84590634a540d8092a68b0e26d4b48c8a1fcdb2fc48a42d9375c480->leave($__internal_27e98cfff84590634a540d8092a68b0e26d4b48c8a1fcdb2fc48a42d9375c480_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_9af8634893cf0065dc1d9eeed75d6ae88205ec04ec3aba4faf7441a7cc41e50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af8634893cf0065dc1d9eeed75d6ae88205ec04ec3aba4faf7441a7cc41e50d->enter($__internal_9af8634893cf0065dc1d9eeed75d6ae88205ec04ec3aba4faf7441a7cc41e50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_c26b61c6c92460615cbca4be773e5de2b895a857990cc8f3b0e6d15d801e88f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26b61c6c92460615cbca4be773e5de2b895a857990cc8f3b0e6d15d801e88f2->enter($__internal_c26b61c6c92460615cbca4be773e5de2b895a857990cc8f3b0e6d15d801e88f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_c26b61c6c92460615cbca4be773e5de2b895a857990cc8f3b0e6d15d801e88f2->leave($__internal_c26b61c6c92460615cbca4be773e5de2b895a857990cc8f3b0e6d15d801e88f2_prof);

        
        $__internal_9af8634893cf0065dc1d9eeed75d6ae88205ec04ec3aba4faf7441a7cc41e50d->leave($__internal_9af8634893cf0065dc1d9eeed75d6ae88205ec04ec3aba4faf7441a7cc41e50d_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_e8ce68b10100a3f49e4898b78ab3f75c15f9b4ca777e27e625478dea75985cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ce68b10100a3f49e4898b78ab3f75c15f9b4ca777e27e625478dea75985cd8->enter($__internal_e8ce68b10100a3f49e4898b78ab3f75c15f9b4ca777e27e625478dea75985cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_bd6033bc3f54d35333df0863f0a1a6ccae65a93b31e8945d3d764ab7ec6e55f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6033bc3f54d35333df0863f0a1a6ccae65a93b31e8945d3d764ab7ec6e55f2->enter($__internal_bd6033bc3f54d35333df0863f0a1a6ccae65a93b31e8945d3d764ab7ec6e55f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_bd6033bc3f54d35333df0863f0a1a6ccae65a93b31e8945d3d764ab7ec6e55f2->leave($__internal_bd6033bc3f54d35333df0863f0a1a6ccae65a93b31e8945d3d764ab7ec6e55f2_prof);

        
        $__internal_e8ce68b10100a3f49e4898b78ab3f75c15f9b4ca777e27e625478dea75985cd8->leave($__internal_e8ce68b10100a3f49e4898b78ab3f75c15f9b4ca777e27e625478dea75985cd8_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_531be78dfda28b1588296687d96b91ee2c55aa28fd2f2d4a9921fa74b245f8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_531be78dfda28b1588296687d96b91ee2c55aa28fd2f2d4a9921fa74b245f8b1->enter($__internal_531be78dfda28b1588296687d96b91ee2c55aa28fd2f2d4a9921fa74b245f8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_8a53e87310243ff8aab17012ce430a1cade204cef7ffaf5966d1c6864f1f0598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8a53e87310243ff8aab17012ce430a1cade204cef7ffaf5966d1c6864f1f0598->enter($__internal_8a53e87310243ff8aab17012ce430a1cade204cef7ffaf5966d1c6864f1f0598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_8a53e87310243ff8aab17012ce430a1cade204cef7ffaf5966d1c6864f1f0598->leave($__internal_8a53e87310243ff8aab17012ce430a1cade204cef7ffaf5966d1c6864f1f0598_prof);

            
            $__internal_531be78dfda28b1588296687d96b91ee2c55aa28fd2f2d4a9921fa74b245f8b1->leave($__internal_531be78dfda28b1588296687d96b91ee2c55aa28fd2f2d4a9921fa74b245f8b1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/home/pi/www/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
