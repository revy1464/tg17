<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ebfd5ace12b238358b83b89fff067be87118f7d5c896aa0ec1a13c49f82fea2f extends Twig_Template
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
        $__internal_da00e2d798a6af1dbf46b8db70838a75570d317709de389af5c8d19303c105cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da00e2d798a6af1dbf46b8db70838a75570d317709de389af5c8d19303c105cc->enter($__internal_da00e2d798a6af1dbf46b8db70838a75570d317709de389af5c8d19303c105cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3aa5b48745162485c5dc35a8063ef42b1603149e1184139ea755d1e49dbb9030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa5b48745162485c5dc35a8063ef42b1603149e1184139ea755d1e49dbb9030->enter($__internal_3aa5b48745162485c5dc35a8063ef42b1603149e1184139ea755d1e49dbb9030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_da00e2d798a6af1dbf46b8db70838a75570d317709de389af5c8d19303c105cc->leave($__internal_da00e2d798a6af1dbf46b8db70838a75570d317709de389af5c8d19303c105cc_prof);

        
        $__internal_3aa5b48745162485c5dc35a8063ef42b1603149e1184139ea755d1e49dbb9030->leave($__internal_3aa5b48745162485c5dc35a8063ef42b1603149e1184139ea755d1e49dbb9030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
