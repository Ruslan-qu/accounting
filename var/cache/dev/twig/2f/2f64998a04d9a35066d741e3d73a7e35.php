<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sales/quantity_return_product.html.twig */
class __TwigTemplate_ee378963e31a2f2b645803ca1212aad5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'logo' => [$this, 'block_logo'],
            'legend' => [$this, 'block_legend'],
            'form_save_edit_sales' => [$this, 'block_form_save_edit_sales'],
            'table_thead_tr' => [$this, 'block_table_thead_tr'],
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/quantity_return_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/quantity_return_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sales/quantity_return_product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        echo twig_escape_filter($this->env, (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_form_save_edit_sales($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        ";
        // line 14
        echo " 
        ";
        // line 15
        $context["id_return_product"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["arr_return_product"] ?? null), 0, [], "array", false, true, false, 15), "getId", [], "method", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["arr_return_product"] ?? null), 0, [], "array", false, true, false, 15), "getId", [], "method", false, false, false, 15), "")) : (""));
        // line 16
        echo "        
        ";
        // line 17
        $context["quantity_return_product"] = "";
        // line 18
        echo "        
        ";
        // line 19
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 19, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 19), 'widget');
        // line 20
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 20, $this->source); })()), "original_number_sales", [], "any", false, false, false, 20), 'widget');
        // line 21
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 21, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 21), 'widget');
        // line 22
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 22, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 22), 'widget');
        // line 23
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 23, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 23), 'widget');
        // line 24
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 24, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 24), 'widget');
        // line 25
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 25, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 25), 'widget');
        // line 26
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 26, $this->source); })()), "id_side_sales", [], "any", false, false, false, 26), 'widget');
        // line 27
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 27, $this->source); })()), "id_body_sales", [], "any", false, false, false, 27), 'widget');
        // line 28
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 28, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 28), 'widget');
        // line 29
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 29, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 29), 'widget');
        // line 30
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 30, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 30), 'widget');
        // line 31
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 31, $this->source); })()), "s_price_sales", [], "any", false, false, false, 31), 'widget');
        // line 32
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 32, $this->source); })()), "po_price_sales", [], "any", false, false, false, 32), 'widget');
        // line 33
        echo "
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["hidden_sales_return"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["value_return_product"]) {
            echo "  
            ";
            // line 35
            $context["id_return_product"] = $context["value_return_product"];
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_return_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 37, $this->source); })()), "hidden_sales", [], "any", false, false, false, 37), 'widget', ["value" => (isset($context["id_return_product"]) || array_key_exists("id_return_product", $context) ? $context["id_return_product"] : (function () { throw new RuntimeError('Variable "id_return_product" does not exist.', 37, $this->source); })())]);
        echo "

        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["quantity_sales_return"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["value_quantity_return_product"]) {
            echo "  
            ";
            // line 40
            $context["quantity_return_product"] = $context["value_quantity_return_product"];
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity_return_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 42, $this->source); })()), "quantity_sales", [], "any", false, false, false, 42), 'label');
        echo "<br>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 43, $this->source); })()), "quantity_sales", [], "any", false, false, false, 43), 'widget', ["value" => (isset($context["quantity_return_product"]) || array_key_exists("quantity_return_product", $context) ? $context["quantity_return_product"] : (function () { throw new RuntimeError('Variable "quantity_return_product" does not exist.', 43, $this->source); })())]);
        echo "<br>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["error_quantity_return_product"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["error_quantity_return"]) {
            // line 45
            echo "            ";
            echo twig_escape_filter($this->env, $context["error_quantity_return"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_quantity_return'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 47, $this->source); })()), "quantity_sales", [], "any", false, false, false, 47), 'errors');
        echo "</th>

        <th>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 49, $this->source); })()), "button_sales", [], "any", false, false, false, 49), 'widget', ["label" => "Возврат", "attr" => ["class" => "edit"]]);
        echo "</th>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 51, $this->source); })()), 'form_end');
        echo "        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 57
        if ((isset($context["arr_return_product"]) || array_key_exists("arr_return_product", $context) ? $context["arr_return_product"] : (function () { throw new RuntimeError('Variable "arr_return_product" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "            <th>№<br>Детали</th>
            <th>№<br>Оригинал</th>
            <th>Произ-<br>тель</th>
            <th>Описание<br>детали</th>
            <th>Название<br>детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед<br>Зад</th>
            <th>Пос-<br>щик</th>
            <th>Способ<br>оплаты</th>
            <th>Дата<br>продажи</th>
            <th>Кол-<br>во</th>
            <th>Цена<br>шт<br>закуп</th>
            <th>Цена<br>общая<br>закуп</th>
            <th>Цена<br>шт<br>продажи</th>
            <th>Цена<br>общая<br>продажи</th>

        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 80
        echo "    ";
        // line 81
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_return_product"]) || array_key_exists("arr_return_product", $context) ? $context["arr_return_product"] : (function () { throw new RuntimeError('Variable "arr_return_product" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["return_product"]) {
            // line 82
            echo "            ";
            if ($context["return_product"]) {
                // line 83
                echo "                <tr>
                    <td>&nbsp;";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 84), "getIdDetails", [], "method", false, false, false, 84), "getPartNumbers", [], "method", false, false, false, 84), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 86), "getIdDetails", [], "method", false, false, false, 86), "getIdOriginalNumber", [], "method", false, false, false, 86), "getOriginalNumber", [], "method", false, false, false, 87), "html", null, true);
                // line 87
                echo "</td>

                    <td>&nbsp;";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 89), "getIdManufacturer", [], "method", false, false, false, 89), "getManufacturers", [], "method", false, false, false, 89), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 91), "getIdDetails", [], "method", false, false, false, 91), "getNameDetail", [], "method", false, false, false, 91), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 93
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 93), "getIdDetails", [], "method", false, true, false, 93), "getIdPartName", [], "method", false, true, false, 93), "getPartName", [], "method", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 93), "getIdDetails", [], "method", false, true, false, 93), "getIdPartName", [], "method", false, true, false, 93), "getPartName", [], "method", false, false, false, 94), "")) : ("")), "html", null, true);
                // line 94
                echo "</td>

                    <td>&nbsp;";
                // line 96
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 96), "getIdDetails", [], "method", false, true, false, 96), "getIdCarBrand", [], "method", false, true, false, 96), "getCarBrand", [], "method", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 96), "getIdDetails", [], "method", false, true, false, 96), "getIdCarBrand", [], "method", false, true, false, 96), "getCarBrand", [], "method", false, false, false, 97), "")) : ("")), "html", null, true);
                // line 97
                echo "</td>

                    <td>&nbsp;";
                // line 99
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 99), "getIdDetails", [], "method", false, true, false, 99), "getIdSide", [], "method", false, true, false, 99), "getSide", [], "method", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 99), "getIdDetails", [], "method", false, true, false, 99), "getIdSide", [], "method", false, true, false, 99), "getSide", [], "method", false, false, false, 100), "")) : ("")), "html", null, true);
                // line 100
                echo "</td>

                    <td>&nbsp;";
                // line 102
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 102), "getIdDetails", [], "method", false, true, false, 102), "getIdBody", [], "method", false, true, false, 102), "getBody", [], "method", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 102), "getIdDetails", [], "method", false, true, false, 102), "getIdBody", [], "method", false, true, false, 102), "getBody", [], "method", false, false, false, 103), "")) : ("")), "html", null, true);
                // line 103
                echo "</td>

                    <td>&nbsp;";
                // line 105
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 105), "getIdDetails", [], "method", false, true, false, 105), "getIdAxle", [], "method", false, true, false, 105), "getAxle", [], "method", true, true, false, 106)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, true, false, 105), "getIdDetails", [], "method", false, true, false, 105), "getIdAxle", [], "method", false, true, false, 105), "getAxle", [], "method", false, false, false, 106), "")) : ("")), "html", null, true);
                // line 106
                echo "</td>

                    <td>&nbsp;";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 108), "getIdCounterparty", [], "method", false, false, false, 108), "getCounterparty", [], "method", false, false, false, 109), "html", null, true);
                // line 109
                echo "</td>

                    <td>&nbsp;";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 111), "getIdPaymentMethod", [], "method", false, false, false, 111), "getMethod", [], "method", false, false, false, 112), "html", null, true);
                // line 112
                echo "</td>

                    <td>&nbsp;";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["return_product"], "getDateSold", [], "method", false, false, false, 114), "d-m-Y"), "html", null, true);
                echo "</td>   

                    <td>&nbsp;";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["return_product"], "getQuantitySold", [], "method", false, false, false, 116), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 118
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 118), "getPrice", [], "method", false, false, false, 118) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 119
$context["return_product"], "getIdInvoice", [], "method", false, false, false, 119), "getQuantity", [], "method", false, false, false, 119)), 2, ".", ""), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 121
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["return_product"], "getIdInvoice", [], "method", false, false, false, 121), "getPrice", [], "method", false, false, false, 121) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 122
$context["return_product"], "getIdInvoice", [], "method", false, false, false, 122), "getQuantity", [], "method", false, false, false, 122)) * twig_get_attribute($this->env, $this->source,                 // line 123
$context["return_product"], "getQuantitySold", [], "method", false, false, false, 123)), 2, ".", ""), "html", null, true);
                echo "</td>

                    <td>&nbsp;";
                // line 125
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["return_product"], "getPriceSold", [], "method", false, false, false, 125) / 100) / twig_get_attribute($this->env, $this->source,                 // line 126
$context["return_product"], "getQuantitySold", [], "method", false, false, false, 126)), 2, ".", ""), "html", null, true);
                echo "</td>         

                    <td>&nbsp;";
                // line 128
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["return_product"], "getPriceSold", [], "method", false, false, false, 128) / 100), 2, ".", ""), "html", null, true);
                echo "</td>
                    
                </tr>    
            ";
            }
            // line 132
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sales/quantity_return_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 132,  431 => 128,  426 => 126,  425 => 125,  420 => 123,  419 => 122,  418 => 121,  413 => 119,  412 => 118,  407 => 116,  402 => 114,  398 => 112,  396 => 111,  392 => 109,  390 => 108,  386 => 106,  384 => 105,  380 => 103,  378 => 102,  374 => 100,  372 => 99,  368 => 97,  366 => 96,  362 => 94,  360 => 93,  355 => 91,  350 => 89,  346 => 87,  344 => 86,  339 => 84,  336 => 83,  333 => 82,  328 => 81,  326 => 80,  316 => 79,  287 => 58,  285 => 57,  275 => 55,  262 => 51,  257 => 49,  251 => 47,  242 => 45,  238 => 44,  234 => 43,  229 => 42,  223 => 41,  221 => 40,  215 => 39,  209 => 37,  203 => 36,  201 => 35,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  183 => 30,  180 => 29,  177 => 28,  174 => 27,  171 => 26,  168 => 25,  165 => 24,  162 => 23,  159 => 22,  156 => 21,  153 => 20,  151 => 19,  148 => 18,  146 => 17,  143 => 16,  141 => 15,  138 => 14,  133 => 12,  130 => 10,  120 => 9,  101 => 7,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

    {#Форма поиска #}
    {{ form_start(form_return_product) }}
        {#Переменный для вывода данных в форме
        {{ dump(app.flashes()) }}#} 
        {% set id_return_product = arr_return_product[0].getId()|default('') %}
        
        {% set quantity_return_product = '' %}
        
        {% do form_widget(form_return_product.part_numbers_sales) %}
        {% do form_widget(form_return_product.original_number_sales) %}
        {% do form_widget(form_return_product.manufacturers_sales) %}
        {% do form_widget(form_return_product.id_counterparty_sales) %}
        {% do form_widget(form_return_product.id_payment_method_sales) %}
        {% do form_widget(form_return_product.id_part_name_sales) %}
        {% do form_widget(form_return_product.id_car_brand_sales) %}
        {% do form_widget(form_return_product.id_side_sales) %}
        {% do form_widget(form_return_product.id_body_sales) %}
        {% do form_widget(form_return_product.id_axle_sales) %}
        {% do form_widget(form_return_product.s_data_invoice_sales) %}
        {% do form_widget(form_return_product.po_data_invoice_sales) %}
        {% do form_widget(form_return_product.s_price_sales) %}
        {% do form_widget(form_return_product.po_price_sales) %}

        {% for value_return_product in app.flashes('hidden_sales_return') %}  
            {% set id_return_product = value_return_product %}
        {% endfor %}
        {{ form_widget(form_return_product.hidden_sales, {value : id_return_product}) }}

        {% for value_quantity_return_product in app.flashes('quantity_sales_return') %}  
            {% set quantity_return_product = value_quantity_return_product %}
        {% endfor %}
        <th>{{ form_label(form_return_product.quantity_sales) }}<br>
        {{ form_widget(form_return_product.quantity_sales, {value : quantity_return_product}) }}<br>
        {% for error_quantity_return in app.flashes('error_quantity_return_product') %}
            {{ error_quantity_return }}
        {% endfor %}
        {{ form_errors(form_return_product.quantity_sales) }}</th>

        <th>{{ form_widget(form_return_product.button_sales, { 'label': 'Возврат', 'attr': {'class': 'edit'} }) }}</th>

    {{ form_end(form_return_product) }}        

{% endblock form_save_edit_sales %}

{% block table_thead_tr %}
{#{{ dump(arr_sales) }}#}
{% if arr_return_product %}
            <th>№<br>Детали</th>
            <th>№<br>Оригинал</th>
            <th>Произ-<br>тель</th>
            <th>Описание<br>детали</th>
            <th>Название<br>детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед<br>Зад</th>
            <th>Пос-<br>щик</th>
            <th>Способ<br>оплаты</th>
            <th>Дата<br>продажи</th>
            <th>Кол-<br>во</th>
            <th>Цена<br>шт<br>закуп</th>
            <th>Цена<br>общая<br>закуп</th>
            <th>Цена<br>шт<br>продажи</th>
            <th>Цена<br>общая<br>продажи</th>

        {% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
    {#выводит таблицу по поиску#}
      {% for return_product in arr_return_product %}
            {% if return_product %}
                <tr>
                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdOriginalNumber().getOriginalNumber() }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdManufacturer().getManufacturers() }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails().getNameDetail() }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdPartName().getPartName()|default('') }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdCarBrand().getCarBrand()|default('') }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdSide().getSide()|default('') }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdBody().getBody()|default('') }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice().getIdDetails()
                            .getIdAxle().getAxle()|default('') }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice()
                            .getIdCounterparty().getCounterparty() }}</td>

                    <td>&nbsp;{{ return_product.getIdInvoice()
                            .getIdPaymentMethod().getMethod() }}</td>

                    <td>&nbsp;{{ return_product.getDateSold()|date(\"d-m-Y\") }}</td>   

                    <td>&nbsp;{{ return_product.getQuantitySold() }}</td>

                    <td>&nbsp;{{ ((return_product.getIdInvoice().getPrice() / 100) 
                            / return_product.getIdInvoice().getQuantity())|number_format(2, '.', '') }}</td>

                    <td>&nbsp;{{ (((return_product.getIdInvoice().getPrice() / 100) 
                            / return_product.getIdInvoice().getQuantity())
                                * return_product.getQuantitySold())|number_format(2, '.', '') }}</td>

                    <td>&nbsp;{{ ((return_product.getPriceSold() / 100)
                            / return_product.getQuantitySold())|number_format(2, '.', '') }}</td>         

                    <td>&nbsp;{{ (return_product.getPriceSold() / 100)|number_format(2, '.', '') }}</td>
                    
                </tr>    
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "sales/quantity_return_product.html.twig", "/var/www/templates/sales/quantity_return_product.html.twig");
    }
}
