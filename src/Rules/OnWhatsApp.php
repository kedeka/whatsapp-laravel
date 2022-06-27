<?php

namespace Kedeka\Whatsapp\Rules;

use Illuminate\Contracts\Validation\InvokableRule;


class OnWhatsApp implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if (!app(\Kedeka\Whatsapp\OnWhatsApp::class)->check($value)) {
            $fail('The :attribute must be whatsapp contact.');
        }
    }
}
