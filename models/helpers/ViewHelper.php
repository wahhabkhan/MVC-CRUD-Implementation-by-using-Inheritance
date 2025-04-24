<?php
namespace models\helpers;

class ViewHelper
{
    public static function dataTables($data, $buttons = [])
    {
        // Start the table HTML

        $html = '<div class="ms-5 w-100 table-responsive border rounded border-2 border-LIGHT">';
        $html .= '<table class="table table-striped table-bordered">';

        // Create the table header row
        $html .= '<thead class="">';
        $html .= '<tr class="">';
        foreach (array_keys($data[0]) as $key) {
            $html .= '<th scope="col" class="">' . $key . '</th>';
        }
        if ($buttons) {
            $buttonCounts = count($buttons);
            $html .= "<th colspan='" . $buttonCounts . "' >Actions</th>";
        }

        $html .= '</tr>';

        $html .= '</thead>';

        // Create the table body rows
        $html .= '<tbody class="">';
        foreach ($data as $row) {
            $html .= '<tr class="">';
            foreach ($row as $value) {
                $html .= '<td class="">' . $value . '</td>';
            }
            foreach ($buttons as $key => $btn) {
                $html .= '<td class="">';
                $html .= $btn($row);
                $html .= '</td>';
            }

            $html .= '</tr>';
        }
        $html .= '</tbody>';

        // Close the table HTML
        $html .= '</table>';
        $html .= '</div>';

        // Return the HTML
        return $html;
    }

    public function form($formFields, $buttonText = 'Submit')
    {
        $form = '<form class="" novalidate method="post">';
        foreach ($formFields as $field) {
            $label = isset($field['label']) ? '<label for="' . $field['name'] . '" class="form-label">' . $field['label'] . '</label>' : '';
            $input = $this->field($field);
            $form .= '<div class="mb-3 mt-3">' . $label . $input . '</div>';
        }
    
        $form .= '<button type="submit" class="btn btn-secondary">' . $buttonText . '</button>';
        $form .= '</form>';
    
        return $form;
    }
    
    

    // public static function updateForm($formFields, $model, $id)
    // {
    //     // Get the record to be edited
    //     $record = $model->findOne($id);

    //     // Generate the HTML form
    //     $form = '<form method="post">';
    //     foreach ($formFields as $field => $attrs) {
    //         $value = isset($record[$field]) ? $record[$field] : '';
    //         $form .= '<label for="' . $field . '">' . $attrs['label'] . '</label>';
    //         $form .= '<input type="' . $attrs['type'] . '" name="' . $field . '" id="' . $field . '" value="' . $value . '" />';
    //     }
    //     $form .= '<button type="submit">Update</button>';
    //     $form .= '</form>';

    //     return $form;
    // }

    public static function field($field)
    {
        $input = '<input class="ms-3"';
        foreach ($field as $attr => $value) {
            $input .= ' ' . $attr . '="' . $value . '"';
        }
        $input .= '>';
        return $input;
    }

    public static function uiMessage($messages)
    {
        $html = '';
        if (empty($messages)) {
            return $html;
        }
        foreach ($messages as $message) {
            $html .= '<span class="badge bg-success">' . $message . '</span>';
        }
        return $html;
    }
}