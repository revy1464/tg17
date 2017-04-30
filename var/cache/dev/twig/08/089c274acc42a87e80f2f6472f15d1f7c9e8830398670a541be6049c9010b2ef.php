<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c4ce05921829ab9e8618ad92cc4f2aeed7403f604d7593a0504b1dc59c38f067 extends Twig_Template
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
        $__internal_30f5367771eba346e9a3ee1c13985baf963488ac3e7035444fda93cfa6889905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f5367771eba346e9a3ee1c13985baf963488ac3e7035444fda93cfa6889905->enter($__internal_30f5367771eba346e9a3ee1c13985baf963488ac3e7035444fda93cfa6889905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5a30063d361f38cee435a3429c0961b4bd81ac07b8aec5d3ab9a2871f6bcce2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a30063d361f38cee435a3429c0961b4bd81ac07b8aec5d3ab9a2871f6bcce2a->enter($__internal_5a30063d361f38cee435a3429c0961b4bd81ac07b8aec5d3ab9a2871f6bcce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_30f5367771eba346e9a3ee1c13985baf963488ac3e7035444fda93cfa6889905->leave($__internal_30f5367771eba346e9a3ee1c13985baf963488ac3e7035444fda93cfa6889905_prof);

        
        $__internal_5a30063d361f38cee435a3429c0961b4bd81ac07b8aec5d3ab9a2871f6bcce2a->leave($__internal_5a30063d361f38cee435a3429c0961b4bd81ac07b8aec5d3ab9a2871f6bcce2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
