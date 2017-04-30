<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7f34bdbb47e0523c6c5e4a9664bb6f5eefa327992fecedc20cc046d780be37a1 extends Twig_Template
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
        $__internal_8ab34e4eaba2ae80d677833af973457181568bf3ea9025ed9b585ed7433454b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab34e4eaba2ae80d677833af973457181568bf3ea9025ed9b585ed7433454b9->enter($__internal_8ab34e4eaba2ae80d677833af973457181568bf3ea9025ed9b585ed7433454b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5f38368ee9fcc5e8c69cde9a67debf3d59d5ea5de7721d3546f585ab0ac884a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f38368ee9fcc5e8c69cde9a67debf3d59d5ea5de7721d3546f585ab0ac884a2->enter($__internal_5f38368ee9fcc5e8c69cde9a67debf3d59d5ea5de7721d3546f585ab0ac884a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8ab34e4eaba2ae80d677833af973457181568bf3ea9025ed9b585ed7433454b9->leave($__internal_8ab34e4eaba2ae80d677833af973457181568bf3ea9025ed9b585ed7433454b9_prof);

        
        $__internal_5f38368ee9fcc5e8c69cde9a67debf3d59d5ea5de7721d3546f585ab0ac884a2->leave($__internal_5f38368ee9fcc5e8c69cde9a67debf3d59d5ea5de7721d3546f585ab0ac884a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
