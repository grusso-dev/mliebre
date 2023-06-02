<?php
// Include the main TCPDF library (search for installation path).
require_once('../library/plugins/phptools/tcpdf/6.3.5/tcpdf.php');
// Extend the TCPDF class to create custom Header and Footer
// Si no existe la clase la creo 
if (!class_exists('MYPDF')) {
    class MYPDF extends TCPDF {
      var $lo_data;
      public function tmssSetData($lp_data) {
          $this->lo_data = $lp_data;
      }

      //Page header
      public function Header() {
        $style5 = array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(36, 152, 188));
        $this->RoundedRect(0, 0, 255, 2, 0, '0101', 'DF', $style5, array(36, 152, 188) );
        //$this->Image('https://teampediatrico.com.ar/wp-content/uploads/2020/11/logo.png',180,7,25);
        $this->setfont('helvetica', '', 11);
        $this->setY(5); $this->writeHTML('<b>Team Pediatrico S.R.L.</b>', true, false, false, false, 'L');
        $this->setfont('helvetica', '', 9);
        $this->setY(9); $this->writeHTML('C.U.I.T.: 30-699227789-3', true, false, false, false, 'L');
        $this->setY(13); $this->writeHTML('POTOSI 717. VILLA ADELINA - SAN ISIDRO (1607)', true, false, false, false, 'L');
        $this->setY(17); $this->writeHTML('PROVINCIA DE BUENOS AIRES- 	Tel.: 0810-888-3402', true, false, false, false, 'L');
        $this->line( 10,25,200,25);	
      }

      // Page footer
      public function Footer() {
        $this->setfont('helvetica', 'I', 8);	
        $this->setXY( 10, 280);
        $lv_footer = '<table style="width:100%">';
        $lv_footer .= '<tr>';
        $lv_footer .= '<td ><a href="https://www.teampediatrico.com.ar" target="_blank" style="text-decoration:none;">www.teampediatrico.com.ar</a></td>';
        $lv_footer .= '<th rowspan="3" align="center" >.</th>';
        $lv_footer .= '<td align="right" >.</td>';
        $lv_footer .= '</tr>';
        $lv_footer .= '<tr>';
        $lv_footer .= '<td>Generado por Temasis</td>';
        $lv_footer .= '<td align="right">.</td>';
        $lv_footer .= '</tr>';
        $lv_footer .= '<tr>';
        $lv_footer .= '<td></td>';
        $lv_footer .= '<td align="right" ></td>';
        $lv_footer .= '</tr>';
        $lv_footer .='</table>';
        $this->writeHTML( $lv_footer);
        $style5 = array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 152, 155));
        $this->RoundedRect(0, 295, 255, 297, 0, '0101', 'DF', $style5, array(150, 152, 155));
      }
    }
}
// create new PDF document
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'ISO-8859-1', false);

	// fija datos de cabecera/pie
	$pdf->tmssSetData( $vew_data);

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER); 

	// set auto page breaks
	$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



	
	// ---------------------------------------------------------
	$pdf->AddPage('P');
	
    //Tabla
	$lv_buffer =''; 
  $lv_buffer.= '<table width="100%" border="0" cellpadding="2" cellspacing="0" style="font-size:10px;">';

  //encabezado
  $lv_buffer.= '<tr style="background-color:#e6e6e6;"> <td align="center" width="100%"><strong>'.$vew_data['pattxt'].'</strong> (# '. $vew_data['patcod'].') <strong>Periodo:</strong> '.$vew_dteper['dtestr']->format('d/m/Y').' a '.$vew_dteper['dteend']->format('d/m/Y'). '</td> </tr>';
	
	//$lv_buffer.= '<tr><td>'</td></tr>';

  $lv_buffer.= '<tr><td><strong>Identificacion:</strong> '.utf8_encode($vew_data['idttyptxt']).' '.utf8_encode($vew_data['taxcod']).'</td></tr>';
  $lv_buffer.= '<tr><td><strong>Sexo al nacer:</strong> '.utf8_encode($vew_data['persex']).'</td></tr>';
  $lv_buffer.= '<tr><td><strong>Fecha nac:</strong> '.$vew_data['perbrndtecnv'].'</td></tr>';
  $lv_buffer.= '<tr><td><strong>Tel:</strong> '.utf8_encode($vew_data['adrphn001']).'</td></tr>';
	$lv_buffer.= '<tr><td><strong>Cel:</strong> '.utf8_encode($vew_data['adrmblphn']).'</td></tr>';
	/*.' '.utf8_encode($vew_data['adrstrnum']).'  '.utf8_encode($vew_data['adrstrflr']).'  '.utf8_encode($vew_data['adrstrunt']).'  '.utf8_encode($vew_data['adrstrbld'])*/
	$lv_buffer.= '<tr><td><strong>Direccion:</strong> '.utf8_encode($vew_data['adrdom']).', '.utf8_encode($vew_data['adrcty']).', '.utf8_encode($vew_data['adrtwn']).' ('.utf8_encode($vew_data['adrpstcod']).')</td></tr>';
	
	$lv_patinbdte = $vew_data['patinbdte']!=null?($vew_data['patinbdte']->format('d/m/Y')):'';
	$lv_buffer.= '<tr><td><strong>Fecha de ingreso:</strong>'.$lv_patinbdte.'</td></tr>';

	$lv_buffer.= '<tr><td><strong>Plan:</strong>'.$vew_data['hhrmedcovaflpln'].'</td></tr>';
	$lv_buffer.= '<tr><td><strong>Numero de afiliado:</strong>'.$vew_data['hhrmedcovaflnum'].'</td></tr>';
	
                    
  //cierra tabla
  $lv_buffer .= '</table>';
	$lv_buffer .= '<br>';
	$lv_buffer .= '<br>';

	foreach($vew_patevllst as $lo_evlrow){
    if($lo_evlrow['patcod']==$vew_data['patcod']){
      $lv_opt=[];
      switch(strtoupper($vew_spclst[$lo_evlrow['spccod']])){
                    case 'AKR':
                      $lv_opt = array(array('atr'=>'evlaus', 'txt'=>'Evaluación/Auscultación'), 
                                      array('atr'=>'mantor', 'txt'=>'Maniobras Torácicas'), 
                                      array('atr'=>'esttos', 'txt'=>'Estimulación de Tos'), 
                                      array('atr'=>'drepos', 'txt'=>'Drenaje Postural'), 
                                      array('atr'=>'ejsres', 'txt'=>'Ejercicios Respiratorios'), 
                                      array('atr'=>'aspsec', 'txt'=>'Aspiraciones de Secreciones'));
                      break;
                    case 'FONO':
                      $lv_opt = array(array('atr'=>'juepsi', 'txt'=>'Juego Psicomotor'), 
                                      array('atr'=>'atnlen', 'txt'=>'Atención Lenguaje'), 
                                      array('atr'=>'bascom', 'txt'=>'Base Comunicativa'),
                                      array('atr'=>'esttem', 'txt'=>'Estimulación Termo Táctil'), 
                                      array('atr'=>'comalt', 'txt'=>'Comunicación Alternativa'),
                                      array('atr'=>'mecemi', 'txt'=>'Mecanismos de Emisión'), 
                                      array('atr'=>'estsen', 'txt'=>'Estimulación Sensorial'),
                                      array('atr'=>'traneu', 'txt'=>'Tratamiento Neurolingúistico'));
                      break;
                    case 'KINMOTO':
                      $lv_opt = array(array('atr'=>'evlmot', 'txt'=>'Evaluación Motora'), 
                                      array('atr'=>'ejact', 'txt'=>'Ejercitación Activa'), 
                                      array('atr'=>'trapos', 'txt'=>'Trabajo Postural'),
                                     	array('atr'=>'marcha', 'txt'=>'Marcha'), 
                                      array('atr'=>'estmot', 'txt'=>'Estimulación Motora'), 
                                      array('atr'=>'mov', 'txt'=>'Movilizaciones'), 
                                      array('atr'=>'bid', 'txt'=>'Bidepestación'));
                      break;
                    case 'ESTTEM':
                      $lv_opt = array(array('atr'=>'evlpsi', 'txt'=>'Evaluacion Psicomotora'), 
                                      array('atr'=>'estsen', 'txt'=>'Estimulacion Sensorial'),
                                      array('atr'=>'estpsi', 'txt'=>'Estimulacion Psicomotora'), 
                                      array('atr'=>'estvis', 'txt'=>'Estimulacion Visual'));
                      break;
                    case 'TERDEG':
                      $lv_opt = array(array('atr'=>'movlin', 'txt'=>'Movimiento Linguales'), 
                                      array('atr'=>'praoro', 'txt'=>'Praxias oro-faciales'), 
                                      array('atr'=>'tecali', 'txt'=>'Técnica Alimentaria'),
                                      array('atr'=>'esttem', 'txt'=>'Estimulación Termo T&aacute;ctil'), 
                                      array('atr'=>'refsuc', 'txt'=>'Reflejo Succión'));
                      break;
                    case 'TEROCU':
                      $lv_opt = array(array('atr'=>'movsup', 'txt'=>'Movilización de Miembros Superiores'), 
                                      array('atr'=>'estcog', 'txt'=>'Estimulación Cognitiva'),
                                     	array('atr'=>'hablud', 'txt'=>'Habilidades Lúdicas'), 
                                      array('atr'=>'motfin', 'txt'=>'Motricidad Fina'), 
                                      array('atr'=>'graesc', 'txt'=>'Grafo Escritura'),
                                     	array('atr'=>'habhig', 'txt'=>'Hábitos de Higiene y Aseo'));
                      break;
          						
                  }
      
      $lv_atr = utf8_encode(html_entity_decode($lo_evlrow['evlatr001']));
      
      $lv_buffer.= '<table width="100%" border="0" cellpadding="2" cellspacing="0" style="font-size:10px;">';
      $lv_buffer.= '<tr style="background-color:#e6e6e6;"> <td align="center" width="100%" ><strong>EVOLUCION '.utf8_encode($lo_evlrow['spctxt']).'('. $lo_evlrow['spccod'].') - REGISTRO # '.$lo_evlrow['evlcod'].' - Fecha: '.$lo_evlrow['plninbdtecnv'].'</strong></td> </tr>';
      
      $lv_sub=  $vew_doc->getTagValue($lv_atr,'evlcnccmt');
      $lv_buffer.= '<tr><td><strong>Subjetivo:</strong> '. htmlspecialchars_decode($lv_sub) .'</td></tr>';
      
      
      $lv_buffer.= '<tr><td><strong>Objetivo:</strong> <br/>'; 
      $lv_buffer.= '<strong>TA Sistólica:</strong> '.$vew_doc->getTagValue($lv_atr,'tas').'<br/>';
      $lv_buffer.= '<strong>TA Diastólica</strong>: '.$vew_doc->getTagValue($lv_atr,'tad').'<br/>';
      $lv_buffer.= '<strong>Frec. Cardíaca:</strong> '.$vew_doc->getTagValue($lv_atr,'fc').'<br/>';
      $lv_buffer.= '<strong>Frec. Respiratoria:</strong> '.$vew_doc->getTagValue($lv_atr,'fr').'<br/>';
      $lv_buffer.= '<strong>Temperatura:</strong> '.$vew_doc->getTagValue($lv_atr,'tmp').'<br/>';
      $lv_buffer.= '<strong>SpO2:</strong> '.$vew_doc->getTagValue($lv_atr,'spo2').'<br/>';
      $lv_buffer.='</td></tr>';
      
      $lv_buffer.= '<tr><td>';
      if(count($lv_opt)){
        foreach($lv_opt as $lo_opn_row){
          $lv_buffer.= '<strong>'.$lo_opn_row['txt'].':</strong> '.($vew_doc->getTagValue($lv_atr,$lo_opn_row['atr'])=='1'?' X ':' - ') . '<br>';
        }
      }else{
      	$lv_buffer.= '<strong>Evolucion:</strong> '.utf8_encode($lo_evlrow['evlevl']);
      }
      $lv_buffer.= '</td></tr>';
      
      //Prestador
      $lv_buffer.= '<tr><td><strong>Prestador:</strong> '.utf8_encode($lo_evlrow['prstxt']).'</td></tr>';
      $lv_buffer.= '<tr><td>';
			if(isset($vew_matlst[$lo_evlrow['prscod'].'-'.$lo_evlrow['spccod']])){
        $lv_mn = $vew_doc->getTagValue(utf8_encode(html_entity_decode($vew_matlst[$lo_evlrow['prscod'].'-'.$lo_evlrow['spccod']])),'mn');
        $lv_mp = $vew_doc->getTagValue(utf8_encode(html_entity_decode($vew_matlst[$lo_evlrow['prscod'].'-'.$lo_evlrow['spccod']])),'mp');
        
        if($lv_mn!=''){
      		$lv_buffer.= 'Mat. Nac: '. $lv_mn . ' ';
        }
        if($lv_mp!=''){
        	$lv_buffer.= 'Mat. Prov: '.$lv_mp;
          
        }
      }
      
      $lv_buffer.= '</td></tr>';
      
      $lv_buffer.= '<tr><td> </td></tr>';
      $lv_buffer.= '</table>';
      
    }
  }

  //devuelve la tabla
  $pdf->setfont('helvetica', '', 11);
  $pdf->setxy(15, 30);
  $pdf->writeHTML($lv_buffer);
 
	
	$pdf->Output('Lista.pdf', 'I');	
?>