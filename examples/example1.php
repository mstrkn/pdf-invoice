<?php

use Konekt\PdfInvoice\InvoicePrinter;

include '../src/InvoicePrinter.php';

$invoice = new InvoicePrinter('A4', 'CFA', 'fr');
$invoice->setNumberFormat(',', '.', 'right', true, false, array(',00'));
  /* Header Settings */
  $invoice->setLogo('images/sample1.jpg');
  $invoice->setColor('#007fff');
  $invoice->setType('Sale Invoice');
  $invoice->setReference('INV-55033645');
  $invoice->setDate(date('M dS ,Y', time()));
  $invoice->setTime(date('h:i:s A', time()));
  $invoice->setDue(date('M dS ,Y', strtotime('+3 months')));
  $invoice->setFrom(['Seller Name', 'Sample Company Name', '128 AA Juanita Ave', 'Glendora , CA 91740', 'United States of America']);
  $invoice->setTo(['Purchaser Name', 'Sample Company Name', '128 AA Juanita Ave', 'Glendora , CA 91740', 'United States of America']);
  /* Adding Items in table */
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, false, 580, false, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, false, 645, false, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, false, 230, false, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, false, 1100, false, 1100);
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, false, 580, false, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, false, 645, false, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, false, 230, false, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, false, 1100, false, 1100);
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, false, 580, false, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, false, 645, false, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, false, 230, false, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, false, 1100, false, 1100);
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, false, 580, false, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, false, 645, false, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, false, 230, false, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, false, 1100, false, 1100);
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, false, 580, false, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, false, 645, false, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, false, 230, false, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, false, 1100, false, 1100);  
  /* Add totals */
  $invoice->addTotal('Total', 9460);
  $invoice->addTotal('TVA 21%', 1986.6);
  $invoice->addTotal('Total TTC', 11446.6, true);
  /* Set badge */
  // $invoice->addBadge('Payment Paid');
  /* Add title */
  $invoice->addTitle('Important Notice');
  /* Add Paragraph */
  $invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you. You can refund within 2 days of purchase.");
  /* Set signature */
  $invoice->setSignatureHeader('Directeur');
  //$invoice->setSignature('images/example3.jpg');
  $invoice->setSignatureFooter('DZAH Komi Mokpokpo');
  /* Hide page number */
  $invoice->showPageNumber(false);
  /* Set sub footer */
  $invoice->setSubFooter(['N°RCCM : TG-LOM 2019 M 1130', 'N°CNSS : 76776', 'NIF : 1000864738', 'N°RCCM : TG-LOM 2019 M 1130', 'N°CNSS : 76776', 'NIF : 1000864738']);
  /* Set footer note */
  // $invoice->setFooternote('My Company Name Here');
  /* Render */
  $invoice->render('example1.pdf', 'F'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
