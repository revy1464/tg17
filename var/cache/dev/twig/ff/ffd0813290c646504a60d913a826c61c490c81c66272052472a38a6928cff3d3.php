<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_dc83a99e1ba977d27644ae10d71a3e35a4c03cf4338da44415f888cd61bf2468 extends Twig_Template
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
        $__internal_0c70b5919169eabcefc02e57e60854f55cc75fc87f8415cebfc257cd335b0ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c70b5919169eabcefc02e57e60854f55cc75fc87f8415cebfc257cd335b0ed9->enter($__internal_0c70b5919169eabcefc02e57e60854f55cc75fc87f8415cebfc257cd335b0ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_813ab68d2861a30278ad76ef201d7a3af7f3583a0b636a87d57860731a209e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813ab68d2861a30278ad76ef201d7a3af7f3583a0b636a87d57860731a209e80->enter($__internal_813ab68d2861a30278ad76ef201d7a3af7f3583a0b636a87d57860731a209e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0c70b5919169eabcefc02e57e60854f55cc75fc87f8415cebfc257cd335b0ed9->leave($__internal_0c70b5919169eabcefc02e57e60854f55cc75fc87f8415cebfc257cd335b0ed9_prof);

        
        $__internal_813ab68d2861a30278ad76ef201d7a3af7f3583a0b636a87d57860731a209e80->leave($__internal_813ab68d2861a30278ad76ef201d7a3af7f3583a0b636a87d57860731a209e80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
