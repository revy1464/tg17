<?php

/* base.html.twig */
class __TwigTemplate_ab90a1922b036cdf075ff85823780876677eb6ed579227f07b4572b436cba74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4836712848ade943f63b33edfbadd646056cc6683b7ab9afc4982972d0974be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4836712848ade943f63b33edfbadd646056cc6683b7ab9afc4982972d0974be0->enter($__internal_4836712848ade943f63b33edfbadd646056cc6683b7ab9afc4982972d0974be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4836712848ade943f63b33edfbadd646056cc6683b7ab9afc4982972d0974be0->leave($__internal_4836712848ade943f63b33edfbadd646056cc6683b7ab9afc4982972d0974be0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_459c1f564597c7c44e670d5ce779fd432484722d10fda7a6351e56096b6259b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459c1f564597c7c44e670d5ce779fd432484722d10fda7a6351e56096b6259b5->enter($__internal_459c1f564597c7c44e670d5ce779fd432484722d10fda7a6351e56096b6259b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_459c1f564597c7c44e670d5ce779fd432484722d10fda7a6351e56096b6259b5->leave($__internal_459c1f564597c7c44e670d5ce779fd432484722d10fda7a6351e56096b6259b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3868bf06eaf1c7bf467c6bccc446b22057607ff432abd2cf51801b4cedcc0b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3868bf06eaf1c7bf467c6bccc446b22057607ff432abd2cf51801b4cedcc0b9c->enter($__internal_3868bf06eaf1c7bf467c6bccc446b22057607ff432abd2cf51801b4cedcc0b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3868bf06eaf1c7bf467c6bccc446b22057607ff432abd2cf51801b4cedcc0b9c->leave($__internal_3868bf06eaf1c7bf467c6bccc446b22057607ff432abd2cf51801b4cedcc0b9c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ad359273aa10cc4207417549bc697776600b09c3daa9ff09db2fd6f336834fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad359273aa10cc4207417549bc697776600b09c3daa9ff09db2fd6f336834fa->enter($__internal_2ad359273aa10cc4207417549bc697776600b09c3daa9ff09db2fd6f336834fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ad359273aa10cc4207417549bc697776600b09c3daa9ff09db2fd6f336834fa->leave($__internal_2ad359273aa10cc4207417549bc697776600b09c3daa9ff09db2fd6f336834fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69123ce66db123d734d72bb58c0741c8fd85102a4a202d20eec365c158c2c503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69123ce66db123d734d72bb58c0741c8fd85102a4a202d20eec365c158c2c503->enter($__internal_69123ce66db123d734d72bb58c0741c8fd85102a4a202d20eec365c158c2c503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69123ce66db123d734d72bb58c0741c8fd85102a4a202d20eec365c158c2c503->leave($__internal_69123ce66db123d734d72bb58c0741c8fd85102a4a202d20eec365c158c2c503_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\AppServ\\www\\symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
