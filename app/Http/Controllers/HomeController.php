<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class HomeController extends Controller
{
    //
    public function index(){
        $peserta = Peserta::all();
        return view('welcome', compact('peserta'));
    }

    public function sertifikat($id)
    {
        // dd($id);
        $peserta = Peserta::where('id', $id)->first();

        $filePath = public_path("certificate.pdf");
        $outputFilePath = public_path($peserta->nama.".pdf");

        $fpdi = new FPDI;

        $count = $fpdi->setSourceFile($filePath);


        for ($i=1; $i<= $count; $i++) {
            $template = $fpdi->importPage($i);
            $fpdi->AddPage("L", array(297, 210));
            $fpdi->useTemplate($template);

            $fpdi->AddFont('Piazzolla-Bold','','Piazzolla-Bold.php');

            $fpdi->SetXY(0, 10);
            $fpdi->SetX(11.5);
            $fpdi->SetTextColor(0,0,0);
            $fpdi->SetFont('Piazzolla-Bold','',30);
            $fpdi->Cell(0,130,$peserta->nama,0,0,'C');

            $fpdi->SetXY(0, 15);
            $fpdi->SetX(11.5);
            $fpdi->SetTextColor(255,0,0);
            $fpdi->SetFont('Piazzolla-Bold','',16);
            $fpdi->Cell(0,170,$peserta->sebagai,0,0,'C');

        }

        return $fpdi->Output($outputFilePath, 'D');
    }
}
