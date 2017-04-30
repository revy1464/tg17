<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58bd6fd0d3e06c933b6e95e4570a5a42dbfc59d146def58c6b057e8ef5f8f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58bd6fd0d3e06c933b6e95e4570a5a42dbfc59d146def58c6b057e8ef5f8f76->enter($__internal_c58bd6fd0d3e06c933b6e95e4570a5a42dbfc59d146def58c6b057e8ef5f8f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2921b9dc1fbae06c0c9540ada470bfe1733313bcf648f41008a388eabf27f2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2921b9dc1fbae06c0c9540ada470bfe1733313bcf648f41008a388eabf27f2ac->enter($__internal_2921b9dc1fbae06c0c9540ada470bfe1733313bcf648f41008a388eabf27f2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58bd6fd0d3e06c933b6e95e4570a5a42dbfc59d146def58c6b057e8ef5f8f76->leave($__internal_c58bd6fd0d3e06c933b6e95e4570a5a42dbfc59d146def58c6b057e8ef5f8f76_prof);

        
        $__internal_2921b9dc1fbae06c0c9540ada470bfe1733313bcf648f41008a388eabf27f2ac->leave($__internal_2921b9dc1fbae06c0c9540ada470bfe1733313bcf648f41008a388eabf27f2ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c35272dd4369b498a61985323fbcad68bbde06b7751004606c54e5916841490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c35272dd4369b498a61985323fbcad68bbde06b7751004606c54e5916841490->enter($__internal_8c35272dd4369b498a61985323fbcad68bbde06b7751004606c54e5916841490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e64bc6f62fe8597703a258ee531e5fca02daca05d5a2f77745bd7f90705a3d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64bc6f62fe8597703a258ee531e5fca02daca05d5a2f77745bd7f90705a3d8f->enter($__internal_e64bc6f62fe8597703a258ee531e5fca02daca05d5a2f77745bd7f90705a3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e64bc6f62fe8597703a258ee531e5fca02daca05d5a2f77745bd7f90705a3d8f->leave($__internal_e64bc6f62fe8597703a258ee531e5fca02daca05d5a2f77745bd7f90705a3d8f_prof);

        
        $__internal_8c35272dd4369b498a61985323fbcad68bbde06b7751004606c54e5916841490->leave($__internal_8c35272dd4369b498a61985323fbcad68bbde06b7751004606c54e5916841490_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d43f06d4a70030a8c151265af0ab03425e405856bdb102e364a23fa8f8b3423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d43f06d4a70030a8c151265af0ab03425e405856bdb102e364a23fa8f8b3423->enter($__internal_2d43f06d4a70030a8c151265af0ab03425e405856bdb102e364a23fa8f8b3423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e998ab4810ebbc71a6561a36534f518f0d4b1cb4e0660d2c7ec25224b96cd6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e998ab4810ebbc71a6561a36534f518f0d4b1cb4e0660d2c7ec25224b96cd6d6->enter($__internal_e998ab4810ebbc71a6561a36534f518f0d4b1cb4e0660d2c7ec25224b96cd6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e998ab4810ebbc71a6561a36534f518f0d4b1cb4e0660d2c7ec25224b96cd6d6->leave($__internal_e998ab4810ebbc71a6561a36534f518f0d4b1cb4e0660d2c7ec25224b96cd6d6_prof);

        
        $__internal_2d43f06d4a70030a8c151265af0ab03425e405856bdb102e364a23fa8f8b3423->leave($__internal_2d43f06d4a70030a8c151265af0ab03425e405856bdb102e364a23fa8f8b3423_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_76c990fb1aa53410fe5fd018c726f046560e737f706f58d40af40284ea67a520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c990fb1aa53410fe5fd018c726f046560e737f706f58d40af40284ea67a520->enter($__internal_76c990fb1aa53410fe5fd018c726f046560e737f706f58d40af40284ea67a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41328f09a20a75210e8fe5f90eebfb851c3987b8352990fb8df65f32f2af1448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41328f09a20a75210e8fe5f90eebfb851c3987b8352990fb8df65f32f2af1448->enter($__internal_41328f09a20a75210e8fe5f90eebfb851c3987b8352990fb8df65f32f2af1448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_41328f09a20a75210e8fe5f90eebfb851c3987b8352990fb8df65f32f2af1448->leave($__internal_41328f09a20a75210e8fe5f90eebfb851c3987b8352990fb8df65f32f2af1448_prof);

        
        $__internal_76c990fb1aa53410fe5fd018c726f046560e737f706f58d40af40284ea67a520->leave($__internal_76c990fb1aa53410fe5fd018c726f046560e737f706f58d40af40284ea67a520_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
