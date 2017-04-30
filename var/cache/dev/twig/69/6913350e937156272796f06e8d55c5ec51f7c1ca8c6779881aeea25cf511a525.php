<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0081d48ac35342391a640c6ebbcf9ec7a68cca53c228369e3c98ff621deb31f6 extends Twig_Template
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
        $__internal_5b5f21d9a44e1257e89ea6461ba3c628161534a7ec7ce1185f3dff2c267d82a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5f21d9a44e1257e89ea6461ba3c628161534a7ec7ce1185f3dff2c267d82a8->enter($__internal_5b5f21d9a44e1257e89ea6461ba3c628161534a7ec7ce1185f3dff2c267d82a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0f87c63ea834e81b4e3584cdf68aa05b6fb10f0e49823ab7371a56643765deee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f87c63ea834e81b4e3584cdf68aa05b6fb10f0e49823ab7371a56643765deee->enter($__internal_0f87c63ea834e81b4e3584cdf68aa05b6fb10f0e49823ab7371a56643765deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5b5f21d9a44e1257e89ea6461ba3c628161534a7ec7ce1185f3dff2c267d82a8->leave($__internal_5b5f21d9a44e1257e89ea6461ba3c628161534a7ec7ce1185f3dff2c267d82a8_prof);

        
        $__internal_0f87c63ea834e81b4e3584cdf68aa05b6fb10f0e49823ab7371a56643765deee->leave($__internal_0f87c63ea834e81b4e3584cdf68aa05b6fb10f0e49823ab7371a56643765deee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
