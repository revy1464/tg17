<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c461d682694ac95db26a8c5b409f676678bf985c3e11dd5a56033a90c67dead0 extends Twig_Template
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
        $__internal_ac7b24dffd54170e3eb7603e4bd18fe5ff98eed40eb83a5db6fa39757f9bc704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7b24dffd54170e3eb7603e4bd18fe5ff98eed40eb83a5db6fa39757f9bc704->enter($__internal_ac7b24dffd54170e3eb7603e4bd18fe5ff98eed40eb83a5db6fa39757f9bc704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ce3422d2561450810e03f34aa2d571c0f96312f68aa7414125c8f72159db7c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3422d2561450810e03f34aa2d571c0f96312f68aa7414125c8f72159db7c55->enter($__internal_ce3422d2561450810e03f34aa2d571c0f96312f68aa7414125c8f72159db7c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ac7b24dffd54170e3eb7603e4bd18fe5ff98eed40eb83a5db6fa39757f9bc704->leave($__internal_ac7b24dffd54170e3eb7603e4bd18fe5ff98eed40eb83a5db6fa39757f9bc704_prof);

        
        $__internal_ce3422d2561450810e03f34aa2d571c0f96312f68aa7414125c8f72159db7c55->leave($__internal_ce3422d2561450810e03f34aa2d571c0f96312f68aa7414125c8f72159db7c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
