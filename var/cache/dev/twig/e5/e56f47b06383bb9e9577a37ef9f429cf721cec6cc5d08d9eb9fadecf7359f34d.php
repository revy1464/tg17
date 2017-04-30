<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_552e9f692e8c66ced8d9be7d56200b5deea186d81e3a6021debbc8311c914dd2 extends Twig_Template
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
        $__internal_cae855f858f420f58935ff42d000c0e4760c7cbdcb05dd4bd20e16798d9958a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae855f858f420f58935ff42d000c0e4760c7cbdcb05dd4bd20e16798d9958a8->enter($__internal_cae855f858f420f58935ff42d000c0e4760c7cbdcb05dd4bd20e16798d9958a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_364144f059924d9d83849aeab313e8313f6dbe58481fa6c9c65f3f7854bf4f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364144f059924d9d83849aeab313e8313f6dbe58481fa6c9c65f3f7854bf4f40->enter($__internal_364144f059924d9d83849aeab313e8313f6dbe58481fa6c9c65f3f7854bf4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cae855f858f420f58935ff42d000c0e4760c7cbdcb05dd4bd20e16798d9958a8->leave($__internal_cae855f858f420f58935ff42d000c0e4760c7cbdcb05dd4bd20e16798d9958a8_prof);

        
        $__internal_364144f059924d9d83849aeab313e8313f6dbe58481fa6c9c65f3f7854bf4f40->leave($__internal_364144f059924d9d83849aeab313e8313f6dbe58481fa6c9c65f3f7854bf4f40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
