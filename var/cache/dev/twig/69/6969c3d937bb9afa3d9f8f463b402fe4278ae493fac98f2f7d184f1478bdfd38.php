<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_adb5c9aed8e238ce21f7bdcb74877aedf5f913e215cb2622a3e8afe3d625bd51 extends Twig_Template
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
        $__internal_abec73228669cc570c1ddc00d323f318923245115a73795fb6f6c29eb25bd75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abec73228669cc570c1ddc00d323f318923245115a73795fb6f6c29eb25bd75e->enter($__internal_abec73228669cc570c1ddc00d323f318923245115a73795fb6f6c29eb25bd75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7b36ae5362240858cc2c83fb6cb61bcdc52112740314fe11b1e3740b368964e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b36ae5362240858cc2c83fb6cb61bcdc52112740314fe11b1e3740b368964e5->enter($__internal_7b36ae5362240858cc2c83fb6cb61bcdc52112740314fe11b1e3740b368964e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_abec73228669cc570c1ddc00d323f318923245115a73795fb6f6c29eb25bd75e->leave($__internal_abec73228669cc570c1ddc00d323f318923245115a73795fb6f6c29eb25bd75e_prof);

        
        $__internal_7b36ae5362240858cc2c83fb6cb61bcdc52112740314fe11b1e3740b368964e5->leave($__internal_7b36ae5362240858cc2c83fb6cb61bcdc52112740314fe11b1e3740b368964e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
