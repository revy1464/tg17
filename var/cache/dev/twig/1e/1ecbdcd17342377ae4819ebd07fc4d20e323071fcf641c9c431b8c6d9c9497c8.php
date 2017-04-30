<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f124d37a05b2262eb56cd6ffd21cd10989e9b2c0d575529b58e1af382450dda8 extends Twig_Template
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
        $__internal_840c10e3d93b9d0b78c06c006566e34107e147ec89fbb463a581870818dd61c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840c10e3d93b9d0b78c06c006566e34107e147ec89fbb463a581870818dd61c1->enter($__internal_840c10e3d93b9d0b78c06c006566e34107e147ec89fbb463a581870818dd61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0b337330a90b7c815e448f2681fd77044309d9ed280d11944e51f0d807cd8eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b337330a90b7c815e448f2681fd77044309d9ed280d11944e51f0d807cd8eaf->enter($__internal_0b337330a90b7c815e448f2681fd77044309d9ed280d11944e51f0d807cd8eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_840c10e3d93b9d0b78c06c006566e34107e147ec89fbb463a581870818dd61c1->leave($__internal_840c10e3d93b9d0b78c06c006566e34107e147ec89fbb463a581870818dd61c1_prof);

        
        $__internal_0b337330a90b7c815e448f2681fd77044309d9ed280d11944e51f0d807cd8eaf->leave($__internal_0b337330a90b7c815e448f2681fd77044309d9ed280d11944e51f0d807cd8eaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
