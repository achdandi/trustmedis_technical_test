<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->model("JadwalModel"); //load model jadwal
        $this->load->model("HariModel"); //load model hari
    }
	
	public function index()
    {
        $data["html"] = '';
        $poli = $data["data_poli"] = $this->JadwalModel->getAllByPoli();
        foreach ($poli as $key => $data_poli) {
            
            $no=$key+1;
            $data["html"] .= '<tr class="bg-primary"><td>'.$no.'</td><td class="text-left">'.$data_poli->poli_nama.'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
            $dokter = $this->JadwalModel->getDataByPoli($data_poli->poli_id);
            foreach ($dokter as $data_dokter) {

                // echo '<pre>';
                // var_dump($data_dokter);
                // echo '</pre>';
                $data["html"] .= '<tr><td></td><td class="text-left">'.$data_dokter->pegawai_nama.'</td>';
                $jadwal = $this->JadwalModel->getJadwalByPegawai($data_dokter->pegawai_id);
                $hari = '1';
                $jadwal_sebelumnya = '0';
                foreach ($jadwal as $data_jadwal) {

                    if ($data_jadwal->hari_id == 1) {
                        $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                        $jadwal_sebelumnya = $data_jadwal->hari_id;
                    } elseif($data_jadwal->hari_id == 2) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 3) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 4) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 5) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 6) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 7) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.$data_jadwal->jadwal_mulai.' - '.$data_jadwal->jadwal_selesai.'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    }
                    $hari++;
                    
                }
                for ($i=2; $i<9-$jadwal_sebelumnya ; $i++) { 
                    $data["html"] .= '<td></td>';
                }
                $data["html"] .= '</tr>';

            }

        }
       

        // $this->load->view('template_header');
        $this->load->view('home', $data);
    }

    public function makepdf()
    {
        $data["html"] = '';
        $poli = $data["data_poli"] = $this->JadwalModel->getAllByPoli();
        foreach ($poli as $key => $data_poli) {
            
            $no=$key+1;
            $data["html"] .= '<tr style="background-color: lightblue"><td>'.$no.'</td><td colspan="2" style="text-align:left">'.$data_poli->poli_nama.'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
            $dokter = $this->JadwalModel->getDataByPoli($data_poli->poli_id);
            foreach ($dokter as $data_dokter) {

                // echo '<pre>';
                // var_dump($data_dokter);
                // echo '</pre>';
                $data["html"] .= '<tr><td></td><td colspan="2" style="text-align:left">'.$data_dokter->pegawai_nama.'</td>';
                $jadwal = $this->JadwalModel->getJadwalByPegawai($data_dokter->pegawai_id);
                $hari = '1';
                $jadwal_sebelumnya = '0';
                foreach ($jadwal as $data_jadwal) {

                    if ($data_jadwal->hari_id == 1) {
                        $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                        $jadwal_sebelumnya = $data_jadwal->hari_id;
                    } elseif($data_jadwal->hari_id == 2) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 3) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 4) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 5) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 6) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    } elseif($data_jadwal->hari_id == 7) {
                        if ($data_jadwal->hari_id-$jadwal_sebelumnya == 1) {
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        } else {
                            for ($i=1; $i<$data_jadwal->hari_id-$jadwal_sebelumnya ; $i++) { 
                                $data["html"] .= '<td></td>';
                            }
                            $data["html"] .= '<td>'.date('H:i', strtotime($data_jadwal->jadwal_mulai)).' - '.date('H:i', strtotime($data_jadwal->jadwal_selesai)).'</td>';
                            $jadwal_sebelumnya = $data_jadwal->hari_id;
                        }
                    }
                    $hari++;
                    
                }
                for ($i=2; $i<9-$jadwal_sebelumnya ; $i++) { 
                    $data["html"] .= '<td></td>';
                }
                $data["html"] .= '</tr>';

            }

        }

		$this->load->library('pdf');
		$this->pdf->setPaper('F4', 'landscape');
		$this->pdf->filename = "data-jadwal-dokter.pdf";
		$this->pdf->load_view('data_dokter', $data);
    }
}
