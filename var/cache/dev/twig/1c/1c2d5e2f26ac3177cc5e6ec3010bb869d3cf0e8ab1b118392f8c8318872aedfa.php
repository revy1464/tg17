<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9a6d5f7db34d8bfb78f904a4ffb0f245ac568bf24fbbbf9b5594f504735cc98f extends Twig_Template
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
        $__internal_5221f974b5529385167de72bee0a4021badb7027942357d723492aae82ede091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5221f974b5529385167de72bee0a4021badb7027942357d723492aae82ede091->enter($__internal_5221f974b5529385167de72bee0a4021badb7027942357d723492aae82ede091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_08e0857f35495cf4570d7a7bca8bd0d6cc4f0829d2efda2444c27d4a0963b07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e0857f35495cf4570d7a7bca8bd0d6cc4f0829d2efda2444c27d4a0963b07c->enter($__internal_08e0857f35495cf4570d7a7bca8bd0d6cc4f0829d2efda2444c27d4a0963b07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5221f974b5529385167de72bee0a4021badb7027942357d723492aae82ede091->leave($__internal_5221f974b5529385167de72bee0a4021badb7027942357d723492aae82ede091_prof);

        
        $__internal_08e0857f35495cf4570d7a7bca8bd0d6cc4f0829d2efda2444c27d4a0963b07c->leave($__internal_08e0857f35495cf4570d7a7bca8bd0d6cc4f0829d2efda2444c27d4a0963b07c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
