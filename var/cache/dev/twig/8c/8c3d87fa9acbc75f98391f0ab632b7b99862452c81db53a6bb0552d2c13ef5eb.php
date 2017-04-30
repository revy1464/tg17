<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_60e083c17cec66ad39289ca2141495650554dd49914cff5ece633d1b7ae23703 extends Twig_Template
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
        $__internal_40d0062bfea1f7a5d5172835e44b7710f253468d0017fb1575072f5f7799df32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d0062bfea1f7a5d5172835e44b7710f253468d0017fb1575072f5f7799df32->enter($__internal_40d0062bfea1f7a5d5172835e44b7710f253468d0017fb1575072f5f7799df32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_51b91fbefdb248772af8eb9ed11fb1b7174df604fe54bb7d0b0da13e7c3beb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b91fbefdb248772af8eb9ed11fb1b7174df604fe54bb7d0b0da13e7c3beb3f->enter($__internal_51b91fbefdb248772af8eb9ed11fb1b7174df604fe54bb7d0b0da13e7c3beb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_40d0062bfea1f7a5d5172835e44b7710f253468d0017fb1575072f5f7799df32->leave($__internal_40d0062bfea1f7a5d5172835e44b7710f253468d0017fb1575072f5f7799df32_prof);

        
        $__internal_51b91fbefdb248772af8eb9ed11fb1b7174df604fe54bb7d0b0da13e7c3beb3f->leave($__internal_51b91fbefdb248772af8eb9ed11fb1b7174df604fe54bb7d0b0da13e7c3beb3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
