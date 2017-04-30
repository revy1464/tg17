<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2258561f07ff140e32c1f4f73224d9e8986815460ce10492ae868cda41c8499c extends Twig_Template
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
        $__internal_2833af05dab9779220b80b1ecda9bda9ae3b8f924fc23587b462e2bffb683cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2833af05dab9779220b80b1ecda9bda9ae3b8f924fc23587b462e2bffb683cce->enter($__internal_2833af05dab9779220b80b1ecda9bda9ae3b8f924fc23587b462e2bffb683cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_304dadaf887dd9c2843dec60a3bd7e57c677dd541821f564a1210a6fdba5807e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304dadaf887dd9c2843dec60a3bd7e57c677dd541821f564a1210a6fdba5807e->enter($__internal_304dadaf887dd9c2843dec60a3bd7e57c677dd541821f564a1210a6fdba5807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2833af05dab9779220b80b1ecda9bda9ae3b8f924fc23587b462e2bffb683cce->leave($__internal_2833af05dab9779220b80b1ecda9bda9ae3b8f924fc23587b462e2bffb683cce_prof);

        
        $__internal_304dadaf887dd9c2843dec60a3bd7e57c677dd541821f564a1210a6fdba5807e->leave($__internal_304dadaf887dd9c2843dec60a3bd7e57c677dd541821f564a1210a6fdba5807e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
