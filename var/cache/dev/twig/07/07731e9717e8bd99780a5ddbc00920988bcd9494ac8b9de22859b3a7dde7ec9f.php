<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_fcbdd037d469e5160f85f3d8accc02c6106147eb72abd756fd4ae399357ca140 extends Twig_Template
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
        $__internal_cd730d2a492cee0f24a4432b2cd5bbabdf517a2a9c02af8241cd60d5c977c77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd730d2a492cee0f24a4432b2cd5bbabdf517a2a9c02af8241cd60d5c977c77e->enter($__internal_cd730d2a492cee0f24a4432b2cd5bbabdf517a2a9c02af8241cd60d5c977c77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_931c402a81bb23434a6be59a8d6cc9a5f5b24193b2f03d1b550380bf828f8e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931c402a81bb23434a6be59a8d6cc9a5f5b24193b2f03d1b550380bf828f8e6c->enter($__internal_931c402a81bb23434a6be59a8d6cc9a5f5b24193b2f03d1b550380bf828f8e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_cd730d2a492cee0f24a4432b2cd5bbabdf517a2a9c02af8241cd60d5c977c77e->leave($__internal_cd730d2a492cee0f24a4432b2cd5bbabdf517a2a9c02af8241cd60d5c977c77e_prof);

        
        $__internal_931c402a81bb23434a6be59a8d6cc9a5f5b24193b2f03d1b550380bf828f8e6c->leave($__internal_931c402a81bb23434a6be59a8d6cc9a5f5b24193b2f03d1b550380bf828f8e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
