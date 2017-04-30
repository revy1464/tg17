<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e222b9c8fa481a7b066f98d3ce949a91a2d3e9981a50775c2c9abb35a0419268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d255c15edd77ae47bcc6e59928db4005524dbc5ce926df4e5bfd84bbd40f0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d255c15edd77ae47bcc6e59928db4005524dbc5ce926df4e5bfd84bbd40f0dc->enter($__internal_1d255c15edd77ae47bcc6e59928db4005524dbc5ce926df4e5bfd84bbd40f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_929250a232618c0c9376dbabc961c0b8c9388d461dfed1465bf60bd4c9b8faf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929250a232618c0c9376dbabc961c0b8c9388d461dfed1465bf60bd4c9b8faf4->enter($__internal_929250a232618c0c9376dbabc961c0b8c9388d461dfed1465bf60bd4c9b8faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d255c15edd77ae47bcc6e59928db4005524dbc5ce926df4e5bfd84bbd40f0dc->leave($__internal_1d255c15edd77ae47bcc6e59928db4005524dbc5ce926df4e5bfd84bbd40f0dc_prof);

        
        $__internal_929250a232618c0c9376dbabc961c0b8c9388d461dfed1465bf60bd4c9b8faf4->leave($__internal_929250a232618c0c9376dbabc961c0b8c9388d461dfed1465bf60bd4c9b8faf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_927d60f1f2966421836e42ff7a8a85933a8690d95cf0ee6fcee6c3b2b08e0d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927d60f1f2966421836e42ff7a8a85933a8690d95cf0ee6fcee6c3b2b08e0d8c->enter($__internal_927d60f1f2966421836e42ff7a8a85933a8690d95cf0ee6fcee6c3b2b08e0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d471499ae5724962a1e254c821530baedb146d65a9db09ce76f5140fe3fc9429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d471499ae5724962a1e254c821530baedb146d65a9db09ce76f5140fe3fc9429->enter($__internal_d471499ae5724962a1e254c821530baedb146d65a9db09ce76f5140fe3fc9429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d471499ae5724962a1e254c821530baedb146d65a9db09ce76f5140fe3fc9429->leave($__internal_d471499ae5724962a1e254c821530baedb146d65a9db09ce76f5140fe3fc9429_prof);

        
        $__internal_927d60f1f2966421836e42ff7a8a85933a8690d95cf0ee6fcee6c3b2b08e0d8c->leave($__internal_927d60f1f2966421836e42ff7a8a85933a8690d95cf0ee6fcee6c3b2b08e0d8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
