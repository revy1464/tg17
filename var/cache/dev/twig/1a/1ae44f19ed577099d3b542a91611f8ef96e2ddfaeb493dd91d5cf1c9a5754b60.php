<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07b9dd8bb00f04fbdf98042be15f69075581e401b4e98e42a2cf4d6eca16055c extends Twig_Template
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
        $__internal_188b874583ac93e3fd77072f5be7f5e819c8d3732bad2be7cb319ba3038c5ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188b874583ac93e3fd77072f5be7f5e819c8d3732bad2be7cb319ba3038c5ce9->enter($__internal_188b874583ac93e3fd77072f5be7f5e819c8d3732bad2be7cb319ba3038c5ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9a8526eb076503ce6a25a39d25c3d591fd1d6f3c50644560f6516164b90d4245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8526eb076503ce6a25a39d25c3d591fd1d6f3c50644560f6516164b90d4245->enter($__internal_9a8526eb076503ce6a25a39d25c3d591fd1d6f3c50644560f6516164b90d4245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_188b874583ac93e3fd77072f5be7f5e819c8d3732bad2be7cb319ba3038c5ce9->leave($__internal_188b874583ac93e3fd77072f5be7f5e819c8d3732bad2be7cb319ba3038c5ce9_prof);

        
        $__internal_9a8526eb076503ce6a25a39d25c3d591fd1d6f3c50644560f6516164b90d4245->leave($__internal_9a8526eb076503ce6a25a39d25c3d591fd1d6f3c50644560f6516164b90d4245_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
