<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class EqualArray implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Request $request, array $equalArray, string $message = "")
    {
        $this->equalArray = $equalArray;
        $this->request = $request;
        $this->message = $message;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $count = [];
        foreach ($this->equalArray as $param) {
            if($this->request->has($param)){
                $count[] = sizeof($this->request->get($param));
            }
        }
        return $count[0] === $count[1];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
