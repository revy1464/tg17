<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0d6da3d269b57df170a380cd12cf14a9b588638f1fba119c9176bbf5197566c0 extends Twig_Template
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
        $__internal_d2ccc2cdef6c3af02a2031bd497098022631a9c34a397efacbbd2164817c8b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ccc2cdef6c3af02a2031bd497098022631a9c34a397efacbbd2164817c8b33->enter($__internal_d2ccc2cdef6c3af02a2031bd497098022631a9c34a397efacbbd2164817c8b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9374b21279342aafcc2e1428d916a34bc3018c9773852f7ac77dec9c52335dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9374b21279342aafcc2e1428d916a34bc3018c9773852f7ac77dec9c52335dc7->enter($__internal_9374b21279342aafcc2e1428d916a34bc3018c9773852f7ac77dec9c52335dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d2ccc2cdef6c3af02a2031bd497098022631a9c34a397efacbbd2164817c8b33->leave($__internal_d2ccc2cdef6c3af02a2031bd497098022631a9c34a397efacbbd2164817c8b33_prof);

        
        $__internal_9374b21279342aafcc2e1428d916a34bc3018c9773852f7ac77dec9c52335dc7->leave($__internal_9374b21279342aafcc2e1428d916a34bc3018c9773852f7ac77dec9c52335dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
