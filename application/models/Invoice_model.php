<?php


class Invoice_model extends Base_Model{

    function generate_invoice($order_id){
        $order = $this->db->get_where('orders',array(
            "order_id" => $order_id
        ))->result_array();
        $order_product = $this->db->get_where("order_product",array(
            "order_id" => $order_id
        ))->result_array();

        if(!count($order)){
            return;
        }

        $user = $this->db->get_where("user",array(
            "user_id" => $order[0]['user_id']
        ))->result_array();

        $this->load->library("FPDF");
        
        $pdf = new FPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $this->Header($pdf,$order_id,$order[0]['timestamp']);
        
        /* set user address */
        $pdf->Cell(0,6,$user[0]['name'].",",0,1);
        $pdf->Cell(0,6,$order[0]['address1'],0,1);
        $pdf->Cell(0,6,$order[0]['address2'],0,1);
        $pdf->Cell(0,6,$order[0]['postcode']. " ". $order[0]['city'],0,1);
        $pdf->Cell(0,6,$order[0]['state'],0,1);

        $pdf->Ln(10);
        /* order details */
        $header = array('No', 'Description', 'Total');
       
        $pdf->Cell(20,7,"No",1);
        $pdf->Cell(120,7,"Description",1);
        $pdf->Cell(40,7,"Total",1);
        $pdf->Ln();
        // Data
        
        $i = 1;
        $total = 0;
        foreach($order_product as $row)
        {
            $pdf->Cell(20,7,$i++,1);
            $pdf->Cell(120,7,$row['name'],1);
            $pdf->Cell(40,7,$row['total'],1);

            $pdf->Ln();
            $options = json_decode($row['options']);
            
            foreach($options as $key => $opt){
                $pdf->Cell(20,7,'',1);
                $pdf->Cell(120,7,$key . " : " . $opt->label,1);
                $pdf->Cell(40,7,'',1);
                $pdf->Ln();
            }
            $total+= $row['total'];
        }

        $pdf->Cell(140,7,'Grand Total',1,0,'R');
        $pdf->Cell(40,7,$total,1);

        $pdf->Footer($pdf);
        $pdf->Output();
        
    }

    function Header($pdf,$order_id,$date)
    {
        // Logo
       // $pdf->Image('logo.png',10,6,30);
        // Arial bold 15
        $pdf->SetFont('Arial','B',15);
        // Move to the right
        $pdf->Cell(80);
        // Title
        $pdf->Cell(30,10,'Logo',1,0,'C');
        
        // Line break
        $pdf->Ln(20);
        $pdf->SetFont('Arial','',14);
        $pdf->Cell(150,6,"Custom Furniture Shop,",0,0);
        $pdf->Cell(40,6,"Date : ".Date("Y-m-d",strtotime($date)),0,1);

        $pdf->Cell(127,6,"6,Jalan Kuning,",0,0);
        $pdf->Cell(40,6,"Invoice number : ".$order_id,0,1);

        $pdf->Cell(0,6,"Taman Pelangi,",0,1);
        $pdf->Cell(0,6,"80300 Johor Bahru",0,1);
        $pdf->Cell(0,6,"Johor",0,1);

        $pdf->Ln(10);

    }

    // Page footer
    function Footer($pdf)
    {
        // Position at 1.5 cm from bottom
        $pdf->SetY(-15);
        // Arial italic 8
        $pdf->SetFont('Arial','I',8);
        // Page number
        $pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
    }
}