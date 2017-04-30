<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b9722f19ed09fef2b51b2dd70e6c854f2e25abf70a6d3bbb338dcfaddfc89139 extends Twig_Template
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
        $__internal_2a79a09c909bb293c0602c397c514e7070e33fd9763ecbb03edfffa56e5a3a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a79a09c909bb293c0602c397c514e7070e33fd9763ecbb03edfffa56e5a3a64->enter($__internal_2a79a09c909bb293c0602c397c514e7070e33fd9763ecbb03edfffa56e5a3a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fad58422020775eb4a493f32ddf3f0ab5814dbcf8d910f32e3d4aead37f9d7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad58422020775eb4a493f32ddf3f0ab5814dbcf8d910f32e3d4aead37f9d7d3->enter($__internal_fad58422020775eb4a493f32ddf3f0ab5814dbcf8d910f32e3d4aead37f9d7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a79a09c909bb293c0602c397c514e7070e33fd9763ecbb03edfffa56e5a3a64->leave($__internal_2a79a09c909bb293c0602c397c514e7070e33fd9763ecbb03edfffa56e5a3a64_prof);

        
        $__internal_fad58422020775eb4a493f32ddf3f0ab5814dbcf8d910f32e3d4aead37f9d7d3->leave($__internal_fad58422020775eb4a493f32ddf3f0ab5814dbcf8d910f32e3d4aead37f9d7d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
