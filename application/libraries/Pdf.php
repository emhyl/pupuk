<?php
    use Dompdf\Dompdf;
    use Dompdf\Options;
    
    class Pdf extends Dompdf {
        public $filename;

        public function __construct(){
            parent::__construct();
            $this->filename  = "laporan.pdf";
        }

        protected function ci(){
            return get_instance();
        }

        public function load($view, $data = array(),$paper = array()){
           
            $html = $this->ci()->load->view($view, $data, true);
            $option= new Options();
            $option->setIsRemoteEnabled(true);
            
            $pdf = new Dompdf($option);
            $contxt = stream_context_create([
                'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
                ]
                ]);
            $pdf->setHttpContext($contxt);
            $pdf->setPaper($paper['size'],$paper['orientation']);
            $pdf->load_html($html);
            $pdf->render();
            $pdf->stream($this->filename, array("Attachment" => false));
        }
    }

