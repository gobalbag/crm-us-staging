<?php


class web_orders_order_customer extends web_orders_order_shared implements \Novut\Layouts\Layout12\ContentInterface
{
    use \Novut\Layouts\Layout12\Module;

    function getContent(): \Novut\Layouts\Layout12\Content
    {
        $this->config_load();
        $view_data = [];
        $view_data['invoice_category'] = \Sparket\Tools\SAT\Invoice\Category::getOptionInfo($this->order->getWOrderInvoiceCategory());

        $content = $this->getContentCardInstance('customer', 'Customer');
        $content->setBody($this->views->load_render('customer.view.twig', $this->view_data_presets($view_data)));

        return $content;
    }

}
