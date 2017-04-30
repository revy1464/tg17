<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f5da74cc831cae1f4e2c8c48eb12db58e79b64c60996dd8bb885dd0b9b2b762f extends Twig_Template
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
        $__internal_2f91baa406a537a58ce08cdacea0e0f85a02ab4d361ec265cb13d1c56e77fa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f91baa406a537a58ce08cdacea0e0f85a02ab4d361ec265cb13d1c56e77fa9e->enter($__internal_2f91baa406a537a58ce08cdacea0e0f85a02ab4d361ec265cb13d1c56e77fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e75d1d6c814c5d763a45863727b3d3891f49a1f7c6979ea5446339550e9627be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75d1d6c814c5d763a45863727b3d3891f49a1f7c6979ea5446339550e9627be->enter($__internal_e75d1d6c814c5d763a45863727b3d3891f49a1f7c6979ea5446339550e9627be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2f91baa406a537a58ce08cdacea0e0f85a02ab4d361ec265cb13d1c56e77fa9e->leave($__internal_2f91baa406a537a58ce08cdacea0e0f85a02ab4d361ec265cb13d1c56e77fa9e_prof);

        
        $__internal_e75d1d6c814c5d763a45863727b3d3891f49a1f7c6979ea5446339550e9627be->leave($__internal_e75d1d6c814c5d763a45863727b3d3891f49a1f7c6979ea5446339550e9627be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
