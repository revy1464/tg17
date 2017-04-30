<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ad13a00d8b12ccedd00ccd8c4d4f5b342773afabd7cc6654b67bf5571f4d9139 extends Twig_Template
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
        $__internal_2bb9c18f83baf955dc2f17c01c5ae87b7b6ca642d615eb68299041bf5bdac633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb9c18f83baf955dc2f17c01c5ae87b7b6ca642d615eb68299041bf5bdac633->enter($__internal_2bb9c18f83baf955dc2f17c01c5ae87b7b6ca642d615eb68299041bf5bdac633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_919c980c4d2f2daa2c9aab07f7896c1b6d55efab5cab819b7f5c4df9b151aa2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919c980c4d2f2daa2c9aab07f7896c1b6d55efab5cab819b7f5c4df9b151aa2e->enter($__internal_919c980c4d2f2daa2c9aab07f7896c1b6d55efab5cab819b7f5c4df9b151aa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2bb9c18f83baf955dc2f17c01c5ae87b7b6ca642d615eb68299041bf5bdac633->leave($__internal_2bb9c18f83baf955dc2f17c01c5ae87b7b6ca642d615eb68299041bf5bdac633_prof);

        
        $__internal_919c980c4d2f2daa2c9aab07f7896c1b6d55efab5cab819b7f5c4df9b151aa2e->leave($__internal_919c980c4d2f2daa2c9aab07f7896c1b6d55efab5cab819b7f5c4df9b151aa2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
