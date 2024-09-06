<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'taskTitle' => 'required|string|max:255',
            'taskContent' => 'required|string',
            'taskFolderId' => 'required|integer',
            'taskOnDate' => 'required|date',
            'taskOnTime' => 'required',
            'taskReminderTime' => 'nullable|integer',
            'taskReminderUnit' => 'nullable|string',
            'taskRepeatCount' => 'nullable|integer',
            'taskRepeatUnit' => 'nullable|string',
            'taskEndRepeat' => 'nullable|string',
            'taskEndRepeatDate' => [
                'nullable',
                'date',
                function ($attribute, $value, $fail) {
                    $onDate = $this->input('taskOnDate');
                    if ($this->input('taskRepeatUnit') && $value && $value < $onDate) {
                        $fail('The end repeat date must be after or equal to the task date.');
                    }
                },
            ],
            'taskLocation' => 'nullable|string|max:255',
            'taskUrl' => 'nullable|url',
            'taskImage' => 'nullable|image|max:1024',
        ];
    }
}
