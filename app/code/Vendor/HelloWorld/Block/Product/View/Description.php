<?php
namespace Vendor\HelloWorld\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description
{
    public function toHtml()
    {
        // Obtener la descripción original
        $originalHtml = parent::toHtml();

        // Agregar el texto adicional
        $additionalText = '<p>Descripción modificada por Vendor_HelloWorld</p>';

        return $originalHtml . $additionalText;
    }
}
