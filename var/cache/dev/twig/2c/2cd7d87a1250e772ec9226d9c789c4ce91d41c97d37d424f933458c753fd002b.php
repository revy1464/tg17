<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d5c09493b70a447aab19cd8024e8cd115f80d3b47b167561362032c47f92bae6 extends Twig_Template
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
        $__internal_5df055dd5df5c1b3e6bef1c550c4c36358f2751d20f256c0a979cd326d7a647e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df055dd5df5c1b3e6bef1c550c4c36358f2751d20f256c0a979cd326d7a647e->enter($__internal_5df055dd5df5c1b3e6bef1c550c4c36358f2751d20f256c0a979cd326d7a647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7ff75e6192f93161b1c5e4ee4002903de9a90bf0ba84689c0d7adb43e467e8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff75e6192f93161b1c5e4ee4002903de9a90bf0ba84689c0d7adb43e467e8ee->enter($__internal_7ff75e6192f93161b1c5e4ee4002903de9a90bf0ba84689c0d7adb43e467e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5df055dd5df5c1b3e6bef1c550c4c36358f2751d20f256c0a979cd326d7a647e->leave($__internal_5df055dd5df5c1b3e6bef1c550c4c36358f2751d20f256c0a979cd326d7a647e_prof);

        
        $__internal_7ff75e6192f93161b1c5e4ee4002903de9a90bf0ba84689c0d7adb43e467e8ee->leave($__internal_7ff75e6192f93161b1c5e4ee4002903de9a90bf0ba84689c0d7adb43e467e8ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
