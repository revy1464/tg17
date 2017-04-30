<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d8e6638505157a324f24d52cc7106b82f2c80b68e7e7d4765fd3773aef3fea18 extends Twig_Template
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
        $__internal_3fcd98909ad378356eee4447d9d9740d48a72c52303fcacf1112d6ede508e5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcd98909ad378356eee4447d9d9740d48a72c52303fcacf1112d6ede508e5c4->enter($__internal_3fcd98909ad378356eee4447d9d9740d48a72c52303fcacf1112d6ede508e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8f4a7e2cd4d5713a6166cf8b8e5b3dddecfb05eb3bb855d0f4cdcf634e1b5a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4a7e2cd4d5713a6166cf8b8e5b3dddecfb05eb3bb855d0f4cdcf634e1b5a46->enter($__internal_8f4a7e2cd4d5713a6166cf8b8e5b3dddecfb05eb3bb855d0f4cdcf634e1b5a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3fcd98909ad378356eee4447d9d9740d48a72c52303fcacf1112d6ede508e5c4->leave($__internal_3fcd98909ad378356eee4447d9d9740d48a72c52303fcacf1112d6ede508e5c4_prof);

        
        $__internal_8f4a7e2cd4d5713a6166cf8b8e5b3dddecfb05eb3bb855d0f4cdcf634e1b5a46->leave($__internal_8f4a7e2cd4d5713a6166cf8b8e5b3dddecfb05eb3bb855d0f4cdcf634e1b5a46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
