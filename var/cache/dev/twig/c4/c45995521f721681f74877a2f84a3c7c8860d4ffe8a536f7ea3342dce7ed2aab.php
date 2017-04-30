<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_637ea6d981c4efa12ff6c816857c78892404fdbcde9751d62d5407c67d7d4a37 extends Twig_Template
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
        $__internal_6b0ef78c39c50b68eb558cc8682dc425e5d5ad928a4120f731aa10e6909a633c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0ef78c39c50b68eb558cc8682dc425e5d5ad928a4120f731aa10e6909a633c->enter($__internal_6b0ef78c39c50b68eb558cc8682dc425e5d5ad928a4120f731aa10e6909a633c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4412b3a82e9024e7eb9aa33b18881147f1a2543a9ff5cb5921a50fe6262e91ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4412b3a82e9024e7eb9aa33b18881147f1a2543a9ff5cb5921a50fe6262e91ec->enter($__internal_4412b3a82e9024e7eb9aa33b18881147f1a2543a9ff5cb5921a50fe6262e91ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b0ef78c39c50b68eb558cc8682dc425e5d5ad928a4120f731aa10e6909a633c->leave($__internal_6b0ef78c39c50b68eb558cc8682dc425e5d5ad928a4120f731aa10e6909a633c_prof);

        
        $__internal_4412b3a82e9024e7eb9aa33b18881147f1a2543a9ff5cb5921a50fe6262e91ec->leave($__internal_4412b3a82e9024e7eb9aa33b18881147f1a2543a9ff5cb5921a50fe6262e91ec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_351ea1c55f11b290ecfd6a8eee68463486b20d2a310b8bac602aeb1613ce4833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351ea1c55f11b290ecfd6a8eee68463486b20d2a310b8bac602aeb1613ce4833->enter($__internal_351ea1c55f11b290ecfd6a8eee68463486b20d2a310b8bac602aeb1613ce4833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7ec21a0fd2f5e27c883d09d87300930867d48fba1f8af4abe0cbd6cda07805f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ec21a0fd2f5e27c883d09d87300930867d48fba1f8af4abe0cbd6cda07805f->enter($__internal_b7ec21a0fd2f5e27c883d09d87300930867d48fba1f8af4abe0cbd6cda07805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b7ec21a0fd2f5e27c883d09d87300930867d48fba1f8af4abe0cbd6cda07805f->leave($__internal_b7ec21a0fd2f5e27c883d09d87300930867d48fba1f8af4abe0cbd6cda07805f_prof);

        
        $__internal_351ea1c55f11b290ecfd6a8eee68463486b20d2a310b8bac602aeb1613ce4833->leave($__internal_351ea1c55f11b290ecfd6a8eee68463486b20d2a310b8bac602aeb1613ce4833_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
