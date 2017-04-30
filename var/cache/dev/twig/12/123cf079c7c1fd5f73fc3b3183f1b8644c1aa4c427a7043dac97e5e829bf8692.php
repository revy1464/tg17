<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1baeefbcc2cca536797ec4095c6152b3354293a582477aa0cf923dae9a138d9d extends Twig_Template
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
        $__internal_65ffb09f88c093c941ffa8dab51fa2da72a11b514c20804b96a0792bea18ce28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ffb09f88c093c941ffa8dab51fa2da72a11b514c20804b96a0792bea18ce28->enter($__internal_65ffb09f88c093c941ffa8dab51fa2da72a11b514c20804b96a0792bea18ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d41e0580ea4140c87f56dfa8970dd144e44e729a8da956b21316d27b8ccfd5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41e0580ea4140c87f56dfa8970dd144e44e729a8da956b21316d27b8ccfd5a8->enter($__internal_d41e0580ea4140c87f56dfa8970dd144e44e729a8da956b21316d27b8ccfd5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_65ffb09f88c093c941ffa8dab51fa2da72a11b514c20804b96a0792bea18ce28->leave($__internal_65ffb09f88c093c941ffa8dab51fa2da72a11b514c20804b96a0792bea18ce28_prof);

        
        $__internal_d41e0580ea4140c87f56dfa8970dd144e44e729a8da956b21316d27b8ccfd5a8->leave($__internal_d41e0580ea4140c87f56dfa8970dd144e44e729a8da956b21316d27b8ccfd5a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
