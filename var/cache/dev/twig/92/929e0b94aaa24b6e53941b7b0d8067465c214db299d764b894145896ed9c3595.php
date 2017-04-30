<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3cba77f24485a488e8e4fa4cecf0b42bca5aaef7b9a81ac0312000eb5f8851f7 extends Twig_Template
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
        $__internal_a2eca573056a2279b990fd6c75471cb306b75ba2c511af8a7f9fad0eb37b6f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eca573056a2279b990fd6c75471cb306b75ba2c511af8a7f9fad0eb37b6f1b->enter($__internal_a2eca573056a2279b990fd6c75471cb306b75ba2c511af8a7f9fad0eb37b6f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9b7209354530dfbac316c3de20bd757a2ebb416a450aa7e6cd88b6c3eab85594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7209354530dfbac316c3de20bd757a2ebb416a450aa7e6cd88b6c3eab85594->enter($__internal_9b7209354530dfbac316c3de20bd757a2ebb416a450aa7e6cd88b6c3eab85594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a2eca573056a2279b990fd6c75471cb306b75ba2c511af8a7f9fad0eb37b6f1b->leave($__internal_a2eca573056a2279b990fd6c75471cb306b75ba2c511af8a7f9fad0eb37b6f1b_prof);

        
        $__internal_9b7209354530dfbac316c3de20bd757a2ebb416a450aa7e6cd88b6c3eab85594->leave($__internal_9b7209354530dfbac316c3de20bd757a2ebb416a450aa7e6cd88b6c3eab85594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
