<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_915805008581344a20ff9de0073d2fa1d755fbc288675d5c7e61061cf5d35b06 extends Twig_Template
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
        $__internal_0e6ecaac28dfad3e5d060eac6c0d380b9beccc4f6e8c6c7157a029a7b2e5ee90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6ecaac28dfad3e5d060eac6c0d380b9beccc4f6e8c6c7157a029a7b2e5ee90->enter($__internal_0e6ecaac28dfad3e5d060eac6c0d380b9beccc4f6e8c6c7157a029a7b2e5ee90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_888e7441c90291eba935eac52efbfb3b5ae1e47fe03799de0c6fb140db3ec687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888e7441c90291eba935eac52efbfb3b5ae1e47fe03799de0c6fb140db3ec687->enter($__internal_888e7441c90291eba935eac52efbfb3b5ae1e47fe03799de0c6fb140db3ec687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0e6ecaac28dfad3e5d060eac6c0d380b9beccc4f6e8c6c7157a029a7b2e5ee90->leave($__internal_0e6ecaac28dfad3e5d060eac6c0d380b9beccc4f6e8c6c7157a029a7b2e5ee90_prof);

        
        $__internal_888e7441c90291eba935eac52efbfb3b5ae1e47fe03799de0c6fb140db3ec687->leave($__internal_888e7441c90291eba935eac52efbfb3b5ae1e47fe03799de0c6fb140db3ec687_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
