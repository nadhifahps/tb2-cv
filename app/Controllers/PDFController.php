<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PDFController extends BaseController
{
    public function index()
    {
        $user_id = user_id();
        $career = $this->careerObject->where('user_id', $user_id)->get()->getFirstRow();
        $basic_info = $this->basicInfo->where('user_id', $user_id)->get()->getFirstRow();
        $educations = $this->education->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        $works = $this->work->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        $certificates = $this->certificate->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        return view('pages/dashboard/pdf/index', [
            'basic_info' => $basic_info,
            'career' => $career,
            'educations' => $educations,
            'works' => $works,
            'certificates' => $certificates
        ]);
    }

    public function downloadPdf()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        $user_id = user_id();
        $career = $this->careerObject->where('user_id', $user_id)->get()->getFirstRow();
        $basic_info = $this->basicInfo->where('user_id', $user_id)->get()->getFirstRow();
        $educations = $this->education->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        $works = $this->work->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        $certificates = $this->certificate->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get()->getResult();
        $html = view('pages/dashboard/pdf/index', [
            'basic_info' => $basic_info,
            'career' => $career,
            'educations' => $educations,
            'works' => $works,
            'certificates' => $certificates
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait', true);
        $dompdf->render();
        $filename = 'CV-' . $basic_info->first_name . " " . $basic_info->last_name . '.pdf';
        $dompdf->stream($filename);
    }

    public function excel()
    {
        $options = new Options();
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Info Dasar')
            ->setCellValue('B1', 'Tentang Saya')
            ->setCellValue('C1', 'Pendidikan')
            ->setCellValue('D1', 'Pekerjaan')
            ->setCellValue('E1', 'Sertifikat');

        $column = 2;
        foreach ($options as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['basic_info'])
                ->setCellValue('B' . $column, $data['career'])
                ->setCellValue('C' . $column, $data['educations'])
                ->setCellValue('D' . $column, $data['works'])
                ->setCellValue('E' . $column, $data['certificates']);
            $column++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data CV';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
