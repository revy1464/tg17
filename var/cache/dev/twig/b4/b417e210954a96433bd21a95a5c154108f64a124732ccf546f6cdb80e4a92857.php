<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1dc7024c0c5331030807caecae9982bd09782eac2728b21e6dbfdc4e12f3b01 extends Twig_Template
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
        $__internal_b077355cd1820a1ab70fbf6c5a742d9970569c59c7996c8c03089b3eafd62e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b077355cd1820a1ab70fbf6c5a742d9970569c59c7996c8c03089b3eafd62e9b->enter($__internal_b077355cd1820a1ab70fbf6c5a742d9970569c59c7996c8c03089b3eafd62e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c59df49cade47223819cd05844734d7918e978ba7440beeac02f7a24dd28e17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59df49cade47223819cd05844734d7918e978ba7440beeac02f7a24dd28e17c->enter($__internal_c59df49cade47223819cd05844734d7918e978ba7440beeac02f7a24dd28e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b077355cd1820a1ab70fbf6c5a742d9970569c59c7996c8c03089b3eafd62e9b->leave($__internal_b077355cd1820a1ab70fbf6c5a742d9970569c59c7996c8c03089b3eafd62e9b_prof);

        
        $__internal_c59df49cade47223819cd05844734d7918e978ba7440beeac02f7a24dd28e17c->leave($__internal_c59df49cade47223819cd05844734d7918e978ba7440beeac02f7a24dd28e17c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
