<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6a617f70ceb20ccf700a800676314ea2830de0d56a1bd622841f731eda41c61 extends Twig_Template
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
        $__internal_252cc97cc91bb0b79006daf4f0c7874dfd3bbde0e480fbd465bba9bd6f490838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252cc97cc91bb0b79006daf4f0c7874dfd3bbde0e480fbd465bba9bd6f490838->enter($__internal_252cc97cc91bb0b79006daf4f0c7874dfd3bbde0e480fbd465bba9bd6f490838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a237c81b615df239edd72ee9f1e765a32baa8d37ad95527bf2336282fbe584fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a237c81b615df239edd72ee9f1e765a32baa8d37ad95527bf2336282fbe584fd->enter($__internal_a237c81b615df239edd72ee9f1e765a32baa8d37ad95527bf2336282fbe584fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_252cc97cc91bb0b79006daf4f0c7874dfd3bbde0e480fbd465bba9bd6f490838->leave($__internal_252cc97cc91bb0b79006daf4f0c7874dfd3bbde0e480fbd465bba9bd6f490838_prof);

        
        $__internal_a237c81b615df239edd72ee9f1e765a32baa8d37ad95527bf2336282fbe584fd->leave($__internal_a237c81b615df239edd72ee9f1e765a32baa8d37ad95527bf2336282fbe584fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
