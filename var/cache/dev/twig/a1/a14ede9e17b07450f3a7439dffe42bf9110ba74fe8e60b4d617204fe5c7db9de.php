<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_1a9048fd960145ec81e097965ba7670c44f3d7e4bc9a6a99f752c442dae7dacc extends Twig_Template
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
        $__internal_6ae61725d4e7ccb8a34721c2c657273967b5b5d2829fc3a1d45f556ccf9ed55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae61725d4e7ccb8a34721c2c657273967b5b5d2829fc3a1d45f556ccf9ed55a->enter($__internal_6ae61725d4e7ccb8a34721c2c657273967b5b5d2829fc3a1d45f556ccf9ed55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_afcfd3b18e4d9aceaccc3ac5656c98d9048a2a1fa846898baf03846dae584450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcfd3b18e4d9aceaccc3ac5656c98d9048a2a1fa846898baf03846dae584450->enter($__internal_afcfd3b18e4d9aceaccc3ac5656c98d9048a2a1fa846898baf03846dae584450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_6ae61725d4e7ccb8a34721c2c657273967b5b5d2829fc3a1d45f556ccf9ed55a->leave($__internal_6ae61725d4e7ccb8a34721c2c657273967b5b5d2829fc3a1d45f556ccf9ed55a_prof);

        
        $__internal_afcfd3b18e4d9aceaccc3ac5656c98d9048a2a1fa846898baf03846dae584450->leave($__internal_afcfd3b18e4d9aceaccc3ac5656c98d9048a2a1fa846898baf03846dae584450_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
