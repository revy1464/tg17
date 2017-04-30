<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fd43c6564980443072a892d087ebb765d2dd8ea5efff9575c380daf465fd917e extends Twig_Template
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
        $__internal_2123ae4aa7a07ef0089233606235880a62fa6fa53dd76ec46caf7d86042bcb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2123ae4aa7a07ef0089233606235880a62fa6fa53dd76ec46caf7d86042bcb43->enter($__internal_2123ae4aa7a07ef0089233606235880a62fa6fa53dd76ec46caf7d86042bcb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_be767c3a49ef309b81ffabdc3de1bda7617004103569cc45f68cc9af8e5e28b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be767c3a49ef309b81ffabdc3de1bda7617004103569cc45f68cc9af8e5e28b1->enter($__internal_be767c3a49ef309b81ffabdc3de1bda7617004103569cc45f68cc9af8e5e28b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2123ae4aa7a07ef0089233606235880a62fa6fa53dd76ec46caf7d86042bcb43->leave($__internal_2123ae4aa7a07ef0089233606235880a62fa6fa53dd76ec46caf7d86042bcb43_prof);

        
        $__internal_be767c3a49ef309b81ffabdc3de1bda7617004103569cc45f68cc9af8e5e28b1->leave($__internal_be767c3a49ef309b81ffabdc3de1bda7617004103569cc45f68cc9af8e5e28b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
