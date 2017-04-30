<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75deec35f7d633e2129b60d241f12f3698b8c5e9d1a72cd4f2b0e40681d28a99 extends Twig_Template
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
        $__internal_f26964c458e5b3247da9b8a3a2d099a5fb10340e609071ce30af30333c4874d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26964c458e5b3247da9b8a3a2d099a5fb10340e609071ce30af30333c4874d2->enter($__internal_f26964c458e5b3247da9b8a3a2d099a5fb10340e609071ce30af30333c4874d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a683ee265efa5309dc173bfba119c5dc60a46259a5ebd5de0f40ca9f18ed7d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a683ee265efa5309dc173bfba119c5dc60a46259a5ebd5de0f40ca9f18ed7d69->enter($__internal_a683ee265efa5309dc173bfba119c5dc60a46259a5ebd5de0f40ca9f18ed7d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f26964c458e5b3247da9b8a3a2d099a5fb10340e609071ce30af30333c4874d2->leave($__internal_f26964c458e5b3247da9b8a3a2d099a5fb10340e609071ce30af30333c4874d2_prof);

        
        $__internal_a683ee265efa5309dc173bfba119c5dc60a46259a5ebd5de0f40ca9f18ed7d69->leave($__internal_a683ee265efa5309dc173bfba119c5dc60a46259a5ebd5de0f40ca9f18ed7d69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
