<?php

namespace App\Imports;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Auth;
use App\Models\User;
use App\Models\YoPrint;


class YoPrintImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(Array $row)
    {
        $record = YoPrint::where('unique_key',$row['unique_key'])->first();
        if($record == null) {
            /* Create new row */
            $newrecord = YoPrint::create([
                  // 'unique_key' => $row['unique_key'],
                  // 'product_title' => $row['product_title'],
                  // 'product_description' => $row['product_description'],
                  // 'style' => $row['style'],
                  // 'sanmar_mainframe_color' => $row['sanmar_mainframe_color'],
                  // 'size' => $row['size'],
                  // 'color_name' => $row['color_name'],
                  // 'piece_price' => $row['piece_price'],
                  // 'created_by' => Auth::user()->email,

                  'unique_key' => $row['unique_key'],
                  'product_title' => $this->clearNonUTF8($row['product_title']),
                  'product_description' => $this->clearNonUTF8($row['product_description']),
                  'style' => $this->clearNonUTF8($row['style']),
                  'sanmar_mainframe_color' => $this->clearNonUTF8($row['sanmar_mainframe_color']),
                  'size' => $this->clearNonUTF8($row['size']),
                  'color_name' => $this->clearNonUTF8($row['color_name']),
                  'piece_price' => $this->clearNonUTF8($row['piece_price']),
                  'created_by' => Auth::user()->email,

            ]);
            $newrecord->save();
        }
        if($record != null) {
            /* Update the row */
            $updaterecord = YoPrint::where('unique_key', $row['unique_key'])->update([
                  // 'unique_key' => $row['unique_key'],
                  // 'product_title' => $row['product_title'],
                  // 'product_description' => $row['product_description'],
                  // 'style' => $row['style'],
                  // 'sanmar_mainframe_color' => $row['sanmar_mainframe_color'],
                  // 'size' => $row['size'],
                  // 'color_name' => $row['color_name'],
                  // 'piece_price' => $row['piece_price'],
                  // 'created_by' => Auth::user()->email,

                  'unique_key' => $row['unique_key'],
                  'product_title' => $this->clearNonUTF8($row['product_title']),
                  'product_description' => $this->clearNonUTF8($row['product_description']),
                  'style' => $this->clearNonUTF8($row['style']),
                  'sanmar_mainframe_color' => $this->clearNonUTF8($row['sanmar_mainframe_color']),
                  'size' => $this->clearNonUTF8($row['size']),
                  'color_name' => $this->clearNonUTF8($row['color_name']),
                  'piece_price' => $this->clearNonUTF8($row['piece_price']),
                  'created_by' => Auth::user()->email,
            ]);
            // $updaterecord->save();
        }
    }



    public function clearNonUTF8($data)
    {
        $text = preg_replace("/[\/\&%#\$;]/", "", $data);
        return $text;
    }


}
