<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7345753f1263fb07fdb6bb031c63503a12ea2307d17e7e833d223670dc9697be extends Twig_Template
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
        $__internal_f83fc1b5d172f19e2145b876ca730399098235e55b0e2c60b60c6da93b77721a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83fc1b5d172f19e2145b876ca730399098235e55b0e2c60b60c6da93b77721a->enter($__internal_f83fc1b5d172f19e2145b876ca730399098235e55b0e2c60b60c6da93b77721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_00d62ffb399210ca1a80741712d8baa84e70f7de015884b48f9d3c04663e4325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d62ffb399210ca1a80741712d8baa84e70f7de015884b48f9d3c04663e4325->enter($__internal_00d62ffb399210ca1a80741712d8baa84e70f7de015884b48f9d3c04663e4325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f83fc1b5d172f19e2145b876ca730399098235e55b0e2c60b60c6da93b77721a->leave($__internal_f83fc1b5d172f19e2145b876ca730399098235e55b0e2c60b60c6da93b77721a_prof);

        
        $__internal_00d62ffb399210ca1a80741712d8baa84e70f7de015884b48f9d3c04663e4325->leave($__internal_00d62ffb399210ca1a80741712d8baa84e70f7de015884b48f9d3c04663e4325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
