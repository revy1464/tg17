<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_65d02beada4105a42f1c9dc203d5b07f852175dd8e584f087aad9d8d4bc1423a extends Twig_Template
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
        $__internal_c2f9b3cd6a609f19e3609fe37bd6222063e55faac2228bbbd7b86828f856bbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f9b3cd6a609f19e3609fe37bd6222063e55faac2228bbbd7b86828f856bbec->enter($__internal_c2f9b3cd6a609f19e3609fe37bd6222063e55faac2228bbbd7b86828f856bbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e0520f9f39baf2cd75aa0caa501847cf864bc9f7040af9f11197370b48660a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0520f9f39baf2cd75aa0caa501847cf864bc9f7040af9f11197370b48660a74->enter($__internal_e0520f9f39baf2cd75aa0caa501847cf864bc9f7040af9f11197370b48660a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c2f9b3cd6a609f19e3609fe37bd6222063e55faac2228bbbd7b86828f856bbec->leave($__internal_c2f9b3cd6a609f19e3609fe37bd6222063e55faac2228bbbd7b86828f856bbec_prof);

        
        $__internal_e0520f9f39baf2cd75aa0caa501847cf864bc9f7040af9f11197370b48660a74->leave($__internal_e0520f9f39baf2cd75aa0caa501847cf864bc9f7040af9f11197370b48660a74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
