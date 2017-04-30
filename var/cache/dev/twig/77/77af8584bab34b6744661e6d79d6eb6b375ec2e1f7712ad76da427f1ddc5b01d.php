<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_873cf7c4762491f06eac0cc9cb8aecccc3baa3416c21ce164f62f79a0619e622 extends Twig_Template
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
        $__internal_090ce516fa77e895fbe5f577fc46e6b3ab32dc2336d1ef3d9d51f3059b6f02f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090ce516fa77e895fbe5f577fc46e6b3ab32dc2336d1ef3d9d51f3059b6f02f8->enter($__internal_090ce516fa77e895fbe5f577fc46e6b3ab32dc2336d1ef3d9d51f3059b6f02f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3f209627b1631409979e50030e5ceacd45cfe1311effdbbd8f57656125289093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f209627b1631409979e50030e5ceacd45cfe1311effdbbd8f57656125289093->enter($__internal_3f209627b1631409979e50030e5ceacd45cfe1311effdbbd8f57656125289093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_090ce516fa77e895fbe5f577fc46e6b3ab32dc2336d1ef3d9d51f3059b6f02f8->leave($__internal_090ce516fa77e895fbe5f577fc46e6b3ab32dc2336d1ef3d9d51f3059b6f02f8_prof);

        
        $__internal_3f209627b1631409979e50030e5ceacd45cfe1311effdbbd8f57656125289093->leave($__internal_3f209627b1631409979e50030e5ceacd45cfe1311effdbbd8f57656125289093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
