<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d6cb6cbeeb3e1f514801834123a9f84a251f9971f4810198e3a6366663d6eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_414397f67c7378d510b77748a78fade4fab00704e5ccbfadcaf08d17593bd568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414397f67c7378d510b77748a78fade4fab00704e5ccbfadcaf08d17593bd568->enter($__internal_414397f67c7378d510b77748a78fade4fab00704e5ccbfadcaf08d17593bd568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dd2502037d6690d0ddeaa3e2ab78a1924881989bfae211895ff21d719bad305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2502037d6690d0ddeaa3e2ab78a1924881989bfae211895ff21d719bad305d->enter($__internal_dd2502037d6690d0ddeaa3e2ab78a1924881989bfae211895ff21d719bad305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_414397f67c7378d510b77748a78fade4fab00704e5ccbfadcaf08d17593bd568->leave($__internal_414397f67c7378d510b77748a78fade4fab00704e5ccbfadcaf08d17593bd568_prof);

        
        $__internal_dd2502037d6690d0ddeaa3e2ab78a1924881989bfae211895ff21d719bad305d->leave($__internal_dd2502037d6690d0ddeaa3e2ab78a1924881989bfae211895ff21d719bad305d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a2cdc3874c1b9ae395dee4ff8bff02c6446caf13bea94eaca7a069340d63341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2cdc3874c1b9ae395dee4ff8bff02c6446caf13bea94eaca7a069340d63341->enter($__internal_5a2cdc3874c1b9ae395dee4ff8bff02c6446caf13bea94eaca7a069340d63341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89ea50037410e2ac7dc9a815cfcf48ffbcdcf2dcdfbc342ac6a802b1bb1299ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ea50037410e2ac7dc9a815cfcf48ffbcdcf2dcdfbc342ac6a802b1bb1299ae->enter($__internal_89ea50037410e2ac7dc9a815cfcf48ffbcdcf2dcdfbc342ac6a802b1bb1299ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_89ea50037410e2ac7dc9a815cfcf48ffbcdcf2dcdfbc342ac6a802b1bb1299ae->leave($__internal_89ea50037410e2ac7dc9a815cfcf48ffbcdcf2dcdfbc342ac6a802b1bb1299ae_prof);

        
        $__internal_5a2cdc3874c1b9ae395dee4ff8bff02c6446caf13bea94eaca7a069340d63341->leave($__internal_5a2cdc3874c1b9ae395dee4ff8bff02c6446caf13bea94eaca7a069340d63341_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
