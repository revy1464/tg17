<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9fb48ab85c6fa2ec16cc489adf99081fd879f3501ba7d70b54c2fa40d5384b93 extends Twig_Template
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
        $__internal_b29528163dc428dbb1465c6f80da5c0ad681392f592381ecbfcd58df1c8eade5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29528163dc428dbb1465c6f80da5c0ad681392f592381ecbfcd58df1c8eade5->enter($__internal_b29528163dc428dbb1465c6f80da5c0ad681392f592381ecbfcd58df1c8eade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_130a6bb81c31905087c5cdb2241673e2cf1409b9e26af480cc11baa1988770b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130a6bb81c31905087c5cdb2241673e2cf1409b9e26af480cc11baa1988770b4->enter($__internal_130a6bb81c31905087c5cdb2241673e2cf1409b9e26af480cc11baa1988770b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b29528163dc428dbb1465c6f80da5c0ad681392f592381ecbfcd58df1c8eade5->leave($__internal_b29528163dc428dbb1465c6f80da5c0ad681392f592381ecbfcd58df1c8eade5_prof);

        
        $__internal_130a6bb81c31905087c5cdb2241673e2cf1409b9e26af480cc11baa1988770b4->leave($__internal_130a6bb81c31905087c5cdb2241673e2cf1409b9e26af480cc11baa1988770b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
