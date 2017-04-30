<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_87a08ea14c26eecd3a8576d0e4f63eb4bacf4d180b7fdf13ae0b811b7302eed3 extends Twig_Template
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
        $__internal_828e90aa437c942eb97f4e1b80f9ae67f444091f0e169e00c9e9a9171a2ce77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828e90aa437c942eb97f4e1b80f9ae67f444091f0e169e00c9e9a9171a2ce77c->enter($__internal_828e90aa437c942eb97f4e1b80f9ae67f444091f0e169e00c9e9a9171a2ce77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cbcffa3e6c188435a8848c79b964209989168437c1e292531242d0f65f40acaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcffa3e6c188435a8848c79b964209989168437c1e292531242d0f65f40acaa->enter($__internal_cbcffa3e6c188435a8848c79b964209989168437c1e292531242d0f65f40acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_828e90aa437c942eb97f4e1b80f9ae67f444091f0e169e00c9e9a9171a2ce77c->leave($__internal_828e90aa437c942eb97f4e1b80f9ae67f444091f0e169e00c9e9a9171a2ce77c_prof);

        
        $__internal_cbcffa3e6c188435a8848c79b964209989168437c1e292531242d0f65f40acaa->leave($__internal_cbcffa3e6c188435a8848c79b964209989168437c1e292531242d0f65f40acaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
