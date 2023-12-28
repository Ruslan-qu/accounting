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

/* price/sold.html.twig */
class __TwigTemplate_1d63e092b88b6f6ec5ca9fec44f2a6cd extends Template
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
            'form_search' => [$this, 'block_form_search'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "price/sold.html.twig", 1);
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
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sold_part"]) || array_key_exists("arr_sold_part", $context) ? $context["arr_sold_part"] : (function () { throw new RuntimeError('Variable "arr_sold_part" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sold"]) {
            // line 12
            echo "
                <th>№ Детали</th>
                <th>№ Оригинал</th>
                <th>Производитель</th>
                <th>Описание детали</th>
                <th>Название детали</th>
                <th>Марка</th>
                <th>Сторона</th>
                <th>Кузов</th>
                <th>Перед Зад</th>
            </tr>
            <tr>
            
                <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 25), "getPartNumbers", [], "method", false, false, false, 25), "html", null, true);
            echo "</th>

                <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 27), "getIdOriginalNumber", [], "method", false, false, false, 27), "getOriginalNumber", [], "method", false, false, false, 27), "html", null, true);
            echo "</th>

                <th>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdManufacturer", [], "method", false, false, false, 29), "getManufacturers", [], "method", false, false, false, 29), "html", null, true);
            echo "</th>

                <th>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 31), "getNameDetail", [], "method", false, false, false, 31), "html", null, true);
            echo "</th>

                <th>";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", false, false, false, 33), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", false, false, false, 35), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", false, false, false, 37), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", false, false, false, 39), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", false, false, false, 41), "")) : ("")), "html", null, true);
            echo "</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>

                <th>";
            // line 55
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantity", [], "method", false, false, false, 55) - twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 55)), "html", null, true);
            echo "</th>

                <th>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 57) / 100) / twig_get_attribute($this->env, $this->source,             // line 58
$context["sold"], "getQuantity", [], "method", false, false, false, 58)), 2, ".", ""), "html", null, true);
            echo "</th>

                <th>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 60) / 100) - (((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 60) / 100) / twig_get_attribute($this->env, $this->source,             // line 61
$context["sold"], "getQuantity", [], "method", false, false, false, 61)) * twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 61))), 2, ".", ""), "html", null, true);
            echo "</th>
                                    
            ";
            // line 64
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 64, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sold_price")]);
            echo "
            ";
            // line 66
            echo "                ";
            $context["quantity_sold_price"] = "";
            // line 67
            echo "                ";
            $context["price_sold_price"] = "";
            // line 68
            echo "                ";
            $context["date_sold_price"] = "";
            // line 69
            echo "                ";
            $context["id_hidden"] = ((twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", false, false, false, 69), "")) : (""));
            // line 70
            echo "
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["hidden_sold"], "method", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["value_id_hidden"]) {
                echo "  
                    ";
                // line 72
                $context["id_hidden"] = $context["value_id_hidden"];
                // line 73
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_hidden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 74, $this->source); })()), "hidden_sold", [], "any", false, false, false, 74), 'widget', ["value" => (isset($context["id_hidden"]) || array_key_exists("id_hidden", $context) ? $context["id_hidden"] : (function () { throw new RuntimeError('Variable "id_hidden" does not exist.', 74, $this->source); })())]);
            echo "

                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", ["quantity_sold_sold"], "method", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["value_quantity_sold"]) {
                echo "  
                    ";
                // line 77
                $context["quantity_sold_price"] = $context["value_quantity_sold"];
                // line 78
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 79, $this->source); })()), "quantity_sold", [], "any", false, false, false, 79), 'widget', ["value" => (isset($context["quantity_sold_price"]) || array_key_exists("quantity_sold_price", $context) ? $context["quantity_sold_price"] : (function () { throw new RuntimeError('Variable "quantity_sold_price" does not exist.', 79, $this->source); })())]);
            echo "<br>
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["[quantity_sold_error]"], "method", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 81
                echo "                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 83, $this->source); })()), "quantity_sold", [], "any", false, false, false, 83), 'errors');
            echo "</th>

                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", ["price_sold_sold"], "method", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["value_price_sold"]) {
                echo "  
                    ";
                // line 86
                $context["price_sold_price"] = $context["value_price_sold"];
                // line 87
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 88, $this->source); })()), "price_sold", [], "any", false, false, false, 88), 'widget', ["value" => (isset($context["price_sold_price"]) || array_key_exists("price_sold_price", $context) ? $context["price_sold_price"] : (function () { throw new RuntimeError('Variable "price_sold_price" does not exist.', 88, $this->source); })())]);
            echo "<br>
                ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 89, $this->source); })()), "price_sold", [], "any", false, false, false, 89), 'errors');
            echo "</th>

                ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["date_sold_sold"], "method", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["value_date_sold"]) {
                echo "  
                    ";
                // line 92
                $context["date_sold_price"] = $context["value_date_sold"];
                // line 93
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_date_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 94, $this->source); })()), "date_sold", [], "any", false, false, false, 94), 'widget', ["value" => (isset($context["date_sold_price"]) || array_key_exists("date_sold_price", $context) ? $context["date_sold_price"] : (function () { throw new RuntimeError('Variable "date_sold_price" does not exist.', 94, $this->source); })())]);
            echo "<br>
                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 95, $this->source); })()), "date_sold", [], "any", false, false, false, 95), 'errors');
            echo "</th>

                ";
            // line 97
            $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 97, $this->source); })()), "id_invoice", [], "any", false, false, false, 97), 'widget');
            // line 98
            echo "                                            
                <th>";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 99, $this->source); })()), "button", [], "any", false, false, false, 99), 'widget', ["label" => "Продать", "attr" => ["class" => "save"]]);
            echo "</th>

            ";
            // line 101
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 101, $this->source); })()), 'form_end');
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "
    <h2>Для продолжения продажи выберите прайс в меню или завершите продажу</h2>  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "               

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 111
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 111, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("complete_sales")]);
        echo "

        ";
        // line 113
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 113, $this->source); })()), "hidden_sold", [], "any", false, false, false, 113), 'widget');
        // line 114
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 114, $this->source); })()), "id_invoice", [], "any", false, false, false, 114), 'widget');
        // line 115
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 115, $this->source); })()), "quantity_sold", [], "any", false, false, false, 115), 'widget');
        // line 116
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 116, $this->source); })()), "price_sold", [], "any", false, false, false, 116), 'widget');
        // line 117
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 117, $this->source); })()), "date_sold", [], "any", false, false, false, 117), 'widget');
        // line 118
        echo "                                            
        <th>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 119, $this->source); })()), "button", [], "any", false, false, false, 119), 'widget', ["label" => "Завершить сделку", "attr" => ["class" => "save"]]);
        // line 120
        echo "</th>
    
    ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 122, $this->source); })()), 'form_end');
        echo "

    <th>Цена общая - ";
        // line 124
        echo twig_escape_filter($this->env, ((isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 124, $this->source); })()) / 100), "html", null, true);
        echo "</th>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 128
        echo " 
    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 130
            echo "        ";
            if ($context["sale_list"]) {
                // line 131
                echo "            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        ";
            }
            // line 143
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 148
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_sale_list"]) {
            // line 149
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value_sale_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
                echo "       
            <tr>
                <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 151), "getIdDetails", [], "method", false, false, false, 151), "getPartNumbers", [], "method", false, false, false, 151), "html", null, true);
                echo "</td>

                <td>";
                // line 153
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 153), "getIdDetails", [], "method", false, true, false, 153), "getIdPartName", [], "method", false, true, false, 153), "getPartName", [], "method", true, true, false, 153)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 153), "getIdDetails", [], "method", false, true, false, 153), "getIdPartName", [], "method", false, true, false, 153), "getPartName", [], "method", false, false, false, 153), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 155
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 155), "getIdDetails", [], "method", false, true, false, 155), "getIdCarBrand", [], "method", false, true, false, 155), "getCarBrand", [], "method", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 155), "getIdDetails", [], "method", false, true, false, 155), "getIdCarBrand", [], "method", false, true, false, 155), "getCarBrand", [], "method", false, false, false, 155), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 157
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 157), "getIdDetails", [], "method", false, true, false, 157), "getIdSide", [], "method", false, true, false, 157), "getSide", [], "method", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 157), "getIdDetails", [], "method", false, true, false, 157), "getIdSide", [], "method", false, true, false, 157), "getSide", [], "method", false, false, false, 157), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 159
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 159), "getIdDetails", [], "method", false, true, false, 159), "getIdAxle", [], "method", false, true, false, 159), "getAxle", [], "method", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 159), "getIdDetails", [], "method", false, true, false, 159), "getIdAxle", [], "method", false, true, false, 159), "getAxle", [], "method", false, false, false, 159), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 161), "html", null, true);
                echo "</td>

                <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 163), "getPrice", [], "method", false, false, false, 163) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 164
$context["sale_list"], "getIdInvoice", [], "method", false, false, false, 164), "getQuantity", [], "method", false, false, false, 164)) * twig_get_attribute($this->env, $this->source,                 // line 165
$context["sale_list"], "getQuantitySold", [], "method", false, false, false, 165)), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 167), "html", null, true);
                echo "</td>

                <td>";
                // line 169
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sale_list"], "getPriceSold", [], "method", false, false, false, 169) / 100), 2, ".", ""), "html", null, true);
                echo "</td>      

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 173), "getId", [], "method", false, false, false, 173), "html", null, true);
                echo "\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 179), "getId", [], "method", false, false, false, 179), "html", null, true);
                echo "\">Удалить</button></td>
                                    
                </form>
            </tr> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "price/sold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 183,  580 => 179,  571 => 173,  564 => 169,  559 => 167,  554 => 165,  553 => 164,  552 => 163,  547 => 161,  542 => 159,  537 => 157,  532 => 155,  527 => 153,  522 => 151,  514 => 149,  509 => 148,  499 => 147,  488 => 144,  482 => 143,  468 => 131,  465 => 130,  461 => 129,  458 => 128,  448 => 127,  436 => 124,  431 => 122,  427 => 120,  425 => 119,  422 => 118,  419 => 117,  416 => 116,  413 => 115,  410 => 114,  408 => 113,  402 => 111,  392 => 110,  380 => 106,  371 => 103,  364 => 101,  359 => 99,  356 => 98,  354 => 97,  349 => 95,  344 => 94,  338 => 93,  336 => 92,  330 => 91,  325 => 89,  320 => 88,  314 => 87,  312 => 86,  306 => 85,  300 => 83,  291 => 81,  287 => 80,  282 => 79,  276 => 78,  274 => 77,  268 => 76,  262 => 74,  256 => 73,  254 => 72,  248 => 71,  245 => 70,  242 => 69,  239 => 68,  236 => 67,  233 => 66,  228 => 64,  223 => 61,  222 => 60,  217 => 58,  216 => 57,  211 => 55,  194 => 41,  189 => 39,  184 => 37,  179 => 35,  174 => 33,  169 => 31,  164 => 29,  159 => 27,  154 => 25,  139 => 12,  134 => 11,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

    {% for sold in arr_sold_part %}

                <th>№ Детали</th>
                <th>№ Оригинал</th>
                <th>Производитель</th>
                <th>Описание детали</th>
                <th>Название детали</th>
                <th>Марка</th>
                <th>Сторона</th>
                <th>Кузов</th>
                <th>Перед Зад</th>
            </tr>
            <tr>
            
                <th>{{ sold.getIdDetails().getPartNumbers() }}</th>

                <th>{{ sold.getIdDetails().getIdOriginalNumber().getOriginalNumber() }}</th>

                <th>{{ sold.getIdManufacturer().getManufacturers() }}</th>

                <th>{{ sold.getIdDetails().getNameDetail() }}</th>

                <th>{{ sold.getIdDetails().getIdPartName().getPartName()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdSide().getSide()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdBody().getBody()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdAxle().getAxle()|default('') }}</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>

                <th>{{ sold.getQuantity() - sold.getQuantitySold() }}</th>

                <th>{{ ((sold.getPrice() / 100) 
                        / sold.getQuantity())|number_format(2, '.', '') }}</th>

                <th>{{ ((sold.getPrice() / 100) - (((sold.getPrice() / 100) 
                / sold.getQuantity()) * sold.getQuantitySold()))|number_format(2, '.', '') }}</th>
                                    
            {#Форма продажи детали#}
            {{ form_start(form_sold, {'action': path('sold_price')}) }}
            {#{{ dump(arr_sale_list[0].getDateSold()) }}#}
                {% set quantity_sold_price = '' %}
                {% set price_sold_price = '' %}
                {% set date_sold_price = '' %}
                {% set id_hidden = sold.getId()|default('') %}

                {% for value_id_hidden in app.flashes('hidden_sold') %}  
                    {% set id_hidden = value_id_hidden %}
                {% endfor %}
                {{ form_widget(form_sold.hidden_sold, {value : id_hidden}) }}

                {% for value_quantity_sold in app.flashes('quantity_sold_sold') %}  
                    {% set quantity_sold_price = value_quantity_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.quantity_sold, {value : quantity_sold_price}) }}<br>
                {% for message in app.flashes('[quantity_sold_error]') %}
                    {{ message }}
                {% endfor %}
                {{ form_errors(form_sold.quantity_sold) }}</th>

                {% for value_price_sold in app.flashes('price_sold_sold') %}  
                    {% set price_sold_price = value_price_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.price_sold, {value : price_sold_price}) }}<br>
                {{ form_errors(form_sold.price_sold) }}</th>

                {% for value_date_sold in app.flashes('date_sold_sold') %}  
                    {% set date_sold_price = value_date_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.date_sold, {value : date_sold_price}) }}<br>
                {{ form_errors(form_sold.date_sold) }}</th>

                {% do form_widget(form_sold.id_invoice) %}
                                            
                <th>{{ form_widget(form_sold.button, {'label': 'Продать', 'attr': {'class': 'save'} }) }}</th>

            {{ form_end(form_sold) }}
    {% else %}

    <h2>Для продолжения продажи выберите прайс в меню или завершите продажу</h2>  

    {% endfor %}               

{% endblock form_save_edit_sales %}

{% block form_search %}
    {{ form_start(form_complete_sales, {'action': path('complete_sales')}) }}

        {% do form_widget(form_complete_sales.hidden_sold) %}
        {% do form_widget(form_complete_sales.id_invoice) %}
        {% do form_widget(form_complete_sales.quantity_sold) %}
        {% do form_widget(form_complete_sales.price_sold) %}
        {% do form_widget(form_complete_sales.date_sold) %}
                                            
        <th>{{ form_widget(form_complete_sales.button
            , {'label': 'Завершить сделку', 'attr': {'class': 'save'} }) }}</th>
    
    {{ form_end(form_complete_sales) }}

    <th>Цена общая - {{total_amount_transaction / 100}}</th>
{% endblock form_search %}

{% block table_thead_tr %}
 
    {% for sale_list in arr_sale_list %}
        {% if sale_list %}
            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        {% endif %}
    {% endfor %}

{% endblock table_thead_tr %}

{% block tbody %}
    {% for value_sale_list in arr_sale_list %}
        {% for sale_list in value_sale_list %}       
            <tr>
                <td>{{ sale_list.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdPartName().getPartName()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdSide().getSide()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdAxle().getAxle()|default('') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (((sale_list.getIdInvoice().getPrice() / 100) 
                            / sale_list.getIdInvoice().getQuantity()) 
                                * sale_list.getQuantitySold())|number_format(2, '.', '') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (sale_list.getPriceSold() / 100)|number_format(2, '.', '') }}</td>      

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Удалить</button></td>
                                    
                </form>
            </tr> 
        {% endfor %}    
    {% endfor %}
{% endblock tbody %}", "price/sold.html.twig", "/var/www/templates/price/sold.html.twig");
    }
}
