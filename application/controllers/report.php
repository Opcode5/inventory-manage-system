<?php

class Report extends CI_Controller{

     public function purchase_report() {     
          
           $this->load->view('admin/report/purchase_report');
           
          // Get output html
          $html = $this->output->get_output();
          
          // Load library
          $this->load->library('dompdf_gen');

          // Convert to PDF
          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("purchase_receipt.pdf");
          
     }

      public function sell_report($order_id) { 

          $this->load->model('report_model');
          $sell_report = $this->report_model->sell_report($order_id);
          
          $this->load->view('admin/report/sell_report', ['sell_report'=>$sell_report]);
           
          // Get output html
          $html = $this->output->get_output();
          
          // Load library
          $this->load->library('dompdf_gen');

          // Convert to PDF
          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("purchase_receipt.pdf");
      }

      public function make_purchase_report(){
        $this->load->view('admin/report/make_purchase_report');
      }
}


?>