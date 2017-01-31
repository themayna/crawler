<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_fd122871449684f123f7695b78c51a6533c4eaa5a4f5cd471e6715b9e744b580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a7ce14681a44a8ef5116ce734bffa2d229495e0a7d3c16df07efce1244f87fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7ce14681a44a8ef5116ce734bffa2d229495e0a7d3c16df07efce1244f87fc->enter($__internal_6a7ce14681a44a8ef5116ce734bffa2d229495e0a7d3c16df07efce1244f87fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_1737fafdbb99dd51969374b70437c3034346481d41ea8b21b8bc2de84a84b73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1737fafdbb99dd51969374b70437c3034346481d41ea8b21b8bc2de84a84b73e->enter($__internal_1737fafdbb99dd51969374b70437c3034346481d41ea8b21b8bc2de84a84b73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a7ce14681a44a8ef5116ce734bffa2d229495e0a7d3c16df07efce1244f87fc->leave($__internal_6a7ce14681a44a8ef5116ce734bffa2d229495e0a7d3c16df07efce1244f87fc_prof);

        
        $__internal_1737fafdbb99dd51969374b70437c3034346481d41ea8b21b8bc2de84a84b73e->leave($__internal_1737fafdbb99dd51969374b70437c3034346481d41ea8b21b8bc2de84a84b73e_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_50fa3e35e7c6cf6fb8824259a0eaf95b84dca897a2e8f9889c835304a3a35ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fa3e35e7c6cf6fb8824259a0eaf95b84dca897a2e8f9889c835304a3a35ed1->enter($__internal_50fa3e35e7c6cf6fb8824259a0eaf95b84dca897a2e8f9889c835304a3a35ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_8a0b9a2412b6184e15f18a9a1f3c5b05b2f201c6e9ebd9a4ed27091ff9791311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0b9a2412b6184e15f18a9a1f3c5b05b2f201c6e9ebd9a4ed27091ff9791311->enter($__internal_8a0b9a2412b6184e15f18a9a1f3c5b05b2f201c6e9ebd9a4ed27091ff9791311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_8a0b9a2412b6184e15f18a9a1f3c5b05b2f201c6e9ebd9a4ed27091ff9791311->leave($__internal_8a0b9a2412b6184e15f18a9a1f3c5b05b2f201c6e9ebd9a4ed27091ff9791311_prof);

        
        $__internal_50fa3e35e7c6cf6fb8824259a0eaf95b84dca897a2e8f9889c835304a3a35ed1->leave($__internal_50fa3e35e7c6cf6fb8824259a0eaf95b84dca897a2e8f9889c835304a3a35ed1_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_7695fe77e7967944d36a23bdf1e5a925f8374caf281d819f5e66db4e0827b51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7695fe77e7967944d36a23bdf1e5a925f8374caf281d819f5e66db4e0827b51a->enter($__internal_7695fe77e7967944d36a23bdf1e5a925f8374caf281d819f5e66db4e0827b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_673ec761d2e6354ec6a660cdbeff675915ba779439af631ade950d77202485d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673ec761d2e6354ec6a660cdbeff675915ba779439af631ade950d77202485d2->enter($__internal_673ec761d2e6354ec6a660cdbeff675915ba779439af631ade950d77202485d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_673ec761d2e6354ec6a660cdbeff675915ba779439af631ade950d77202485d2->leave($__internal_673ec761d2e6354ec6a660cdbeff675915ba779439af631ade950d77202485d2_prof);

        
        $__internal_7695fe77e7967944d36a23bdf1e5a925f8374caf281d819f5e66db4e0827b51a->leave($__internal_7695fe77e7967944d36a23bdf1e5a925f8374caf281d819f5e66db4e0827b51a_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_576bf82132f2eadec8063b6e99fabb25b313c21423bd209971952026f40e3912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576bf82132f2eadec8063b6e99fabb25b313c21423bd209971952026f40e3912->enter($__internal_576bf82132f2eadec8063b6e99fabb25b313c21423bd209971952026f40e3912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_388d47c8eec10e9c514e41335ee7b65c31f11b66281dbff22137285b27d028d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388d47c8eec10e9c514e41335ee7b65c31f11b66281dbff22137285b27d028d3->enter($__internal_388d47c8eec10e9c514e41335ee7b65c31f11b66281dbff22137285b27d028d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 90
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_388d47c8eec10e9c514e41335ee7b65c31f11b66281dbff22137285b27d028d3->leave($__internal_388d47c8eec10e9c514e41335ee7b65c31f11b66281dbff22137285b27d028d3_prof);

        
        $__internal_576bf82132f2eadec8063b6e99fabb25b313c21423bd209971952026f40e3912->leave($__internal_576bf82132f2eadec8063b6e99fabb25b313c21423bd209971952026f40e3912_prof);

    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_63d5f05bac274693ddacfd4324f26a0d204676795056b5b281aa38698a9050fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d5f05bac274693ddacfd4324f26a0d204676795056b5b281aa38698a9050fe->enter($__internal_63d5f05bac274693ddacfd4324f26a0d204676795056b5b281aa38698a9050fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_800790d7c8e787008395f4da7e84359b881e032cd88993d093d4a837129cc318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800790d7c8e787008395f4da7e84359b881e032cd88993d093d4a837129cc318->enter($__internal_800790d7c8e787008395f4da7e84359b881e032cd88993d093d4a837129cc318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 95
        echo "    <span ";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 96
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 99
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_800790d7c8e787008395f4da7e84359b881e032cd88993d093d4a837129cc318->leave($__internal_800790d7c8e787008395f4da7e84359b881e032cd88993d093d4a837129cc318_prof);

        
        $__internal_63d5f05bac274693ddacfd4324f26a0d204676795056b5b281aa38698a9050fe->leave($__internal_63d5f05bac274693ddacfd4324f26a0d204676795056b5b281aa38698a9050fe_prof);

    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_79245a13b6d342ab1f619a403a32d5ec8b418cca328cb57018c278203b62956e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79245a13b6d342ab1f619a403a32d5ec8b418cca328cb57018c278203b62956e->enter($__internal_79245a13b6d342ab1f619a403a32d5ec8b418cca328cb57018c278203b62956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_0e1db3d7de0767d055d2dbea0365144680b8462c38a1d7423bafbbf22b6f6873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1db3d7de0767d055d2dbea0365144680b8462c38a1d7423bafbbf22b6f6873->enter($__internal_0e1db3d7de0767d055d2dbea0365144680b8462c38a1d7423bafbbf22b6f6873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 108
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 110
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 113
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_0e1db3d7de0767d055d2dbea0365144680b8462c38a1d7423bafbbf22b6f6873->leave($__internal_0e1db3d7de0767d055d2dbea0365144680b8462c38a1d7423bafbbf22b6f6873_prof);

        
        $__internal_79245a13b6d342ab1f619a403a32d5ec8b418cca328cb57018c278203b62956e->leave($__internal_79245a13b6d342ab1f619a403a32d5ec8b418cca328cb57018c278203b62956e_prof);

    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        $__internal_b5713646a2dab0043221438d607821cf7144044fa3380fc816934a51ff2a1fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5713646a2dab0043221438d607821cf7144044fa3380fc816934a51ff2a1fea->enter($__internal_b5713646a2dab0043221438d607821cf7144044fa3380fc816934a51ff2a1fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d028cd1df7eae2e6149091f91815f1abf5033e4bc5f79bb8fd7ea4e58867df0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d028cd1df7eae2e6149091f91815f1abf5033e4bc5f79bb8fd7ea4e58867df0a->enter($__internal_d028cd1df7eae2e6149091f91815f1abf5033e4bc5f79bb8fd7ea4e58867df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 120
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 121
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 122
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 124
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_d028cd1df7eae2e6149091f91815f1abf5033e4bc5f79bb8fd7ea4e58867df0a->leave($__internal_d028cd1df7eae2e6149091f91815f1abf5033e4bc5f79bb8fd7ea4e58867df0a_prof);

        
        $__internal_b5713646a2dab0043221438d607821cf7144044fa3380fc816934a51ff2a1fea->leave($__internal_b5713646a2dab0043221438d607821cf7144044fa3380fc816934a51ff2a1fea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 124,  346 => 122,  345 => 121,  344 => 120,  343 => 119,  334 => 118,  319 => 113,  313 => 111,  311 => 110,  306 => 109,  304 => 108,  302 => 107,  300 => 106,  298 => 105,  296 => 104,  287 => 103,  273 => 99,  267 => 97,  265 => 96,  260 => 95,  251 => 94,  237 => 90,  231 => 88,  229 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
