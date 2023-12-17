<?php
require('fpdf.php');
require_once(__DIR__ . "/../../app/Models/dto/Sale.php");
require_once(__DIR__ . "/../../app/Models/dao/SaleDAO.php");

if (isset($_REQUEST['id'])) {

    $ventaDAO = new SaleDAO();

    $venta = $ventaDAO->selectSaleById($_REQUEST['id']);
    $pdf = new FPDF();
    $pdf->AddPage('L', 'A4');

    $pdf->SetLineWidth(0.5);
    $pdf->Cell(277, 0, '', 'T');
    $pdf->Ln();
    $pdf->Image('logo.png',10,10.3,27.7);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 28, "", "L", "", 'C');
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(177, 14, "CORPORACION VEGA S.A.C.", 'R', '', 'C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->MultiCell(50, 14, "Boleta de Venta\n" . utf8_decode("N° " . sprintf('%06d', $venta->getIdVenta())), 1, 'C');  
    $pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth() - 10, $pdf->GetY());
    $pdf->Ln(5);

    $pdf->SetFont('Arial', '', 8);
    $texto = "RUC: 20502257987  |   Teléfono: 936 087 278";
    $pdf->Text(($pdf->GetPageWidth() - $pdf->GetStringWidth($texto))/2,26,utf8_decode($texto));
    $texto2 = "Ubicación: Urbanización Los Naranjos. AV. Huandoy 5032.";
    $pdf->Text(($pdf->GetPageWidth() - $pdf->GetStringWidth($texto2))/2,30,utf8_decode($texto2));
    $texto3 = "Correo: tiendamkhuandoy@corporacionvega.pe";
    $pdf->Text(($pdf->GetPageWidth() - $pdf->GetStringWidth($texto3))/2,34,utf8_decode($texto3));

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, "- Fecha de Venta: ");
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, $venta->getFechaVenta());
    $pdf->Ln(7);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, utf8_decode("- Método de Pago: "));
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, $venta->getMetodoPago());
    $pdf->Ln(7);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, "- Total Venta: ");
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, "S/. " . $venta->getTotalVenta());
    $pdf->Ln(7);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, "- Observaciones: ");
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, $venta->getObservacion());
    $pdf->Ln(7);

    $pdf->SetLineWidth(0.5);
    $pdf->Line(10, $pdf->GetY() + 5, $pdf->GetPageWidth() - 10, $pdf->GetY() + 5);
    $pdf->Ln(10);

    //tabla
    $w = array(18, 119, 45, 25, 20, 25, 25);
    $header = ["Codigo", "Producto", "Categoria", "Precio Unit.", "Cantidad", "Impuesto", "Precio Total"];
    $pdf->SetFont('Arial', 'B', 10);
    for ($i = 0; $i < count($header); $i++)
        $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
    $pdf->Ln();

    include_once(__DIR__ . '/../../app/Models/dto/ProductDetail.php');
    include_once(__DIR__ . '/../../app/Models/dto/Product.php');
    include_once(__DIR__ . '/../../app/Models/dao/ProductDAO.php');
    include_once(__DIR__ . '/../../app/Models/dao/ProductDetailDAO.php');

    $prodet = new ProductDetailDAO();
    $detalles = $prodet->selectSaleDetailById($venta->getIdVenta());
    $pdf->SetFont('Arial', '', 10);
    foreach ($detalles as $row) {
        $productDAO = new ProductDAO();
        $prod = $productDAO->selectProductById($row->getIdProducto());

        include_once(__DIR__ . '/../../app/Models/dto/Category.php');
        include_once(__DIR__ . '/../../app/Models/dao/CategoryDAO.php');

        $categoryDAO = new CategoryDAO();
        $cate = $categoryDAO->selectCategoryById($prod->getIdCategoria());

        $pdf->Cell($w[0], 7, $row->getIdDetVenta(), 'LR', '', 'C');
        $pdf->Cell($w[1], 7, $prod->getNombre(), 'LR', '', 'L');
        $pdf->Cell($w[2], 7, $cate->getDescripcion(), 'LR', '', 'C');
        $pdf->Cell($w[3], 7, "S/. " . $row->getPrecioUnitario(), 'LR', '', 'C');
        $pdf->Cell($w[4], 7, $row->getCantidad(), 'LR', '', 'C');

        $impuesto = $row->getImpuesto();
        $pu = $row->getPrecioUnitario();
        $porc = 1 + $impuesto;
        $montoimp =  "S/. " . number_format(round(($pu * $impuesto) / $porc, 2),2);

        $pdf->Cell($w[5], 7, $montoimp, 'LR', '', 'C');
        $pdf->Cell($w[6], 7, "S/. " . number_format($row->getPrecioUnitario() * $row->getCantidad(), 2), 'LR', '', 'C');
        $pdf->Ln();
    }
    $pdf->Cell(array_sum($w), 0, '', 'T');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[0] + $w[1] + $w[2] + $w[3] + $w[4] + $w[5], 7, "Total Venta  ", 'LR', '', 'R');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell($w[6], 7, "S/. " . $venta->getTotalVenta(), 'R', '', 'C');
    $pdf->Ln();
    // Línea de cierre
    $pdf->Cell(array_sum($w), 0, '', 'T');

    $pdf->Output("boleta_".$venta->getIdVenta()."_".date('Y-m-d_H_i_s').".pdf",'I');
}

?>