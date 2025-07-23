<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Exports; use Maatwebsite\Excel\Concerns\FromCollection; use Maatwebsite\Excel\Concerns\WithColumnFormatting; use Maatwebsite\Excel\Concerns\WithHeadings; use Maatwebsite\Excel\Concerns\WithStyles; use PhpOffice\PhpSpreadsheet\Style\NumberFormat; use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet; class NoOfPatientsAndConsultationsExport implements FromCollection, WithHeadings, WithStyles, WithColumnFormatting { protected $data; public function __construct($data) { $this->data = $data; } public function collection() { return collect($this->data); } public function headings() : array { return ['Department', 'No of Patients Encoded', 'No of Consultations Encoded']; } public function columnFormats() : array { return ['B' => '#,##0', 'C' => '#,##0']; } public function styles(Worksheet $sheet) { foreach (range('A', 'S') as $columnID) { $sheet->getColumnDimension($columnID)->setAutoSize(true); RlX0z: } gtTdb: return [1 => ['font' => ['bold' => true], 'alignment' => ['wrapText' => true, 'horizontal' => 'center']], 'A' => ['font' => ['bold' => true]]]; } }
